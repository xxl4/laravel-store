<?php

/**
 * 不传则返回所有设置的区域价格
 * @author auto create
 */
class RegionalPriceDto
{
	
	/** 
	 * 市
	 **/
	public $city;
	
	/** 
	 * 区县，特殊可选
	 **/
	public $district;
	
	/** 
	 * 省
	 **/
	public $province;
	
	/** 
	 * 街道，特殊可选
	 **/
	public $street;	
}
?>