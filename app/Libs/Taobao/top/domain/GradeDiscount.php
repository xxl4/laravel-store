<?php

/**
 * 等级折扣数据结构
 * @author auto create
 */
class GradeDiscount
{
	
	/** 
	 * 等级ID或分销商ID
	 **/
	public $discount_id;
	
	/** 
	 * 折扣类型：1-等级、2-分销商折扣
	 **/
	public $discount_type;
	
	/** 
	 * 采购价格
	 **/
	public $price;
	
	/** 
	 * skuId
	 **/
	public $sku_id;
	
	/** 
	 * 模式：1-代销、2-经销
	 **/
	public $trade_type;	
}
?>