<?php

/**
 * 包裹信息
 * @author auto create
 */
class PackageInfoDto
{
	
	/** 
	 * 物品价值，单位元
	 **/
	public $good_value;
	
	/** 
	 * 大件快运中的货品描述，比如服装，家具。 顺丰取号必须传此参数
	 **/
	public $goods_description;
	
	/** 
	 * 包裹高，单位厘米
	 **/
	public $height;
	
	/** 
	 * 包裹id，用于拆合单场景（只能传入数字、字母和下划线；批量请求时值不得重复，大小写敏感，即123A,123a 不可当做不同ID，否则存在一定可能取号失败）
	 **/
	public $id;
	
	/** 
	 * 商品信息,数量限制为100
	 **/
	public $items;
	
	/** 
	 * 包裹长，单位厘米
	 **/
	public $length;
	
	/** 
	 * 大件快运中的包装方式描述
	 **/
	public $packaging_description;
	
	/** 
	 * 子母件模式中的总包裹数/总件数，用于打印当前包裹处于总件数的位置比如5-2，可以表示总包裹数为5，当前为第2个包裹，只有快运公司需要传入，其他的可以不用传入
	 **/
	public $total_packages_count;
	
	/** 
	 * 体积, 单位 ml
	 **/
	public $volume;
	
	/** 
	 * 重量,单位 g
	 **/
	public $weight;
	
	/** 
	 * 包裹宽，单位厘米
	 **/
	public $width;	
}
?>