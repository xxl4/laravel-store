<?php

/**
 * 仓库信息
 * @author auto create
 */
class WareHouseDto
{
	
	/** 
	 * 详细地址描述
	 **/
	public $address;
	
	/** 
	 * 仓库地址信息,格式 :省~市~区县
	 **/
	public $address_area_name;
	
	/** 
	 * 别名
	 **/
	public $alias_name;
	
	/** 
	 * 联系人
	 **/
	public $contact;
	
	/** 
	 * 操作类型，新增:ADD;修改:UPDATE
	 **/
	public $operate_type;
	
	/** 
	 * 电话号码
	 **/
	public $phone;
	
	/** 
	 * 邮编
	 **/
	public $post_code;
	
	/** 
	 * 仓库编码，仅允许使用字母、数字、下划线，并且在6-30个字符内
	 **/
	public $store_code;
	
	/** 
	 * 仓库名称
	 **/
	public $store_name;	
}
?>