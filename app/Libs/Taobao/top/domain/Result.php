<?php

/**
 * 接口返回model
 * @author auto create
 */
class Result
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误code列表
	 **/
	public $error_code_list;
	
	/** 
	 * 错误列表
	 **/
	public $error_info_list;
	
	/** 
	 * 系统自动生成
	 **/
	public $error_message;
	
	/** 
	 * 是否失败
	 **/
	public $failure;
	
	/** 
	 * 系统信息
	 **/
	public $object_id;
	
	/** 
	 * 第一个错误
	 **/
	public $one_error_info;
	
	/** 
	 * 商家是否订购
	 **/
	public $subscription;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>