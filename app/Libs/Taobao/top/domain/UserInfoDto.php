<?php

/**
 * 发货人信息
 * @author auto create
 */
class UserInfoDto
{
	
	/** 
	 * 发货地址需要通过<a href="http://open.taobao.com/doc2/detail.htm?spm=a219a.7629140.0.0.3OFCPk&treeId=17&articleId=104860&docType=1">search接口</a>
	 **/
	public $address;
	
	/** 
	 * 手机号码（手机号和固定电话不能同时为空），长度小于20
	 **/
	public $mobile;
	
	/** 
	 * 姓名，长度小于40
	 **/
	public $name;
	
	/** 
	 * 固定电话（手机号和固定电话不能同时为空），长度小于20
	 **/
	public $phone;	
}
?>