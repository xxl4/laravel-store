<?php
/**
 * TOP API: cainiao.cntms.logistics.order.consign request
 * 
 * @author auto create
 * @since 1.0, 2020.02.17
 */
class CainiaoCntmsLogisticsOrderConsignRequest
{
	/** 
	 * 配送发货信息
	 **/
	private $content;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function getApiMethodName()
	{
		return "cainiao.cntms.logistics.order.consign";
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
