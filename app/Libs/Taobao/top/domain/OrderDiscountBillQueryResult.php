<?php

/**
 * 结果
 * @author auto create
 */
class OrderDiscountBillQueryResult
{
	
	/** 
	 * 账单列表
	 **/
	public $discount_bills;
	
	/** 
	 * 下一页查询的入参，当为-1时表示没有更多数据
	 **/
	public $next_id;
	
	/** 
	 * 结果码
	 **/
	public $return_code;
	
	/** 
	 * 结果文案
	 **/
	public $return_msg;
	
	/** 
	 * 业务请求成功与否
	 **/
	public $success;
	
	/** 
	 * 总数量，只在查询第一页时返回
	 **/
	public $total_number;	
}
?>