<?php

/**
 * 返回结果
 * @author auto create
 */
class PromotionPriceResult
{
	
	/** 
	 * 错误编码
	 **/
	public $err_code;
	
	/** 
	 * 错误信息
	 **/
	public $err_msg;
	
	/** 
	 * 促销信息记录
	 **/
	public $item_list;
	
	/** 
	 * 总页数
	 **/
	public $page_count;
	
	/** 
	 * 页码
	 **/
	public $page_index;
	
	/** 
	 * 单页数据大小
	 **/
	public $page_size;
	
	/** 
	 * 是否成功
	 **/
	public $success;
	
	/** 
	 * 总数量
	 **/
	public $total;	
}
?>