<?php
/**
 * TOP API: taobao.qimen.channelinventory.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ChannelinventoryQueryRequest
{
	/** 
	 * 奇门仓储字段
	 **/
	private $channelCodes;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $itemCodes;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $ownerCode;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $warehouseCodes;
	
	private $apiParas = array();
	
	public function setChannelCodes($channelCodes)
	{
		$this->channelCodes = $channelCodes;
		$this->apiParas["channelCodes"] = $channelCodes;
	}

	public function getChannelCodes()
	{
		return $this->channelCodes;
	}

	public function setItemCodes($itemCodes)
	{
		$this->itemCodes = $itemCodes;
		$this->apiParas["itemCodes"] = $itemCodes;
	}

	public function getItemCodes()
	{
		return $this->itemCodes;
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

	public function setWarehouseCodes($warehouseCodes)
	{
		$this->warehouseCodes = $warehouseCodes;
		$this->apiParas["warehouseCodes"] = $warehouseCodes;
	}

	public function getWarehouseCodes()
	{
		return $this->warehouseCodes;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.channelinventory.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxListSize($this->channelCodes,500,"channelCodes");
		RequestCheckUtil::checkMaxListSize($this->itemCodes,500,"itemCodes");
		RequestCheckUtil::checkMaxListSize($this->warehouseCodes,500,"warehouseCodes");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
