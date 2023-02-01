<?php

/**
 * 账单列表
 * @author auto create
 */
class OrderDiscountBillBo
{
	
	/** 
	 * 活动ID
	 **/
	public $activity_id;
	
	/** 
	 * 活动名称
	 **/
	public $activity_name;
	
	/** 
	 * 活动类型 1：活动 2：券
	 **/
	public $activity_type;
	
	/** 
	 * 业务时间
	 **/
	public $biz_time;
	
	/** 
	 * 购买数量
	 **/
	public $buy_quantity;
	
	/** 
	 * 优惠金额
	 **/
	public $discount_fee;
	
	/** 
	 * 优惠件数
	 **/
	public $discount_quantity;
	
	/** 
	 * 补差类型
	 **/
	public $discount_type;
	
	/** 
	 * 主键id
	 **/
	public $id;
	
	/** 
	 * 主订单号
	 **/
	public $main_order_id;
	
	/** 
	 * 商家编码
	 **/
	public $merchant_code;
	
	/** 
	 * 商家优惠补差金额
	 **/
	public $merchant_discount_fee;
	
	/** 
	 * 订单渠道
	 **/
	public $order_channel;
	
	/** 
	 * 交易状态
	 **/
	public $order_status;
	
	/** 
	 * 外部订单号
	 **/
	public $out_order_id;
	
	/** 
	 * 商品编码
	 **/
	public $sku_code;
	
	/** 
	 * 商品名称
	 **/
	public $sku_name;
	
	/** 
	 * 经营店id
	 **/
	public $store_id;
	
	/** 
	 * 子单号
	 **/
	public $sub_order_id;
	
	/** 
	 * 淘鲜达优惠金额
	 **/
	public $txd_discount_fee;	
}
?>