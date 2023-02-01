<?php
/**
 * TOP API: taobao.qimen.singleitem.query request
 * 
 * @author auto create
 * @since 1.0, 2019.07.05
 */
class SingleitemQueryRequest
{
	/** 
	 * 商品编码,S1234,string(50),必填,
	 **/
	private $itemCode;
	
	/** 
	 * 仓储系统商品编码,C123,string(50),必填,
	 **/
	private $itemId;
	
	/** 
	 * 货主编码,H123,string(50),必填,
	 **/
	private $ownerCode;
	
	private $apiParas = array();
	
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
		return "taobao.qimen.singleitem.query";
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
