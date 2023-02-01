<?php

/**
 * 分销产品SKU
 * @author auto create
 */
class FenxiaoSku
{
	
	/** 
	 * 关联的前端商品skuid
	 **/
	public $auction_sku_id;
	
	/** 
	 * 代销采购价，单位：元
	 **/
	public $cost_price;
	
	/** 
	 * 经销采购价
	 **/
	public $dealer_cost_price;
	
	/** 
	 * SkuID
	 **/
	public $id;
	
	/** 
	 * 名称
	 **/
	public $name;
	
	/** 
	 * 商家编码
	 **/
	public $outer_id;
	
	/** 
	 * sku的销售属性组合字符串。格式:pid:vid;pid:vid,如:1627207:3232483;1630696:3284570,表示:机身颜色:军绿色;手机套餐:一电一充。
	 **/
	public $properties;
	
	/** 
	 * 库存
	 **/
	public $quantity;
	
	/** 
	 * 配额可用库存
	 **/
	public $quota_quantity;
	
	/** 
	 * 预扣库存
	 **/
	public $reserved_quantity;
	
	/** 
	 * 关联的后端商品id
	 **/
	public $scitem_id;
	
	/** 
	 * 市场价
	 **/
	public $standard_price;	
}
?>