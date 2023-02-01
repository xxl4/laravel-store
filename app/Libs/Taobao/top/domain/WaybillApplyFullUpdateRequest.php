<?php

/**
 * 更新面单信息请求
 * @author auto create
 */
class WaybillApplyFullUpdateRequest
{
	
	/** 
	 * 收\发货地址
	 **/
	public $consignee_address;
	
	/** 
	 * 收件人姓名
	 **/
	public $consignee_name;
	
	/** 
	 * 收件人电话
	 **/
	public $consignee_phone;
	
	/** 
	 * 快递服务商CODE
	 **/
	public $cp_code;
	
	/** 
	 * 物流服务能力集合
	 **/
	public $logistics_service_list;
	
	/** 
	 * 订单渠道类型
	 **/
	public $order_channels_type;
	
	/** 
	 * ERP 订单号或包裹号
	 **/
	public $package_id;
	
	/** 
	 * 包裹里面的商品名称
	 **/
	public $package_items;
	
	/** 
	 * 快递服务产品类型编码
	 **/
	public $product_type;
	
	/** 
	 * 使用者ID
	 **/
	public $real_user_id;
	
	/** 
	 * 发件人姓名
	 **/
	public $send_name;
	
	/** 
	 * 发件人联系方式
	 **/
	public $send_phone;
	
	/** 
	 * 交易订单号（组合表示合并订单）
	 **/
	public $trade_order_list;
	
	/** 
	 * 包裹体积 单位为ML(毫升)或立方厘米
	 **/
	public $volume;
	
	/** 
	 * 电子面单单号
	 **/
	public $waybill_code;
	
	/** 
	 * 包裹重量 单位为G(克)
	 **/
	public $weight;	
}
?>