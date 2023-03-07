<?php

namespace App\Admin\Controllers;

use App\Models\OrderRefund;
use Nicelizhi\Admin\Controllers\AdminController;
use Nicelizhi\Admin\Form;
use Nicelizhi\Admin\Grid;
use Nicelizhi\Admin\Show;
use Nicelizhi\Admin\Facades\Admin;

class OrderRefundsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '售后';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderRefund());

        $grid->column('refund_id', __('Refund id'));
        $grid->column('shop_id', __('Shop id'));
        $grid->column('order_id', __('Order id'));
        $grid->column('order_number', __('Order number'));
        $grid->column('order_amount', __('Order amount'));
        $grid->column('order_item_id', __('Order item id'));
        $grid->column('refund_sn', __('Refund sn'));
        $grid->column('flow_trade_no', __('Flow trade no'));
        $grid->column('out_refund_no', __('Out refund no'));
        $grid->column('pay_type', __('Pay type'));
        $grid->column('pay_type_name', __('Pay type name'));
        $grid->column('user_id', __('User id'));
        $grid->column('goods_num', __('Goods num'));
        $grid->column('refund_amount', __('Refund amount'));
        $grid->column('apply_type', __('Apply type'));
        $grid->column('refund_sts', __('Refund sts'));
        $grid->column('return_money_sts', __('Return money sts'));
        $grid->column('apply_time', __('Apply time'));
        $grid->column('handel_time', __('Handel time'));
        $grid->column('refund_time', __('Refund time'));
        $grid->column('photo_files', __('Photo files'));
        $grid->column('buyer_msg', __('Buyer msg'));
        $grid->column('seller_msg', __('Seller msg'));
        $grid->column('express_name', __('Express name'));
        $grid->column('express_no', __('Express no'));
        $grid->column('ship_time', __('Ship time'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('receive_time', __('Receive time'));
        $grid->column('receive_message', __('Receive message'));

        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            $items = \App\Libs\Utils::getOrgStores(Admin::user()->org_id);
            foreach($items as $key=>$item) {
                $filter->scope('shop_type_'.$key, "查看".$item)->where('shop_id', $key);
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
        $show = new Show(OrderRefund::findOrFail($id));

        $show->field('refund_id', __('Refund id'));
        $show->field('shop_id', __('Shop id'));
        $show->field('order_id', __('Order id'));
        $show->field('order_number', __('Order number'));
        $show->field('order_amount', __('Order amount'));
        $show->field('order_item_id', __('Order item id'));
        $show->field('refund_sn', __('Refund sn'));
        $show->field('flow_trade_no', __('Flow trade no'));
        $show->field('out_refund_no', __('Out refund no'));
        $show->field('pay_type', __('Pay type'));
        $show->field('pay_type_name', __('Pay type name'));
        $show->field('user_id', __('User id'));
        $show->field('goods_num', __('Goods num'));
        $show->field('refund_amount', __('Refund amount'));
        $show->field('apply_type', __('Apply type'));
        $show->field('refund_sts', __('Refund sts'));
        $show->field('return_money_sts', __('Return money sts'));
        $show->field('apply_time', __('Apply time'));
        $show->field('handel_time', __('Handel time'));
        $show->field('refund_time', __('Refund time'));
        $show->field('photo_files', __('Photo files'));
        $show->field('buyer_msg', __('Buyer msg'));
        $show->field('seller_msg', __('Seller msg'));
        $show->field('express_name', __('Express name'));
        $show->field('express_no', __('Express no'));
        $show->field('ship_time', __('Ship time'));
        $show->field('updated_at', __('Updated at'));
        $show->field('receive_time', __('Receive time'));
        $show->field('receive_message', __('Receive message'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrderRefund());

        $form->number('refund_id', __('Refund id'));
        $form->number('shop_id', __('Shop id'));
        $form->number('order_id', __('Order id'));
        $form->text('order_number', __('Order number'));
        $form->decimal('order_amount', __('Order amount'));
        $form->number('order_item_id', __('Order item id'));
        $form->text('refund_sn', __('Refund sn'));
        $form->text('flow_trade_no', __('Flow trade no'));
        $form->text('out_refund_no', __('Out refund no'));
        $form->number('pay_type', __('Pay type'));
        $form->text('pay_type_name', __('Pay type name'));
        $form->text('user_id', __('User id'));
        $form->number('goods_num', __('Goods num'));
        $form->decimal('refund_amount', __('Refund amount'));
        $form->number('apply_type', __('Apply type'));
        $form->number('refund_sts', __('Refund sts'));
        $form->number('return_money_sts', __('Return money sts'));
        $form->datetime('handel_time', __('Handel time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('refund_time', __('Refund time'))->default(date('Y-m-d H:i:s'));
        $form->text('photo_files', __('Photo files'));
        $form->text('buyer_msg', __('Buyer msg'));
        $form->text('seller_msg', __('Seller msg'));
        $form->text('express_name', __('Express name'));
        $form->text('express_no', __('Express no'));
        $form->datetime('ship_time', __('Ship time'))->default(date('Y-m-d H:i:s'));
        $form->datetime('receive_time', __('Receive time'))->default(date('Y-m-d H:i:s'));
        $form->text('receive_message', __('Receive message'));

        return $form;
    }
}
