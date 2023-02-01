<?php
/**
 * TOP API: taobao.qimen.transferorder.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class TransferorderQueryRequest
{
	/** 
	 * ERP单号
	 **/
	private $erpOrderCode;
	
	/** 
	 * 111
	 **/
	private $ownerCode;
	
	/** 
	 * 调拨单号
	 **/
	private $transferOrderCode;
	
	private $apiParas = array();
	
	public function setErpOrderCode($erpOrderCode)
	{
		$this->erpOrderCode = $erpOrderCode;
		$this->apiParas["erpOrderCode"] = $erpOrderCode;
	}

	public function getErpOrderCode()
	{
		return $this->erpOrderCode;
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

	public function setTransferOrderCode($transferOrderCode)
	{
		$this->transferOrderCode = $transferOrderCode;
		$this->apiParas["transferOrderCode"] = $transferOrderCode;
	}

	public function getTransferOrderCode()
	{
		return $this->transferOrderCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.transferorder.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->erpOrderCode,50,"erpOrderCode");
		RequestCheckUtil::checkNotNull($this->ownerCode,"ownerCode");
		RequestCheckUtil::checkNotNull($this->transferOrderCode,"transferOrderCode");
		RequestCheckUtil::checkMaxLength($this->transferOrderCode,50,"transferOrderCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
