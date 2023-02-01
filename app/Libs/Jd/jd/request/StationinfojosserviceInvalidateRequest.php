<?php
class StationinfojosserviceInvalidateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stationinfojosservice.invalidate";
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
                                                        		                                    	                   			private $companyCode;
    	                        
	public function setCompanyCode($companyCode){
		$this->companyCode = $companyCode;
         $this->apiParas["companyCode"] = $companyCode;
	}

	public function getCompanyCode(){
	  return $this->companyCode;
	}

                        	                   			private $stationCode;
    	                        
	public function setStationCode($stationCode){
		$this->stationCode = $stationCode;
         $this->apiParas["stationCode"] = $stationCode;
	}

	public function getStationCode(){
	  return $this->stationCode;
	}

                            }





        
 

