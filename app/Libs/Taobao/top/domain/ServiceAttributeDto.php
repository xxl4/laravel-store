<?php

/**
 * 服务属性定义
 * @author auto create
 */
class ServiceAttributeDto
{
	
	/** 
	 * 属性的值，用户实际传入的值
	 **/
	public $attribute_code;
	
	/** 
	 * 属性的名称，可以用于前端的展示
	 **/
	public $attribute_name;
	
	/** 
	 * 属性的类型，可能值有 [number, string, enum]
	 **/
	public $attribute_type;
	
	/** 
	 * 枚举类型的枚举值，key为用户选中的需要传值的数据，value为对应的描述，可以作为前端的展示
	 **/
	public $type_desc;	
}
?>