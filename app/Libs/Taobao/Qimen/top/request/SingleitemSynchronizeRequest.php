<?php
/**
 * TOP API: taobao.qimen.singleitem.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2019.07.05
 */
class SingleitemSynchronizeRequest
{
	/** 
	 * 操作类型(两种类型：add|update)
	 **/
	private $actionType;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 商品信息
	 **/
	private $item;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 供应商编码
	 **/
	private $supplierCode;
	
	/** 
	 * 供应商名称
	 **/
	private $supplierName;
	
	/** 
	 * 仓库编码(统仓统配等无需ERP指定仓储编码的情况填OTHER)
	 **/
	private $warehouseCode;
	
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

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setItem($item)
	{
		$this->item = $item;
		$this->apiParas["item"] = $item;
	}

	public function getItem()
	{
		return $this->item;
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

	public function setSupplierCode($supplierCode)
	{
		$this->supplierCode = $supplierCode;
		$this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode()
	{
		return $this->supplierCode;
	}

	public function setSupplierName($supplierName)
	{
		$this->supplierName = $supplierName;
		$this->apiParas["supplierName"] = $supplierName;
	}

	public function getSupplierName()
	{
		return $this->supplierName;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.singleitem.synchronize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->actionType,"actionType");
		RequestCheckUtil::checkMaxLength($this->actionType,10,"actionType");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->supplierCode,50,"supplierCode");
		RequestCheckUtil::checkMaxLength($this->supplierName,200,"supplierName");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
