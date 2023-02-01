<?php

/**
 * 淘鲜达活动商品信息
 * @author auto create
 */
class DrfTxdActivitySkuBo
{
	
	/** 
	 * 大润发活动类型
	 **/
	public $activity_type;
	
	/** 
	 * 商品对应的活动Id，仅当同一次任务有相关活动更新的时候在传入
	 **/
	public $activity_version_id;
	
	/** 
	 * 买赠门槛
	 **/
	public $buy_num;
	
	/** 
	 * 门槛数量：件/金额（分）
	 **/
	public $condition_num;
	
	/** 
	 * 门槛类型：2-累计金额消费，3-累计购买次数消费
	 **/
	public $condition_type;
	
	/** 
	 * 减钱
	 **/
	public $decrease_money;
	
	/** 
	 * 打折
	 **/
	public $discount_rate;
	
	/** 
	 * 一口价
	 **/
	public $fix_price;
	
	/** 
	 * 赠品skuCode
	 **/
	public $gift_sku_code;
	
	/** 
	 * 插入时间
	 **/
	public $insert_time;
	
	/** 
	 * 限购权重
	 **/
	public $limit_weight;
	
	/** 
	 * 商品池ID
	 **/
	public $pool_id;
	
	/** 
	 * 所属活动ID
	 **/
	public $promotion_id;
	
	/** 
	 * 商品编码
	 **/
	public $sku_code;
	
	/** 
	 * 状态：0--不可用，1--可用
	 **/
	public $status;
	
	/** 
	 * 活动每日限购
	 **/
	public $total_day_limit;
	
	/** 
	 * 总限购数量
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
	 * 用户限购
	 **/
	public $user_limit;	
}
?>