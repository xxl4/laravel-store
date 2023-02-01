<?php
/**
 * TOP API: taobao.qimen.inventoryreserve.cancel request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class InventoryreserveCancelRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $itemInventories;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $orderCode;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $orderSource;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $ownerCode;
	
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

	public function setItemInventories($itemInventories)
	{
		$this->itemInventories = $itemInventories;
		$this->apiParas["itemInventories"] = $itemInventories;
	}

	public function getItemInventories()
	{
		return $this->itemInventories;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderSource($orderSource)
	{
		$this->orderSource = $orderSource;
		$this->apiParas["orderSource"] = $orderSource;
	}

	public function getOrderSource()
	{
		return $this->orderSource;
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
		return "taobao.qimen.inventoryreserve.cancel";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->orderCode,50,"orderCode");
		RequestCheckUtil::checkMaxLength($this->orderSource,50,"orderSource");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
