<?php
class StationinfojosserviceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.stationinfojosservice.update";
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

                        	                   			private $orgCode;
    	                        
	public function setOrgCode($orgCode){
		$this->orgCode = $orgCode;
         $this->apiParas["orgCode"] = $orgCode;
	}

	public function getOrgCode(){
	  return $this->orgCode;
	}

                        	                   			private $lat;
    	                        
	public function setLat($lat){
		$this->lat = $lat;
         $this->apiParas["lat"] = $lat;
	}

	public function getLat(){
	  return $this->lat;
	}

                        	                   			private $lng;
    	                        
	public function setLng($lng){
		$this->lng = $lng;
         $this->apiParas["lng"] = $lng;
	}

	public function getLng(){
	  return $this->lng;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countryName;
    	                        
	public function setCountryName($countryName){
		$this->countryName = $countryName;
         $this->apiParas["countryName"] = $countryName;
	}

	public function getCountryName(){
	  return $this->countryName;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $orgName;
    	                        
	public function setOrgName($orgName){
		$this->orgName = $orgName;
         $this->apiParas["orgName"] = $orgName;
	}

	public function getOrgName(){
	  return $this->orgName;
	}

                        	                   			private $areaCode;
    	                        
	public function setAreaCode($areaCode){
		$this->areaCode = $areaCode;
         $this->apiParas["areaCode"] = $areaCode;
	}

	public function getAreaCode(){
	  return $this->areaCode;
	}

                        	                   			private $areaName;
    	                        
	public function setAreaName($areaName){
		$this->areaName = $areaName;
         $this->apiParas["areaName"] = $areaName;
	}

	public function getAreaName(){
	  return $this->areaName;
	}

                            }





        
 

