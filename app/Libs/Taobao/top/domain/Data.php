<?php

/**
 * data
 * @author auto create
 */
class Data
{
	
	/** 
	 * 快递公司编码
	 **/
	public $cp_code;
	
	/** 
	 * 快递公司名称
	 **/
	public $cp_name;
	
	/** 
	 * 用于返回淘系包裹脱密手机号用作数据核对
	 **/
	public $getter_phone;
	
	/** 
	 * 裹裹发送通知消息标识，false-?非裹裹发送，true-裹裹发送
	 **/
	public $guoguo_send_notice_flag;
	
	/** 
	 * 是否需要输入手机号，false-不需要，裹裹可以自己判断手机号，true-需要手动输入手机号
	 **/
	public $need_input_phone;	
}
?>