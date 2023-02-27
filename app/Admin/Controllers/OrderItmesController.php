<?php

namespace App\Admin\Controllers;

use App\Models\OrderItem;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class OrderItmesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'OrderItem';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderItem());

        $grid->column('order_item_id', __('Order item id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('order_number', __('Order number'));
        $grid->column('prod_id', __('Prod id'));
        $grid->column('sku_id', __('Sku id'));
        $grid->column('prod_count', __('Prod count'));
        $grid->column('prod_name', __('Prod name'));
        $grid->column('sku_name', __('Sku name'));
        $grid->column('pic', __('Pic'));
        $grid->column('price', __('Price'));
        $grid->column('user_id', __('User id'));
        $grid->column('product_total_amount', __('Product total amount'));
        $grid->column('rec_time', __('Rec time'));
        $grid->column('comm_sts', __('Comm sts'));
        $grid->column('distribution_card_no', __('Distribution card no'));
        $grid->column('basket_date', __('Basket date'));

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
        $show = new Show(OrderItem::findOrFail($id));

        $show->field('order_item_id', __('Order item id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('order_number', __('Order number'));
        $show->field('prod_id', __('Prod id'));
        $show->field('sku_id', __('Sku id'));
        $show->field('prod_count', __('Prod count'));
        $show->field('prod_name', __('Prod name'));
        $show->field('sku_name', __('Sku name'));
        $show->field('pic', __('Pic'));
        $show->field('price', __('Price'));
        $show->field('user_id', __('User id'));
        $show->field('product_total_amount', __('Product total amount'));
        $show->field('rec_time', __('Rec time'));
        $show->field('comm_sts', __('Comm sts'));
        $show->field('distribution_card_no', __('Distribution card no'));
        $show->field('basket_date', __('Basket date'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrderItem());

        $form->number('order_item_id', __('Order item id'));
        $form->number('shop_id', __('Shop id'));
        $form->text('order_number', __('Order number'));
        $form->number('prod_id', __('Prod id'));
        $form->number('sku_id', __('Sku id'));
        $form->number('prod_count', __('Prod count'));
        $form->text('prod_name', __('Prod name'));
        $form->text('sku_name', __('Sku name'));
        $form->image('pic', __('Pic'));
        $form->decimal('price', __('Price'));
        $form->text('user_id', __('User id'));
        $form->decimal('product_total_amount', __('Product total amount'));
        $form->datetime('rec_time', __('Rec time'))->default(date('Y-m-d H:i:s'));
        $form->number('comm_sts', __('Comm sts'));
        $form->text('distribution_card_no', __('Distribution card no'));
        $form->datetime('basket_date', __('Basket date'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
