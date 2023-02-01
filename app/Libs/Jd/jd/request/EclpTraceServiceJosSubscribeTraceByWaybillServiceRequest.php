<?php
class EclpTraceServiceJosSubscribeTraceByWaybillServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.trace.service.jos.SubscribeTraceByWaybillService";
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
                                                        		                                    	                        	                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
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

                        	                   			private $sign;
    	                        
	public function setSign($sign){
		$this->sign = $sign;
         $this->apiParas["sign"] = $sign;
	}

	public function getSign(){
	  return $this->sign;
	}

                        	                   			private $t;
    	                        
	public function setT($t){
		$this->t = $t;
         $this->apiParas["t"] = $t;
	}

	public function getT(){
	  return $this->t;
	}

                            }





        
 

