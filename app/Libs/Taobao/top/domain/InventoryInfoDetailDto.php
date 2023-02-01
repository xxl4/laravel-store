<?php

/**
 * 查询成功列表
 * @author auto create
 */
class InventoryInfoDetailDto
{
	
	/** 
	 * distType
	 **/
	public $inv_store_type;
	
	/** 
	 * 1前端商品 2供应链货品
	 **/
	public $item_type;
	
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
	
	/** 
	 * 后端商品code
	 **/
	public $sc_item_code;
	
	/** 
	 * 后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * skuId
	 **/
	public $sku_id;
	
	/** 
	 * 仓库code
	 **/
	public $store_code;
	
	/** 
	 * subList
	 **/
	public $sub_list;	
}
?>