<?php

/**
 * 请求面单信息，数量限制为10
 * @author auto create
 */
class TradeOrderInfoDto
{
	
	/** 
	 * 物流服务值（详见https://support-cnkuaidi.taobao.com/doc.htm#?docId=106156&docType=1，如无特殊服务请置空）
	 **/
	public $logistics_services;
	
	/** 
	 * <a href="http://open.taobao.com/docs/doc.htm?docType=1&articleId=105086&treeId=17&platformId=17#6">请求ID</a>
	 **/
	public $object_id;
	
	/** 
	 * 订单信息
	 **/
	public $order_info;
	
	/** 
	 * 包裹信息
	 **/
	public $package_info;
	
	/** 
	 * 收件人信息
	 **/
	public $recipient;
	
	/** 
	 * 云打印标准模板URL（组装云打印结果使用，值格式http://cloudprint.cainiao.com/template/standard/${模板ID}）
	 **/
	public $template_url;
	
	/** 
	 * 使用者ID（使用电子面单账号的实际商家ID，如存在一个电子面单账号多个店铺使用时，请传入店铺的商家ID）
	 **/
	public $user_id;
	
	/** 
	 * 带面单号模式取号，目前仅顺丰支持
	 **/
	public $waybill_code;	
}
?>