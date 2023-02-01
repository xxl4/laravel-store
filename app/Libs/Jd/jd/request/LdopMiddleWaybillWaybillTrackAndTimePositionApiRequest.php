<?php
class LdopMiddleWaybillWaybillTrackAndTimePositionApiRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.middle.waybill.WaybillTrackAndTimePositionApi";
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
                                                        		                                    	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $gpsTime;
    	                        
	public function setGpsTime($gpsTime){
		$this->gpsTime = $gpsTime;
         $this->apiParas["gpsTime"] = $gpsTime;
	}

	public function getGpsTime(){
	  return $this->gpsTime;
	}

                        	                   			private $customerCode;
    	                        
	public function setCustomerCode($customerCode){
		$this->customerCode = $customerCode;
         $this->apiParas["customerCode"] = $customerCode;
	}

	public function getCustomerCode(){
	  return $this->customerCode;
	}

                            }





        
 

