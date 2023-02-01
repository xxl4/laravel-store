<?php
/**
 * TOP API: tmall.item.add.simpleschema.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TmallItemAddSimpleschemaGetRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "tmall.item.add.simpleschema.get";
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
