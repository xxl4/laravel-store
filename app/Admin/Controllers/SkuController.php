<?php

namespace App\Admin\Controllers;

use App\Models\Sku;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class SkuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Sku';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Sku());

        $grid->column('sku_id', __('Sku id'))->sortable()->filter();
        $grid->column('prod_id', __('Prod id'));
        $grid->column('properties', __('Properties'));
        $grid->column('ori_price', __('Ori price'));
        $grid->column('price', __('Price'));
        $grid->column('stocks', __('Stocks'));
        $grid->column('actual_stocks', __('Actual stocks'));
        $grid->column('update_time', __('Update time'));
        $grid->column('rec_time', __('Rec time'));
        $grid->column('party_code', __('Party code'));
        $grid->column('model_id', __('Model id'));
        //$grid->column('pic', __('Pic'));
        $grid->column('sku_name', __('Sku name'));
        $grid->column('prod_name', __('Prod name'));
        $grid->column('version', __('Version'));
        $grid->column('weight', __('Weight'));
        $grid->column('volume', __('Volume'));
        $grid->column('status', __('Status'));
        $grid->column('is_delete', __('Is delete'));

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
        $show = new Show(Sku::findOrFail($id));

        $show->field('sku_id', __('Sku id'));
        $show->field('prod_id', __('Prod id'));
        $show->field('properties', __('Properties'));
        $show->field('ori_price', __('Ori price'));
        $show->field('price', __('Price'));
        $show->field('stocks', __('Stocks'));
        $show->field('actual_stocks', __('Actual stocks'));
        $show->field('update_time', __('Update time'));
        $show->field('rec_time', __('Rec time'));
        $show->field('party_code', __('Party code'));
        $show->field('model_id', __('Model id'));
        $show->field('pic', __('Pic'));
        $show->field('sku_name', __('Sku name'));
        $show->field('prod_name', __('Prod name'));
        $show->field('version', __('Version'));
        $show->field('weight', __('Weight'));
        $show->field('volume', __('Volume'));
        $show->field('status', __('Status'));
        $show->field('is_delete', __('Is delete'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Sku());

        $form->number('prod_id', __('Prod id'));
        $form->text('properties', __('Properties'));
        $form->decimal('ori_price', __('Ori price'));
        $form->decimal('price', __('Price'));
        $form->number('stocks', __('Stocks'));
        $form->number('actual_stocks', __('Actual stocks'));
        $form->text('party_code', __('Party code'));
        $form->text('model_id', __('Model id'));
        $form->image('pic', __('Pic'));
        $form->text('sku_name', __('Sku name'));
        $form->text('prod_name', __('Prod name'));
        $form->number('version', __('Version'));
        $form->decimal('weight', __('Weight'));
        $form->decimal('volume', __('Volume'));
        $form->switch('status', __('Status'))->default(1);
        $form->switch('is_delete', __('Is delete'));

        return $form;
    }
}
