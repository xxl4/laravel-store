<?php

/**
 * 产品对象记录集。返回 FenxiaoProduct 包含的字段信息。
 * @author auto create
 */
class FenxiaoProduct
{
	
	/** 
	 * 类目id
	 **/
	public $category_id;
	
	/** 
	 * 所在地：市
	 **/
	public $city;
	
	/** 
	 * 采购价格，单位：元。
	 **/
	public $cost_price;
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 经销采购价
	 **/
	public $dealer_cost_price;
	
	/** 
	 * 产品描述路径，通过http请求获取
	 **/
	public $desc_path;
	
	/** 
	 * 产品描述的内容
	 **/
	public $description;
	
	/** 
	 * 折扣ID（新增参数）
	 **/
	public $discount_id;
	
	/** 
	 * 是否有发票，可选值：false（否）、true（是）
	 **/
	public $have_invoice;
	
	/** 
	 * 是否有保修，可选值：false（否）、true（是）
	 **/
	public $have_quarantee;
	
	/** 
	 * 产品图片
	 **/
	public $images;
	
	/** 
	 * 自定义属性，格式为pid:value;pid:value
	 **/
	public $input_properties;
	
	/** 
	 * 查询产品列表时，查询入参增加is_authz:yes|no yes:需要授权 no:不需要授权
	 **/
	public $is_authz;
	
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
	 * 产品分销商信息
	 **/
	public $pdus;
	
	/** 
	 * 产品图片路径
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
	 * 运费类型，可选值：seller（供应商承担运费）、buyer（分销商承担运费）
	 **/
	public $postage_type;
	
	/** 
	 * 产品线ID
	 **/
	public $productcat_id;
	
	/** 
	 * 产品属性，格式为pid:vid;pid:vid
	 **/
	public $properties;
	
	/** 
	 * 属性别名，格式为pid:vid:alias;pid:vid:alias
	 **/
	public $property_alias;
	
	/** 
	 * 所在地：省
	 **/
	public $prov;
	
	/** 
	 * 产品库存
	 **/
	public $quantity;
	
	/** 
	 * 根据商品ID查询时，返回这个产品对应的商品ID，只对分销商查询接口有效
	 **/
	public $query_item_id;
	
	/** 
	 * 最高零售价，单位：分。
	 **/
	public $retail_price_high;
	
	/** 
	 * 最低零售价，单位：分。
	 **/
	public $retail_price_low;
	
	/** 
	 * 关联的后端商品id
	 **/
	public $scitem_id;
	
	/** 
	 * sku列表
	 **/
	public $skus;
	
	/** 
	 * 产品spu id
	 **/
	public $spu_id;
	
	/** 
	 * 采购基准价，单位：元。
	 **/
	public $standard_price;
	
	/** 
	 * 零售基准价，单位：元
	 **/
	public $standard_retail_price;
	
	/** 
	 * 发布状态，可选值：up（上架）、down（下架）
	 **/
	public $status;
	
	/** 
	 * 分销方式：AGENT（只做代销，默认值）、DEALER（只做经销）、ALL（代销和经销都做）
	 **/
	public $trade_type;
	
	/** 
	 * 铺货时间
	 **/
	public $upshelf_time;	
}
?>