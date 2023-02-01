<?php

/**
 * 产品图片
 * @author auto create
 */
class ProductImageList
{
	
	/** 
	 * 图片id
	 **/
	public $image_id;
	
	/** 
	 * 图片顺序
	 **/
	public $image_position;
	
	/** 
	 * 图片对应的url
	 **/
	public $image_url;
	
	/** 
	 * 当图片类型为属性图片时，表示图片对应的属性pv对。
	 **/
	public $properties;
	
	/** 
	 * 图片类型（PRODUCT：产品图片  EXTPRODUCT：产品辅图  PROPERTIES：产品属性图片 ）
	 **/
	public $type;	
}
?>