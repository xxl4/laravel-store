<?php

/**
 * 产品信息
 * @author auto create
 */
class ProductTopDto
{
	
	/** 
	 * 类目Id
	 **/
	public $category_id;
	
	/** 
	 * 产品描述地址
	 **/
	public $desc_path;
	
	/** 
	 * 产品Id
	 **/
	public $product_id;
	
	/** 
	 * 产品线ID
	 **/
	public $product_line_id;
	
	/** 
	 * 产品编码
	 **/
	public $product_number;
	
	/** 
	 * 没有sku的情况下，产品对应的后端商品id
	 **/
	public $sc_item_id;
	
	/** 
	 * sku列表
	 **/
	public $sku_list;
	
	/** 
	 * spuId
	 **/
	public $spu_id;
	
	/** 
	 * 基准价
	 **/
	public $standard_price;
	
	/** 
	 * 供应商Id
	 **/
	public $supplier_id;
	
	/** 
	 * 标题
	 **/
	public $title;	
}
?>