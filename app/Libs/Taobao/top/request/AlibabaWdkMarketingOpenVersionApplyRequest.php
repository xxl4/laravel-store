<?php
/**
 * TOP API: alibaba.wdk.marketing.open.version.apply request
 * 
 * @author auto create
 * @since 1.0, 2021.11.23
 */
class AlibabaWdkMarketingOpenVersionApplyRequest
{
	/** 
	 * 同步版本信息
	 **/
	private $syncVersion;
	
	private $apiParas = array();
	
	public function setSyncVersion($syncVersion)
	{
		$this->syncVersion = $syncVersion;
		$this->apiParas["sync_version"] = $syncVersion;
	}

	public function getSyncVersion()
	{
		return $this->syncVersion;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.open.version.apply";
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
