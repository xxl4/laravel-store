<?php

/**
 * 订单处理流程
 * @author auto create
 */
class OrderProcess
{
	
	/** 
	 * 单据号
	 **/
	public $order_code;
	
	/** 
	 * 仓储系统单据号
	 **/
	public $order_id;
	
	/** 
	 * 单据类型(JYCK=一般交易出库单;HHCK=换货出库;BFCK=补发出库;PTCK=普通出库单;DBCK=调拨出库;QTCK=其他出库;B2BRK=B2B入库;B2BCK=B2B出库;CGRK=采购入库;DBRK=调拨入库;QTRK=其他入库;XTRK=销退入库;HHRK=换货入库;CNJG=仓内加工单)
	 **/
	public $order_type;
	
	/** 
	 * 处理流程
	 **/
	public $processes;
	
	/** 
	 * 仓库编码
	 **/
	public $warehouse_code;	
}
?>