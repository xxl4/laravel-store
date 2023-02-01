<?php

/**
 * 指定件数优惠规则
 * @author auto create
 */
class CapCountDiscountRule
{
	
	/** 
	 * 指定件数整体减钱【分】
	 **/
	public $cap_count_decrease_money;
	
	/** 
	 * 指定件数整体打几折【600=6折】
	 **/
	public $cap_count_discount_rate;
	
	/** 
	 * 指定件数每件一口价【分】
	 **/
	public $cap_count_each_fix_price;
	
	/** 
	 * 指定件数整体一口价【分】
	 **/
	public $cap_count_fix_price;
	
	/** 
	 * 是否指定件数整体减钱
	 **/
	public $is_cap_count_decrease_money;
	
	/** 
	 * 是否指定件数整体打折
	 **/
	public $is_cap_count_discount_rate;
	
	/** 
	 * 是否指定件数每件一口价
	 **/
	public $is_cap_count_each_fix_price;
	
	/** 
	 * 是否指定件数整体一口价
	 **/
	public $is_cap_count_fix_price;	
}
?>