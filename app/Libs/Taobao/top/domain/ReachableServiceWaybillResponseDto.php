<?php

/**
 * 结果列表
 * @author auto create
 */
class ReachableServiceWaybillResponseDto
{
	
	/** 
	 * 单个结果是否异常
	 **/
	public $error_info;
	
	/** 
	 * 可达信息
	 **/
	public $module;
	
	/** 
	 * 与入参地址列表中单项objectId对应
	 **/
	public $object_id;
	
	/** 
	 * 单个结果是否成功
	 **/
	public $success;	
}
?>