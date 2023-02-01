<?php
class AfsserviceWaitauditGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afsservice.waitaudit.get";
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

                        	                   			private $fetchPin;
    	                        
	public function setFetchPin($fetchPin){
		$this->fetchPin = $fetchPin;
         $this->apiParas["fetchPin"] = $fetchPin;
	}

	public function getFetchPin(){
	  return $this->fetchPin;
	}

                        	                   			private $pageNumber;
    	                        
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["pageNumber"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
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

                            }





        
 

