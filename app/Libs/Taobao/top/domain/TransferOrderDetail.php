<?php

/**
 * 调拨单细节
 * @author auto create
 */
class TransferOrderDetail
{
	
	/** 
	 * 确认入库时间
	 **/
	public $confirm_in_time;
	
	/** 
	 * 确认出库时间
	 **/
	public $confirm_out_time;
	
	/** 
	 * 创建时间
	 **/
	public $create_time;
	
	/** 
	 * 外部ERP订单号,HZ1234,string(50),,
	 **/
	public $erp_order_code;
	
	/** 
	 * 调拨出库仓编码
	 **/
	public $from_warehouse_code;
	
	/** 
	 * 调拨单货品明细记录集
	 **/
	public $items;
	
	/** 
	 * 订单状态,0,string(50),,
	 **/
	public $order_status;
	
	/** 
	 * 1111
	 **/
	public $owner_code;
	
	/** 
	 * 调拨入库仓编码
	 **/
	public $to_warehouse_code;
	
	/** 
	 * 调拨入库单号
	 **/
	public $transfer_in_order_code;
	
	/** 
	 * 调拨单号,0,string(50),,
	 **/
	public $transfer_order_code;
	
	/** 
	 * 调拨出库单号
	 **/
	public $transfer_out_order_code;	
}
?>