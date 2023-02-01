<?php
class LdopReceiveOrderInterceptRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.receive.order.intercept";
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
                                                        		                                    	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $deliveryId;
    	                        
	public function setDeliveryId($deliveryId){
		$this->deliveryId = $deliveryId;
         $this->apiParas["deliveryId"] = $deliveryId;
	}

	public function getDeliveryId(){
	  return $this->deliveryId;
	}

                        	                   			private $interceptReason;
    	                        
	public function setInterceptReason($interceptReason){
		$this->interceptReason = $interceptReason;
         $this->apiParas["interceptReason"] = $interceptReason;
	}

	public function getInterceptReason(){
	  return $this->interceptReason;
	}

                        	                        	                   			private $cancelOperatorCodeType;
    	                        
	public function setCancelOperatorCodeType($cancelOperatorCodeType){
		$this->cancelOperatorCodeType = $cancelOperatorCodeType;
         $this->apiParas["cancelOperatorCodeType"] = $cancelOperatorCodeType;
	}

	public function getCancelOperatorCodeType(){
	  return $this->cancelOperatorCodeType;
	}

                        	                        	                   			private $cancelTime;
    	                        
	public function setCancelTime($cancelTime){
		$this->cancelTime = $cancelTime;
         $this->apiParas["cancelTime"] = $cancelTime;
	}

	public function getCancelTime(){
	  return $this->cancelTime;
	}

                        	                        	                   			private $cancelOperator;
    	                        
	public function setCancelOperator($cancelOperator){
		$this->cancelOperator = $cancelOperator;
         $this->apiParas["cancelOperator"] = $cancelOperator;
	}

	public function getCancelOperator(){
	  return $this->cancelOperator;
	}

                            }





        
 

