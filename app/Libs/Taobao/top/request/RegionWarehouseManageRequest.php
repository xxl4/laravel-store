<?php
/**
 * TOP API: taobao.region.warehouse.manage request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class RegionWarehouseManageRequest
{
	/** 
	 * 可映射三级地址,例: 广东省
	 **/
	private $regions;
	
	/** 
	 * 仓库编码
	 **/
	private $storeCode;
	
	private $apiParas = array();
	
	public function setRegions($regions)
	{
		$this->regions = $regions;
		$this->apiParas["regions"] = $regions;
	}

	public function getRegions()
	{
		return $this->regions;
	}

	public function setStoreCode($storeCode)
	{
		$this->storeCode = $storeCode;
		$this->apiParas["store_code"] = $storeCode;
	}

	public function getStoreCode()
	{
		return $this->storeCode;
	}

	public function getApiMethodName()
	{
		return "taobao.region.warehouse.manage";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->regions,"regions");
		RequestCheckUtil::checkMaxListSize($this->regions,100,"regions");
		RequestCheckUtil::checkNotNull($this->storeCode,"storeCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
