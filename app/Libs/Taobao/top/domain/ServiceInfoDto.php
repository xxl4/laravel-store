<?php

/**
 * 可用的服务信息列表
 * @author auto create
 */
class ServiceInfoDto
{
	
	/** 
	 * 该服务是否为必选服务
	 **/
	public $required;
	
	/** 
	 * 服务属性定义
	 **/
	public $service_attributes;
	
	/** 
	 * 服务编码
	 **/
	public $service_code;
	
	/** 
	 * 服务的官方描述，可以用作前端展示
	 **/
	public $service_desc;
	
	/** 
	 * 服务名称
	 **/
	public $service_name;	
}
?>