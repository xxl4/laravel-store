<?php

/**
 * 后端商品映射关系对象
 * @author auto create
 */
class ScItemMap
{
	
	/** 
	 * map_type=1时，item_id为IC商品id

map_type=7时，item_id为分销商品id
	 **/
	public $item_id;
	
	/** 
	 * 1:前台和后台关系
7:分销和后台关系
	 **/
	public $map_type;
	
	/** 
	 * 后端商品ID
	 **/
	public $rel_item_id;
	
	/** 
	 * 后端商品所有者商家编码
	 **/
	public $rel_outer_code;
	
	/** 
	 * 后端商品所有者id
	 **/
	public $rel_user_id;
	
	/** 
	 * 后端商品所有者名称
	 **/
	public $rel_user_nick;
	
	/** 
	 * 当宝贝下没SKU时该字段为空
	 **/
	public $sku_id;
	
	/** 
	 * Ic商家id(分销商id)
	 **/
	public $user_id;
	
	/** 
	 * Ic商家nick(分销商nick)
	 **/
	public $user_nick;	
}
?>