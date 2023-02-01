<?php
/**
 * TOP API: taobao.qimen.receiverinfo.query request
 * 
 * @author auto create
 * @since 1.0, 2021.08.09
 */
class ReceiverinfoQueryRequest
{
	/** 
	 * 出库单号, string (50) , 必填
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 订单收件人 ID, string (50)
	 **/
	private $oaid;
	
	/** 
	 * 货主ID
	 **/
	private $ownerCode;
	
	/** 
	 * 使用场景。1001，顺丰电子面单发货；1002，4通一达电子面单发货；1003，EMS电子面单发货；1004，其他电子面单发货；2001，客户售后服务
	 **/
	private $scene;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setDeliveryOrderCode($deliveryOrderCode)
	{
		$this->deliveryOrderCode = $deliveryOrderCode;
		$this->apiParas["deliveryOrderCode"] = $deliveryOrderCode;
	}

	public function getDeliveryOrderCode()
	{
		return $this->deliveryOrderCode;
	}

	public function setOaid($oaid)
	{
		$this->oaid = $oaid;
		$this->apiParas["oaid"] = $oaid;
	}

	public function getOaid()
	{
		return $this->oaid;
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

	public function setScene($scene)
	{
		$this->scene = $scene;
		$this->apiParas["scene"] = $scene;
	}

	public function getScene()
	{
		return $this->scene;
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
		return "taobao.qimen.receiverinfo.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deliveryOrderCode,"deliveryOrderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
