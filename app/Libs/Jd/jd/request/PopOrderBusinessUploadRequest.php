<?php
class PopOrderBusinessUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.business.upload";
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
                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                        	                   			private $businessIds;
    	                        
	public function setBusinessIds($businessIds){
		$this->businessIds = $businessIds;
         $this->apiParas["businessIds"] = $businessIds;
	}

	public function getBusinessIds(){
	  return $this->businessIds;
	}

                        	                   			private $businessJson;
    	                        
	public function setBusinessJson($businessJson){
		$this->businessJson = $businessJson;
         $this->apiParas["businessJson"] = $businessJson;
	}

	public function getBusinessJson(){
	  return $this->businessJson;
	}

                                                    	}





        
 

