<?php

/**
 * 关系对象列表
 * @author auto create
 */
class LocationRelationDto
{
	
	/** 
	 * 实体类型 2：仓库 6：门店
	 **/
	public $source_inv_store_type;
	
	/** 
	 * 实体code
	 **/
	public $source_store_code;
	
	/** 
	 * 状态  0 正常  -1 删除
	 **/
	public $status;
	
	/** 
	 * 实体类型 2：仓库 6：门店
	 **/
	public $target_inv_store_type;
	
	/** 
	 * 实体code
	 **/
	public $target_store_code;	
}
?>