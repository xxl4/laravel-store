<?php

/**
 * result
 * @author auto create
 */
class PageResultDto
{
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 异常信息
	 **/
	public $error_message;
	
	/** 
	 * 是否有下一页
	 **/
	public $has_next;
	
	/** 
	 * 产品信息
	 **/
	public $product_list;
	
	/** 
	 * 是否查询成功
	 **/
	public $success;
	
	/** 
	 * 总数
	 **/
	public $total_count;	
}
?>