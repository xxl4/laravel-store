<?php
/**
 * TOP API: taobao.qimen.combineitem.delete request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CombineitemDeleteRequest
{
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $itemId;
	
	/** 
	 * 奇门仓储字段,C123,string(50),,
	 **/
	private $ownerCode;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["itemId"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "taobao.qimen.combineitem.delete";
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
