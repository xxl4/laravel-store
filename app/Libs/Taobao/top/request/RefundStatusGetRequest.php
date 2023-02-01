<?php
/**
 * TOP API: taobao.refund.status.get request
 * 
 * @author auto create
 * @since 1.0, 2022.08.26
 */
class RefundStatusGetRequest
{
	/** 
	 * 入参对象
	 **/
	private $queryParam;
	
	private $apiParas = array();
	
	public function setQueryParam($queryParam)
	{
		$this->queryParam = $queryParam;
		$this->apiParas["query_param"] = $queryParam;
	}

	public function getQueryParam()
	{
		return $this->queryParam;
	}

	public function getApiMethodName()
	{
		return "taobao.refund.status.get";
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
