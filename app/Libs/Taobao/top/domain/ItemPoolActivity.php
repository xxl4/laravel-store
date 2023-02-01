<?php

/**
 * 创建活动请求入参
 * @author auto create
 */
class ItemPoolActivity
{
	
	/** 
	 * 活动标题
	 **/
	public $activity_name;
	
	/** 
	 * 活动优惠规则
	 **/
	public $activity_rule;
	
	/** 
	 * 活动描述
	 **/
	public $description;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_time;
	
	/** 
	 * 商品池是否排除特价
	 **/
	public $exclude_single;
	
	/** 
	 * 是否是类目优惠
	 **/
	public $is_category;
	
	/** 
	 * 是否是组合优惠
	 **/
	public $is_comb;
	
	/** 
	 * 通用限购信息，-1为不限制，默认为不限制
	 **/
	public $limit_info;
	
	/** 
	 * 逻辑分组规则
	 **/
	public $logic_group_rules;
	
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
	 * 周期优惠信息
	 **/
	public $period_config;
	
	/** 
	 * 活动优先级，值越大表示优先级越高，必须大于0
	 **/
	public $priority_value;
	
	/** 
	 * 商品池活动的梯度列表
	 **/
	public $rule_stairs;
	
	/** 
	 * 参加活动的渠道店ids
	 **/
	public $shop_ids;
	
	/** 
	 * 活动开始时间
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