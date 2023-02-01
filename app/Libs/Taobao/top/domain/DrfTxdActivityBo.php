<?php

/**
 * 大润发活动数据
 * @author auto create
 */
class DrfTxdActivityBo
{
	
	/** 
	 * 换购机台
	 **/
	public $activity_channel;
	
	/** 
	 * 活动描述
	 **/
	public $activity_content;
	
	/** 
	 * 活动名称
	 **/
	public $activity_name;
	
	/** 
	 * ?营销中台活动类型
	 **/
	public $activity_type;
	
	/** 
	 * 封顶金额，单位：分
	 **/
	public $celling_amount;
	
	/** 
	 * 第N件活动规则
	 **/
	public $count_at;
	
	/** 
	 * 是否可贬值；0--否，1--是
	 **/
	public $discount_fee_model;
	
	/** 
	 * 单品特价类型；1-一口价；2-打折；3-减钱
	 **/
	public $discount_type;
	
	/** 
	 * 是否上不封顶；0--否，1--是
	 **/
	public $enable_multiple;
	
	/** 
	 * 活动结束时间
	 **/
	public $end_date;
	
	/** 
	 * 一口价【分】
	 **/
	public $fix_price;
	
	/** 
	 * 插入时间
	 **/
	public $insert_time;
	
	/** 
	 * 是否叠加逻辑分组与阶梯条件；0-否，1-是
	 **/
	public $is_check_all_cond;
	
	/** 
	 * 是否多阶梯可叠加，0--否，1--是
	 **/
	public $is_multi_mix;
	
	/** 
	 * 是否单商品累计，0--否，1--是
	 **/
	public $item_overlay;
	
	/** 
	 * 限购权重，实际限购=限购值/限购权重
	 **/
	public $limit_weight;
	
	/** 
	 * 商家人群编码
	 **/
	public $merchant_crowd_code;
	
	/** 
	 * 商品池数量
	 **/
	public $pool_num;
	
	/** 
	 * 商品池规则
	 **/
	public $pool_rules;
	
	/** 
	 * 中台活动Id（全局唯一）
	 **/
	public $promotion_id;
	
	/** 
	 * 商品池阶梯规则
	 **/
	public $stair_rules;
	
	/** 
	 * 活动开始时间
	 **/
	public $start_date;
	
	/** 
	 * 0--不可用；1--可用
	 **/
	public $status;
	
	/** 
	 * 门店Id
	 **/
	public $store_ids;
	
	/** 
	 * 1--pos,2--App;1,2--pos&App
	 **/
	public $terminals;
	
	/** 
	 * 活动每日限购
	 **/
	public $total_day_limit;
	
	/** 
	 * 活动总限购
	 **/
	public $total_limit;
	
	/** 
	 * 淘鲜达活动Id
	 **/
	public $txd_activity_id;
	
	/** 
	 * 更新时间
	 **/
	public $update_time;
	
	/** 
	 * 用户每日限购
	 **/
	public $user_day_limit;
	
	/** 
	 * 用户数量总限购
	 **/
	public $user_limit;	
}
?>