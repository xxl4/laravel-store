<?php

/**
 * 折扣详情信息
 * @author auto create
 */
class DiscountDetail
{
	
	/** 
	 * 创建时间
	 **/
	public $created;
	
	/** 
	 * 折扣详情ID
	 **/
	public $detail_id;
	
	/** 
	 * 优惠方式:PERCENT（按折扣优惠）、PRICE（按减价优惠）
	 **/
	public $discount_type;
	
	/** 
	 * 优惠比率或者优惠价格 10%或10
	 **/
	public $discount_value;
	
	/** 
	 * 修改时间
	 **/
	public $modified;
	
	/** 
	 * 会员等级的id或者分销商id
	 **/
	public $target_id;
	
	/** 
	 * 等级名称或者分销商名称
	 **/
	public $target_name;
	
	/** 
	 * 折扣类型:GRADE（按会员等级优惠）、DISTRIBUTOR（按分销商优惠）
	 **/
	public $target_type;	
}
?>