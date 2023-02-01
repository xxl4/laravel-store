<?php

/**
 * 下游买家的退款信息
 * @author auto create
 */
class BuyerRefund
{
	
	/** 
	 * 订单id
	 **/
	public $biz_order_id;
	
	/** 
	 * 下游买家nick
	 **/
	public $buyer_nick;
	
	/** 
	 * 货物的状态：
买家已收到货
买家已退货
买家未收到货
	 **/
	public $goods_status_desc;
	
	/** 
	 * 退款修改时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 买家是否退货
	 **/
	public $need_return_goods;
	
	/** 
	 * 退款创建时间
	 **/
	public $refund_create_time;
	
	/** 
	 * 退款说明
	 **/
	public $refund_desc;
	
	/** 
	 * 交易退款id
	 **/
	public $refund_id;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 退款状态
	 **/
	public $refund_status;
	
	/** 
	 * 退还买家的金额
	 **/
	public $return_fee;
	
	/** 
	 * 采购单子单id
	 **/
	public $sub_order_id;
	
	/** 
	 * 支付分销商的金额
	 **/
	public $to_seller_fee;	
}
?>