<?php

/**
 * 项目集
 * @author auto create
 */
class TransferItems
{
	
	/** 
	 * 数量,Item1234,string(50),必填,
	 **/
	public $count;
	
	/** 
	 * 货品编码,HZ1234,string(50),必填,
	 **/
	public $inventory_type;
	
	/** 
	 * 库存类型(1:可销售库存.101:残次),HZ1234,string(500),必填,
	 **/
	public $sc_item_code;	
}
?>