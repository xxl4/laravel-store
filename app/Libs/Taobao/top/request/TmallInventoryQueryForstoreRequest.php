<?php
/**
 * TOP API: tmall.inventory.query.forstore request
 * 
 * @author auto create
 * @since 1.0, 2021.04.28
 */
class TmallInventoryQueryForstoreRequest
{
	/** 
	 * 查询列表
	 **/
	private $paramList;
	
	private $apiParas = array();
	
	public function setParamList($paramList)
	{
		$this->paramList = $paramList;
		$this->apiParas["param_list"] = $paramList;
	}

	public function getParamList()
	{
		return $this->paramList;
	}

	public function getApiMethodName()
	{
		return "tmall.inventory.query.forstore";
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
