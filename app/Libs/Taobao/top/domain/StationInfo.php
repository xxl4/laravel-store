<?php

/**
 * 站点信息
 * @author auto create
 */
class StationInfo
{
	
	/** 
	 * 城市
	 **/
	public $city;
	
	/** 
	 * 站点联系方式
	 **/
	public $contact;
	
	/** 
	 * 坐标类型，MARS-火星坐标（高德坐标），BAIDU-百度坐标,GPS-GPS坐标
	 **/
	public $coord_type;
	
	/** 
	 * 区县
	 **/
	public $district;
	
	/** 
	 * 站点服务能力描述
	 **/
	public $extra;
	
	/** 
	 * 小区
	 **/
	public $housing_estate;
	
	/** 
	 * 站点照片url
	 **/
	public $img_url;
	
	/** 
	 * 省份
	 **/
	public $province;
	
	/** 
	 * 站点详细地址
	 **/
	public $station_addr;
	
	/** 
	 * 站点id
	 **/
	public $station_id;
	
	/** 
	 * 站点纬度
	 **/
	public $station_lat;
	
	/** 
	 * 站点经度
	 **/
	public $station_lng;
	
	/** 
	 * 站点名字
	 **/
	public $station_name;
	
	/** 
	 * 站点编码
	 **/
	public $station_no;
	
	/** 
	 * 站点类型：100-代收点
	 **/
	public $station_type;
	
	/** 
	 * 0-上线，1-下线
	 **/
	public $status;
	
	/** 
	 * 街道
	 **/
	public $town;
	
	/** 
	 * 邮编
	 **/
	public $zip;	
}
?>