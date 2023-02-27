<?php

namespace App\Admin\Controllers;

use App\Models\ProdTagReference;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class ProdTagContrReferenceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProdTagReference';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProdTagReference());

        $grid->column('reference_id', __('Reference id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('tag_id', __('Tag id'));
        $grid->column('prod_id', __('Prod id'));
        $grid->column('status', __('Status'));
        $grid->column('create_time', __('Create time'));

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
        $show = new Show(ProdTagReference::findOrFail($id));

        $show->field('reference_id', __('Reference id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('tag_id', __('Tag id'));
        $show->field('prod_id', __('Prod id'));
        $show->field('status', __('Status'));
        $show->field('create_time', __('Create time'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProdTagReference());

        $form->number('shop_id', __('Shop id'));
        $form->number('tag_id', __('Tag id'));
        $form->number('prod_id', __('Prod id'));
        $form->switch('status', __('Status'));
        $form->datetime('create_time', __('Create time'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
