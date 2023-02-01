<?php

/**
 * subList
 * @author auto create
 */
class InventorySubDetailDto
{
	
	/** 
	 * ONLINE_INVENTORY:线上可售卖库存。SHARE_INVENTORY：线下独享库存，门店自提可用
	 **/
	public $inv_biz_code;
	
	/** 
	 * 占用库存数
	 **/
	public $occupy_quantity;
	
	/** 
	 * 仓库物理库存数
	 **/
	public $quantity;
	
	/** 
	 * 预扣库存数
	 **/
	public $reserve_quantity;	
}
?>