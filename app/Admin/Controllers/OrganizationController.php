<?php

namespace App\Admin\Controllers;

use App\Models\Organization;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use App\Enums\OrganizationEnableEnum;
use App\Admin\Forms\OrganizationSecret;
use Nicelizhi\Admin\Layout\Content;
use Nicelizhi\Admin\Facades\Admin;
use Nicelizhi\Admin\Auth\Database\Administrator;
use App\Admin\Actions\Org\OrgMaster;

class OrganizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '机构';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Organization());

        $grid->column('id', __('Id'));
        //$grid->column('user_id', __('User id'))->filter();
        $grid->column('enable', __('Enable'))->filter(OrganizationEnableEnum::getAll())->editable("select", OrganizationEnableEnum::getAll());
        $grid->column('name', __('Name'))->filter();
        $grid->column('code', __('Code'))->filter();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->actions(function ($actions) {
            $actions->add(new OrgMaster());
        });

        $grid->actions(function ($actions) {

            // 没有`delete-image`权限的角色不显示删除按钮
            if (!Admin::user()->can('delete-image')) {
                $actions->disableDelete();
            }
        });

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
        $show = new Show(Organization::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('enable', __('Enable'));
        $show->field('name', __('Name'));
        $show->field('code', __('Code'));
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
        $form = new Form(new Organization());

        //$form->number('user_id', __('User id'));
        $form->select('user_id', __('UserName'))->options(function($id) {
            $user = Administrator::find($id);
            if($user) return [$user->id => $user->username];
        })->ajax('/admin/organization-users/users');
        $form->switch('enable', __('Enable'));
        $form->text('name', __('Name'));
        $form->text('code', __('Code'));

        return $form;
    }

    /**
     * 
     * 秘钥生成与查看
     */
    public function secret(Content $content) {
        return $content->title("密钥设置")->body(new OrganizationSecret());
    }
}
