<?php

/**
 * 入参信息
 * @author auto create
 */
class WaybillCloudPrintApplyNewRequest
{
	
	/** 
	 * 品牌编码
	 **/
	public $brand_code;
	
	/** 
	 * 是否预约上门
	 **/
	public $call_door_pick_up;
	
	/** 
	 * <a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.8cf9Nj&treeId=17&articleId=105085&docType=1#1">物流公司Code</a>，长度小于20
	 **/
	public $cp_code;
	
	/** 
	 * 月结卡号
	 **/
	public $customer_code;
	
	/** 
	 * 是否使用智分宝预分拣， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $dms_sorting;
	
	/** 
	 * 预约上门截止时间
	 **/
	public $door_pick_up_end_time;
	
	/** 
	 * 预约上门收件时间
	 **/
	public $door_pick_up_time;
	
	/** 
	 * 扩展参数
	 **/
	public $extra_info;
	
	/** 
	 * 快递公司支持一票多件，快运公司子母件请勿使用该参数
	 **/
	public $multi_packages_shipment;
	
	/** 
	 * 设定取号返回的云打印报文是否加密
	 **/
	public $need_encrypt;
	
	/** 
	 * 目前仅顺丰支持此字段，传入快递产品编码
	 **/
	public $product_code;
	
	/** 
	 * 配送资源code， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $resource_code;
	
	/** 
	 * 发货人信息
	 **/
	public $sender;
	
	/** 
	 * 寄件网点编码
	 **/
	public $shipping_branch_code;
	
	/** 
	 * 仓code， 仓库WMS系统对接落地配业务，其它场景请不要使用
	 **/
	public $store_code;
	
	/** 
	 * 订单上是否带3PLtiming属性, 该属性需要严格与订单上属性保持一致，如果不确定，请使用默认false。
	 **/
	public $three_pl_timing;
	
	/** 
	 * 请求面单信息，数量限制为10
	 **/
	public $trade_order_info_dtos;	
}
?>