<?php

/**
 * 通用限购信息，-1为不限制，默认为不限制
 * @author auto create
 */
class LimitInfo
{
	
	/** 
	 * 活动每日总限购
	 **/
	public $daily_limit_cnt;
	
	/** 
	 * 活动每日总限购（非标小数）
	 **/
	public $daily_limit_cnt_double;
	
	/** 
	 * 活动期间总限购
	 **/
	public $total_limit_cnt;
	
	/** 
	 * 活动期间总限购（非标小数）
	 **/
	public $total_limit_cnt_double;
	
	/** 
	 * 每人每日限购
	 **/
	public $user_daily_limit_cnt;
	
	/** 
	 * 每人每日限购（非标小数）
	 **/
	public $user_daily_limit_cnt_double;
	
	/** 
	 * 每人活动期间总限购
	 **/
	public $user_limit_cnt;
	
	/** 
	 * 每人活动期间总限购（非标小数）
	 **/
	public $user_limit_cnt_double;	
}
?>