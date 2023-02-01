<?php

/**
 * 商品规则信息
 * @author auto create
 */
class ItemPromotionRule
{
	
	/** 
	 * 规则生效结束时间
	 **/
	public $end_time;
	
	/** 
	 * 规则描叙信息
	 **/
	public $message;
	
	/** 
	 * 规则名称
	 **/
	public $name;
	
	/** 
	 * 规则生效开始时间
	 **/
	public $start_time;
	
	/** 
	 * 规则类型，常见有SKU锁定规则,下架锁定规则,库存减少锁定规则,库存禁止修改规则,一口价禁止修改规则
	 **/
	public $type;	
}
?>