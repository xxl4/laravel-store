<?php
/**
 * TOP API: taobao.qimen.storeprocess.create request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class StoreprocessCreateRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 加工商品列表
	 **/
	private $materialitems;
	
	/** 
	 * 加工单创建时间(YYYY-MM-DD HH:MM:SS)
	 **/
	private $orderCreateTime;
	
	/** 
	 * 单据类型(CNJG=仓内加工作业单)
	 **/
	private $orderType;
	
	/** 
	 * 成品计划数量
	 **/
	private $planQty;
	
	/** 
	 * 计划加工时间(YYYY-MM-DD HH:MM:SS)
	 **/
	private $planTime;
	
	/** 
	 * 加工单编码
	 **/
	private $processOrderCode;
	
	/** 
	 * 商品列表
	 **/
	private $productitems;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 加工类型(1:仓内组合加工 2:仓内组合拆分)
	 **/
	private $serviceType;
	
	/** 
	 * 仓库编码(统仓统配等无需ERP指定仓储编码的情况填OTHER)
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setExtendProps($extendProps)
	{
		$this->extendProps = $extendProps;
		$this->apiParas["extendProps"] = $extendProps;
	}

	public function getExtendProps()
	{
		return $this->extendProps;
	}

	public function setMaterialitems($materialitems)
	{
		$this->materialitems = $materialitems;
		$this->apiParas["materialitems"] = $materialitems;
	}

	public function getMaterialitems()
	{
		return $this->materialitems;
	}

	public function setOrderCreateTime($orderCreateTime)
	{
		$this->orderCreateTime = $orderCreateTime;
		$this->apiParas["orderCreateTime"] = $orderCreateTime;
	}

	public function getOrderCreateTime()
	{
		return $this->orderCreateTime;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPlanQty($planQty)
	{
		$this->planQty = $planQty;
		$this->apiParas["planQty"] = $planQty;
	}

	public function getPlanQty()
	{
		return $this->planQty;
	}

	public function setPlanTime($planTime)
	{
		$this->planTime = $planTime;
		$this->apiParas["planTime"] = $planTime;
	}

	public function getPlanTime()
	{
		return $this->planTime;
	}

	public function setProcessOrderCode($processOrderCode)
	{
		$this->processOrderCode = $processOrderCode;
		$this->apiParas["processOrderCode"] = $processOrderCode;
	}

	public function getProcessOrderCode()
	{
		return $this->processOrderCode;
	}

	public function setProductitems($productitems)
	{
		$this->productitems = $productitems;
		$this->apiParas["productitems"] = $productitems;
	}

	public function getProductitems()
	{
		return $this->productitems;
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

	public function setServiceType($serviceType)
	{
		$this->serviceType = $serviceType;
		$this->apiParas["serviceType"] = $serviceType;
	}

	public function getServiceType()
	{
		return $this->serviceType;
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
		return "taobao.qimen.storeprocess.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCreateTime,"orderCreateTime");
		RequestCheckUtil::checkMaxLength($this->orderCreateTime,19,"orderCreateTime");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMaxLength($this->orderType,50,"orderType");
		RequestCheckUtil::checkNotNull($this->planTime,"planTime");
		RequestCheckUtil::checkMaxLength($this->planTime,19,"planTime");
		RequestCheckUtil::checkNotNull($this->processOrderCode,"processOrderCode");
		RequestCheckUtil::checkMaxLength($this->processOrderCode,50,"processOrderCode");
		RequestCheckUtil::checkMaxLength($this->remark,500,"remark");
		RequestCheckUtil::checkNotNull($this->serviceType,"serviceType");
		RequestCheckUtil::checkMaxLength($this->serviceType,50,"serviceType");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
