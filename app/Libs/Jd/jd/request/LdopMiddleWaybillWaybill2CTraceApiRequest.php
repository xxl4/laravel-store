<?php
class LdopMiddleWaybillWaybill2CTraceApiRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.middle.waybill.Waybill2CTraceApi";
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
                                                        		                                    	                   			private $tradeCode;
    	                        
	public function setTradeCode($tradeCode){
		$this->tradeCode = $tradeCode;
         $this->apiParas["tradeCode"] = $tradeCode;
	}

	public function getTradeCode(){
	  return $this->tradeCode;
	}

                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                            }





        
 

