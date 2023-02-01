<?php
class EclpCoTransportLasWayBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.transportLasWayBill";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
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

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
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

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $isFragile;
    	                        
	public function setIsFragile($isFragile){
		$this->isFragile = $isFragile;
         $this->apiParas["isFragile"] = $isFragile;
	}

	public function getIsFragile(){
	  return $this->isFragile;
	}

                        	                   			private $senderTc;
    	                        
	public function setSenderTc($senderTc){
		$this->senderTc = $senderTc;
         $this->apiParas["senderTc"] = $senderTc;
	}

	public function getSenderTc(){
	  return $this->senderTc;
	}

                        	                   			private $predictDate;
    	                        
	public function setPredictDate($predictDate){
		$this->predictDate = $predictDate;
         $this->apiParas["predictDate"] = $predictDate;
	}

	public function getPredictDate(){
	  return $this->predictDate;
	}

                        	                   			private $isJDOrder;
    	                        
	public function setIsJDOrder($isJDOrder){
		$this->isJDOrder = $isJDOrder;
         $this->apiParas["isJDOrder"] = $isJDOrder;
	}

	public function getIsJDOrder(){
	  return $this->isJDOrder;
	}

                        	                   			private $isCod;
    	                        
	public function setIsCod($isCod){
		$this->isCod = $isCod;
         $this->apiParas["isCod"] = $isCod;
	}

	public function getIsCod(){
	  return $this->isCod;
	}

                        	                   			private $receiveable;
    	                        
	public function setReceiveable($receiveable){
		$this->receiveable = $receiveable;
         $this->apiParas["receiveable"] = $receiveable;
	}

	public function getReceiveable(){
	  return $this->receiveable;
	}

                        	                   			private $onDoorPickUp;
    	                        
	public function setOnDoorPickUp($onDoorPickUp){
		$this->onDoorPickUp = $onDoorPickUp;
         $this->apiParas["onDoorPickUp"] = $onDoorPickUp;
	}

	public function getOnDoorPickUp(){
	  return $this->onDoorPickUp;
	}

                        	                   			private $pickUpDate;
    	                        
	public function setPickUpDate($pickUpDate){
		$this->pickUpDate = $pickUpDate;
         $this->apiParas["pickUpDate"] = $pickUpDate;
	}

	public function getPickUpDate(){
	  return $this->pickUpDate;
	}

                        	                   			private $isGuarantee;
    	                        
	public function setIsGuarantee($isGuarantee){
		$this->isGuarantee = $isGuarantee;
         $this->apiParas["isGuarantee"] = $isGuarantee;
	}

	public function getIsGuarantee(){
	  return $this->isGuarantee;
	}

                        	                   			private $guaranteeValue;
    	                        
	public function setGuaranteeValue($guaranteeValue){
		$this->guaranteeValue = $guaranteeValue;
         $this->apiParas["guaranteeValue"] = $guaranteeValue;
	}

	public function getGuaranteeValue(){
	  return $this->guaranteeValue;
	}

                        	                   			private $receiptFlag;
    	                        
	public function setReceiptFlag($receiptFlag){
		$this->receiptFlag = $receiptFlag;
         $this->apiParas["receiptFlag"] = $receiptFlag;
	}

	public function getReceiptFlag(){
	  return $this->receiptFlag;
	}

                        	                   			private $paperFrom;
    	                        
	public function setPaperFrom($paperFrom){
		$this->paperFrom = $paperFrom;
         $this->apiParas["paperFrom"] = $paperFrom;
	}

	public function getPaperFrom(){
	  return $this->paperFrom;
	}

                        	                   			private $rtnReceiverName;
    	                        
	public function setRtnReceiverName($rtnReceiverName){
		$this->rtnReceiverName = $rtnReceiverName;
         $this->apiParas["rtnReceiverName"] = $rtnReceiverName;
	}

	public function getRtnReceiverName(){
	  return $this->rtnReceiverName;
	}

                        	                   			private $rtnReceiverMobile;
    	                        
	public function setRtnReceiverMobile($rtnReceiverMobile){
		$this->rtnReceiverMobile = $rtnReceiverMobile;
         $this->apiParas["rtnReceiverMobile"] = $rtnReceiverMobile;
	}

	public function getRtnReceiverMobile(){
	  return $this->rtnReceiverMobile;
	}

                        	                   			private $rtnReceiverAddress;
    	                        
	public function setRtnReceiverAddress($rtnReceiverAddress){
		$this->rtnReceiverAddress = $rtnReceiverAddress;
         $this->apiParas["rtnReceiverAddress"] = $rtnReceiverAddress;
	}

	public function getRtnReceiverAddress(){
	  return $this->rtnReceiverAddress;
	}

                        	                   			private $rtnReceiverPhone;
    	                        
	public function setRtnReceiverPhone($rtnReceiverPhone){
		$this->rtnReceiverPhone = $rtnReceiverPhone;
         $this->apiParas["rtnReceiverPhone"] = $rtnReceiverPhone;
	}

	public function getRtnReceiverPhone(){
	  return $this->rtnReceiverPhone;
	}

                        	                   			private $productType;
    	                        
	public function setProductType($productType){
		$this->productType = $productType;
         $this->apiParas["productType"] = $productType;
	}

	public function getProductType(){
	  return $this->productType;
	}

                        	                   			private $pickUpForNew;
    	                        
	public function setPickUpForNew($pickUpForNew){
		$this->pickUpForNew = $pickUpForNew;
         $this->apiParas["pickUpForNew"] = $pickUpForNew;
	}

	public function getPickUpForNew(){
	  return $this->pickUpForNew;
	}

                        	                   			private $pickUpAbnormalNumber;
    	                        
	public function setPickUpAbnormalNumber($pickUpAbnormalNumber){
		$this->pickUpAbnormalNumber = $pickUpAbnormalNumber;
         $this->apiParas["pickUpAbnormalNumber"] = $pickUpAbnormalNumber;
	}

	public function getPickUpAbnormalNumber(){
	  return $this->pickUpAbnormalNumber;
	}

                        	                   			private $pickUpReceiverName;
    	                        
	public function setPickUpReceiverName($pickUpReceiverName){
		$this->pickUpReceiverName = $pickUpReceiverName;
         $this->apiParas["pickUpReceiverName"] = $pickUpReceiverName;
	}

	public function getPickUpReceiverName(){
	  return $this->pickUpReceiverName;
	}

                        	                   			private $pickUpReceiverMobile;
    	                        
	public function setPickUpReceiverMobile($pickUpReceiverMobile){
		$this->pickUpReceiverMobile = $pickUpReceiverMobile;
         $this->apiParas["pickUpReceiverMobile"] = $pickUpReceiverMobile;
	}

	public function getPickUpReceiverMobile(){
	  return $this->pickUpReceiverMobile;
	}

                        	                   			private $pickUpReceiverPhone;
    	                        
	public function setPickUpReceiverPhone($pickUpReceiverPhone){
		$this->pickUpReceiverPhone = $pickUpReceiverPhone;
         $this->apiParas["pickUpReceiverPhone"] = $pickUpReceiverPhone;
	}

	public function getPickUpReceiverPhone(){
	  return $this->pickUpReceiverPhone;
	}

                        	                   			private $pickUpReceiverCode;
    	                        
	public function setPickUpReceiverCode($pickUpReceiverCode){
		$this->pickUpReceiverCode = $pickUpReceiverCode;
         $this->apiParas["pickUpReceiverCode"] = $pickUpReceiverCode;
	}

	public function getPickUpReceiverCode(){
	  return $this->pickUpReceiverCode;
	}

                        	                   			private $pickUpReceiverAddress;
    	                        
	public function setPickUpReceiverAddress($pickUpReceiverAddress){
		$this->pickUpReceiverAddress = $pickUpReceiverAddress;
         $this->apiParas["pickUpReceiverAddress"] = $pickUpReceiverAddress;
	}

	public function getPickUpReceiverAddress(){
	  return $this->pickUpReceiverAddress;
	}

                        	                   			private $isSignPrint;
    	                        
	public function setIsSignPrint($isSignPrint){
		$this->isSignPrint = $isSignPrint;
         $this->apiParas["isSignPrint"] = $isSignPrint;
	}

	public function getIsSignPrint(){
	  return $this->isSignPrint;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $weight;
                              public function setWeight($weight ){
                 $this->weight=$weight;
                 $this->apiParas["weight"] = $weight;
              }

              public function getWeight(){
              	return $this->weight;
              }
                                                                                                                                                                                                                                                                                                                                              private $length;
                              public function setLength($length ){
                 $this->length=$length;
                 $this->apiParas["length"] = $length;
              }

              public function getLength(){
              	return $this->length;
              }
                                                                                                                                                                                                                                                                                                                                              private $width;
                              public function setWidth($width ){
                 $this->width=$width;
                 $this->apiParas["width"] = $width;
              }

              public function getWidth(){
              	return $this->width;
              }
                                                                                                                                                                                                                                                                                                                                              private $height;
                              public function setHeight($height ){
                 $this->height=$height;
                 $this->apiParas["height"] = $height;
              }

              public function getHeight(){
              	return $this->height;
              }
                                                                                                                                                                                                                                                                                                                                              private $installFlag;
                              public function setInstallFlag($installFlag ){
                 $this->installFlag=$installFlag;
                 $this->apiParas["installFlag"] = $installFlag;
              }

              public function getInstallFlag(){
              	return $this->installFlag;
              }
                                                                                                                                                                                                                                                                                                                                              private $thirdCategoryNo;
                              public function setThirdCategoryNo($thirdCategoryNo ){
                 $this->thirdCategoryNo=$thirdCategoryNo;
                 $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
              }

              public function getThirdCategoryNo(){
              	return $this->thirdCategoryNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $brandNo;
                              public function setBrandNo($brandNo ){
                 $this->brandNo=$brandNo;
                 $this->apiParas["brandNo"] = $brandNo;
              }

              public function getBrandNo(){
              	return $this->brandNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $productSku;
                              public function setProductSku($productSku ){
                 $this->productSku=$productSku;
                 $this->apiParas["productSku"] = $productSku;
              }

              public function getProductSku(){
              	return $this->productSku;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageName;
                              public function setPackageName($packageName ){
                 $this->packageName=$packageName;
                 $this->apiParas["packageName"] = $packageName;
              }

              public function getPackageName(){
              	return $this->packageName;
              }
                                                                                                                                                                                                                                                                                                                                              private $reverseLwb;
                              public function setReverseLwb($reverseLwb ){
                 $this->reverseLwb=$reverseLwb;
                 $this->apiParas["reverseLwb"] = $reverseLwb;
              }

              public function getReverseLwb(){
              	return $this->reverseLwb;
              }
                                                                                                                                                                                                                                                                                                                                              private $getOldService;
                              public function setGetOldService($getOldService ){
                 $this->getOldService=$getOldService;
                 $this->apiParas["getOldService"] = $getOldService;
              }

              public function getGetOldService(){
              	return $this->getOldService;
              }
                                                                                                                                                                                                                                                                                                                                              private $openBoxService;
                              public function setOpenBoxService($openBoxService ){
                 $this->openBoxService=$openBoxService;
                 $this->apiParas["openBoxService"] = $openBoxService;
              }

              public function getOpenBoxService(){
              	return $this->openBoxService;
              }
                                                                                                                                                                                                                                                                                                                                              private $deliveryInstallService;
                              public function setDeliveryInstallService($deliveryInstallService ){
                 $this->deliveryInstallService=$deliveryInstallService;
                 $this->apiParas["deliveryInstallService"] = $deliveryInstallService;
              }

              public function getDeliveryInstallService(){
              	return $this->deliveryInstallService;
              }
                                                                                                                                        	}





        
 

