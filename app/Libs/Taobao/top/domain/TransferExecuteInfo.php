<?php

/**
 * 调拨单信息
 * @author auto create
 */
class TransferExecuteInfo
{
	
	/** 
	 * 预计入库时间,0,string(50),,
	 **/
	public $expect_in_store_time;
	
	/** 
	 * 预计出库时间,0,string(50),,
	 **/
	public $expect_out_store_time;
	
	/** 
	 * 调拨单号,0,string(50),,
	 **/
	public $transfer_order_code;	
}
?>