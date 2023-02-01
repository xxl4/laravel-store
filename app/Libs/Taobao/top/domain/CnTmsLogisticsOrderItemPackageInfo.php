<?php

/**
 * 包裹列表，支持一单多包裹
 * @author auto create
 */
class CnTmsLogisticsOrderItemPackageInfo
{
	
	/** 
	 * 发货商品信息，最大50条记录
	 **/
	public $items;
	
	/** 
	 * 运单号
	 **/
	public $mail_no;
	
	/** 
	 * 包裹高度（厘米）
	 **/
	public $package_height;
	
	/** 
	 * 包裹长度（厘米）
	 **/
	public $package_length;
	
	/** 
	 * 包裹体积（立方厘米）
	 **/
	public $package_volume;
	
	/** 
	 * 包裹重量（克）
	 **/
	public $package_weight;
	
	/** 
	 * 包裹宽度（厘米）
	 **/
	public $package_width;	
}
?>