<?php

/**
 * 采购申请/经销采购单中的商品明细
 * @author auto create
 */
class DealerOrderDetail
{
	
	/** 
	 * 经销采购单明细id
	 **/
	public $dealer_detail_id;
	
	/** 
	 * 经销采购单编号
	 **/
	public $dealer_order_id;
	
	/** 
	 * 属性列表，key-value形式。
	 **/
	public $features;
	
	/** 
	 * 最终价格(精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $final_price;
	
	/** 
	 * 该条明细是否已删除。true：已删除；false：未删除。
	 **/
	public $is_deleted;
	
	/** 
	 * 原始价格(精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $original_price;
	
	/** 
	 * 金额小计(采购数量乘以最终价格。精确到2位小数;单位:元。如:200.07，表示:200元7分 )
	 **/
	public $price_count;
	
	/** 
	 * 产品id
	 **/
	public $product_id;
	
	/** 
	 * 产品标题
	 **/
	public $product_title;
	
	/** 
	 * 采购数量
	 **/
	public $quantity;
	
	/** 
	 * sku id
	 **/
	public $sku_id;
	
	/** 
	 * 商家编码，是sku则为sku的商家编码，否则是产品的商家编码
	 **/
	public $sku_number;
	
	/** 
	 * 产品规格
	 **/
	public $sku_spec;
	
	/** 
	 * 产品快照url
	 **/
	public $snapshot_url;	
}
?>