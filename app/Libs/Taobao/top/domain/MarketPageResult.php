<?php

/**
 * 查询结果
 * @author auto create
 */
class MarketPageResult
{
	
	/** 
	 * 当前页数
	 **/
	public $current;
	
	/** 
	 * 错误码
	 **/
	public $error_code;
	
	/** 
	 * 查询结果信息
	 **/
	public $message;
	
	/** 
	 * 页数size
	 **/
	public $page_size;
	
	/** 
	 * 查询结果数据
	 **/
	public $sku_list;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 总数
	 **/
	public $total;
	
	/** 
	 * 总页数
	 **/
	public $total_page;	
}
?>