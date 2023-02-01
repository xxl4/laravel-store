<?php

/**
 * 请求
 * @author auto create
 */
class CouponTemplateItemQueryRequest
{
	
	/** 
	 * 模板表主键id
	 **/
	public $id;
	
	/** 
	 * 分组序号
	 **/
	public $logic_group_number;
	
	/** 
	 * 分页信息
	 **/
	public $page_info;
	
	/** 
	 * ump模板ID
	 **/
	public $source_id;
	
	/** 
	 * 用户信息
	 **/
	public $user_info;
	
	/** 
	 * 五道口分组id
	 **/
	public $wdk_group_id;	
}
?>