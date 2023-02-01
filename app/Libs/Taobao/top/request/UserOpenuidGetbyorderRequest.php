<?php
/**
 * TOP API: taobao.user.openuid.getbyorder request
 * 
 * @author auto create
 * @since 1.0, 2022.08.09
 */
class UserOpenuidGetbyorderRequest
{
	/** 
	 * 买家订单列表
	 **/
	private $tidInfos;
	
	private $apiParas = array();
	
	public function setTidInfos($tidInfos)
	{
		$this->tidInfos = $tidInfos;
		$this->apiParas["tid_infos"] = $tidInfos;
	}

	public function getTidInfos()
	{
		return $this->tidInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.user.openuid.getbyorder";
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
