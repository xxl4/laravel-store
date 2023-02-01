<?php

/**
 * 收件人信息
 * @author auto create
 */
class RecipientInfoDto
{
	
	/** 
	 * 地址
	 **/
	public $address;
	
	/** 
	 * 菜鸟解密地址ID，用于电商平台收件人信息加密的场景使用，非订单加密场景请勿使用。
	 **/
	public $caid;
	
	/** 
	 * 手机号码
	 **/
	public $mobile;
	
	/** 
	 * 姓名
	 **/
	public $name;
	
	/** 
	 * 淘宝订单收件人ID (Open Addressee ID)，长度不超过128个字符，淘宝订单加密情况用于解密。
	 **/
	public $oaid;
	
	/** 
	 * 固定电话
	 **/
	public $phone;
	
	/** 
	 * 电商平台真实交易订单号，针对电商平台订单隐私加密场景使用，非必填，如果填写则必须是电商平台真实的交易订单ID
	 **/
	public $tid;	
}
?>