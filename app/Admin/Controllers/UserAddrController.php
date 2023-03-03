<?php

namespace App\Admin\Controllers;

use App\Models\UserAddr;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class UserAddrController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '客户地址';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new UserAddr());

        $grid->column('addr_id', __('Addr id'));
        $grid->column('user_id', __('User id'));
        $grid->column('receiver', __('Receiver'));
        $grid->column('province_id', __('Province id'));
        $grid->column('province', __('Province'));
        $grid->column('city', __('City'));
        $grid->column('city_id', __('City id'));
        $grid->column('area', __('Area'));
        $grid->column('area_id', __('Area id'));
        $grid->column('post_code', __('Post code'));
        $grid->column('addr', __('Addr'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('status', __('Status'))->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('common_addr', __('Common addr'))->bool(['1' => true, '0' => false])->sortable()->filter();
        $grid->column('create_time', __('Create time'));
        $grid->column('version', __('Version'));
        $grid->column('update_time', __('Update time'));

        $grid->model()->orderBy("addr_id","DESC");

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
        $show = new Show(UserAddr::findOrFail($id));

        $show->field('addr_id', __('Addr id'));
        $show->field('user_id', __('User id'));
        $show->field('receiver', __('Receiver'));
        $show->field('province_id', __('Province id'));
        $show->field('province', __('Province'));
        $show->field('city', __('City'));
        $show->field('city_id', __('City id'));
        $show->field('area', __('Area'));
        $show->field('area_id', __('Area id'));
        $show->field('post_code', __('Post code'));
        $show->field('addr', __('Addr'));
        $show->field('mobile', __('Mobile'));
        $show->field('status', __('Status'));
        $show->field('common_addr', __('Common addr'));
        $show->field('create_time', __('Create time'));
        $show->field('version', __('Version'));
        $show->field('update_time', __('Update time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new UserAddr());

        $form->text('user_id', __('User id'));
        $form->text('receiver', __('Receiver'));
        $form->text('province_id', __('Province id'));
        $form->text('province', __('Province'));
        $form->text('city', __('City'));
        $form->text('city_id', __('City id'));
        $form->text('area', __('Area'));
        $form->text('area_id', __('Area id'));
        $form->text('post_code', __('Post code'));
        $form->text('addr', __('Addr'));
        $form->mobile('mobile', __('Mobile'));
        $form->number('status', __('Status'));
        $form->number('common_addr', __('Common addr'));
        $form->number('version', __('Version'));

        return $form;
    }
}
