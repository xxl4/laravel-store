<?php

/**
 * 加工商品列表
 * @author auto create
 */
class ProductItem
{
	
	/** 
	 * 批次编码
	 **/
	public $batch_code;
	
	/** 
	 * 商品过期日期(YYYY-MM-DD)
	 **/
	public $expire_date;
	
	/** 
	 * 库存类型(ZP=正品;CC=残次;JS=机损;XS=箱损;默认为ZP)
	 **/
	public $inventory_type;
	
	/** 
	 * erp系统商品编码
	 **/
	public $item_code;
	
	/** 
	 * 仓储系统商品ID
	 **/
	public $item_id;
	
	/** 
	 * ownerCode
	 **/
	public $owner_code;
	
	/** 
	 * 生产批号
	 **/
	public $produce_code;
	
	/** 
	 * 商品生产日期(YYYY-MM-DD)
	 **/
	public $product_date;
	
	/** 
	 * 数量
	 **/
	public $quantity;
	
	/** 
	 * ratioQty
	 **/
	public $ratio_qty;
	
	/** 
	 * 备注
	 **/
	public $remark;	
}
?>