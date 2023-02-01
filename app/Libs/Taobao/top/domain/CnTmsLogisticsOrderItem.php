<?php

/**
 * 发货商品信息，最大50条记录
 * @author auto create
 */
class CnTmsLogisticsOrderItem
{
	
	/** 
	 * 扩展字段 K:V;
	 **/
	public $extend_fields;
	
	/** 
	 * 发货商品名称
	 **/
	public $item_name;
	
	/** 
	 * 商品单价，单位分
	 **/
	public $item_price;
	
	/** 
	 * ERP订单明细编码
	 **/
	public $order_item_id;
	
	/** 
	 * 发货商品商品数量
	 **/
	public $quantity;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 子交易号
	 **/
	public $sub_trade_id;	
}
?>