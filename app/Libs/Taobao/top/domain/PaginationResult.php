<?php

/**
 * result
 * @author auto create
 */
class PaginationResult
{
	
	/** 
	 * 仓库信息数组
	 **/
	public $data;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 错误信息
	 **/
	public $error_msg;
	
	/** 
	 * 页码
	 **/
	public $page_no;
	
	/** 
	 * 页大小
	 **/
	public $page_size;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 总条数
	 **/
	public $total_count;	
}
?>