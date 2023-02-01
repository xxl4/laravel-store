<?php

/**
 * 查询准则
 * @author auto create
 */
class Criteria
{
	
	/** 
	 * 库存类型(ZP=正品;CC=残次;JS=机损;XS=箱损;ZT=在途库存;默认为查所有类型的库存)
	 **/
	public $inventory_type;
	
	/** 
	 * 商品编码
	 **/
	public $item_code;
	
	/** 
	 * 仓储系统商品ID
	 **/
	public $item_id;
	
	/** 
	 * 货主编码
	 **/
	public $owner_code;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 仓库编码
	 **/
	public $warehouse_code;	
}
?>