<?php
/**
 * TOP API: taobao.shop.seller.get request
 * 
 * @author auto create
 * @since 1.0, 2019.08.07
 */
class ShopSellerGetRequest
{
	/** 
	 * 需返回的字段列表。可选值：Shop 结构中的所有字段；多个字段之间用逗号(,)分隔
	 **/
	private $fields;
	
	private $apiParas = array();
	
	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function getApiMethodName()
	{
		return "taobao.shop.seller.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
