<?php
/**
 * TOP API: taobao.qimen.wms.returnapply.report request
 * 
 * @author auto create
 * @since 1.0, 2018.01.24
 */
class WmsReturnapplyReportRequest
{
	/** 
	 * 缺货回告创建时间, string (19) , 必填
	 **/
	private $createDate;
	
	/** 
	 * 创建人
	 **/
	private $createEmp;
	
	/** 
	 * 运单号, string (50) , 必填
	 **/
	private $expressCode;
	
	/** 
	 * 商品列表
	 **/
	private $items;
	
	/** 
	 * 物流公司编码, string (50) , SF=顺丰、EMS=标准快递、EYB=经济快件、ZJS=宅急送、YTO=圆通  、ZTO=中通 (ZTO) 、HTKY=百世汇通、BSKY=百世快运、UC=优速、STO=申通、TTKDEX=天天快递  、QFKD=全峰、FAST=快捷、POSTB=邮政小包  、GTO=国通、YUNDA=韵达、JD=京东配送、DD=当当宅配、AMAZON=亚马逊物流、DBWL=德邦物流、DBKD=德邦快递、DBKY=德邦快运、RRS=日日顺、OTHER=其他，必填,  (只传英文编码)
	 **/
	private $logisticsCode;
	
	/** 
	 * 物流公司名称, string (200)
	 **/
	private $logisticsName;
	
	/** 
	 * ERP的发货单编码, string (50) , 必填
	 **/
	private $orderCode;
	
	/** 
	 * 仓库系统的发货单编码, string (50) , 条件必填
	 **/
	private $orderId;
	
	/** 
	 * 收货人信息
	 **/
	private $receiverInfo;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
	/** 
	 * 仓库编码, string (50)，必填
	 **/
	private $warehouseCode;
	
	private $apiParas = array();
	
	public function setCreateDate($createDate)
	{
		$this->createDate = $createDate;
		$this->apiParas["createDate"] = $createDate;
	}

	public function getCreateDate()
	{
		return $this->createDate;
	}

	public function setCreateEmp($createEmp)
	{
		$this->createEmp = $createEmp;
		$this->apiParas["createEmp"] = $createEmp;
	}

	public function getCreateEmp()
	{
		return $this->createEmp;
	}

	public function setExpressCode($expressCode)
	{
		$this->expressCode = $expressCode;
		$this->apiParas["expressCode"] = $expressCode;
	}

	public function getExpressCode()
	{
		return $this->expressCode;
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

	public function setLogisticsCode($logisticsCode)
	{
		$this->logisticsCode = $logisticsCode;
		$this->apiParas["logisticsCode"] = $logisticsCode;
	}

	public function getLogisticsCode()
	{
		return $this->logisticsCode;
	}

	public function setLogisticsName($logisticsName)
	{
		$this->logisticsName = $logisticsName;
		$this->apiParas["logisticsName"] = $logisticsName;
	}

	public function getLogisticsName()
	{
		return $this->logisticsName;
	}

	public function setOrderCode($orderCode)
	{
		$this->orderCode = $orderCode;
		$this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode()
	{
		return $this->orderCode;
	}

	public function setOrderId($orderId)
	{
		$this->orderId = $orderId;
		$this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId()
	{
		return $this->orderId;
	}

	public function setReceiverInfo($receiverInfo)
	{
		$this->receiverInfo = $receiverInfo;
		$this->apiParas["receiverInfo"] = $receiverInfo;
	}

	public function getReceiverInfo()
	{
		return $this->receiverInfo;
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
		return "taobao.qimen.wms.returnapply.report";
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
