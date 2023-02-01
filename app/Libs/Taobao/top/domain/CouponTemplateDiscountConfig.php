<?php

/**
 * 优惠效果
 * @author auto create
 */
class CouponTemplateDiscountConfig
{
	
	/** 
	 * 是否减钱
	 **/
	public $decrease;
	
	/** 
	 * 减钱金额
	 **/
	public $decrease_money;
	
	/** 
	 * 是否打折
	 **/
	public $discount;
	
	/** 
	 * 打折额度
	 **/
	public $discount_rate;
	
	/** 
	 * 是否固定价格
	 **/
	public $fix_price;
	
	/** 
	 * 优惠后的固定价格
	 **/
	public $fix_price_amount;	
}
?>