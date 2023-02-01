<?php
/**
 * TOP API: cainiao.waybill.cloudprint.netprint.print request
 * 
 * @author auto create
 * @since 1.0, 2022.03.19
 */
class CainiaoWaybillCloudprintNetprintPrintRequest
{
	/** 
	 * 请求
	 **/
	private $printerPrintData;
	
	private $apiParas = array();
	
	public function setPrinterPrintData($printerPrintData)
	{
		$this->printerPrintData = $printerPrintData;
		$this->apiParas["printer_print_data"] = $printerPrintData;
	}

	public function getPrinterPrintData()
	{
		return $this->printerPrintData;
	}

	public function getApiMethodName()
	{
		return "cainiao.waybill.cloudprint.netprint.print";
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
