<?php
/**
 * TOP API: taobao.location.relation.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class LocationRelationQueryRequest
{
	/** 
	 * 关系查询
	 **/
	private $locationRelation;
	
	private $apiParas = array();
	
	public function setLocationRelation($locationRelation)
	{
		$this->locationRelation = $locationRelation;
		$this->apiParas["location_relation"] = $locationRelation;
	}

	public function getLocationRelation()
	{
		return $this->locationRelation;
	}

	public function getApiMethodName()
	{
		return "taobao.location.relation.query";
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
