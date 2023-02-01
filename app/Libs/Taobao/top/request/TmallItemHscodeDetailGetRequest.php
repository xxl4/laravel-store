<?php
/**
 * TOP API: tmall.item.hscode.detail.get request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class TmallItemHscodeDetailGetRequest
{
	/** 
	 * hscode
	 **/
	private $hscode;
	
	private $apiParas = array();
	
	public function setHscode($hscode)
	{
		$this->hscode = $hscode;
		$this->apiParas["hscode"] = $hscode;
	}

	public function getHscode()
	{
		return $this->hscode;
	}

	public function getApiMethodName()
	{
		return "tmall.item.hscode.detail.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->hscode,"hscode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
