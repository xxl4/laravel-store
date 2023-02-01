<?php

/**
 * 特价活动信息
 * @author auto create
 */
class ItemDiscountActivity
{
	
	/** 
	 * 渠道key
	 **/
	public $activity_channel;
	
	/** 
	 * 五道口活动id
	 **/
	public $activity_id;
	
	/** 
	 * 活动名称,不超过10个英文字符
	 **/
	public $activity_name;
	
	/** 
	 * coverBefore
	 **/
	public $cover_before;
	
	/** 
	 * 活动详情描述,不超过30个英文字符
	 **/
	public $description;
	
	/** 
	 * 商品特价优惠方式[itemDecreaseMoney:商品特价减钱;itemFixPrice:商品特价一口价;itemDiscount:商品特价打折]
	 **/
	public $discount_type;
	
	/** 
	 * 活动结束时间,时间戳
	 **/
	public $end_time;
	
	/** 
	 * 会员维度活动参与人群限制[-1:不限制;1:会员专享;2:非会员专享]
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
	 * 周期优惠信息
	 **/
	public $period_config;
	
	/** 
	 * 活动优先级，值越大表示优先级越高，必须大于0
	 **/
	public $priority_value;
	
	/** 
	 * 参加活动的渠道店ids
	 **/
	public $shop_ids;
	
	/** 
	 * 活动开始时间,时间戳
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