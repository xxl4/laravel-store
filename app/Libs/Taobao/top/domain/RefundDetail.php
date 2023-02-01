<?php

/**
 * 代销采购退款列表
 * @author auto create
 */
class RefundDetail
{
	
	/** 
	 * 下游买家的退款信息
	 **/
	public $buyer_refund;
	
	/** 
	 * 分销商nick
	 **/
	public $distributor_nick;
	
	/** 
	 * 是否退货
	 **/
	public $is_return_goods;
	
	/** 
	 * 退款修改时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 支付给供应商的金额
	 **/
	public $pay_sup_fee;
	
	/** 
	 * 主采购单id
	 **/
	public $purchase_order_id;
	
	/** 
	 * 退款创建时间
	 **/
	public $refund_create_time;
	
	/** 
	 * 退款说明
	 **/
	public $refund_desc;
	
	/** 
	 * 退款的金额
	 **/
	public $refund_fee;
	
	/** 
	 * 退款流程类型：
4：发货前退款；
1：发货后退款不退货；
2：发货后退款退货
	 **/
	public $refund_flow_type;
	
	/** 
	 * 退款原因
	 **/
	public $refund_reason;
	
	/** 
	 * 退款状态
1：买家已经申请退款，等待卖家同意
2：卖家已经同意退款，等待买家退货
3：买家已经退货，等待卖家确认收货
4：退款关闭
5：退款成功
6：卖家拒绝退款
12：同意退款，待打款
9：没有申请退款
10：卖家拒绝确认收货
	 **/
	public $refund_status;
	
	/** 
	 * 子单id
	 **/
	public $sub_order_id;
	
	/** 
	 * 供应商nick
	 **/
	public $supplier_nick;
	
	/** 
	 * 超时时间
	 **/
	public $timeout;
	
	/** 
	 * 超时类型：
1：供应商同意退款/同意退货超时；
2：供应商确认收货超时
	 **/
	public $to_type;	
}
?>