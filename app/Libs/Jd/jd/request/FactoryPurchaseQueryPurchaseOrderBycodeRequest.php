<?php
class FactoryPurchaseQueryPurchaseOrderBycodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.factory.purchase.queryPurchaseOrderBycode";
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
                                                        		                                    	                   			private $factoryId;
    	                        
	public function setFactoryId($factoryId){
		$this->factoryId = $factoryId;
         $this->apiParas["factoryId"] = $factoryId;
	}

	public function getFactoryId(){
	  return $this->factoryId;
	}

                        	                        	                        	                   			private $personalKey;
    	                        
	public function setPersonalKey($personalKey){
		$this->personalKey = $personalKey;
         $this->apiParas["personalKey"] = $personalKey;
	}

	public function getPersonalKey(){
	  return $this->personalKey;
	}

                        	                   			private $ptId;
    	                        
	public function setPtId($ptId){
		$this->ptId = $ptId;
         $this->apiParas["ptId"] = $ptId;
	}

	public function getPtId(){
	  return $this->ptId;
	}

                                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

}





        
 

