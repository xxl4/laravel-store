<?php
/**
 * TOP API: alibaba.wdk.marketing.open.data.relation.query request
 * 
 * @author auto create
 * @since 1.0, 2021.11.25
 */
class AlibabaWdkMarketingOpenDataRelationQueryRequest
{
	/** 
	 * 数据类型：WDK_MARKET:五道口营销
	 **/
	private $bizCode;
	
	/** 
	 * 外部数据Id
	 **/
	private $outDataIds;
	
	/** 
	 * 数据子类型：ACTIVITY:营销活动数据
	 **/
	private $subBizCode;
	
	private $apiParas = array();
	
	public function setBizCode($bizCode)
	{
		$this->bizCode = $bizCode;
		$this->apiParas["biz_code"] = $bizCode;
	}

	public function getBizCode()
	{
		return $this->bizCode;
	}

	public function setOutDataIds($outDataIds)
	{
		$this->outDataIds = $outDataIds;
		$this->apiParas["out_data_ids"] = $outDataIds;
	}

	public function getOutDataIds()
	{
		return $this->outDataIds;
	}

	public function setSubBizCode($subBizCode)
	{
		$this->subBizCode = $subBizCode;
		$this->apiParas["sub_biz_code"] = $subBizCode;
	}

	public function getSubBizCode()
	{
		return $this->subBizCode;
	}

	public function getApiMethodName()
	{
		return "alibaba.wdk.marketing.open.data.relation.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizCode,"bizCode");
		RequestCheckUtil::checkNotNull($this->subBizCode,"subBizCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
