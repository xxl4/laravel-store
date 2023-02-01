<?php

/**
 * 产品对象记录集
 * @author auto create
 */
class TopProductDO
{
	
	/** 
	 * 关联的前台宝贝id
	 **/
	public $auction_id;
	
	/** 
	 * 所在地：市
	 **/
	public $city;
	
	/** 
	 * 代销采购价格，单位：元。
	 **/
	public $cost_price_yuan;
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 产品描述路径，通过http请求获取
	 **/
	public $desc_path;
	
	/** 
	 * 是否有发票，可选值：false（否）、true（是）
	 **/
	public $have_invoice;
	
	/** 
	 * 是否有保修，可选值：false（否）、true（是）
	 **/
	public $have_quarantee;
	
	/** 
	 * 下载人数
	 **/
	public $items_count;
	
	/** 
	 * 更新时间
	 **/
	public $modified;
	
	/** 
	 * 产品名称
	 **/
	public $name;
	
	/** 
	 * 累计采购次数
	 **/
	public $orders_count;
	
	/** 
	 * 商家编码
	 **/
	public $outer_id;
	
	/** 
	 * 产品图片路径列表，用“,”分隔
	 **/
	public $pictures;
	
	/** 
	 * 产品ID
	 **/
	public $pid;
	
	/** 
	 * ems费用，单位：元
	 **/
	public $postage_ems;
	
	/** 
	 * 快递费用，单位：元
	 **/
	public $postage_fast;
	
	/** 
	 * 运费模板ID
	 **/
	public $postage_id;
	
	/** 
	 * 平邮费用，单位：元
	 **/
	public $postage_ordinary;
	
	/** 
	 * 运费类型：1（供应商承担运费）、2（分销商承担运费）可选值：seller（供应商承担运费）、buyer（分销商承担运费）
	 **/
	public $postage_type;
	
	/** 
	 * 产品所属产品线id
	 **/
	public $product_line_id;
	
	/** 
	 * 所在地：省
	 **/
	public $prov;
	
	/** 
	 * 产品库存
	 **/
	public $quantity;
	
	/** 
	 * 最高零售价，单位：元。
	 **/
	public $retail_price_high;
	
	/** 
	 * 最低零售价，单位：元。
	 **/
	public $retail_price_low;
	
	/** 
	 * scItemId
	 **/
	public $sc_item_id;
	
	/** 
	 * 分销产品SKU列表
	 **/
	public $skus;
	
	/** 
	 * spuId
	 **/
	public $spu_id;
	
	/** 
	 * 市场价：单位元
	 **/
	public $standard_price;
	
	/** 
	 * 发布状态： 1 上架，2 下架，3 删除
	 **/
	public $status;	
}
?>