<?php

/**
 * 促销信息记录
 * @author auto create
 */
class PromotionPriceDO
{
	
	/** 
	 * 记录标识
	 **/
	public $id;
	
	/** 
	 * 是否参加了促销
	 **/
	public $if_promotion;
	
	/** 
	 * 会员促销价结束时间
	 **/
	public $member_promotion_end_time;
	
	/** 
	 * 会员促销价
	 **/
	public $member_promotion_price;
	
	/** 
	 * 会员促销价开始时间
	 **/
	public $member_promotion_start_time;
	
	/** 
	 * 会员促销活动类型
	 **/
	public $member_promotion_type;
	
	/** 
	 * 商家编码
	 **/
	public $merchant_code;
	
	/** 
	 * 促销结束时间
	 **/
	public $promotion_end;
	
	/** 
	 * 促销赠品信息
	 **/
	public $promotion_gift_info;
	
	/** 
	 * 促销价格
	 **/
	public $promotion_price;
	
	/** 
	 * 促销说明
	 **/
	public $promotion_reason;
	
	/** 
	 * 促销开始时间
	 **/
	public $promotion_start;
	
	/** 
	 * 促销类型
	 **/
	public $promotion_type;
	
	/** 
	 * 店铺编码
	 **/
	public $shop_code;
	
	/** 
	 * 店铺标识
	 **/
	public $shop_id;
	
	/** 
	 * 商品编码
	 **/
	public $sku_code;	
}
?>