<?php

/**
 * 收货人信息
 * @author auto create
 */
class ReceiverInfo
{
	
	/** 
	 * 区域, string (50)
	 **/
	public $area;
	
	/** 
	 * 城市, string (50) , 必填
	 **/
	public $city;
	
	/** 
	 * 国家二字码，string（50）
	 **/
	public $country_code;
	
	/** 
	 * 详细地址, string (200) , 必填
	 **/
	public $detail_address;
	
	/** 
	 * 移动电话, string (50) , 必填
	 **/
	public $mobile;
	
	/** 
	 * 姓名, string (50) , 必填
	 **/
	public $name;
	
	/** 
	 * 省份, string (50) , 必填
	 **/
	public $province;
	
	/** 
	 * 固定电话, string (50)
	 **/
	public $tel;
	
	/** 
	 * 村镇, string (50)
	 **/
	public $town;
	
	/** 
	 * 邮编, string (50)
	 **/
	public $zip_code;	
}
?>