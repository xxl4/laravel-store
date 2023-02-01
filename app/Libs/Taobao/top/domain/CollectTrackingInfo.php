<?php

/**
 * 回传信息
 * @author auto create
 */
class CollectTrackingInfo
{
	
	/** 
	 * 动作编码
	 **/
	public $action_code;
	
	/** 
	 * 动作发生时间戳，单位：毫秒
	 **/
	public $action_time;
	
	/** 
	 * 快递公司编号
	 **/
	public $cp_code;
	
	/** 
	 * 扩展数据（JSON格式的键值对），如果是取件码取件，请返回取件使用的取件码
	 **/
	public $extra;
	
	/** 
	 * 订单对应的取件人电话
	 **/
	public $getter_phone;
	
	/** 
	 * 运单号
	 **/
	public $mail_no;
	
	/** 
	 * 站点订单编码
	 **/
	public $order_code;
	
	/** 
	 * 订单类型(0-代收业务)
	 **/
	public $order_type;
	
	/** 
	 * 订单对应的投件人电话
	 **/
	public $post_phone;
	
	/** 
	 * 站点id
	 **/
	public $station_id;
	
	/** 
	 * 站点编码
	 **/
	public $station_no;	
}
?>