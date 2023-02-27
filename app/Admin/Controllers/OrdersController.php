<?php

namespace App\Admin\Controllers;

use App\Models\Order;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;

class OrdersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '订单';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('order_id', __('Order id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('prod_name', __('Prod name'));
        $grid->column('user_id', __('User id'));
        $grid->column('order_number', __('Order number'));
        $grid->column('total', __('Total'));
        $grid->column('actual_total', __('Actual total'));
        $grid->column('pay_type', __('Pay type'));
        $grid->column('remarks', __('Remarks'));
        $grid->column('status', __('Status'));
        $grid->column('dvy_type', __('Dvy type'));
        $grid->column('dvy_id', __('Dvy id'));
        $grid->column('dvy_flow_id', __('Dvy flow id'));
        $grid->column('freight_amount', __('Freight amount'));
        $grid->column('addr_order_id', __('Addr order id'));
        $grid->column('product_nums', __('Product nums'));
        $grid->column('create_time', __('Create time'));
        $grid->column('update_time', __('Update time'));
        $grid->column('pay_time', __('Pay time'));
        $grid->column('dvy_time', __('Dvy time'));
        $grid->column('finally_time', __('Finally time'));
        $grid->column('cancel_time', __('Cancel time'));
        $grid->column('is_payed', __('Is payed'));
        $grid->column('delete_status', __('Delete status'));
        $grid->column('refund_sts', __('Refund sts'));
        $grid->column('reduce_amount', __('Reduce amount'));
        $grid->column('order_type', __('Order type'));
        $grid->column('close_type', __('Close type'));

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
        $show = new Show(Order::findOrFail($id));

        $show->field('order_id', __('Order id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('prod_name', __('Prod name'));
        $show->field('user_id', __('User id'));
        $show->field('order_number', __('Order number'));
        $show->field('total', __('Total'));
        $show->field('actual_total', __('Actual total'));
        $show->field('pay_type', __('Pay type'));
        $show->field('remarks', __('Remarks'));
        $show->field('status', __('Status'));
        $show->field('dvy_type', __('Dvy type'));
        $show->field('dvy_id', __('Dvy id'));
        $show->field('dvy_flow_id', __('Dvy flow id'));
        $show->field('freight_amount', __('Freight amount'));
        $show->field('addr_order_id', __('Addr order id'));
        $show->field('product_nums', __('Product nums'));
        $show->field('create_time', __('Create time'));
        $show->field('update_time', __('Update time'));
        $show->field('pay_time', __('Pay time'));
        $show->field('dvy_time', __('Dvy time'));
        $show->field('finally_time', __('Finally time'));
        $show->field('cancel_time', __('Cancel time'));
        $show->field('is_payed', __('Is payed'));
        $show->field('delete_status', __('Delete status'));
        $show->field('refund_sts', __('Refund sts'));
        $show->field('reduce_amount', __('Reduce amount'));
        $show->field('order_type', __('Order type'));
        $show->field('close_type', __('Close type'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Order());

        $form->number('order_id', __('Order id'));
        $form->number('shop_id', __('Shop id'));
        $form->text('prod_name', __('Prod name'));
        $form->text('user_id', __('User id'));
        $form->text('order_number', __('Order number'));
        $form->decimal('total', __('Total'))->default(0.00);
        $form->decimal('actual_total', __('Actual total'));
        $form->number('pay_type', __('Pay type'));
        $form->text('remarks', __('Remarks'));
        $form->number('status', __('Status'));
        $form->text('dvy_type', __('Dvy type'));
        $form->number('dvy_id', __('Dvy id'));
        $form->text('dvy_flow_id', __('Dvy flow id'));
        $form->decimal('freight_amount', __('Freight amount'))->default(0.00);
        $form->number('addr_order_id', __('Addr order id'));
        $form->number('product_nums', __('Product nums'));
        $form->datetime('create_time', __('Create time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('update_time', __('Update time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('pay_time', __('Pay time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('dvy_time', __('Dvy time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('finally_time', __('Finally time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('cancel_time', __('Cancel time'))->default(date('Y-m-d H:i:s'));
        $form->switch('is_payed', __('Is payed'));
        $form->number('delete_status', __('Delete status'));
        $form->number('refund_sts', __('Refund sts'));
        $form->decimal('reduce_amount', __('Reduce amount'));
        $form->switch('order_type', __('Order type'));
        $form->switch('close_type', __('Close type'));

        return $form;
    }
}
