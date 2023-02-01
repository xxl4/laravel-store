<?php

/**
 * 逻辑分组规则
 * @author auto create
 */
class OpenLogicGroupRule
{
	
	/** 
	 * 逻辑分组上满N元条件，当阶梯的is_amount=true时生效，逻辑分组条件的优先级大于阶梯条件的优先级
	 **/
	public $amount;
	
	/** 
	 * 换购N件
	 **/
	public $can_extra_item_num;
	
	/** 
	 * 逻辑分组上满N件条件，当阶梯的is_count=true时生效，逻辑分组条件的优先级大于阶梯条件的优先级
	 **/
	public $count;
	
	/** 
	 * 整体优惠
	 **/
	public $cover_all_discount_rule;
	
	/** 
	 * 换购分组名称
	 **/
	public $exchange_group_name;
	
	/** 
	 * 换购分组排序，用于在app上展示的顺序
	 **/
	public $exchange_group_order;
	
	/** 
	 * 是否为优惠作用分组
	 **/
	public $is_effective_group;
	
	/** 
	 * 1-普通分组，2-换购分组，3-买赠分组
	 **/
	public $logic_group_type;
	
	/** 
	 * 商家逻辑分组Id（单个活动不能重复）
	 **/
	public $number;
	
	/** 
	 * 分摊比例
	 **/
	public $ratio;	
}
?>