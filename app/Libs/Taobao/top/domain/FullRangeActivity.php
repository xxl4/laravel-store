<?php

/**
 * 创建活动请求入参
 * @author auto create
 */
class FullRangeActivity
{
	
	/** 
	 * 活动名称,不超过10个英文字符
	 **/
	public $activity_name;
	
	/** 
	 * 活动详情描述,不超过30个英文字符
	 **/
	public $description;
	
	/** 
	 * 活动结束时间，时间戳
	 **/
	public $end_time;
	
	/** 
	 * 通用限购信息，-1为不限制，默认为不限制
	 **/
	public $limit_info;
	
	/** 
	 * 商家人群编码
	 **/
	public $merchant_crowd_code;
	
	/** 
	 * 商家活动id
	 **/
	public $out_act_id;
	
	/** 
	 * 活动的梯度列表
	 **/
	public $rule_stairs;
	
	/** 
	 * 参加活动的渠道店ids
	 **/
	public $shop_ids;
	
	/** 
	 * 活动开始时间，时间戳
	 **/
	public $start_time;
	
	/** 
	 * 优惠适用场景[APP|POS|POS+APP分别对应的值为1|2|1,2]
	 **/
	public $terminals;
	
	/** 
	 * 淘鲜达人群编码
	 **/
	public $txd_crowd_code;	
}
?>