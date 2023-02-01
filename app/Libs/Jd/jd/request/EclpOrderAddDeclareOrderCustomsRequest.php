<?php
class EclpOrderAddDeclareOrderCustomsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.addDeclareOrderCustoms";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private  $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $platformName;
    	                        
	public function setPlatformName($platformName){
		$this->platformName = $platformName;
         $this->apiParas["platformName"] = $platformName;
	}

	public function getPlatformName(){
	  return $this->platformName;
	}

                        	                   			private $appType;
    	                        
	public function setAppType($appType){
		$this->appType = $appType;
         $this->apiParas["appType"] = $appType;
	}

	public function getAppType(){
	  return $this->appType;
	}

                        	                   			private $logisticsNo;
    	                        
	public function setLogisticsNo($logisticsNo){
		$this->logisticsNo = $logisticsNo;
         $this->apiParas["logisticsNo"] = $logisticsNo;
	}

	public function getLogisticsNo(){
	  return $this->logisticsNo;
	}

                        	                   			private $billSerialNo;
    	                        
	public function setBillSerialNo($billSerialNo){
		$this->billSerialNo = $billSerialNo;
         $this->apiParas["billSerialNo"] = $billSerialNo;
	}

	public function getBillSerialNo(){
	  return $this->billSerialNo;
	}

                        	                   			private $billNo;
    	                        
	public function setBillNo($billNo){
		$this->billNo = $billNo;
         $this->apiParas["billNo"] = $billNo;
	}

	public function getBillNo(){
	  return $this->billNo;
	}

                        	                   			private $freight;
    	                        
	public function setFreight($freight){
		$this->freight = $freight;
         $this->apiParas["freight"] = $freight;
	}

	public function getFreight(){
	  return $this->freight;
	}

                        	                   			private $insuredFee;
    	                        
	public function setInsuredFee($insuredFee){
		$this->insuredFee = $insuredFee;
         $this->apiParas["insuredFee"] = $insuredFee;
	}

	public function getInsuredFee(){
	  return $this->insuredFee;
	}

                        	                   			private $netWeight;
    	                        
	public function setNetWeight($netWeight){
		$this->netWeight = $netWeight;
         $this->apiParas["netWeight"] = $netWeight;
	}

	public function getNetWeight(){
	  return $this->netWeight;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $packNo;
    	                        
	public function setPackNo($packNo){
		$this->packNo = $packNo;
         $this->apiParas["packNo"] = $packNo;
	}

	public function getPackNo(){
	  return $this->packNo;
	}

                        	                   			private $worth;
    	                        
	public function setWorth($worth){
		$this->worth = $worth;
         $this->apiParas["worth"] = $worth;
	}

	public function getWorth(){
	  return $this->worth;
	}

                        	                   			private $goodsName;
    	                        
	public function setGoodsName($goodsName){
		$this->goodsName = $goodsName;
         $this->apiParas["goodsName"] = $goodsName;
	}

	public function getGoodsName(){
	  return $this->goodsName;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $shipper;
    	                        
	public function setShipper($shipper){
		$this->shipper = $shipper;
         $this->apiParas["shipper"] = $shipper;
	}

	public function getShipper(){
	  return $this->shipper;
	}

                        	                   			private $shipperAddress;
    	                        
	public function setShipperAddress($shipperAddress){
		$this->shipperAddress = $shipperAddress;
         $this->apiParas["shipperAddress"] = $shipperAddress;
	}

	public function getShipperAddress(){
	  return $this->shipperAddress;
	}

                        	                   			private $shipperTelephone;
    	                        
	public function setShipperTelephone($shipperTelephone){
		$this->shipperTelephone = $shipperTelephone;
         $this->apiParas["shipperTelephone"] = $shipperTelephone;
	}

	public function getShipperTelephone(){
	  return $this->shipperTelephone;
	}

                        	                   			private $shipperCountry;
    	                        
	public function setShipperCountry($shipperCountry){
		$this->shipperCountry = $shipperCountry;
         $this->apiParas["shipperCountry"] = $shipperCountry;
	}

	public function getShipperCountry(){
	  return $this->shipperCountry;
	}

                        	                   			private $consigneeCountry;
    	                        
	public function setConsigneeCountry($consigneeCountry){
		$this->consigneeCountry = $consigneeCountry;
         $this->apiParas["consigneeCountry"] = $consigneeCountry;
	}

	public function getConsigneeCountry(){
	  return $this->consigneeCountry;
	}

                        	                   			private $consigneeProvince;
    	                        
	public function setConsigneeProvince($consigneeProvince){
		$this->consigneeProvince = $consigneeProvince;
         $this->apiParas["consigneeProvince"] = $consigneeProvince;
	}

	public function getConsigneeProvince(){
	  return $this->consigneeProvince;
	}

                        	                   			private $consigneeCity;
    	                        
	public function setConsigneeCity($consigneeCity){
		$this->consigneeCity = $consigneeCity;
         $this->apiParas["consigneeCity"] = $consigneeCity;
	}

	public function getConsigneeCity(){
	  return $this->consigneeCity;
	}

                        	                   			private $consigneeDistrict;
    	                        
	public function setConsigneeDistrict($consigneeDistrict){
		$this->consigneeDistrict = $consigneeDistrict;
         $this->apiParas["consigneeDistrict"] = $consigneeDistrict;
	}

	public function getConsigneeDistrict(){
	  return $this->consigneeDistrict;
	}

                        	                   			private $consingee;
    	                        
	public function setConsingee($consingee){
		$this->consingee = $consingee;
         $this->apiParas["consingee"] = $consingee;
	}

	public function getConsingee(){
	  return $this->consingee;
	}

                        	                   			private $consigneeAddress;
    	                        
	public function setConsigneeAddress($consigneeAddress){
		$this->consigneeAddress = $consigneeAddress;
         $this->apiParas["consigneeAddress"] = $consigneeAddress;
	}

	public function getConsigneeAddress(){
	  return $this->consigneeAddress;
	}

                        	                   			private $consigneeTelephone;
    	                        
	public function setConsigneeTelephone($consigneeTelephone){
		$this->consigneeTelephone = $consigneeTelephone;
         $this->apiParas["consigneeTelephone"] = $consigneeTelephone;
	}

	public function getConsigneeTelephone(){
	  return $this->consigneeTelephone;
	}

                        	                   			private $buyerIdType;
    	                        
	public function setBuyerIdType($buyerIdType){
		$this->buyerIdType = $buyerIdType;
         $this->apiParas["buyerIdType"] = $buyerIdType;
	}

	public function getBuyerIdType(){
	  return $this->buyerIdType;
	}

                        	                   			private $buyerIdNumber;
    	                        
	public function setBuyerIdNumber($buyerIdNumber){
		$this->buyerIdNumber = $buyerIdNumber;
         $this->apiParas["buyerIdNumber"] = $buyerIdNumber;
	}

	public function getBuyerIdNumber(){
	  return $this->buyerIdNumber;
	}

                        	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                        	                   			private $customsCode;
    	                        
	public function setCustomsCode($customsCode){
		$this->customsCode = $customsCode;
         $this->apiParas["customsCode"] = $customsCode;
	}

	public function getCustomsCode(){
	  return $this->customsCode;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $isvSource;
    	                        
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
	}

                        	                   			private $pattern;
    	                        
	public function setPattern($pattern){
		$this->pattern = $pattern;
         $this->apiParas["pattern"] = $pattern;
	}

	public function getPattern(){
	  return $this->pattern;
	}

                        	                   			private $isvUUID;
    	                        
	public function setIsvUUID($isvUUID){
		$this->isvUUID = $isvUUID;
         $this->apiParas["isvUUID"] = $isvUUID;
	}

	public function getIsvUUID(){
	  return $this->isvUUID;
	}

                        	                   			private $platformType;
    	                        
	public function setPlatformType($platformType){
		$this->platformType = $platformType;
         $this->apiParas["platformType"] = $platformType;
	}

	public function getPlatformType(){
	  return $this->platformType;
	}

                        	                   			private $salesPlatformCreateTime;
    	                        
	public function setSalesPlatformCreateTime($salesPlatformCreateTime){
		$this->salesPlatformCreateTime = $salesPlatformCreateTime;
         $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
	}

	public function getSalesPlatformCreateTime(){
	  return $this->salesPlatformCreateTime;
	}

                        	                   			private $postType;
    	                        
	public function setPostType($postType){
		$this->postType = $postType;
         $this->apiParas["postType"] = $postType;
	}

	public function getPostType(){
	  return $this->postType;
	}

                        	                   			private $istax;
    	                        
	public function setIstax($istax){
		$this->istax = $istax;
         $this->apiParas["istax"] = $istax;
	}

	public function getIstax(){
	  return $this->istax;
	}

                        	                   			private $logisticsCode;
    	                        
	public function setLogisticsCode($logisticsCode){
		$this->logisticsCode = $logisticsCode;
         $this->apiParas["logisticsCode"] = $logisticsCode;
	}

	public function getLogisticsCode(){
	  return $this->logisticsCode;
	}

                        	                   			private $logisticsName;
    	                        
	public function setLogisticsName($logisticsName){
		$this->logisticsName = $logisticsName;
         $this->apiParas["logisticsName"] = $logisticsName;
	}

	public function getLogisticsName(){
	  return $this->logisticsName;
	}

                        	                   			private $isDelivery;
    	                        
	public function setIsDelivery($isDelivery){
		$this->isDelivery = $isDelivery;
         $this->apiParas["isDelivery"] = $isDelivery;
	}

	public function getIsDelivery(){
	  return $this->isDelivery;
	}

                        	                   			private $ebpCode;
    	                        
	public function setEbpCode($ebpCode){
		$this->ebpCode = $ebpCode;
         $this->apiParas["ebpCode"] = $ebpCode;
	}

	public function getEbpCode(){
	  return $this->ebpCode;
	}

                        	                   			private $ebpName;
    	                        
	public function setEbpName($ebpName){
		$this->ebpName = $ebpName;
         $this->apiParas["ebpName"] = $ebpName;
	}

	public function getEbpName(){
	  return $this->ebpName;
	}

                        	                   			private $ebcCode;
    	                        
	public function setEbcCode($ebcCode){
		$this->ebcCode = $ebcCode;
         $this->apiParas["ebcCode"] = $ebcCode;
	}

	public function getEbcCode(){
	  return $this->ebcCode;
	}

                        	                   			private $ebcName;
    	                        
	public function setEbcName($ebcName){
		$this->ebcName = $ebcName;
         $this->apiParas["ebcName"] = $ebcName;
	}

	public function getEbcName(){
	  return $this->ebcName;
	}

                        	                   			private $ebpCiqCode;
    	                        
	public function setEbpCiqCode($ebpCiqCode){
		$this->ebpCiqCode = $ebpCiqCode;
         $this->apiParas["ebpCiqCode"] = $ebpCiqCode;
	}

	public function getEbpCiqCode(){
	  return $this->ebpCiqCode;
	}

                        	                   			private $ebpCiqName;
    	                        
	public function setEbpCiqName($ebpCiqName){
		$this->ebpCiqName = $ebpCiqName;
         $this->apiParas["ebpCiqName"] = $ebpCiqName;
	}

	public function getEbpCiqName(){
	  return $this->ebpCiqName;
	}

                        	                   			private $ebcCiqCode;
    	                        
	public function setEbcCiqCode($ebcCiqCode){
		$this->ebcCiqCode = $ebcCiqCode;
         $this->apiParas["ebcCiqCode"] = $ebcCiqCode;
	}

	public function getEbcCiqCode(){
	  return $this->ebcCiqCode;
	}

                        	                   			private $ebcCiqName;
    	                        
	public function setEbcCiqName($ebcCiqName){
		$this->ebcCiqName = $ebcCiqName;
         $this->apiParas["ebcCiqName"] = $ebcCiqName;
	}

	public function getEbcCiqName(){
	  return $this->ebcCiqName;
	}

                                                    	}





        
 

