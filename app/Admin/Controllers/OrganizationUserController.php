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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        //$grid->column('enable', __('Enable'))->filter(OrganizationUserEnableEnum::getAll())->editable("select", OrganizationUserEnableEnum::getAll());
        $grid->column('name', __('Name'));
        $grid->column('role_id', __('Role id'))->editable("select",Role::whereIn("id",[3,4,5])->pluck('name', 'id'));
        $grid->column('mobile', __('Mobile'))->filter();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->model()->where("organization_id", Admin::user()->org_id);

        $grid->model()->orderBy("id", "DESC");

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

        $form->text("name","姓名"); 
        $form->text("mobile","联系电话");
        /*
        $form->select('user_id', __('UserName'))->options(function($id) {
            $user = Administrator::find($id);
            if($user) return [$user->id => $user->username];
        })->ajax('/admin/organization-users/users');*/
        $form->switch('enable', __('Enable'));
        //$form->text('name', __('Name'));
        $form->select('role_id', __('Role ID'))->options(Role::whereIn("id",[3,4,5])->pluck('name', 'id'))->rules('required');
        $form->hidden("user_id");
        $form->hidden("organization_id")->default(Admin::user()->org_id);

        $form->saving(function (Form $form) {
            $userModel = config('admin.database.users_model');
            $password = Str::random(6);
            $org_code = \App\Models\Organization::where("id", Admin::user()->org_id)->value("code");
            $username = $org_code."@".Str::random(6);

            //$new_password = Hash::make($password);

            $user = new $userModel();
            $user->username = $username;
            $user->password = Hash::make($password);
            //$user->status = 1;
            $user->name = $form->name;
            $user->save();
            $form->user_id = $user->id;

            \App\Libs\Utils::sendMessage(1, Admin::user()->id,"恭喜您用户创建成功","恭喜您创建用户成功，您的登录名:".$username." 与登录密码为:".$password." 您可以登录后重新设置您的登录信息");

        });

        // 数据保存后的权限调整
        $form->saved(function (Form $form) {
            // 创建用户
            //$user->remember_token = $form->model()->username;
            // 清理前面的权限
            DB::table("admin_role_users")->where('user_id', $form->model()->user_id)->delete();
            $created_at = date("Y-m-d H:i:s");
            DB::table("admin_role_users")->insert([
                "user_id" => $form->model()->user_id,
                "role_id" => $form->model()->role_id
            ]);
            // 更新管理员表机构数据内容
            DB::table("admin_users")->where("id", $form->model()->user_id)->update(['org_id'=>$form->model()->organization_id]);
        });

        return $form;
    }

    public function getUser(Request $request) {
        $q = $request->get('q');
        return Administrator::where("username",'=', $q)->paginate(null, ['id', 'username as text']);
    }
}
