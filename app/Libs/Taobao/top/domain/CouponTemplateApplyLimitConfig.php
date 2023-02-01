<?php

/**
 * 领取限制
 * @author auto create
 */
class CouponTemplateApplyLimitConfig
{
	
	/** 
	 * 优惠券最后能领取时间(超过这个时间，优惠券不能领取)
	 **/
	public $apply_end_time;
	
	/** 
	 * 优惠券最早能领取时间(在这时间之前，优惠券不能领取)
	 **/
	public $apply_start_time;
	
	/** 
	 * 优惠券每日限领数（-1表示不限制）
	 **/
	public $coupon_daily_lmt;
	
	/** 
	 * 优惠券总数（-1表示不限制）
	 **/
	public $coupon_total_lmt;
	
	/** 
	 * 每人每日限领（-1表示不限制）
	 **/
	public $personal_daily_lmt;
	
	/** 
	 * 个人总领取限制数量（-1表示不限制）
	 **/
	public $personal_lmt;	
}
?>