<?php

/**
 * 报名活动成功的商品详情
 * @author auto create
 */
class ItemDiscountSku
{
	
	/** 
	 * 淘宝item和shop的对应关系， k-itemId, v-shopId
	 **/
	public $item_shop_relation;
	
	/** 
	 * 通用限购信息，-1为不限制，默认为不限制
	 **/
	public $limit_info;
	
	/** 
	 * 商品的skuCode
	 **/
	public $sku_code;
	
	/** 
	 * 商品名称
	 **/
	public $sku_name;
	
	/** 
	 * <优惠明细,分为单位>优惠类型为[减价],则代表直降金额[如700,表示商品直降7元];优惠券类型为[一口价],则代表一口价[如700,表示商品一口价为7元];优惠券类型为[打折],则代表折扣[如700,表示打7折]
	 **/
	public $value;	
}
?>