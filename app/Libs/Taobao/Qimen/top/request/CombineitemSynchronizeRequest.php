<?php
/**
 * TOP API: taobao.qimen.combineitem.synchronize request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CombineitemSynchronizeRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 组合商品的ERP编码
	 **/
	private $itemCode;
	
	/** 
	 * temp
	 **/
	private $itemId;
	
	/** 
	 * 组合商品接口中的单商品信息
	 **/
	private $items;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setItemCode($itemCode)
	{
		$this->itemCode = $itemCode;
		$this->apiParas["itemCode"] = $itemCode;
	}

	public function getItemCode()
	{
		return $this->itemCode;
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

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
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
		return "taobao.qimen.combineitem.synchronize";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemCode,"itemCode");
		RequestCheckUtil::checkMaxLength($this->itemCode,50,"itemCode");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
