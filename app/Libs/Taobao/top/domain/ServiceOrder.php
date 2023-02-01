<?php

/**
 * 商城虚拟服务子订单数据结构
 * @author auto create
 */
class ServiceOrder
{
	
	/** 
	 * appleCareEmail
	 **/
	public $apple_care_email;
	
	/** 
	 * appleCareMPN
	 **/
	public $apple_care_mpn;
	
	/** 
	 * 卖家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 车牌号
	 **/
	public $et_plate_number;
	
	/** 
	 * 天猫汽车预约服务时间
	 **/
	public $et_ser_time;
	
	/** 
	 * 电子凭证预约门店地址
	 **/
	public $et_shop_name;
	
	/** 
	 * 电子凭证核销门店地址
	 **/
	public $et_verified_shop_name;
	
	/** 
	 * 服务订单与实物订单关联关系
	 **/
	public $ext_service_biz_id;
	
	/** 
	 * 服务所属的交易订单号。如果服务为一年包换，则item_oid这笔订单享受改服务的保护
	 **/
	public $item_oid;
	
	/** 
	 * 购买数量，取值范围为大于0的整数
	 **/
	public $num;
	
	/** 
	 * 虚拟服务子订单订单号
	 **/
	public $oid;
	
	/** 
	 * 虚拟服务子订单订单号(String类型)
	 **/
	public $oid_str;
	
	/** 
	 * 子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。
	 **/
	public $payment;
	
	/** 
	 * 服务图片地址
	 **/
	public $pic_path;
	
	/** 
	 * 服务价格，精确到小数点后两位：单位:元
	 **/
	public $price;
	
	/** 
	 * 最近退款的id
	 **/
	public $refund_id;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 服务详情的URL地址
	 **/
	public $service_detail_url;
	
	/** 
	 * 服务数字id
	 **/
	public $service_id;
	
	/** 
	 * 服务供应链-服务订单类型,1:主子挂载；2：双主挂载；3：单独售卖
	 **/
	public $service_order_type;
	
	/** 
	 * 服务供应链-服务商外部编码标
	 **/
	public $service_outer_id;
	
	/** 
	 * 商品名称
	 **/
	public $title;
	
	/** 
	 * 支持家装类物流的类型
	 **/
	public $tmser_spu_code;
	
	/** 
	 * 服务子订单总费用
	 **/
	public $total_fee;	
}
?>