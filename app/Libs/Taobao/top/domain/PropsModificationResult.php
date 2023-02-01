<?php

/**
 * 返回结果
 * @author auto create
 */
class PropsModificationResult
{
	
	/** 
	 * 变更日期
	 **/
	public $ds;
	
	/** 
	 * 是否多选，0-否，1-是
	 **/
	public $multi_select;
	
	/** 
	 * 类目属性Id
	 **/
	public $property_id;
	
	/** 
	 * 属性名称
	 **/
	public $property_name;
	
	/** 
	 * 是否必填，0-否，1-是
	 **/
	public $required;
	
	/** 
	 * 变更类型: 删除(1), 修改(2), 新增(3)
	 **/
	public $type;	
}
?>