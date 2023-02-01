<?php

/**
 * 第N件优惠规则
 * @author auto create
 */
class CountAtDiscountRule
{
	
	/** 
	 * 第N件减钱【分】
	 **/
	public $count_at_decrease_money;
	
	/** 
	 * 第N件折扣率【600=6折】
	 **/
	public $count_at_discount_rate;
	
	/** 
	 * 第N件一口价【分】
	 **/
	public $count_at_fix_price;
	
	/** 
	 * 是否第N件减钱
	 **/
	public $is_count_at_decrease_money;
	
	/** 
	 * 是否第N件打折
	 **/
	public $is_count_at_discount_rate;
	
	/** 
	 * 是否第N建一口价
	 **/
	public $is_count_at_fix_price;	
}
?>