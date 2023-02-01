<?php
class OpenpresortRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.openpresort";
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
                                                        		                                    	                   			private $fullAddress;
    	                        
	public function setFullAddress($fullAddress){
		$this->fullAddress = $fullAddress;
         $this->apiParas["fullAddress"] = $fullAddress;
	}

	public function getFullAddress(){
	  return $this->fullAddress;
	}

                        	                   			private $companyCode;
    	                        
	public function setCompanyCode($companyCode){
		$this->companyCode = $companyCode;
         $this->apiParas["companyCode"] = $companyCode;
	}

	public function getCompanyCode(){
	  return $this->companyCode;
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





        
 

