<?php

namespace App\Admin\Controllers;

use App\Models\OrganizationUser;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Auth\Database\Administrator;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use App\Enums\OrganizationUserEnableEnum;
use Nicelizhi\Admin\Auth\Database\Role;
use Nicelizhi\Admin\Facades\Admin;
use App\Libs\Utils;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizationUserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '机构用户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrganizationUser());

        $grid->column('id', __('Id'));
        //$grid->column('user_id', __('User id'));
        $grid->column('enable', __('Enable'))->filter(OrganizationUserEnableEnum::getAll())->editable("select", OrganizationUserEnableEnum::getAll());
        $grid->column('name', __('Name'));
        $grid->column('role_id', __('Role id'))->editable("select",Role::whereIn("id",[2,3,4,5])->pluck('name', 'id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(OrganizationUser::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('enable', __('Enable'));
        $show->field('name', __('Name'));
        $show->field('role_id', __('Role id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrganizationUser());

        //$form->text("username","姓名"); todo
        //$form->text("mobile","联系电话");

        $form->select('user_id', __('UserName'))->options(function($id) {
            $user = Administrator::find($id);
            if($user) return [$user->id => $user->username];
        })->ajax('/admin/organization-users/users');
        $form->switch('enable', __('Enable'));
        $form->text('name', __('Name'));
        $form->select('role_id', __('Role ID'))->options(Role::whereIn("id",[2,3,4,5])->pluck('name', 'id'))->rules('required|min:2');
        $uid = Admin::user()->id;
        $org_id = 0;
        $orgMember = \App\Models\OrganizationUser::where("user_id", $uid)->select(['organization_id'])->first();
        if(!is_null($orgMember)) {
            $org_id = $orgMember->organization_id;
        }
        
        $form->hidden("organization_id")->default($org_id);
        // 数据保存后的权限调整
        $form->saved(function (Form $form) {
            // 清理前面的权限
            DB::table("admin_role_users")->where('user_id', $form->model()->user_id)->delete();
            $created_at = date("Y-m-d H:i:s");
            DB::table("admin_role_users")->insert([
                "user_id" => $form->model()->user_id,
                "role_id" => $form->model()->role_id
            ]);
            // 更新管理员表机构数据内容
            DB::table("admin_user")->where("id", $form->model()->user_id)->update(['org_id'=>$form->model()->organization_id]);
        });

        return $form;
    }

    public function getUser(Request $request) {
        $q = $request->get('q');
        return Administrator::where("username",'=', $q)->paginate(null, ['id', 'username as text']);
    }
}
