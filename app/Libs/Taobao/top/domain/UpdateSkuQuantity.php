<?php

/**
 * 更新SKU库存时候的SKU库存对象；如果没有SKU或者不更新SKU库存，可以不填;查找SKU目前支持ID，属性串和商家编码三种模式，建议选用一种最合适的，切勿滥用，一次调用中如果混合使用，更新结果不可预期！
 * @author auto create
 */
class UpdateSkuQuantity
{
	
	/** 
	 * Sku的商家外部id，用于指定被修改库存的SKU
	 **/
	public $outer_id;
	
	/** 
	 * Sku属性串。格式:pid:vid;pid:vid,如: 1627207:3232483;1630696:3284570,表示机身颜色:军绿色;手机套餐:一电一充，用于指定被修改库存的SKU
	 **/
	public $properties;
	
	/** 
	 * SKU属于这个sku的商品的库存；增量编辑方式支持正数、负数
	 **/
	public $quantity;
	
	/** 
	 * SkuID，用于指定被修改库存的
	 **/
	public $sku_id;	
}
?>