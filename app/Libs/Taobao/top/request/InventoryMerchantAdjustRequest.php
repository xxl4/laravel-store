<?php
/**
 * TOP API: taobao.inventory.merchant.adjust request
 * 
 * @author auto create
 * @since 1.0, 2021.11.24
 */
class InventoryMerchantAdjustRequest
{
	/** 
	 * 调整库存对象
	 **/
	private $inventoryCheck;
	
	private $apiParas = array();
	
	public function setInventoryCheck($inventoryCheck)
	{
		$this->inventoryCheck = $inventoryCheck;
		$this->apiParas["inventory_check"] = $inventoryCheck;
	}

	public function getInventoryCheck()
	{
		return $this->inventoryCheck;
	}

	public function getApiMethodName()
	{
		return "taobao.inventory.merchant.adjust";
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
