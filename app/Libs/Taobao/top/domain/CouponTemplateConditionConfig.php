<?php

/**
 * 生效条件
 * @author auto create
 */
class CouponTemplateConditionConfig
{
	
	/** 
	 * 门槛金额
	 **/
	public $amount;
	
	/** 
	 * 是否生效满元条件
	 **/
	public $amount_at;
	
	/** 
	 * 生效类目
	 **/
	public $categories;
	
	/** 
	 * 门槛件数
	 **/
	public $count;
	
	/** 
	 * 是否生效满件条件
	 **/
	public $count_at;
	
	/** 
	 * 单笔订单最大可用张数
	 **/
	public $max_use_count_per_order;
	
	/** 
	 * 生效商家类目
	 **/
	public $merchant_categories;
	
	/** 
	 * 是否限制本人使用
	 **/
	public $only_member_self;
	
	/** 
	 * 券的使用范围 COUPON_RANGE_STORE(1, "rangeShop", "店铺券"), COUPON_RANGE_ITEM(2, "rangeItem", "商品券"), COUPON_RANGE_CATEGORY(3, "rangeCategory", "品类券"), COUPON_RANGE_SELLER(307,"rangeSeller", "卖家券"),
	 **/
	public $range_type;
	
	/** 
	 * 生效门店
	 **/
	public $shop_ids;
	
	/** 
	 * 生效终端:  1.app 2.pos
	 **/
	public $terminals;
	
	/** 
	 * 人群信息
	 **/
	public $user_crowd_config;	
}
?>