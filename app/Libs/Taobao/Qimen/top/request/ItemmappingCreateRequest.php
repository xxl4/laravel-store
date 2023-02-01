<?php
/**
 * TOP API: taobao.qimen.itemmapping.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ItemmappingCreateRequest
{
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $actionType;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $itemId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $itemSource;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $ownerCode;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $shopItemId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $shopNick;
	
	/** 
	 * 奇门仓储字段,C123,string(50),必填,
	 **/
	private $skuId;
	
	private $apiParas = array();
	
	public function setActionType($actionType)
	{
		$this->actionType = $actionType;
		$this->apiParas["actionType"] = $actionType;
	}

	public function getActionType()
	{
		return $this->actionType;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemSource($itemSource)
	{
		$this->itemSource = $itemSource;
		$this->apiParas["itemSource"] = $itemSource;
	}

	public function getItemSource()
	{
		return $this->itemSource;
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

	public function setShopItemId($shopItemId)
	{
		$this->shopItemId = $shopItemId;
		$this->apiParas["shopItemId"] = $shopItemId;
	}

	public function getShopItemId()
	{
		return $this->shopItemId;
	}

	public function setShopNick($shopNick)
	{
		$this->shopNick = $shopNick;
		$this->apiParas["shopNick"] = $shopNick;
	}

	public function getShopNick()
	{
		return $this->shopNick;
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
		return "taobao.qimen.itemmapping.create";
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
