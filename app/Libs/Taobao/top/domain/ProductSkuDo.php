<?php

/**
 * 分销产品SKU列表
 * @author auto create
 */
class ProductSkuDo
{
	
	/** 
	 * 关联的前端宝贝skuid
	 **/
	public $auction_sku_id;
	
	/** 
	 * 代销采购价:单位分
	 **/
	public $cost_price_fen;
	
	/** 
	 * 商家编码
	 **/
	public $outer_id;
	
	/** 
	 * 经销采购价:单位分
	 **/
	public $price_cost_dealer_fen;
	
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
	 * skuId
	 **/
	public $sku_id;
	
	/** 
	 * 市场价单位分
	 **/
	public $standard_price_fen;	
}
?>