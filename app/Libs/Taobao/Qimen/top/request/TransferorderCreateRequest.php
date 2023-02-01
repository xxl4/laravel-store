<?php
/**
 * TOP API: taobao.qimen.transferorder.create request
 * 
 * @author auto create
 * @since 1.0, 2019.10.25
 */
class TransferorderCreateRequest
{
	/** 
	 * 扩展属性,HZ1234,string(500),,
	 **/
	private $attributes;
	
	/** 
	 * 外部ERP订单号,HZ1234,string(50),必填,
	 **/
	private $erpOrderCode;
	
	/** 
	 * 期望调拨开始时间,Item1234,string(50),,
	 **/
	private $expectStartTime;
	
	/** 
	 * 出库仓编码,Item1234,string(50),必填,
	 **/
	private $fromStoreCode;
	
	/** 
	 * 111
	 **/
	private $ownerCode;
	
	/** 
	 * 入库仓编码,HZ1234,string(50),必填,
	 **/
	private $toStoreCode;
	
	/** 
	 * 项目集
	 **/
	private $transferItems;
	
	private $apiParas = array();
	
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		$this->apiParas["attributes"] = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
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

	public function setExpectStartTime($expectStartTime)
	{
		$this->expectStartTime = $expectStartTime;
		$this->apiParas["expectStartTime"] = $expectStartTime;
	}

	public function getExpectStartTime()
	{
		return $this->expectStartTime;
	}

	public function setFromStoreCode($fromStoreCode)
	{
		$this->fromStoreCode = $fromStoreCode;
		$this->apiParas["fromStoreCode"] = $fromStoreCode;
	}

	public function getFromStoreCode()
	{
		return $this->fromStoreCode;
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

	public function setToStoreCode($toStoreCode)
	{
		$this->toStoreCode = $toStoreCode;
		$this->apiParas["toStoreCode"] = $toStoreCode;
	}

	public function getToStoreCode()
	{
		return $this->toStoreCode;
	}

	public function setTransferItems($transferItems)
	{
		$this->transferItems = $transferItems;
		$this->apiParas["transferItems"] = $transferItems;
	}

	public function getTransferItems()
	{
		return $this->transferItems;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.transferorder.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
