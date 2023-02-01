<?php

/**
 * 参与者列表
 * @author auto create
 */
class LogicGroup
{
	
	/** 
	 * 逻辑分组类型  COMMON(1, "普通分组"), EXCHANGE(2, "换购分组"), BUY_GIFT(3, "买赠分组"), EXCHANGE_TJ_OVERLAY(4, "特价换购叠加分组"),
	 **/
	public $logic_group_type;
	
	/** 
	 * 参与者分组序号
	 **/
	public $number;
	
	/** 
	 * 五道口参与者名称
	 **/
	public $wdk_group_name;	
}
?>