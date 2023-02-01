<?php

/**
 * 活动优惠规则
 * @author auto create
 */
class ActivityRule
{
	
	/** 
	 * 封顶金额
	 **/
	public $ceiling_amount;
	
	/** 
	 * 1-可贬值，0-不可贬值
	 **/
	public $discount_fee_mode;
	
	/** 
	 * 是否上不封顶
	 **/
	public $enable_multiple;
	
	/** 
	 * 是否单商品计数【NY使用】【废弃】
	 **/
	public $is_alone;
	
	/** 
	 * 是否叠加计算逻辑分组与阶梯满元【件】条件
	 **/
	public $is_check_all_cond;
	
	/** 
	 * 多阶梯是否可叠加
	 **/
	public $is_multi_mix;
	
	/** 
	 * 单商品是否累计
	 **/
	public $item_overlay;	
}
?>