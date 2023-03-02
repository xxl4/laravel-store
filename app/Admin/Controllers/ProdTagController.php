<?php

namespace App\Admin\Controllers;

use App\Models\ProdTag;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class ProdTagController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '标签';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdTag());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('status')->bool(['1' => true, '0' => false]);
        $grid->column('is_default')->bool(['1' => true, '0' => false]);
        $grid->column('prod_count', __('Prod count'));
        $grid->column('style', __('Style'));
        $grid->column('seq', __('Seq'));
        $grid->column('create_time', __('Create time'));
        $grid->column('update_time', __('Update time'));
        $grid->column('delete_time', __('Delete time'));

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
        $show = new Show(ProdTag::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('shop_id', __('Shop id'));
        $show->field('status', __('Status'));
        $show->field('is_default', __('Is default'));
        $show->field('prod_count', __('Prod count'));
        $show->field('style', __('Style'));
        $show->field('seq', __('Seq'));
        $show->field('create_time', __('Create time'));
        $show->field('update_time', __('Update time'));
        $show->field('delete_time', __('Delete time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProdTag());

        $form->text('title', __('Title'));
        $form->number('shop_id', __('Shop id'));
        $form->switch('status', __('Status'));
        $form->switch('is_default', __('Is default'));
        $form->number('prod_count', __('Prod count'));
        $form->number('style', __('Style'));
        $form->number('seq', __('Seq'));
        $form->datetime('delete_time', __('Delete time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
