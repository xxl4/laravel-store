<?php

/**
 * 查询返回的活动信息
 * @author auto create
 */
class ItemBuyGiftActivity
{
	
	/** 
	 * 五道口活动id
	 **/
	public $activity_id;
	
	/** 
	 * 买赠活动名称，不超过10个英文字符
	 **/
	public $activity_name;
	
	/** 
	 * 买赠活动详情描述,不超过30个英文字符
	 **/
	public $description;
	
	/** 
	 * 结束时间，时间戳
	 **/
	public $end_time;
	
	/** 
	 * 会员维度活动参与人群限制：-1:不限制 1:会员专享 2:非会员专享
	 **/
	public $member_limit;
	
	/** 
	 * 商家人群编码
	 **/
	public $merchant_crowd_code;
	
	/** 
	 * 商家活动id
	 **/
	public $out_act_id;
	
	/** 
	 * 参加活动的渠道店ids
	 **/
	public $shop_ids;
	
	/** 
	 * 开始时间，时间戳
	 **/
	public $start_time;
	
	/** 
	 * 优惠适用场景:APP|POS|POS+APP 分别对应的值为1|2|1,2
	 **/
	public $terminals;
	
	/** 
	 * 淘鲜达人群编码
	 **/
	public $txd_crowd_code;	
}
?>