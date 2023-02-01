<?php
/**
 * TOP API: taobao.inventory.warehouse.get request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class InventoryWarehouseGetRequest
{
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.warehouse.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
