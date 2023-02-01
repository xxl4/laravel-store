<?php

/**
 * 实例有效时间配置
 * @author auto create
 */
class CouponTemplateTimeLimitConfig
{
	
	/** 
	 * 优惠券结束时间
	 **/
	public $end_valid_time;
	
	/** 
	 * 优惠券开始时间
	 **/
	public $start_valid_time;
	
	/** 
	 * 优惠券有效时间类型 RANGE(1,"开始/结束时间"), DURATION(2,"固定时长"),
	 **/
	public $valid_time_type;
	
	/** 
	 * 优惠券有效时长，单位为秒（固定有效时长的优惠券）
	 **/
	public $validity_period;	
}
?>