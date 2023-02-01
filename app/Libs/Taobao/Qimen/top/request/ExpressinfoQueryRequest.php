<?php
/**
 * TOP API: taobao.qimen.expressinfo.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ExpressinfoQueryRequest
{
	/** 
	 * 奇门仓储字段
	 **/
	private $expressCode;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 奇门仓储字段
	 **/
	private $ownerCode;
	
	private $apiParas = array();
	
	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
	}

	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
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
		return "taobao.qimen.expressinfo.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->expressCode,50,"expressCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
