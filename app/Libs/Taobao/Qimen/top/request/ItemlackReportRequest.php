<?php
/**
 * TOP API: taobao.qimen.itemlack.report request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class ItemlackReportRequest
{
	/** 
	 * 缺货回告创建时间(YYYY-MM-DD HH:mm:ss)
	 **/
	private $createTime;
	
	/** 
	 * ERP的发货单编码
	 **/
	private $deliveryOrderCode;
	
	/** 
	 * 仓库系统的发货单编码
	 **/
	private $deliveryOrderId;
	
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 缺货商品列表
	 **/
	private $items;
	
	/** 
	 * 外部业务编码(消息ID;用于去重;ISV对于同一请求;分配一个唯一性的编码。用来保证因为网络等原因导致重复传输;请求不 会被重复处理)
	 **/
	private $outBizCode;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库编码
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCreateTime($createTime)
	{
		$this->createTime = $createTime;
		$this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime()
	{
		return $this->createTime;
	}

	public function setDeliveryOrderCode($deliveryOrderCode)
	{
		$this->deliveryOrderCode = $deliveryOrderCode;
		$this->apiParas["deliveryOrderCode"] = $deliveryOrderCode;
	}

	public function getDeliveryOrderCode()
	{
		return $this->deliveryOrderCode;
	}

	public function setDeliveryOrderId($deliveryOrderId)
	{
		$this->deliveryOrderId = $deliveryOrderId;
		$this->apiParas["deliveryOrderId"] = $deliveryOrderId;
	}

	public function getDeliveryOrderId()
	{
		return $this->deliveryOrderId;
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

	public function setItems($items)
	{
		$this->items = $items;
		$this->apiParas["items"] = $items;
	}

	public function getItems()
	{
		return $this->items;
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

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
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
		return "taobao.qimen.itemlack.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->createTime,"createTime");
		RequestCheckUtil::checkMaxLength($this->createTime,19,"createTime");
		RequestCheckUtil::checkNotNull($this->deliveryOrderCode,"deliveryOrderCode");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderCode,50,"deliveryOrderCode");
		RequestCheckUtil::checkMaxLength($this->deliveryOrderId,50,"deliveryOrderId");
		RequestCheckUtil::checkNotNull($this->outBizCode,"outBizCode");
		RequestCheckUtil::checkMaxLength($this->outBizCode,50,"outBizCode");
		RequestCheckUtil::checkNotNull($this->warehouseCode,"warehouseCode");
		RequestCheckUtil::checkMaxLength($this->warehouseCode,50,"warehouseCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
