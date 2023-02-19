<?php

namespace App\Admin\Controllers;

use App\Models\OrganizationUser;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use App\Enums\OrganizationUserEnableEnum;
use Nicelizhi\Admin\Auth\Database\Role;
use Nicelizhi\Admin\Facades\Admin;
use App\Libs\Utils;

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

        //$form->number('user_id', __('User id'));
        $form->switch('enable', __('Enable'));
        $form->text('name', __('Name'));
        $form->select('role_id', __('Role id'))->options(Role::whereIn("id",[2,3,4,5])->pluck('name', 'id'));
        $uid = Admin::user()->id;
        $organization = \App\Models\Organization::where("user_id", $uid)->select(["id"])->first();
        $form->hidden("organization_id")->default($organization->id);

        return $form;
    }
}
