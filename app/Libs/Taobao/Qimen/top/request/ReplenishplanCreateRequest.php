<?php
/**
 * TOP API: taobao.qimen.replenishplan.create request
 * 
 * @author auto create
 * @since 1.0, 2016.08.17
 */
class ReplenishplanCreateRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 最晚入库时间(YYYY-MM-DD HH:MM:SS)
	 **/
	private $gmtDeadTime;
	
	/** 
	 * 单据信息
	 **/
	private $items;
	
	/** 
	 * 外部系统单号(ERP单号)
	 **/
	private $orderCode;
	
	/** 
	 * 商家ID
	 **/
	private $userId;
	
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

	public function setGmtDeadTime($gmtDeadTime)
	{
		$this->gmtDeadTime = $gmtDeadTime;
		$this->apiParas["gmtDeadTime"] = $gmtDeadTime;
	}

	public function getGmtDeadTime()
	{
		return $this->gmtDeadTime;
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

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setUserId($userId)
	{
		$this->userId = $userId;
		$this->apiParas["userId"] = $userId;
	}

	public function getUserId()
	{
		return $this->userId;
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
		return "taobao.qimen.replenishplan.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->gmtDeadTime,"gmtDeadTime");
		RequestCheckUtil::checkMaxLength($this->gmtDeadTime,19,"gmtDeadTime");
		RequestCheckUtil::checkNotNull($this->orderCode,"orderCode");
		RequestCheckUtil::checkMaxLength($this->orderCode,50,"orderCode");
		RequestCheckUtil::checkNotNull($this->userId,"userId");
		RequestCheckUtil::checkMaxLength($this->userId,50,"userId");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
