<?php

/**
 * 活动的梯度列表
 * @author auto create
 */
class Rulestairs
{
	
	/** 
	 * 满多少元[单位为分，传入700，代表满7元]，amountAt为true时，必须设置
	 **/
	public $amount;
	
	/** 
	 * 是否使用满元条件，不能与满件、N件Y折同时使用。此选项为true时，countAt和countBegin必须为false
	 **/
	public $amount_at;
	
	/** 
	 * 可换购的数量
	 **/
	public $can_extra_item_num;	
}
?>