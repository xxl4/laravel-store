<?php
/**
 * TOP API: taobao.qimen.inventory.query request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class InventoryQueryRequest
{
	/** 
	 * 查询准则
	 **/
	private $criteriaList;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	private $apiParas = array();
	
	public function setCriteriaList($criteriaList)
	{
		$this->criteriaList = $criteriaList;
		$this->apiParas["criteriaList"] = $criteriaList;
	}

	public function getCriteriaList()
	{
		return $this->criteriaList;
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

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.inventory.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMaxLength($this->remark,500,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
