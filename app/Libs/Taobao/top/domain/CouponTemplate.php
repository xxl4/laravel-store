<?php

/**
 * 券模版
 * @author auto create
 */
class CouponTemplate
{
	
	/** 
	 * 领取限制
	 **/
	public $apply_limit_config;
	
	/** 
	 * 基础信息
	 **/
	public $common_config;
	
	/** 
	 * 兼容历史逻辑配置
	 **/
	public $compatible_config;
	
	/** 
	 * 生效条件
	 **/
	public $condition_config;
	
	/** 
	 * 优惠效果
	 **/
	public $discount_config;
	
	/** 
	 * 模板表主键 创建时为空
	 **/
	public $id;
	
	/** 
	 * 出资人配置
	 **/
	public $investment_config;
	
	/** 
	 * 其他配置--拓展信息
	 **/
	public $option_config;
	
	/** 
	 * 参与者
	 **/
	public $participate_config;
	
	/** 
	 * ump模板ID
	 **/
	public $source_id;
	
	/** 
	 * 实例有效时间配置
	 **/
	public $time_limit_config;
	
	/** 
	 * 幂等id
	 **/
	public $unique_id;
	
	/** 
	 * 优惠券模版uuid
	 **/
	public $uuid;	
}
?>