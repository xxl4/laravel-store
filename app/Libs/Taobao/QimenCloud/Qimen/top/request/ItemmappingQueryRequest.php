<?php
/**
 * TOP API: taobao.qimen.itemmapping.query request
 * 
 * @author auto create
 * @since 1.0, 2019.11.20
 */
class ItemmappingQueryRequest
{
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $itemId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $ownerCode;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $queryType;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $shopItemId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setQueryType($queryType)
	{
		$this->queryType = $queryType;
		$this->apiParas["queryType"] = $queryType;
	}

	public function getQueryType()
	{
		return $this->queryType;
	}

	public function setShopItemId($shopItemId)
	{
		$this->shopItemId = $shopItemId;
		$this->apiParas["shopItemId"] = $shopItemId;
	}

	public function getShopItemId()
	{
		return $this->shopItemId;
	}

	public function setSkuId($skuId)
	{
		$this->skuId = $skuId;
		$this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId()
	{
		return $this->skuId;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.itemmapping.query";
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
