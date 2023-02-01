<?php
/**
 * TOP API: taobao.qimen.shop.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2018.05.18
 */
class ShopSynchronizeRequest
{
	/** 
	 * add,update, 必填
	 **/
	private $actionType;
	
	/** 
	 * 店铺
	 **/
	private $shop;
	
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

	public function setShop($shop)
	{
		$this->shop = $shop;
		$this->apiParas["shop"] = $shop;
	}

	public function getShop()
	{
		return $this->shop;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.shop.synchronize";
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
