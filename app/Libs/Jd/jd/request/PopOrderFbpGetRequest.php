<?php
class PopOrderFbpGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.fbp.get";
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
                                                        		                                    	                        	                   			private $orderState;
    	                        
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["orderState"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                        	                   			private $colType;
    	                        
	public function setColType($colType){
		$this->colType = $colType;
         $this->apiParas["colType"] = $colType;
	}

	public function getColType(){
	  return $this->colType;
	}

                        	                   			private $optionalFields;
    	                        
	public function setOptionalFields($optionalFields){
		$this->optionalFields = $optionalFields;
         $this->apiParas["optionalFields"] = $optionalFields;
	}

	public function getOptionalFields(){
	  return $this->optionalFields;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                            }





        
 

