<?php
/**
 * TOP API: taobao.subusers.info.query request
 * 
 * @author auto create
 * @since 1.0, 2022.02.18
 */
class SubusersInfoQueryRequest
{
	/** 
	 * 站点信息，淘宝天猫传0，1688传3
	 **/
	private $site;
	
	private $apiParas = array();
	
	public function setSite($site)
	{
		$this->site = $site;
		$this->apiParas["site"] = $site;
	}

	public function getSite()
	{
		return $this->site;
	}

	public function getApiMethodName()
	{
		return "taobao.subusers.info.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
