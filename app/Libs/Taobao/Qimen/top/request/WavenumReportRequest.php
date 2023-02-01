<?php
/**
 * TOP API: taobao.qimen.wavenum.report request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class WavenumReportRequest
{
	/** 
	 * 扩展属性
	 **/
	private $extendProps;
	
	/** 
	 * 发货单号
	 **/
	private $orders;
	
	/** 
	 * 波次号
	 **/
	private $waveNum;
	
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

	public function setOrders($orders)
	{
		$this->orders = $orders;
		$this->apiParas["orders"] = $orders;
	}

	public function getOrders()
	{
		return $this->orders;
	}

	public function setWaveNum($waveNum)
	{
		$this->waveNum = $waveNum;
		$this->apiParas["waveNum"] = $waveNum;
	}

	public function getWaveNum()
	{
		return $this->waveNum;
	}

	public function getApiMethodName()
	{
		return "taobao.qimen.wavenum.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->waveNum,"waveNum");
		RequestCheckUtil::checkMaxLength($this->waveNum,18,"waveNum");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
