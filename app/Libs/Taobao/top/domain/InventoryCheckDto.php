<?php

/**
 * 调整库存对象
 * @author auto create
 */
class InventoryCheckDto
{
	
	/** 
	 * 1:全量更新   2: 出入库盘盈盘亏
	 **/
	public $check_mode;
	
	/** 
	 * 调整明细
	 **/
	public $detail_list;
	
	/** 
	 * 2： 仓库类型   6：门店类型
	 **/
	public $inv_store_type;
	
	/** 
	 * 调整单据号
	 **/
	public $order_id;
	
	/** 
	 * 仓库code或者门店id
	 **/
	public $store_code;	
}
?>