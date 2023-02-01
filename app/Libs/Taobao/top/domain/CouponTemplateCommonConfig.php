<?php

/**
 * 基础信息
 * @author auto create
 */
class CouponTemplateCommonConfig
{
	
	/** 
	 * 申请渠道 anonymousOffline
	 **/
	public $apply_channels;
	
	/** 
	 * 优惠券活动描述
	 **/
	public $description;
	
	/** 
	 * 优惠券发放方式 ANONYMOUS("anonymous","匿名券"), REGISTERED("registered","记名券"),
	 **/
	public $send_type;
	
	/** 
	 * 模板状态 NORMAL(1, "有效"), DELETE(-1, "删除"), ENDING(0, "结束领取"), NOUSE(-2, "无效"), WDK_COUPON_DRAFT(-999, "草稿"),
	 **/
	public $status;
	
	/** 
	 * 优惠券名称
	 **/
	public $title;
	
	/** 
	 * 优惠券类型 FIX_PRICE(6,"fixPrice","新减至券，即一口价券"), FULL_AMOUNT_REDUCE(11, "fullAmountReduce", "满元减券"), FULL_AMOUNT_DISCOUNT(12, "fullAmountDiscount", "满元折券"), FULL_COUNT_REDUCE(13, "fullCountReduce", "满件减券"), FULL_COUNT_DISCOUNT(14, "fullCountDiscount", "满件折券"), VOUCHER(15, "voucher", "抵用券"),
	 **/
	public $type;	
}
?>