<?php
/**
 * TOP API: taobao.qimen.inventoryrule.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class InventoryruleCreateRequest
{
	/** 
	 * inventoryRules
	 **/
	private $inventoryRules;
	
	/** 
	 * 奇门仓储字段,C1223,string(50),,
	 **/
	private $ownerCode;
	
	private $apiParas = array();
	
	public function setInventoryRules($inventoryRules)
	{
		$this->inventoryRules = $inventoryRules;
		$this->apiParas["inventoryRules"] = $inventoryRules;
	}

	public function getInventoryRules()
	{
		return $this->inventoryRules;
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

	public function getApiMethodName()
	{
		return "taobao.qimen.inventoryrule.create";
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
