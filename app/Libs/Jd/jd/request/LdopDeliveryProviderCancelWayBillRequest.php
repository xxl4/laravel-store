<?php
class LdopDeliveryProviderCancelWayBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.delivery.provider.cancelWayBill";
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
                                                        		                                    	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $cancelReason;
    	                        
	public function setCancelReason($cancelReason){
		$this->cancelReason = $cancelReason;
         $this->apiParas["cancelReason"] = $cancelReason;
	}

	public function getCancelReason(){
	  return $this->cancelReason;
	}

                        	                   			private $operatorName;
    	                        
	public function setOperatorName($operatorName){
		$this->operatorName = $operatorName;
         $this->apiParas["operatorName"] = $operatorName;
	}

	public function getOperatorName(){
	  return $this->operatorName;
	}

                            }





        
 

