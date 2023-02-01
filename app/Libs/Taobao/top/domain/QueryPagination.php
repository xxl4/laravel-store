<?php

/**
 * 查询分页结构
 * @author auto create
 */
class QueryPagination
{
	
	/** 
	 * 当前页码数
	 **/
	public $page_index;
	
	/** 
	 * 分页记录个数，如果用户输入的记录数大于50，则一页显示50条记录
	 **/
	public $page_size;	
}
?>