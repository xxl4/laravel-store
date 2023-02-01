<?php
/**
 * TOP API: taobao.qimen.orderprocess.report request
 * 
 * @author auto create
 * @since 1.0, 2018.07.26
 */
class OrderprocessReportRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 订单信息
	 **/
	private $order;
	
	/** 
	 * 订单处理信息
	 **/
	private $process;
	
	/** 
	 * 备注
	 **/
	private $remark;
	
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

	public function setOrder($order)
	{
		$this->order = $order;
		$this->apiParas["order"] = $order;
	}

	public function getOrder()
	{
		return $this->order;
	}

	public function setProcess($process)
	{
		$this->process = $process;
		$this->apiParas["process"] = $process;
	}

	public function getProcess()
	{
		return $this->process;
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
		return "taobao.qimen.orderprocess.report";
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
