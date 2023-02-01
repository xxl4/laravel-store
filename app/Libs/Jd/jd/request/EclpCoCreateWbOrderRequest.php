<?php
class EclpCoCreateWbOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.createWbOrder";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $senderNickName;
    	                        
	public function setSenderNickName($senderNickName){
		$this->senderNickName = $senderNickName;
         $this->apiParas["senderNickName"] = $senderNickName;
	}

	public function getSenderNickName(){
	  return $this->senderNickName;
	}

                        	                   			private $senderName;
    	                        
	public function setSenderName($senderName){
		$this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
	}

	public function getSenderName(){
	  return $this->senderName;
	}

                        	                   			private $senderMobile;
    	                        
	public function setSenderMobile($senderMobile){
		$this->senderMobile = $senderMobile;
         $this->apiParas["senderMobile"] = $senderMobile;
	}

	public function getSenderMobile(){
	  return $this->senderMobile;
	}

                        	                   			private $senderPhone;
    	                        
	public function setSenderPhone($senderPhone){
		$this->senderPhone = $senderPhone;
         $this->apiParas["senderPhone"] = $senderPhone;
	}

	public function getSenderPhone(){
	  return $this->senderPhone;
	}

                        	                   			private $senderProvince;
    	                        
	public function setSenderProvince($senderProvince){
		$this->senderProvince = $senderProvince;
         $this->apiParas["senderProvince"] = $senderProvince;
	}

	public function getSenderProvince(){
	  return $this->senderProvince;
	}

                        	                   			private $senderCity;
    	                        
	public function setSenderCity($senderCity){
		$this->senderCity = $senderCity;
         $this->apiParas["senderCity"] = $senderCity;
	}

	public function getSenderCity(){
	  return $this->senderCity;
	}

                        	                   			private $senderCounty;
    	                        
	public function setSenderCounty($senderCounty){
		$this->senderCounty = $senderCounty;
         $this->apiParas["senderCounty"] = $senderCounty;
	}

	public function getSenderCounty(){
	  return $this->senderCounty;
	}

                        	                   			private $senderTown;
    	                        
	public function setSenderTown($senderTown){
		$this->senderTown = $senderTown;
         $this->apiParas["senderTown"] = $senderTown;
	}

	public function getSenderTown(){
	  return $this->senderTown;
	}

                        	                   			private $senderProvinceName;
    	                        
	public function setSenderProvinceName($senderProvinceName){
		$this->senderProvinceName = $senderProvinceName;
         $this->apiParas["senderProvinceName"] = $senderProvinceName;
	}

	public function getSenderProvinceName(){
	  return $this->senderProvinceName;
	}

                        	                   			private $senderCityName;
    	                        
	public function setSenderCityName($senderCityName){
		$this->senderCityName = $senderCityName;
         $this->apiParas["senderCityName"] = $senderCityName;
	}

	public function getSenderCityName(){
	  return $this->senderCityName;
	}

                        	                   			private $senderCountyName;
    	                        
	public function setSenderCountyName($senderCountyName){
		$this->senderCountyName = $senderCountyName;
         $this->apiParas["senderCountyName"] = $senderCountyName;
	}

	public function getSenderCountyName(){
	  return $this->senderCountyName;
	}

                        	                   			private $senderTownName;
    	                        
	public function setSenderTownName($senderTownName){
		$this->senderTownName = $senderTownName;
         $this->apiParas["senderTownName"] = $senderTownName;
	}

	public function getSenderTownName(){
	  return $this->senderTownName;
	}

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
	}

                        	                   			private $receiverNickName;
    	                        
	public function setReceiverNickName($receiverNickName){
		$this->receiverNickName = $receiverNickName;
         $this->apiParas["receiverNickName"] = $receiverNickName;
	}

	public function getReceiverNickName(){
	  return $this->receiverNickName;
	}

                        	                   			private $receiverName;
    	                        
	public function setReceiverName($receiverName){
		$this->receiverName = $receiverName;
         $this->apiParas["receiverName"] = $receiverName;
	}

	public function getReceiverName(){
	  return $this->receiverName;
	}

                        	                   			private $receiverMobile;
    	                        
	public function setReceiverMobile($receiverMobile){
		$this->receiverMobile = $receiverMobile;
         $this->apiParas["receiverMobile"] = $receiverMobile;
	}

	public function getReceiverMobile(){
	  return $this->receiverMobile;
	}

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $receiverProvince;
    	                        
	public function setReceiverProvince($receiverProvince){
		$this->receiverProvince = $receiverProvince;
         $this->apiParas["receiverProvince"] = $receiverProvince;
	}

	public function getReceiverProvince(){
	  return $this->receiverProvince;
	}

                        	                   			private $receiverCity;
    	                        
	public function setReceiverCity($receiverCity){
		$this->receiverCity = $receiverCity;
         $this->apiParas["receiverCity"] = $receiverCity;
	}

	public function getReceiverCity(){
	  return $this->receiverCity;
	}

                        	                   			private $receiverCounty;
    	                        
	public function setReceiverCounty($receiverCounty){
		$this->receiverCounty = $receiverCounty;
         $this->apiParas["receiverCounty"] = $receiverCounty;
	}

	public function getReceiverCounty(){
	  return $this->receiverCounty;
	}

                        	                   			private $receiverTown;
    	                        
	public function setReceiverTown($receiverTown){
		$this->receiverTown = $receiverTown;
         $this->apiParas["receiverTown"] = $receiverTown;
	}

	public function getReceiverTown(){
	  return $this->receiverTown;
	}

                        	                   			private $receiverProvinceName;
    	                        
	public function setReceiverProvinceName($receiverProvinceName){
		$this->receiverProvinceName = $receiverProvinceName;
         $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
	}

	public function getReceiverProvinceName(){
	  return $this->receiverProvinceName;
	}

                        	                   			private $receiverCityName;
    	                        
	public function setReceiverCityName($receiverCityName){
		$this->receiverCityName = $receiverCityName;
         $this->apiParas["receiverCityName"] = $receiverCityName;
	}

	public function getReceiverCityName(){
	  return $this->receiverCityName;
	}

                        	                   			private $receiverCountyName;
    	                        
	public function setReceiverCountyName($receiverCountyName){
		$this->receiverCountyName = $receiverCountyName;
         $this->apiParas["receiverCountyName"] = $receiverCountyName;
	}

	public function getReceiverCountyName(){
	  return $this->receiverCountyName;
	}

                        	                   			private $receiverTownName;
    	                        
	public function setReceiverTownName($receiverTownName){
		$this->receiverTownName = $receiverTownName;
         $this->apiParas["receiverTownName"] = $receiverTownName;
	}

	public function getReceiverTownName(){
	  return $this->receiverTownName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $grossWeight;
    	                        
	public function setGrossWeight($grossWeight){
		$this->grossWeight = $grossWeight;
         $this->apiParas["grossWeight"] = $grossWeight;
	}

	public function getGrossWeight(){
	  return $this->grossWeight;
	}

                        	                   			private $grossVolume;
    	                        
	public function setGrossVolume($grossVolume){
		$this->grossVolume = $grossVolume;
         $this->apiParas["grossVolume"] = $grossVolume;
	}

	public function getGrossVolume(){
	  return $this->grossVolume;
	}

                        	                   			private $createTime;
    	                        
	public function setCreateTime($createTime){
		$this->createTime = $createTime;
         $this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime(){
	  return $this->createTime;
	}

                        	                   			private $createUser;
    	                        
	public function setCreateUser($createUser){
		$this->createUser = $createUser;
         $this->apiParas["createUser"] = $createUser;
	}

	public function getCreateUser(){
	  return $this->createUser;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $isCod;
    	                        
	public function setIsCod($isCod){
		$this->isCod = $isCod;
         $this->apiParas["isCod"] = $isCod;
	}

	public function getIsCod(){
	  return $this->isCod;
	}

                        	                   			private $vehicleTypeName;
    	                        
	public function setVehicleTypeName($vehicleTypeName){
		$this->vehicleTypeName = $vehicleTypeName;
         $this->apiParas["vehicleTypeName"] = $vehicleTypeName;
	}

	public function getVehicleTypeName(){
	  return $this->vehicleTypeName;
	}

                        	                   			private $vehicleTypeNo;
    	                        
	public function setVehicleTypeNo($vehicleTypeNo){
		$this->vehicleTypeNo = $vehicleTypeNo;
         $this->apiParas["vehicleTypeNo"] = $vehicleTypeNo;
	}

	public function getVehicleTypeNo(){
	  return $this->vehicleTypeNo;
	}

                        	                   			private $vehicleQty;
    	                        
	public function setVehicleQty($vehicleQty){
		$this->vehicleQty = $vehicleQty;
         $this->apiParas["vehicleQty"] = $vehicleQty;
	}

	public function getVehicleQty(){
	  return $this->vehicleQty;
	}

                        	                   			private $expressItemName;
    	                        
	public function setExpressItemName($expressItemName){
		$this->expressItemName = $expressItemName;
         $this->apiParas["expressItemName"] = $expressItemName;
	}

	public function getExpressItemName(){
	  return $this->expressItemName;
	}

                        	                   			private $expressItemQty;
    	                        
	public function setExpressItemQty($expressItemQty){
		$this->expressItemQty = $expressItemQty;
         $this->apiParas["expressItemQty"] = $expressItemQty;
	}

	public function getExpressItemQty(){
	  return $this->expressItemQty;
	}

                        	                   			private $signReceiptFlag;
    	                        
	public function setSignReceiptFlag($signReceiptFlag){
		$this->signReceiptFlag = $signReceiptFlag;
         $this->apiParas["signReceiptFlag"] = $signReceiptFlag;
	}

	public function getSignReceiptFlag(){
	  return $this->signReceiptFlag;
	}

                        	                   			private $deliveryReceiptFlag;
    	                        
	public function setDeliveryReceiptFlag($deliveryReceiptFlag){
		$this->deliveryReceiptFlag = $deliveryReceiptFlag;
         $this->apiParas["deliveryReceiptFlag"] = $deliveryReceiptFlag;
	}

	public function getDeliveryReceiptFlag(){
	  return $this->deliveryReceiptFlag;
	}

                        	                   			private $deliveryIntoWarehouse;
    	                        
	public function setDeliveryIntoWarehouse($deliveryIntoWarehouse){
		$this->deliveryIntoWarehouse = $deliveryIntoWarehouse;
         $this->apiParas["deliveryIntoWarehouse"] = $deliveryIntoWarehouse;
	}

	public function getDeliveryIntoWarehouse(){
	  return $this->deliveryIntoWarehouse;
	}

                        	                   			private $loadFlag;
    	                        
	public function setLoadFlag($loadFlag){
		$this->loadFlag = $loadFlag;
         $this->apiParas["loadFlag"] = $loadFlag;
	}

	public function getLoadFlag(){
	  return $this->loadFlag;
	}

                        	                   			private $unloadFlag;
    	                        
	public function setUnloadFlag($unloadFlag){
		$this->unloadFlag = $unloadFlag;
         $this->apiParas["unloadFlag"] = $unloadFlag;
	}

	public function getUnloadFlag(){
	  return $this->unloadFlag;
	}

                        	                   			private $receiptFlag;
    	                        
	public function setReceiptFlag($receiptFlag){
		$this->receiptFlag = $receiptFlag;
         $this->apiParas["receiptFlag"] = $receiptFlag;
	}

	public function getReceiptFlag(){
	  return $this->receiptFlag;
	}

                        	                   			private $fcFlag;
    	                        
	public function setFcFlag($fcFlag){
		$this->fcFlag = $fcFlag;
         $this->apiParas["fcFlag"] = $fcFlag;
	}

	public function getFcFlag(){
	  return $this->fcFlag;
	}

                        	                   			private $guaranteeValue;
    	                        
	public function setGuaranteeValue($guaranteeValue){
		$this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
	}

	public function getGuaranteeValue(){
	  return $this->guaranteeValue;
	}

                        	                   			private $pickupBeginTime;
    	                        
	public function setPickupBeginTime($pickupBeginTime){
		$this->pickupBeginTime = $pickupBeginTime;
         $this->apiParas["pickupBeginTime"] = $pickupBeginTime;
	}

	public function getPickupBeginTime(){
	  return $this->pickupBeginTime;
	}

                        	                   			private $pickupEndTime;
    	                        
	public function setPickupEndTime($pickupEndTime){
		$this->pickupEndTime = $pickupEndTime;
         $this->apiParas["pickupEndTime"] = $pickupEndTime;
	}

	public function getPickupEndTime(){
	  return $this->pickupEndTime;
	}

                        	                   			private $bussinessType;
    	                        
	public function setBussinessType($bussinessType){
		$this->bussinessType = $bussinessType;
         $this->apiParas["bussinessType"] = $bussinessType;
	}

	public function getBussinessType(){
	  return $this->bussinessType;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $senderCompany;
    	                        
	public function setSenderCompany($senderCompany){
		$this->senderCompany = $senderCompany;
         $this->apiParas["senderCompany"] = $senderCompany;
	}

	public function getSenderCompany(){
	  return $this->senderCompany;
	}

                        	                   			private $receiverCompany;
    	                        
	public function setReceiverCompany($receiverCompany){
		$this->receiverCompany = $receiverCompany;
         $this->apiParas["receiverCompany"] = $receiverCompany;
	}

	public function getReceiverCompany(){
	  return $this->receiverCompany;
	}

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $warehouseCode;
    	                        
	public function setWarehouseCode($warehouseCode){
		$this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode(){
	  return $this->warehouseCode;
	}

                        	                   			private $projectName;
    	                        
	public function setProjectName($projectName){
		$this->projectName = $projectName;
         $this->apiParas["projectName"] = $projectName;
	}

	public function getProjectName(){
	  return $this->projectName;
	}

                        	                   			private $actualSpId;
    	                        
	public function setActualSpId($actualSpId){
		$this->actualSpId = $actualSpId;
         $this->apiParas["actualSpId"] = $actualSpId;
	}

	public function getActualSpId(){
	  return $this->actualSpId;
	}

                        	                   			private $coldChainOn;
    	                        
	public function setColdChainOn($coldChainOn){
		$this->coldChainOn = $coldChainOn;
         $this->apiParas["coldChainOn"] = $coldChainOn;
	}

	public function getColdChainOn(){
	  return $this->coldChainOn;
	}

                        	                   			private $temptureNum;
    	                        
	public function setTemptureNum($temptureNum){
		$this->temptureNum = $temptureNum;
         $this->apiParas["temptureNum"] = $temptureNum;
	}

	public function getTemptureNum(){
	  return $this->temptureNum;
	}

                        	                   			private $qingzhenOn;
    	                        
	public function setQingzhenOn($qingzhenOn){
		$this->qingzhenOn = $qingzhenOn;
         $this->apiParas["qingzhenOn"] = $qingzhenOn;
	}

	public function getQingzhenOn(){
	  return $this->qingzhenOn;
	}

                        	                   			private $yiwuranOn;
    	                        
	public function setYiwuranOn($yiwuranOn){
		$this->yiwuranOn = $yiwuranOn;
         $this->apiParas["yiwuranOn"] = $yiwuranOn;
	}

	public function getYiwuranOn(){
	  return $this->yiwuranOn;
	}

                        	                   			private $inStorageNo;
    	                        
	public function setInStorageNo($inStorageNo){
		$this->inStorageNo = $inStorageNo;
         $this->apiParas["inStorageNo"] = $inStorageNo;
	}

	public function getInStorageNo(){
	  return $this->inStorageNo;
	}

                        	                   			private $inStorageTime;
    	                        
	public function setInStorageTime($inStorageTime){
		$this->inStorageTime = $inStorageTime;
         $this->apiParas["inStorageTime"] = $inStorageTime;
	}

	public function getInStorageTime(){
	  return $this->inStorageTime;
	}

                        	                   			private $inStorageRemark;
    	                        
	public function setInStorageRemark($inStorageRemark){
		$this->inStorageRemark = $inStorageRemark;
         $this->apiParas["inStorageRemark"] = $inStorageRemark;
	}

	public function getInStorageRemark(){
	  return $this->inStorageRemark;
	}

                        	                   			private $heavyUpstair;
    	                        
	public function setHeavyUpstair($heavyUpstair){
		$this->heavyUpstair = $heavyUpstair;
         $this->apiParas["heavyUpstair"] = $heavyUpstair;
	}

	public function getHeavyUpstair(){
	  return $this->heavyUpstair;
	}

                        	                   			private $wayBillCode;
    	                        
	public function setWayBillCode($wayBillCode){
		$this->wayBillCode = $wayBillCode;
         $this->apiParas["wayBillCode"] = $wayBillCode;
	}

	public function getWayBillCode(){
	  return $this->wayBillCode;
	}

                        	                   			private $spId;
    	                        
	public function setSpId($spId){
		$this->spId = $spId;
         $this->apiParas["spId"] = $spId;
	}

	public function getSpId(){
	  return $this->spId;
	}

                        	                   			private $saleOrderNo;
    	                        
	public function setSaleOrderNo($saleOrderNo){
		$this->saleOrderNo = $saleOrderNo;
         $this->apiParas["saleOrderNo"] = $saleOrderNo;
	}

	public function getSaleOrderNo(){
	  return $this->saleOrderNo;
	}

                        	                   			private $packageServiceOn;
    	                        
	public function setPackageServiceOn($packageServiceOn){
		$this->packageServiceOn = $packageServiceOn;
         $this->apiParas["packageServiceOn"] = $packageServiceOn;
	}

	public function getPackageServiceOn(){
	  return $this->packageServiceOn;
	}

                        	                   			private $deliveryMthd;
    	                        
	public function setDeliveryMthd($deliveryMthd){
		$this->deliveryMthd = $deliveryMthd;
         $this->apiParas["deliveryMthd"] = $deliveryMthd;
	}

	public function getDeliveryMthd(){
	  return $this->deliveryMthd;
	}

                        	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $packageNo;
                              public function setPackageNo($packageNo ){
                 $this->packageNo=$packageNo;
                 $this->apiParas["packageNo"] = $packageNo;
              }

              public function getPackageNo(){
              	return $this->packageNo;
              }
                                                                                                                                        	                   			private $clientNo;
    	                        
	public function setClientNo($clientNo){
		$this->clientNo = $clientNo;
         $this->apiParas["clientNo"] = $clientNo;
	}

	public function getClientNo(){
	  return $this->clientNo;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $siteCollect;
    	                        
	public function setSiteCollect($siteCollect){
		$this->siteCollect = $siteCollect;
         $this->apiParas["siteCollect"] = $siteCollect;
	}

	public function getSiteCollect(){
	  return $this->siteCollect;
	}

                        	                   			private $siteDelivery;
    	                        
	public function setSiteDelivery($siteDelivery){
		$this->siteDelivery = $siteDelivery;
         $this->apiParas["siteDelivery"] = $siteDelivery;
	}

	public function getSiteDelivery(){
	  return $this->siteDelivery;
	}

                        	                   			private $quarantineCert;
    	                        
	public function setQuarantineCert($quarantineCert){
		$this->quarantineCert = $quarantineCert;
         $this->apiParas["quarantineCert"] = $quarantineCert;
	}

	public function getQuarantineCert(){
	  return $this->quarantineCert;
	}

                        	                   			private $selfCollectSiteId;
    	                        
	public function setSelfCollectSiteId($selfCollectSiteId){
		$this->selfCollectSiteId = $selfCollectSiteId;
         $this->apiParas["selfCollectSiteId"] = $selfCollectSiteId;
	}

	public function getSelfCollectSiteId(){
	  return $this->selfCollectSiteId;
	}

                        	                   			private $selfDeliverySiteId;
    	                        
	public function setSelfDeliverySiteId($selfDeliverySiteId){
		$this->selfDeliverySiteId = $selfDeliverySiteId;
         $this->apiParas["selfDeliverySiteId"] = $selfDeliverySiteId;
	}

	public function getSelfDeliverySiteId(){
	  return $this->selfDeliverySiteId;
	}

                        	                   			private $expectedArrivalStartTime;
    	                        
	public function setExpectedArrivalStartTime($expectedArrivalStartTime){
		$this->expectedArrivalStartTime = $expectedArrivalStartTime;
         $this->apiParas["expectedArrivalStartTime"] = $expectedArrivalStartTime;
	}

	public function getExpectedArrivalStartTime(){
	  return $this->expectedArrivalStartTime;
	}

                        	                   			private $expectedArrivalEndTime;
    	                        
	public function setExpectedArrivalEndTime($expectedArrivalEndTime){
		$this->expectedArrivalEndTime = $expectedArrivalEndTime;
         $this->apiParas["expectedArrivalEndTime"] = $expectedArrivalEndTime;
	}

	public function getExpectedArrivalEndTime(){
	  return $this->expectedArrivalEndTime;
	}

                        	                   			private $vehicleOrderNo;
    	                        
	public function setVehicleOrderNo($vehicleOrderNo){
		$this->vehicleOrderNo = $vehicleOrderNo;
         $this->apiParas["vehicleOrderNo"] = $vehicleOrderNo;
	}

	public function getVehicleOrderNo(){
	  return $this->vehicleOrderNo;
	}

                        	                   			private $messageSign;
    	                        
	public function setMessageSign($messageSign){
		$this->messageSign = $messageSign;
         $this->apiParas["messageSign"] = $messageSign;
	}

	public function getMessageSign(){
	  return $this->messageSign;
	}

                        	                   			private $checkPreSort;
    	                        
	public function setCheckPreSort($checkPreSort){
		$this->checkPreSort = $checkPreSort;
         $this->apiParas["checkPreSort"] = $checkPreSort;
	}

	public function getCheckPreSort(){
	  return $this->checkPreSort;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $receiverNameSplit;
                              public function setReceiverNameSplit($receiverNameSplit ){
                 $this->receiverNameSplit=$receiverNameSplit;
                 $this->apiParas["receiverNameSplit"] = $receiverNameSplit;
              }

              public function getReceiverNameSplit(){
              	return $this->receiverNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverCompanySplit;
                              public function setReceiverCompanySplit($receiverCompanySplit ){
                 $this->receiverCompanySplit=$receiverCompanySplit;
                 $this->apiParas["receiverCompanySplit"] = $receiverCompanySplit;
              }

              public function getReceiverCompanySplit(){
              	return $this->receiverCompanySplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverMobileSplit;
                              public function setReceiverMobileSplit($receiverMobileSplit ){
                 $this->receiverMobileSplit=$receiverMobileSplit;
                 $this->apiParas["receiverMobileSplit"] = $receiverMobileSplit;
              }

              public function getReceiverMobileSplit(){
              	return $this->receiverMobileSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverPhoneSplit;
                              public function setReceiverPhoneSplit($receiverPhoneSplit ){
                 $this->receiverPhoneSplit=$receiverPhoneSplit;
                 $this->apiParas["receiverPhoneSplit"] = $receiverPhoneSplit;
              }

              public function getReceiverPhoneSplit(){
              	return $this->receiverPhoneSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverProvinceNameSplit;
                              public function setReceiverProvinceNameSplit($receiverProvinceNameSplit ){
                 $this->receiverProvinceNameSplit=$receiverProvinceNameSplit;
                 $this->apiParas["receiverProvinceNameSplit"] = $receiverProvinceNameSplit;
              }

              public function getReceiverProvinceNameSplit(){
              	return $this->receiverProvinceNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverProvinceSplit;
                              public function setReceiverProvinceSplit($receiverProvinceSplit ){
                 $this->receiverProvinceSplit=$receiverProvinceSplit;
                 $this->apiParas["receiverProvinceSplit"] = $receiverProvinceSplit;
              }

              public function getReceiverProvinceSplit(){
              	return $this->receiverProvinceSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverCityNameSplit;
                              public function setReceiverCityNameSplit($receiverCityNameSplit ){
                 $this->receiverCityNameSplit=$receiverCityNameSplit;
                 $this->apiParas["receiverCityNameSplit"] = $receiverCityNameSplit;
              }

              public function getReceiverCityNameSplit(){
              	return $this->receiverCityNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverCitySplit;
                              public function setReceiverCitySplit($receiverCitySplit ){
                 $this->receiverCitySplit=$receiverCitySplit;
                 $this->apiParas["receiverCitySplit"] = $receiverCitySplit;
              }

              public function getReceiverCitySplit(){
              	return $this->receiverCitySplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverCountyNameSplit;
                              public function setReceiverCountyNameSplit($receiverCountyNameSplit ){
                 $this->receiverCountyNameSplit=$receiverCountyNameSplit;
                 $this->apiParas["receiverCountyNameSplit"] = $receiverCountyNameSplit;
              }

              public function getReceiverCountyNameSplit(){
              	return $this->receiverCountyNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverCountySplit;
                              public function setReceiverCountySplit($receiverCountySplit ){
                 $this->receiverCountySplit=$receiverCountySplit;
                 $this->apiParas["receiverCountySplit"] = $receiverCountySplit;
              }

              public function getReceiverCountySplit(){
              	return $this->receiverCountySplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverTownNameSplit;
                              public function setReceiverTownNameSplit($receiverTownNameSplit ){
                 $this->receiverTownNameSplit=$receiverTownNameSplit;
                 $this->apiParas["receiverTownNameSplit"] = $receiverTownNameSplit;
              }

              public function getReceiverTownNameSplit(){
              	return $this->receiverTownNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverTownSplit;
                              public function setReceiverTownSplit($receiverTownSplit ){
                 $this->receiverTownSplit=$receiverTownSplit;
                 $this->apiParas["receiverTownSplit"] = $receiverTownSplit;
              }

              public function getReceiverTownSplit(){
              	return $this->receiverTownSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverAddressSplit;
                              public function setReceiverAddressSplit($receiverAddressSplit ){
                 $this->receiverAddressSplit=$receiverAddressSplit;
                 $this->apiParas["receiverAddressSplit"] = $receiverAddressSplit;
              }

              public function getReceiverAddressSplit(){
              	return $this->receiverAddressSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $expectedArrivalStartTimeSplit;
                              public function setExpectedArrivalStartTimeSplit($expectedArrivalStartTimeSplit ){
                 $this->expectedArrivalStartTimeSplit=$expectedArrivalStartTimeSplit;
                 $this->apiParas["expectedArrivalStartTimeSplit"] = $expectedArrivalStartTimeSplit;
              }

              public function getExpectedArrivalStartTimeSplit(){
              	return $this->expectedArrivalStartTimeSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $expectedArrivalEndTimeSplit;
                              public function setExpectedArrivalEndTimeSplit($expectedArrivalEndTimeSplit ){
                 $this->expectedArrivalEndTimeSplit=$expectedArrivalEndTimeSplit;
                 $this->apiParas["expectedArrivalEndTimeSplit"] = $expectedArrivalEndTimeSplit;
              }

              public function getExpectedArrivalEndTimeSplit(){
              	return $this->expectedArrivalEndTimeSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderNoSplit;
                              public function setOrderNoSplit($orderNoSplit ){
                 $this->orderNoSplit=$orderNoSplit;
                 $this->apiParas["orderNoSplit"] = $orderNoSplit;
              }

              public function getOrderNoSplit(){
              	return $this->orderNoSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $expressItemNameSplit;
                              public function setExpressItemNameSplit($expressItemNameSplit ){
                 $this->expressItemNameSplit=$expressItemNameSplit;
                 $this->apiParas["expressItemNameSplit"] = $expressItemNameSplit;
              }

              public function getExpressItemNameSplit(){
              	return $this->expressItemNameSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $grossVolumeSplit;
                              public function setGrossVolumeSplit($grossVolumeSplit ){
                 $this->grossVolumeSplit=$grossVolumeSplit;
                 $this->apiParas["grossVolumeSplit"] = $grossVolumeSplit;
              }

              public function getGrossVolumeSplit(){
              	return $this->grossVolumeSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $grossWeightSplit;
                              public function setGrossWeightSplit($grossWeightSplit ){
                 $this->grossWeightSplit=$grossWeightSplit;
                 $this->apiParas["grossWeightSplit"] = $grossWeightSplit;
              }

              public function getGrossWeightSplit(){
              	return $this->grossWeightSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $expressItemQtySplit;
                              public function setExpressItemQtySplit($expressItemQtySplit ){
                 $this->expressItemQtySplit=$expressItemQtySplit;
                 $this->apiParas["expressItemQtySplit"] = $expressItemQtySplit;
              }

              public function getExpressItemQtySplit(){
              	return $this->expressItemQtySplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $temptureNumSplit;
                              public function setTemptureNumSplit($temptureNumSplit ){
                 $this->temptureNumSplit=$temptureNumSplit;
                 $this->apiParas["temptureNumSplit"] = $temptureNumSplit;
              }

              public function getTemptureNumSplit(){
              	return $this->temptureNumSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $quarantineCertSplit;
                              public function setQuarantineCertSplit($quarantineCertSplit ){
                 $this->quarantineCertSplit=$quarantineCertSplit;
                 $this->apiParas["quarantineCertSplit"] = $quarantineCertSplit;
              }

              public function getQuarantineCertSplit(){
              	return $this->quarantineCertSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $deliveryIntoWarehouseSplit;
                              public function setDeliveryIntoWarehouseSplit($deliveryIntoWarehouseSplit ){
                 $this->deliveryIntoWarehouseSplit=$deliveryIntoWarehouseSplit;
                 $this->apiParas["deliveryIntoWarehouseSplit"] = $deliveryIntoWarehouseSplit;
              }

              public function getDeliveryIntoWarehouseSplit(){
              	return $this->deliveryIntoWarehouseSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $inStorageNoSplit;
                              public function setInStorageNoSplit($inStorageNoSplit ){
                 $this->inStorageNoSplit=$inStorageNoSplit;
                 $this->apiParas["inStorageNoSplit"] = $inStorageNoSplit;
              }

              public function getInStorageNoSplit(){
              	return $this->inStorageNoSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $inStorageTimeSplit;
                              public function setInStorageTimeSplit($inStorageTimeSplit ){
                 $this->inStorageTimeSplit=$inStorageTimeSplit;
                 $this->apiParas["inStorageTimeSplit"] = $inStorageTimeSplit;
              }

              public function getInStorageTimeSplit(){
              	return $this->inStorageTimeSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $inStorageRemarkSplit;
                              public function setInStorageRemarkSplit($inStorageRemarkSplit ){
                 $this->inStorageRemarkSplit=$inStorageRemarkSplit;
                 $this->apiParas["inStorageRemarkSplit"] = $inStorageRemarkSplit;
              }

              public function getInStorageRemarkSplit(){
              	return $this->inStorageRemarkSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $loadFlagSplit;
                              public function setLoadFlagSplit($loadFlagSplit ){
                 $this->loadFlagSplit=$loadFlagSplit;
                 $this->apiParas["loadFlagSplit"] = $loadFlagSplit;
              }

              public function getLoadFlagSplit(){
              	return $this->loadFlagSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $unloadFlagSplit;
                              public function setUnloadFlagSplit($unloadFlagSplit ){
                 $this->unloadFlagSplit=$unloadFlagSplit;
                 $this->apiParas["unloadFlagSplit"] = $unloadFlagSplit;
              }

              public function getUnloadFlagSplit(){
              	return $this->unloadFlagSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $remarkSplit;
                              public function setRemarkSplit($remarkSplit ){
                 $this->remarkSplit=$remarkSplit;
                 $this->apiParas["remarkSplit"] = $remarkSplit;
              }

              public function getRemarkSplit(){
              	return $this->remarkSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageModelNosSplit;
                              public function setPackageModelNosSplit($packageModelNosSplit ){
                 $this->packageModelNosSplit=$packageModelNosSplit;
                 $this->apiParas["packageModelNosSplit"] = $packageModelNosSplit;
              }

              public function getPackageModelNosSplit(){
              	return $this->packageModelNosSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $qingzhenOnSplit;
                              public function setQingzhenOnSplit($qingzhenOnSplit ){
                 $this->qingzhenOnSplit=$qingzhenOnSplit;
                 $this->apiParas["qingzhenOnSplit"] = $qingzhenOnSplit;
              }

              public function getQingzhenOnSplit(){
              	return $this->qingzhenOnSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $yiwuranOnSplit;
                              public function setYiwuranOnSplit($yiwuranOnSplit ){
                 $this->yiwuranOnSplit=$yiwuranOnSplit;
                 $this->apiParas["yiwuranOnSplit"] = $yiwuranOnSplit;
              }

              public function getYiwuranOnSplit(){
              	return $this->yiwuranOnSplit;
              }
                                                                                                                                                                                                                                                                                                                                              private $receiverNickNameSplit;
                              public function setReceiverNickNameSplit($receiverNickNameSplit ){
                 $this->receiverNickNameSplit=$receiverNickNameSplit;
                 $this->apiParas["receiverNickNameSplit"] = $receiverNickNameSplit;
              }

              public function getReceiverNickNameSplit(){
              	return $this->receiverNickNameSplit;
              }
                                                                                                                                                                    	}





        
 

