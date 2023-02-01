<?php

/**
 * data
 * @author auto create
 */
class InventoryCheckResultDto
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 每个货品的调整子单据号，作为业务调整依据，处理时会幂等
	 **/
	public $sub_order_id;
	
	/** 
	 * 每个子调整单据是否成功
	 **/
	public $success;	
}
?>