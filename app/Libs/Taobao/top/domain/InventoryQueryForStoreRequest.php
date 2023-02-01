<?php

/**
 * 查询列表
 * @author auto create
 */
class InventoryQueryForStoreRequest
{
	
	/** 
	 * 实体类型  2：仓库类型， 6：门店类型
	 **/
	public $inv_store_type;
	
	/** 
	 * 1前端商品 2供应链货品
	 **/
	public $item_type;
	
	/** 
	 * 后端商品code， sc_item_code或 sc_item_id需传入其中之一
	 **/
	public $sc_item_code;
	
	/** 
	 * 后端商品id， sc_item_code或 sc_item_id需传入其中之一
	 **/
	public $sc_item_id;
	
	/** 
	 * 货品填0即可，前端商品填skuId
	 **/
	public $sku_id;
	
	/** 
	 * 仓库code
	 **/
	public $store_code;	
}
?>