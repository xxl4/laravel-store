<?php

/**
 * 包裹包含的运单号及快递公司编号,多包裹时，需要包含所有包裹的运单号等信息
 * @author auto create
 */
class TopConsignPkgRequest
{
	
	/** 
	 * 物流公司代码.如"POST"代表中国邮政,"ZJS"代表宅急送。调用 taobao.logistics.companies.get 获取
	 **/
	public $company_code;
	
	/** 
	 * 运单号.具体一个物流公司的真实运单号码。淘宝官方物流会校验，请谨慎传入
	 **/
	public $out_sid;	
}
?>