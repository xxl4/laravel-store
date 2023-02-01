<?php
class StationinfojosserviceGetStationInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stationinfojosservice.getStationInfo";
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

                        	                   			private $stationName;
    	                        
	public function setStationName($stationName){
		$this->stationName = $stationName;
         $this->apiParas["stationName"] = $stationName;
	}

	public function getStationName(){
	  return $this->stationName;
	}

                        	                   			private $stationAddress;
    	                        
	public function setStationAddress($stationAddress){
		$this->stationAddress = $stationAddress;
         $this->apiParas["stationAddress"] = $stationAddress;
	}

	public function getStationAddress(){
	  return $this->stationAddress;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                            }





        
 

