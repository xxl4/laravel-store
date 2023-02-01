<?php

/**
 * 订单确认信息
 * @author auto create
 */
class WaybillOrderConfirmRequest
{
	
	/** 
	 * 预约上门收件
	 **/
	public $call_door_pick_up;
	
	/** 
	 * cpCode
	 **/
	public $cp_code;
	
	/** 
	 * 预约上门截止时间
	 **/
	public $door_pick_up_end_time;
	
	/** 
	 * 预约上门时间
	 **/
	public $door_pick_up_time;
	
	/** 
	 * 扩展信息，json String
	 **/
	public $extra_info;
	
	/** 
	 * 物流服务， json String
	 **/
	public $logistics_services;
	
	/** 
	 * 快递产品编码
	 **/
	public $product_code;
	
	/** 
	 * 客户订单货物总高，单位厘米
	 **/
	public $total_height;
	
	/** 
	 * 订单货物总长,单位厘米
	 **/
	public $total_length;
	
	/** 
	 * 货物总体积，单位立方厘米
	 **/
	public $total_volume;
	
	/** 
	 * 货物总重量，单位g
	 **/
	public $total_weight;
	
	/** 
	 * 订单货物总宽，单位厘米
	 **/
	public $total_width;
	
	/** 
	 * 物流单号信息
	 **/
	public $waybill_info;	
}
?>