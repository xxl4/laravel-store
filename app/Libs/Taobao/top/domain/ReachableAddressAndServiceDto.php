<?php

/**
 * 收发地址和服务列表
 * @author auto create
 */
class ReachableAddressAndServiceDto
{
	
	/** 
	 * C2M&1688开放地址ID
	 **/
	public $caid;
	
	/** 
	 * 淘宝开放地址ID
	 **/
	public $oaid;
	
	/** 
	 * 每条收发地址的key,用户自定义,每次请求多个地址不能重复
	 **/
	public $object_id;
	
	/** 
	 * 订单id
	 **/
	public $order_id;
	
	/** 
	 * 收货地址
	 **/
	public $receive_address;
	
	/** 
	 * 发货地址
	 **/
	public $send_address;
	
	/** 
	 * 服务列表,每一项必须为json的string格式,快运必填,快递为空则默认为'标准快递'
	 **/
	public $service_code_list;	
}
?>