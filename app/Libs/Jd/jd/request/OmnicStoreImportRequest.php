<?php
class OmnicStoreImportRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnic.store.import";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                        	                                            		                                    	                   			private $latitude;
    	                        
	public function setLatitude($latitude){
		$this->latitude = $latitude;
         $this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude(){
	  return $this->latitude;
	}

                        	                   			private $storeContactName;
    	                        
	public function setStoreContactName($storeContactName){
		$this->storeContactName = $storeContactName;
         $this->apiParas["storeContactName"] = $storeContactName;
	}

	public function getStoreContactName(){
	  return $this->storeContactName;
	}

                        	                   			private $supplierCode;
    	                        
	public function setSupplierCode($supplierCode){
		$this->supplierCode = $supplierCode;
         $this->apiParas["supplierCode"] = $supplierCode;
	}

	public function getSupplierCode(){
	  return $this->supplierCode;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $storeContactTelephone;
    	                        
	public function setStoreContactTelephone($storeContactTelephone){
		$this->storeContactTelephone = $storeContactTelephone;
         $this->apiParas["storeContactTelephone"] = $storeContactTelephone;
	}

	public function getStoreContactTelephone(){
	  return $this->storeContactTelephone;
	}

                        	                   			private $storeStatus;
    	                        
	public function setStoreStatus($storeStatus){
		$this->storeStatus = $storeStatus;
         $this->apiParas["storeStatus"] = $storeStatus;
	}

	public function getStoreStatus(){
	  return $this->storeStatus;
	}

                        	                   			private $mapDatum;
    	                        
	public function setMapDatum($mapDatum){
		$this->mapDatum = $mapDatum;
         $this->apiParas["mapDatum"] = $mapDatum;
	}

	public function getMapDatum(){
	  return $this->mapDatum;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $scopeType;
    	                        
	public function setScopeType($scopeType){
		$this->scopeType = $scopeType;
         $this->apiParas["scopeType"] = $scopeType;
	}

	public function getScopeType(){
	  return $this->scopeType;
	}

                        	                   			private $venderStoreName;
    	                        
	public function setVenderStoreName($venderStoreName){
		$this->venderStoreName = $venderStoreName;
         $this->apiParas["venderStoreName"] = $venderStoreName;
	}

	public function getVenderStoreName(){
	  return $this->venderStoreName;
	}

                        	                   			private $countyId;
    	                        
	public function setCountyId($countyId){
		$this->countyId = $countyId;
         $this->apiParas["countyId"] = $countyId;
	}

	public function getCountyId(){
	  return $this->countyId;
	}

                        	                   			private $storeFullAddress;
    	                        
	public function setStoreFullAddress($storeFullAddress){
		$this->storeFullAddress = $storeFullAddress;
         $this->apiParas["storeFullAddress"] = $storeFullAddress;
	}

	public function getStoreFullAddress(){
	  return $this->storeFullAddress;
	}

                        	                   			private $closeTime;
    	                        
	public function setCloseTime($closeTime){
		$this->closeTime = $closeTime;
         $this->apiParas["closeTime"] = $closeTime;
	}

	public function getCloseTime(){
	  return $this->closeTime;
	}

                        	                   			private $openTime;
    	                        
	public function setOpenTime($openTime){
		$this->openTime = $openTime;
         $this->apiParas["openTime"] = $openTime;
	}

	public function getOpenTime(){
	  return $this->openTime;
	}

                        	                   			private $longitude;
    	                        
	public function setLongitude($longitude){
		$this->longitude = $longitude;
         $this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude(){
	  return $this->longitude;
	}

                        	                   			private $countyName;
    	                        
	public function setCountyName($countyName){
		$this->countyName = $countyName;
         $this->apiParas["countyName"] = $countyName;
	}

	public function getCountyName(){
	  return $this->countyName;
	}

                        	                   			private $coverage;
    	                        
	public function setCoverage($coverage){
		$this->coverage = $coverage;
         $this->apiParas["coverage"] = $coverage;
	}

	public function getCoverage(){
	  return $this->coverage;
	}

                        	                   			private $supplierName;
    	                        
	public function setSupplierName($supplierName){
		$this->supplierName = $supplierName;
         $this->apiParas["supplierName"] = $supplierName;
	}

	public function getSupplierName(){
	  return $this->supplierName;
	}

                        	                   			private $townName;
    	                        
	public function setTownName($townName){
		$this->townName = $townName;
         $this->apiParas["townName"] = $townName;
	}

	public function getTownName(){
	  return $this->townName;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $storeContactPhone;
    	                        
	public function setStoreContactPhone($storeContactPhone){
		$this->storeContactPhone = $storeContactPhone;
         $this->apiParas["storeContactPhone"] = $storeContactPhone;
	}

	public function getStoreContactPhone(){
	  return $this->storeContactPhone;
	}

                        	                   			private $venderStoreId;
    	                        
	public function setVenderStoreId($venderStoreId){
		$this->venderStoreId = $venderStoreId;
         $this->apiParas["venderStoreId"] = $venderStoreId;
	}

	public function getVenderStoreId(){
	  return $this->venderStoreId;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                                                        }





        
 

