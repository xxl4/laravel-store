<?php

/**
 * 该cp的所有标准模板
 * @author auto create
 */
class StandardTemplateDo
{
	
	/** 
	 * 如果没有 brandCode,则为 default
	 **/
	public $brand_code;
	
	/** 
	 * 模板id
	 **/
	public $standard_template_id;
	
	/** 
	 * 模板名称
	 **/
	public $standard_template_name;
	
	/** 
	 * 模板url
	 **/
	public $standard_template_url;
	
	/** 
	 * 1 快递标准面单 ,2 快递三联面单, 3 快递便携式三联单, 4 快运标准面单, 5 快运三联面单, 6 快递一联单
	 **/
	public $standard_waybill_type;	
}
?>