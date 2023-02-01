<?php
class TempCompleteProviderFindTempCompletePageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.TempCompleteProvider.findTempCompletePage";
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
                                                        		                                    	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                        	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $afsApplyTimeBegin;
    	                        
	public function setAfsApplyTimeBegin($afsApplyTimeBegin){
		$this->afsApplyTimeBegin = $afsApplyTimeBegin;
         $this->apiParas["afsApplyTimeBegin"] = $afsApplyTimeBegin;
	}

	public function getAfsApplyTimeBegin(){
	  return $this->afsApplyTimeBegin;
	}

                        	                   			private $afsApplyTimeEnd;
    	                        
	public function setAfsApplyTimeEnd($afsApplyTimeEnd){
		$this->afsApplyTimeEnd = $afsApplyTimeEnd;
         $this->apiParas["afsApplyTimeEnd"] = $afsApplyTimeEnd;
	}

	public function getAfsApplyTimeEnd(){
	  return $this->afsApplyTimeEnd;
	}

                        	                   			private $afsServiceProcessResult;
    	                        
	public function setAfsServiceProcessResult($afsServiceProcessResult){
		$this->afsServiceProcessResult = $afsServiceProcessResult;
         $this->apiParas["afsServiceProcessResult"] = $afsServiceProcessResult;
	}

	public function getAfsServiceProcessResult(){
	  return $this->afsServiceProcessResult;
	}

                        	                   			private $waybill;
    	                        
	public function setWaybill($waybill){
		$this->waybill = $waybill;
         $this->apiParas["waybill"] = $waybill;
	}

	public function getWaybill(){
	  return $this->waybill;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $messageStatus;
    	                        
	public function setMessageStatus($messageStatus){
		$this->messageStatus = $messageStatus;
         $this->apiParas["messageStatus"] = $messageStatus;
	}

	public function getMessageStatus(){
	  return $this->messageStatus;
	}

                        	                   			private $searchType;
    	                        
	public function setSearchType($searchType){
		$this->searchType = $searchType;
         $this->apiParas["searchType"] = $searchType;
	}

	public function getSearchType(){
	  return $this->searchType;
	}

                                            		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                    	                   			private $afsCategoryIdPop;
    	                        
	public function setAfsCategoryIdPop($afsCategoryIdPop){
		$this->afsCategoryIdPop = $afsCategoryIdPop;
         $this->apiParas["afsCategoryIdPop"] = $afsCategoryIdPop;
	}

	public function getAfsCategoryIdPop(){
	  return $this->afsCategoryIdPop;
	}

                        	                   			private $verificationCode;
    	                        
	public function setVerificationCode($verificationCode){
		$this->verificationCode = $verificationCode;
         $this->apiParas["verificationCode"] = $verificationCode;
	}

	public function getVerificationCode(){
	  return $this->verificationCode;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                            }





        
 

