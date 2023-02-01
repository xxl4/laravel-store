<?php
/**
 * TOP API: taobao.qimen.deliveryordersum.query request
 * 
 * @author auto create
 * @since 1.0, 2020.05.13
 */
class DeliveryordersumQueryRequest
{
	/** 
	 * 复核时间
	 **/
	private $checkTime;
	
	/** 
	 * 出库结束时间
	 **/
	private $deliveryEndTime;
	
	/** 
	 * 出库开始时间
	 **/
	private $deliveryStartTime;
	
	/** 
	 * 订单下载结束时间
	 **/
	private $downloadEndTime;
	
	/** 
	 * 订单下载开始时间
	 **/
	private $downloadStartTime;
	
	/** 
	 * 货主编码，string（50）
	 **/
	private $ownerCode;
	
	/** 
	 * 当前页(必填)
	 **/
	private $page;
	
	/** 
	 * 每页显示条数(必填)
	 **/
	private $pageSize;
	
	/** 
	 * 支付结束时间
	 **/
	private $payEndTime;
	
	/** 
	 * 支付开始时间
	 **/
	private $payStartTime;
	
	/** 
	 * 订单来源平台编码, string (50) , 必填,TB= 淘宝 、TM=天猫 、JD=京东、DD=当当、PP=拍拍、YX=易讯、EBAY=ebay、QQ=QQ网购、AMAZON=亚马逊、SN=苏宁、GM=国美、WPH=唯品会、JM=聚美、LF=乐蜂、MGJ=蘑菇街、JS=聚尚、PX=拍鞋、YT=银泰、YHD=1号店、VANCL=凡客、YL=邮乐、YG=优购、1688=阿里巴巴、POS=POS门店、MIA=蜜芽、GW=商家官网、CT=村淘、YJWD=云集微店、OTHERS=其他,  (只传英文编码)
	 **/
	private $sourcePlatformCode;
	
	/** 
	 * 淘系/非淘系
	 **/
	private $sourceType;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCheckTime($checkTime)
	{
		$this->checkTime = $checkTime;
		$this->apiParas["checkTime"] = $checkTime;
	}

	public function getCheckTime()
	{
		return $this->checkTime;
	}

	public function setDeliveryEndTime($deliveryEndTime)
	{
		$this->deliveryEndTime = $deliveryEndTime;
		$this->apiParas["deliveryEndTime"] = $deliveryEndTime;
	}

	public function getDeliveryEndTime()
	{
		return $this->deliveryEndTime;
	}

	public function setDeliveryStartTime($deliveryStartTime)
	{
		$this->deliveryStartTime = $deliveryStartTime;
		$this->apiParas["deliveryStartTime"] = $deliveryStartTime;
	}

	public function getDeliveryStartTime()
	{
		return $this->deliveryStartTime;
	}

	public function setDownloadEndTime($downloadEndTime)
	{
		$this->downloadEndTime = $downloadEndTime;
		$this->apiParas["downloadEndTime"] = $downloadEndTime;
	}

	public function getDownloadEndTime()
	{
		return $this->downloadEndTime;
	}

	public function setDownloadStartTime($downloadStartTime)
	{
		$this->downloadStartTime = $downloadStartTime;
		$this->apiParas["downloadStartTime"] = $downloadStartTime;
	}

	public function getDownloadStartTime()
	{
		return $this->downloadStartTime;
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

	public function setPage($page)
	{
		$this->page = $page;
		$this->apiParas["page"] = $page;
	}

	public function getPage()
	{
		return $this->page;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setPayEndTime($payEndTime)
	{
		$this->payEndTime = $payEndTime;
		$this->apiParas["payEndTime"] = $payEndTime;
	}

	public function getPayEndTime()
	{
		return $this->payEndTime;
	}

	public function setPayStartTime($payStartTime)
	{
		$this->payStartTime = $payStartTime;
		$this->apiParas["payStartTime"] = $payStartTime;
	}

	public function getPayStartTime()
	{
		return $this->payStartTime;
	}

	public function setSourcePlatformCode($sourcePlatformCode)
	{
		$this->sourcePlatformCode = $sourcePlatformCode;
		$this->apiParas["sourcePlatformCode"] = $sourcePlatformCode;
	}

	public function getSourcePlatformCode()
	{
		return $this->sourcePlatformCode;
	}

	public function setSourceType($sourceType)
	{
		$this->sourceType = $sourceType;
		$this->apiParas["sourceType"] = $sourceType;
	}

	public function getSourceType()
	{
		return $this->sourceType;
	}

	public function setWarehouseCode($warehouseCode)
	{
		$this->warehouseCode = $warehouseCode;
		$this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode()
	{
		return $this->warehouseCode;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.deliveryordersum.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->checkTime,"checkTime");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
