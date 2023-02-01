<?php

/**
 * 参数对象
 * @author auto create
 */
class WdkCouponApplyParam
{
	
	/** 
	 * 申请渠道
	 **/
	public $apply_channel;
	
	/** 
	 * 券领取来源，非必填，用于区分不同的业务来源，默认传空为领取普通优惠券
	 **/
	public $apply_source;
	
	/** 
	 * 卡券来源  [ump:ump卡券; koubei:口碑券]
	 **/
	public $coupon_source;
	
	/** 
	 * 拓展属性
	 **/
	public $features;
	
	/** 
	 * 幂等键
	 **/
	public $idempotent_key;
	
	/** 
	 * 外部业务id
	 **/
	public $out_biz_no;
	
	/** 
	 * 优惠券模版id
	 **/
	public $template_id;
	
	/** 
	 * 领取淘系id
	 **/
	public $user_id;
	
	/** 
	 * 优惠券模版uuid
	 **/
	public $uuid;	
}
?>