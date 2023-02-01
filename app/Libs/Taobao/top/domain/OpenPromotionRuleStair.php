<?php

/**
 * 商品池活动的梯度列表
 * @author auto create
 */
class OpenPromotionRuleStair
{
	
	/** 
	 * 满x元【单位为分】
	 **/
	public $amount;
	
	/** 
	 * 指定件数优惠规则
	 **/
	public $cap_count_discount_rule;
	
	/** 
	 * 满x件
	 **/
	public $count;
	
	/** 
	 * 第N件优惠规则
	 **/
	public $count_at_discount_rule;
	
	/** 
	 * 阶梯整体优惠规则
	 **/
	public $cover_all_discount_rule;
	
	/** 
	 * 是否满元
	 **/
	public $is_amount;
	
	/** 
	 * 是否满件
	 **/
	public $is_count;
	
	/** 
	 * 是否叠加逻辑分组的条件
	 **/
	public $is_overlay_logic_group_condition;
	
	/** 
	 * 分组表达式【暂时不使用】
	 **/
	public $login_group_express;
	
	/** 
	 * 阶梯序号，代表商家的阶梯ID，同时代表阶梯优先级的顺序
	 **/
	public $number;
	
	/** 
	 * 单独定价优惠规则
	 **/
	public $separate_pricing_discount_rule;	
}
?>