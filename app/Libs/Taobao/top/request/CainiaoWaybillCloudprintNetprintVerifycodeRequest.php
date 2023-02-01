<?php
/**
 * TOP API: cainiao.waybill.cloudprint.netprint.verifycode request
 * 
 * @author auto create
 * @since 1.0, 2022.03.19
 */
class CainiaoWaybillCloudprintNetprintVerifycodeRequest
{
	/** 
	 * 请求
	 **/
	private $printer;
	
	private $apiParas = array();
	
	public function setPrinter($printer)
	{
		$this->printer = $printer;
		$this->apiParas["printer"] = $printer;
	}

	public function getPrinter()
	{
		return $this->printer;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.cloudprint.netprint.verifycode";
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
