<?php
/**
 * TOP API: taobao.qimen.warehouseinfo.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2019.10.23
 */
class WarehouseinfoSynchronizeRequest
{
	/** 
	 * 货主编码，string（50）
	 **/
	private $ownerCode;
	
	/** 
	 * 货主名称，string（50）
	 **/
	private $ownerName;
	
	/** 
	 * 仓库信息
	 **/
	private $warehouseInfos;
	
	private $apiParas = array();
	
	public function setOwnerCode($ownerCode)
	{
		$this->ownerCode = $ownerCode;
		$this->apiParas["ownerCode"] = $ownerCode;
	}

	public function getOwnerCode()
	{
		return $this->ownerCode;
	}

	public function setOwnerName($ownerName)
	{
		$this->ownerName = $ownerName;
		$this->apiParas["ownerName"] = $ownerName;
	}

	public function getOwnerName()
	{
		return $this->ownerName;
	}

	public function setWarehouseInfos($warehouseInfos)
	{
		$this->warehouseInfos = $warehouseInfos;
		$this->apiParas["warehouseInfos"] = $warehouseInfos;
	}

	public function getWarehouseInfos()
	{
		return $this->warehouseInfos;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.warehouseinfo.synchronize";
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
