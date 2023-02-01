<?php
class PaimaiCreateAuctionGlobalWareTestRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paimai.createAuctionGlobalWareTest";
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
                                                        		                                    	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $bail;
    	                        
	public function setBail($bail){
		$this->bail = $bail;
         $this->apiParas["bail"] = $bail;
	}

	public function getBail(){
	  return $this->bail;
	}

                        	                   			private $initialPrice;
    	                        
	public function setInitialPrice($initialPrice){
		$this->initialPrice = $initialPrice;
         $this->apiParas["initialPrice"] = $initialPrice;
	}

	public function getInitialPrice(){
	  return $this->initialPrice;
	}

                        	                        	                        	                   			private $customsBelong;
    	                        
	public function setCustomsBelong($customsBelong){
		$this->customsBelong = $customsBelong;
         $this->apiParas["customsBelong"] = $customsBelong;
	}

	public function getCustomsBelong(){
	  return $this->customsBelong;
	}

                        	                   			private $commissionRatio;
    	                        
	public function setCommissionRatio($commissionRatio){
		$this->commissionRatio = $commissionRatio;
         $this->apiParas["commissionRatio"] = $commissionRatio;
	}

	public function getCommissionRatio(){
	  return $this->commissionRatio;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $location;
    	                        
	public function setLocation($location){
		$this->location = $location;
         $this->apiParas["location"] = $location;
	}

	public function getLocation(){
	  return $this->location;
	}

                        	                   			private $auctionType;
    	                        
	public function setAuctionType($auctionType){
		$this->auctionType = $auctionType;
         $this->apiParas["auctionType"] = $auctionType;
	}

	public function getAuctionType(){
	  return $this->auctionType;
	}

                        	                   			private $auctionWareType;
    	                        
	public function setAuctionWareType($auctionWareType){
		$this->auctionWareType = $auctionWareType;
         $this->apiParas["auctionWareType"] = $auctionWareType;
	}

	public function getAuctionWareType(){
	  return $this->auctionWareType;
	}

                        	                   			private $sortWeight;
    	                        
	public function setSortWeight($sortWeight){
		$this->sortWeight = $sortWeight;
         $this->apiParas["sortWeight"] = $sortWeight;
	}

	public function getSortWeight(){
	  return $this->sortWeight;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $auctionTimes;
    	                        
	public function setAuctionTimes($auctionTimes){
		$this->auctionTimes = $auctionTimes;
         $this->apiParas["auctionTimes"] = $auctionTimes;
	}

	public function getAuctionTimes(){
	  return $this->auctionTimes;
	}

                        	                   			private $auctionForm;
    	                        
	public function setAuctionForm($auctionForm){
		$this->auctionForm = $auctionForm;
         $this->apiParas["auctionForm"] = $auctionForm;
	}

	public function getAuctionForm(){
	  return $this->auctionForm;
	}

                        	                   			private $consultant;
    	                        
	public function setConsultant($consultant){
		$this->consultant = $consultant;
         $this->apiParas["consultant"] = $consultant;
	}

	public function getConsultant(){
	  return $this->consultant;
	}

                        	                   			private $consultTel;
    	                        
	public function setConsultTel($consultTel){
		$this->consultTel = $consultTel;
         $this->apiParas["consultTel"] = $consultTel;
	}

	public function getConsultTel(){
	  return $this->consultTel;
	}

                        	                   			private $limitPurchase;
    	                        
	public function setLimitPurchase($limitPurchase){
		$this->limitPurchase = $limitPurchase;
         $this->apiParas["limitPurchase"] = $limitPurchase;
	}

	public function getLimitPurchase(){
	  return $this->limitPurchase;
	}

                        	                   			private $loanSupport;
    	                        
	public function setLoanSupport($loanSupport){
		$this->loanSupport = $loanSupport;
         $this->apiParas["loanSupport"] = $loanSupport;
	}

	public function getLoanSupport(){
	  return $this->loanSupport;
	}

                        	                   			private $mobileDesc;
    	                        
	public function setMobileDesc($mobileDesc){
		$this->mobileDesc = $mobileDesc;
         $this->apiParas["mobileDesc"] = $mobileDesc;
	}

	public function getMobileDesc(){
	  return $this->mobileDesc;
	}

                        	                   			private $PCDesc;
    	                        
	public function setPCDesc($PCDesc){
		$this->PCDesc = $PCDesc;
         $this->apiParas["PCDesc"] = $PCDesc;
	}

	public function getPCDesc(){
	  return $this->PCDesc;
	}

                        	                   			private $reservedPrice;
    	                        
	public function setReservedPrice($reservedPrice){
		$this->reservedPrice = $reservedPrice;
         $this->apiParas["reservedPrice"] = $reservedPrice;
	}

	public function getReservedPrice(){
	  return $this->reservedPrice;
	}

                        	                   			private $incrType;
    	                        
	public function setIncrType($incrType){
		$this->incrType = $incrType;
         $this->apiParas["incrType"] = $incrType;
	}

	public function getIncrType(){
	  return $this->incrType;
	}

                        	                   			private $incrRangeStart;
    	                        
	public function setIncrRangeStart($incrRangeStart){
		$this->incrRangeStart = $incrRangeStart;
         $this->apiParas["incrRangeStart"] = $incrRangeStart;
	}

	public function getIncrRangeStart(){
	  return $this->incrRangeStart;
	}

                        	                   			private $incrRangeEnd;
    	                        
	public function setIncrRangeEnd($incrRangeEnd){
		$this->incrRangeEnd = $incrRangeEnd;
         $this->apiParas["incrRangeEnd"] = $incrRangeEnd;
	}

	public function getIncrRangeEnd(){
	  return $this->incrRangeEnd;
	}

                        	                   			private $delayPeriod;
    	                        
	public function setDelayPeriod($delayPeriod){
		$this->delayPeriod = $delayPeriod;
         $this->apiParas["delayPeriod"] = $delayPeriod;
	}

	public function getDelayPeriod(){
	  return $this->delayPeriod;
	}

                        	                   			private $reservedPriceRequired;
    	                        
	public function setReservedPriceRequired($reservedPriceRequired){
		$this->reservedPriceRequired = $reservedPriceRequired;
         $this->apiParas["reservedPriceRequired"] = $reservedPriceRequired;
	}

	public function getReservedPriceRequired(){
	  return $this->reservedPriceRequired;
	}

                        	                   			private $is7ToReturn;
    	                        
	public function setIs7ToReturn($is7ToReturn){
		$this->is7ToReturn = $is7ToReturn;
         $this->apiParas["is7ToReturn"] = $is7ToReturn;
	}

	public function getIs7ToReturn(){
	  return $this->is7ToReturn;
	}

                        	                   			private $isCertificate;
    	                        
	public function setIsCertificate($isCertificate){
		$this->isCertificate = $isCertificate;
         $this->apiParas["isCertificate"] = $isCertificate;
	}

	public function getIsCertificate(){
	  return $this->isCertificate;
	}

                        	                   			private $isAuthorize;
    	                        
	public function setIsAuthorize($isAuthorize){
		$this->isAuthorize = $isAuthorize;
         $this->apiParas["isAuthorize"] = $isAuthorize;
	}

	public function getIsAuthorize(){
	  return $this->isAuthorize;
	}

                        	                   			private $isOfflinePreviewCheck;
    	                        
	public function setIsOfflinePreviewCheck($isOfflinePreviewCheck){
		$this->isOfflinePreviewCheck = $isOfflinePreviewCheck;
         $this->apiParas["isOfflinePreviewCheck"] = $isOfflinePreviewCheck;
	}

	public function getIsOfflinePreviewCheck(){
	  return $this->isOfflinePreviewCheck;
	}

                        	                   			private $stockNum;
    	                        
	public function setStockNum($stockNum){
		$this->stockNum = $stockNum;
         $this->apiParas["stockNum"] = $stockNum;
	}

	public function getStockNum(){
	  return $this->stockNum;
	}

                        	                   			private $notes;
    	                        
	public function setNotes($notes){
		$this->notes = $notes;
         $this->apiParas["notes"] = $notes;
	}

	public function getNotes(){
	  return $this->notes;
	}

                        	                   	                    		private $wareImgs;
    	                        
	public function setWareImgs($wareImgs){
		$this->wareImgs = $wareImgs;
         $this->apiParas["wareImgs"] = $wareImgs;
	}

	public function getWareImgs(){
	  return $this->wareImgs;
	}

                        	                   			private $exteriorId;
    	                        
	public function setExteriorId($exteriorId){
		$this->exteriorId = $exteriorId;
         $this->apiParas["exteriorId"] = $exteriorId;
	}

	public function getExteriorId(){
	  return $this->exteriorId;
	}

                        	                   			private $evalPrice;
    	                        
	public function setEvalPrice($evalPrice){
		$this->evalPrice = $evalPrice;
         $this->apiParas["evalPrice"] = $evalPrice;
	}

	public function getEvalPrice(){
	  return $this->evalPrice;
	}

                        	                   			private $entrustStartTime;
    	                        
	public function setEntrustStartTime($entrustStartTime){
		$this->entrustStartTime = $entrustStartTime;
         $this->apiParas["entrustStartTime"] = $entrustStartTime;
	}

	public function getEntrustStartTime(){
	  return $this->entrustStartTime;
	}

                        	                   			private $entrustEndTime;
    	                        
	public function setEntrustEndTime($entrustEndTime){
		$this->entrustEndTime = $entrustEndTime;
         $this->apiParas["entrustEndTime"] = $entrustEndTime;
	}

	public function getEntrustEndTime(){
	  return $this->entrustEndTime;
	}

                        	                   			private $entrustLocation;
    	                        
	public function setEntrustLocation($entrustLocation){
		$this->entrustLocation = $entrustLocation;
         $this->apiParas["entrustLocation"] = $entrustLocation;
	}

	public function getEntrustLocation(){
	  return $this->entrustLocation;
	}

                        	                   			private $propStr;
    	                        
	public function setPropStr($propStr){
		$this->propStr = $propStr;
         $this->apiParas["propStr"] = $propStr;
	}

	public function getPropStr(){
	  return $this->propStr;
	}

                        	                   			private $tailOrderPayMode;
    	                        
	public function setTailOrderPayMode($tailOrderPayMode){
		$this->tailOrderPayMode = $tailOrderPayMode;
         $this->apiParas["tailOrderPayMode"] = $tailOrderPayMode;
	}

	public function getTailOrderPayMode(){
	  return $this->tailOrderPayMode;
	}

                        	                   			private $extendParam;
    	                        
	public function setExtendParam($extendParam){
		$this->extendParam = $extendParam;
         $this->apiParas["extendParam"] = $extendParam;
	}

	public function getExtendParam(){
	  return $this->extendParam;
	}

                            }





        
 

