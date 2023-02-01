<?php

/**
 * 返回结果
 * @author auto create
 */
class ResultSet
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
	 * 拒绝原因列表
	 **/
	public $results;
	
	/** 
	 * 拒绝原因总数
	 **/
	public $total_results;	
}
?>