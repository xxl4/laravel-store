<?php
/**
 * TOP API: taobao.qimen.transferorder.report request
 * 
 * @author auto create
 * @since 1.0, 2021.09.02
 */
class TransferorderReportRequest
{
	/** 
	 * 确认入库时间
	 **/
	private $confirmInTime;
	
	/** 
	 * 确认出库时间
	 **/
	private $confirmOutTime;
	
	/** 
	 * 调拨单创建时间
	 **/
	private $createTime;
	
	/** 
	 * erpOrderCode
	 **/
	private $erpOrderCode;
	
	/** 
	 * 调拨出库仓编码
	 **/
	private $fromWarehouseCode;
	
	/** 
	 * 项目集
	 **/
	private $items;
	
	/** 
	 * orderStatus
	 **/
	private $orderStatus;
	
	/** 
	 * 111
	 **/
	private $ownerCode;
	
	/** 
	 * 调拨入库仓编码
	 **/
	private $toWarehouseCode;
	
	/** 
	 * 调拨入库单号
	 **/
	private $transferInOrderCode;
	
	/** 
	 * 调拨单号,0,string(50),必填,
	 **/
	private $transferOrderCode;
	
	/** 
	 * 调拨出库单号
	 **/
	private $transferOutOrderCode;
	
	private $apiParas = array();
	
	public function setConfirmInTime($confirmInTime)
	{
		$this->confirmInTime = $confirmInTime;
		$this->apiParas["confirmInTime"] = $confirmInTime;
	}

	public function getConfirmInTime()
	{
		return $this->confirmInTime;
	}

	public function setConfirmOutTime($confirmOutTime)
	{
		$this->confirmOutTime = $confirmOutTime;
		$this->apiParas["confirmOutTime"] = $confirmOutTime;
	}

	public function getConfirmOutTime()
	{
		return $this->confirmOutTime;
	}

	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setErpOrderCode($erpOrderCode)
	{
		$this->erpOrderCode = $erpOrderCode;
		$this->apiParas["erpOrderCode"] = $erpOrderCode;
	}

	public function getErpOrderCode()
	{
		return $this->erpOrderCode;
	}

	public function setFromWarehouseCode($fromWarehouseCode)
	{
		$this->fromWarehouseCode = $fromWarehouseCode;
		$this->apiParas["fromWarehouseCode"] = $fromWarehouseCode;
	}

	public function getFromWarehouseCode()
	{
		return $this->fromWarehouseCode;
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

	public function setOrderStatus($orderStatus)
	{
		$this->orderStatus = $orderStatus;
		$this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus()
	{
		return $this->orderStatus;
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

	public function setToWarehouseCode($toWarehouseCode)
	{
		$this->toWarehouseCode = $toWarehouseCode;
		$this->apiParas["toWarehouseCode"] = $toWarehouseCode;
	}

	public function getToWarehouseCode()
	{
		return $this->toWarehouseCode;
	}

	public function setTransferInOrderCode($transferInOrderCode)
	{
		$this->transferInOrderCode = $transferInOrderCode;
		$this->apiParas["transferInOrderCode"] = $transferInOrderCode;
	}

	public function getTransferInOrderCode()
	{
		return $this->transferInOrderCode;
	}

	public function setTransferOrderCode($transferOrderCode)
	{
		$this->transferOrderCode = $transferOrderCode;
		$this->apiParas["transferOrderCode"] = $transferOrderCode;
	}

	public function getTransferOrderCode()
	{
		return $this->transferOrderCode;
	}

	public function setTransferOutOrderCode($transferOutOrderCode)
	{
		$this->transferOutOrderCode = $transferOutOrderCode;
		$this->apiParas["transferOutOrderCode"] = $transferOutOrderCode;
	}

	public function getTransferOutOrderCode()
	{
		return $this->transferOutOrderCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.transferorder.report";
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
