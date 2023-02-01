<?php
/**
 * TOP API: taobao.qimen.storeprocess.confirm request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class StoreprocessConfirmRequest
{
	/** 
	 * 实际作业总数量
	 **/
	private $actualQty;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 加工商品列表
	 **/
	private $materialitems;
	
	/** 
	 * 加工单完成时间(YYYY-MM-DD HH:MM:SS)
	 **/
	private $orderCompleteTime;
	
	/** 
	 * 单据类型(CNJG=仓内加工作业单)
	 **/
	private $orderType;
	
	/** 
	 * 外部业务编码(一个合作伙伴中要求唯一多次确认时;每次传入要求唯一(一般传入WMS损益单据编码))
	 **/
	private $outBizCode;
	
	/** 
	 * 货主编码
	 **/
	private $ownerCode;
	
	/** 
	 * 加工单编码
	 **/
	private $processOrderCode;
	
	/** 
	 * 仓储系统加工单ID
	 **/
	private $processOrderId;
	
	/** 
	 * 加工商品列表
	 **/
	private $productitems;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	private $apiParas = array();
	
	public function setActualQty($actualQty)
	{
		$this->actualQty = $actualQty;
		$this->apiParas["actualQty"] = $actualQty;
	}

	public function getActualQty()
	{
		return $this->actualQty;
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

	public function setMaterialitems($materialitems)
	{
		$this->materialitems = $materialitems;
		$this->apiParas["materialitems"] = $materialitems;
	}

	public function getMaterialitems()
	{
		return $this->materialitems;
	}

	public function setOrderCompleteTime($orderCompleteTime)
	{
		$this->orderCompleteTime = $orderCompleteTime;
		$this->apiParas["orderCompleteTime"] = $orderCompleteTime;
	}

	public function getOrderCompleteTime()
	{
		return $this->orderCompleteTime;
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

	public function setOutBizCode($outBizCode)
	{
		$this->outBizCode = $outBizCode;
		$this->apiParas["outBizCode"] = $outBizCode;
	}

	public function getOutBizCode()
	{
		return $this->outBizCode;
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

	public function setProcessOrderCode($processOrderCode)
	{
		$this->processOrderCode = $processOrderCode;
		$this->apiParas["processOrderCode"] = $processOrderCode;
	}

	public function getProcessOrderCode()
	{
		return $this->processOrderCode;
	}

	public function setProcessOrderId($processOrderId)
	{
		$this->processOrderId = $processOrderId;
		$this->apiParas["processOrderId"] = $processOrderId;
	}

	public function getProcessOrderId()
	{
		return $this->processOrderId;
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

	public function getApiMethodName()
	{
		return "taobao.qimen.storeprocess.confirm";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->orderCompleteTime,"orderCompleteTime");
		RequestCheckUtil::checkMaxLength($this->orderCompleteTime,19,"orderCompleteTime");
		RequestCheckUtil::checkNotNull($this->orderType,"orderType");
		RequestCheckUtil::checkMaxLength($this->orderType,50,"orderType");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->outBizCode,50,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->ownerCode,50,"ownerCode");
		RequestCheckUtil::checkNotNull($this->processOrderCode,"processOrderCode");
		RequestCheckUtil::checkMaxLength($this->processOrderCode,50,"processOrderCode");
		RequestCheckUtil::checkMaxLength($this->processOrderId,50,"processOrderId");
		RequestCheckUtil::checkMaxLength($this->remark,500,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
