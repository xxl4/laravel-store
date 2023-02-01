<?php

/**
 * top_query_product_d_o
 * @author auto create
 */
class TopQueryProductDo
{
	
	/** 
	 * 渠道[21 零售plus]
	 **/
	public $channel;
	
	/** 
	 * 要查询的产品id 列表
	 **/
	public $ids;
	
	/** 
	 * 关联的前端宝贝id列表
	 **/
	public $item_ids;
	
	/** 
	 * 当前要查看的页数
	 **/
	public $page_num;
	
	/** 
	 * 分页大小
	 **/
	public $page_size;
	
	/** 
	 * 产品线id
	 **/
	public $product_line_id;
	
	/** 
	 * 产品商家编码
	 **/
	public $product_outer_id;
	
	/** 
	 * sku商家编码
	 **/
	public $sku_outer_id;	
}
?>