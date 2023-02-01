<?php

/**
 * 返回结果
 * @author auto create
 */
class RefundMessageResult
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 异常信息
	 **/
	public $exception;
	
	/** 
	 * 是否有下一页
	 **/
	public $has_next;
	
	/** 
	 * 当前页面的留言条数
	 **/
	public $page_results;
	
	/** 
	 * 留言记录
	 **/
	public $results;
	
	/** 
	 * 所有留言记录数
	 **/
	public $total_results;	
}
?>