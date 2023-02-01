<?php

/**
 * 采购申请/经销采购单
 * @author auto create
 */
class DealerOrder
{
	
	/** 
	 * 支付宝交易号
	 **/
	public $alipay_no;
	
	/** 
	 * 申请时间
	 **/
	public $applied_time;
	
	/** 
	 * 分销商nick
	 **/
	public $applier_nick;
	
	/** 
	 * 分销商最后一次确认/申请/拒绝的时间
	 **/
	public $audit_time_applier;
	
	/** 
	 * 供应商最后一次审核通过/修改/驳回的时间
	 **/
	public $audit_time_supplier;
	
	/** 
	 * 关闭原因
	 **/
	public $close_reason;
	
	/** 
	 * 产品明细
	 **/
	public $dealer_order_details;
	
	/** 
	 * 经销采购单编号，API发货使用此字段
	 **/
	public $dealer_order_id;
	
	/** 
	 * 已发货数量
	 **/
	public $delivered_quantity_count;
	
	/** 
	 * 属性键
	 **/
	public $dist_memo;
	
	/** 
	 * 属性信息列表，key-value形式。
	 **/
	public $features;
	
	/** 
	 * 物流费用(精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $logistics_fee;
	
	/** 
	 * 物流方式：SELF_PICKUP（自提）、LOGISTICS（物流发货)
	 **/
	public $logistics_type;
	
	/** 
	 * 修改时间
	 **/
	public $modified_time;
	
	/** 
	 * WAIT_FOR_SUPPLIER_AUDIT1：分销商提交申请，待供应商审核；SUPPLIER_REFUSE：供应商驳回申请，待分销商确认；WAIT_FOR_APPLIER_AUDIT：供应商修改后，待分销商确认；WAIT_FOR_SUPPLIER_AUDIT2：分销商拒绝修改，待供应商再审核；BOTH_AGREE_WAIT_PAY：审核通过下单成功，待分销商付款WAIT_FOR_SUPPLIER_DELIVER：付款成功，待供应商发货；WAIT_FOR_APPLIER_STORAGE：供应商发货，待分销商收货；TRADE_FINISHED：分销商收货，交易成功；TRADE_CLOSED：经销采购单关闭。
	 **/
	public $order_status;
	
	/** 
	 * 付款时间
	 **/
	public $pay_time;
	
	/** 
	 * 支付方式：ALIPAY_SURETY（支付宝担保交易）TRANSFER（线下转账）PREPAY（预存款）IMMEDIATELY（即时到账）
	 **/
	public $pay_type;
	
	/** 
	 * 总采购数量
	 **/
	public $quantity_count;
	
	/** 
	 * 折让费用(精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $rebate_fee;
	
	/** 
	 * 收货人信息
	 **/
	public $receiver;
	
	/** 
	 * 分销商拒绝供应商修改的原因
	 **/
	public $refuse_reason_applier;
	
	/** 
	 * 供应商驳回申请的原因
	 **/
	public $refuse_reason_supplier;
	
	/** 
	 * 供应商备注。仅供应商可见。
	 **/
	public $supplier_memo;
	
	/** 
	 * 供应商备注旗帜。1:红色 2:黄色 3:绿色 4:蓝色 5:粉红色。仅供应商可见。
	 **/
	public $supplier_memo_flag;
	
	/** 
	 * 供应商nick
	 **/
	public $supplier_nick;
	
	/** 
	 * 采购总价(精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $total_price;	
}
?>