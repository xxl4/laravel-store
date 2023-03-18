<?php

namespace App\Admin\Controllers;

use App\Models\Notice;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class NoticeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '公告';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Notice());

        $grid->column('id', __('Id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('title', __('Title'));
        //$grid->column('content', __('Content'));
        $grid->column('status', __('Status'));
        $grid->column('is_top', __('Is top'));
        $grid->column('publish_time', __('Publish time'));
        $grid->column('update_time', __('Update time'));

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
        $show = new Show(Notice::findOrFail($id));

        //$show->field('id', __('Id'));
        //$show->field('shop_id', __('Shop id'));
        $show->field('title', __('Title'));
        $show->field('content', __('Content'));
        //$show->field('status', __('Status'));
        $show->field('is_top', __('Is top'));
        $show->field('publish_time', __('Publish time'));
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
        $form = new Form(new Notice());

        $form->number('shop_id', __('Shop id'));
        $form->text('title', __('Title'));
        $form->editor('content', __('Content'));
        $form->switch('status', __('Status'));
        $form->switch('is_top', __('Is top'));

        return $form;
    }
}
