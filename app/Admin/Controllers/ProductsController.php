<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class ProductsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('prod_id', __('Prod id'));
        $grid->column('prod_name', __('Prod name'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('ori_price', __('Ori price'));
        $grid->column('price', __('Price'));
        $grid->column('brief', __('Brief'));
        $grid->column('content', __('Content'))->hide();
        $grid->column('pic', __('Pic'))->hide();
        $grid->column('imgs', __('Imgs'))->hide();
        $grid->column('status', __('Status'));
        $grid->column('category_id', __('Category id'));
        $grid->column('sold_num', __('Sold num'));
        $grid->column('total_stocks', __('Total stocks'));
        $grid->column('delivery_mode', __('Delivery mode'));
        $grid->column('delivery_template_id', __('Delivery template id'));
        $grid->column('create_time', __('Create time'));
        $grid->column('update_time', __('Update time'));
        $grid->column('putaway_time', __('Putaway time'));
        $grid->column('version', __('Version'));

        $grid->model()->orderBy("prod_id", "DESC");

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
        $show = new Show(Product::findOrFail($id));

        $show->field('prod_id', __('Prod id'));
        $show->field('prod_name', __('Prod name'));
        $show->field('shop_id', __('Shop id'));
        $show->field('ori_price', __('Ori price'));
        $show->field('price', __('Price'));
        $show->field('brief', __('Brief'));
        $show->field('content', __('Content'));
        $show->field('pic', __('Pic'));
        $show->field('imgs', __('Imgs'));
        $show->field('status', __('Status'));
        $show->field('category_id', __('Category id'));
        $show->field('sold_num', __('Sold num'));
        $show->field('total_stocks', __('Total stocks'));
        $show->field('delivery_mode', __('Delivery mode'));
        $show->field('delivery_template_id', __('Delivery template id'));
        $show->field('create_time', __('Create time'));
        $show->field('update_time', __('Update time'));
        $show->field('putaway_time', __('Putaway time'));
        $show->field('version', __('Version'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->number('prod_id', __('Prod id'));
        $form->text('prod_name', __('Prod name'));
        $form->number('shop_id', __('Shop id'));
        $form->decimal('ori_price', __('Ori price'))->default(0.00);
        $form->decimal('price', __('Price'));
        $form->text('brief', __('Brief'));
        $form->textarea('content', __('Content'));
        $form->image('pic', __('Pic'));
        $form->multipleImage('imgs', __('Imgs'));
        $form->number('status', __('Status'));
        $form->number('category_id', __('Category id'));
        $form->number('sold_num', __('Sold num'));
        $form->number('total_stocks', __('Total stocks'));
        $form->text('delivery_mode', __('Delivery mode'));
        $form->number('delivery_template_id', __('Delivery template id'));
        $form->datetime('update_time', __('Update time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('putaway_time', __('Putaway time'))->default(date('Y-m-d H:i:s'));
        $form->hidden('version', __('Version'));

        return $form;
    }
}
