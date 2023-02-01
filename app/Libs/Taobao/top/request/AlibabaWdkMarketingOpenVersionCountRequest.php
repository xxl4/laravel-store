<?php
/**
 * TOP API: alibaba.wdk.marketing.open.version.count request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingOpenVersionCountRequest
{
	/** 
	 * 操作Id
	 **/
	private $operateId;
	
	/** 
	 * 查询版本号
	 **/
	private $versionId;
	
	private $apiParas = array();
	
	public function setOperateId($operateId)
	{
		$this->operateId = $operateId;
		$this->apiParas["operate_id"] = $operateId;
	}

	public function getOperateId()
	{
		return $this->operateId;
	}

	public function setVersionId($versionId)
	{
		$this->versionId = $versionId;
		$this->apiParas["version_id"] = $versionId;
	}

	public function getVersionId()
	{
		return $this->versionId;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.open.version.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->operateId,"operateId");
		RequestCheckUtil::checkNotNull($this->versionId,"versionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
