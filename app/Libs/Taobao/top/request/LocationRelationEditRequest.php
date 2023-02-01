<?php
/**
 * TOP API: taobao.location.relation.edit request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class LocationRelationEditRequest
{
	/** 
	 * 关系对象列表
	 **/
	private $locationRelationList;
	
	private $apiParas = array();
	
	public function setLocationRelationList($locationRelationList)
	{
		$this->locationRelationList = $locationRelationList;
		$this->apiParas["location_relation_list"] = $locationRelationList;
	}

	public function getLocationRelationList()
	{
		return $this->locationRelationList;
	}

	public function getApiMethodName()
	{
		return "taobao.location.relation.edit";
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
