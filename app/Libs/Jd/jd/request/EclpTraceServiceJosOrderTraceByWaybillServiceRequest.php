<?php
class EclpTraceServiceJosOrderTraceByWaybillServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.trace.service.jos.OrderTraceByWaybillService";
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
                                                        		                                    	                   			private $waybillId;
    	                        
	public function setWaybillId($waybillId){
		$this->waybillId = $waybillId;
         $this->apiParas["waybillId"] = $waybillId;
	}

	public function getWaybillId(){
	  return $this->waybillId;
	}

                        	                   			private $carrierCode;
    	                        
	public function setCarrierCode($carrierCode){
		$this->carrierCode = $carrierCode;
         $this->apiParas["carrierCode"] = $carrierCode;
	}

	public function getCarrierCode(){
	  return $this->carrierCode;
	}

                        	                   			private $role;
    	                        
	public function setRole($role){
		$this->role = $role;
         $this->apiParas["role"] = $role;
	}

	public function getRole(){
	  return $this->role;
	}

                        	                   			private $userId;
    	                        
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["userId"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                        	                            }





        
 

