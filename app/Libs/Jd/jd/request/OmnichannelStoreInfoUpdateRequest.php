<?php
class OmnichannelStoreInfoUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnichannel.store.info.update";
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
                                                        		                                    	                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $storeFullAddress;
    	                        
	public function setStoreFullAddress($storeFullAddress){
		$this->storeFullAddress = $storeFullAddress;
         $this->apiParas["storeFullAddress"] = $storeFullAddress;
	}

	public function getStoreFullAddress(){
	  return $this->storeFullAddress;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $provinceCode;
    	                        
	public function setProvinceCode($provinceCode){
		$this->provinceCode = $provinceCode;
         $this->apiParas["provinceCode"] = $provinceCode;
	}

	public function getProvinceCode(){
	  return $this->provinceCode;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $countyCode;
    	                        
	public function setCountyCode($countyCode){
		$this->countyCode = $countyCode;
         $this->apiParas["countyCode"] = $countyCode;
	}

	public function getCountyCode(){
	  return $this->countyCode;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $townCode;
    	                        
	public function setTownCode($townCode){
		$this->townCode = $townCode;
         $this->apiParas["townCode"] = $townCode;
	}

	public function getTownCode(){
	  return $this->townCode;
	}

                        	                   			private $storeContactName;
    	                        
	public function setStoreContactName($storeContactName){
		$this->storeContactName = $storeContactName;
         $this->apiParas["storeContactName"] = $storeContactName;
	}

	public function getStoreContactName(){
	  return $this->storeContactName;
	}

                        	                   			private $storeContactPhone;
    	                        
	public function setStoreContactPhone($storeContactPhone){
		$this->storeContactPhone = $storeContactPhone;
         $this->apiParas["storeContactPhone"] = $storeContactPhone;
	}

	public function getStoreContactPhone(){
	  return $this->storeContactPhone;
	}

                        	                   			private $storeContactMail;
    	                        
	public function setStoreContactMail($storeContactMail){
		$this->storeContactMail = $storeContactMail;
         $this->apiParas["storeContactMail"] = $storeContactMail;
	}

	public function getStoreContactMail(){
	  return $this->storeContactMail;
	}

                        	                   			private $coverage;
    	                        
	public function setCoverage($coverage){
		$this->coverage = $coverage;
         $this->apiParas["coverage"] = $coverage;
	}

	public function getCoverage(){
	  return $this->coverage;
	}

                        	                   			private $companyUnitCreditCode;
    	                        
	public function setCompanyUnitCreditCode($companyUnitCreditCode){
		$this->companyUnitCreditCode = $companyUnitCreditCode;
         $this->apiParas["companyUnitCreditCode"] = $companyUnitCreditCode;
	}

	public function getCompanyUnitCreditCode(){
	  return $this->companyUnitCreditCode;
	}

                        	                   			private $longitude;
    	                        
	public function setLongitude($longitude){
		$this->longitude = $longitude;
         $this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude(){
	  return $this->longitude;
	}

                        	                   			private $latitude;
    	                        
	public function setLatitude($latitude){
		$this->latitude = $latitude;
         $this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude(){
	  return $this->latitude;
	}

                        	                   			private $isValid;
    	                        
	public function setIsValid($isValid){
		$this->isValid = $isValid;
         $this->apiParas["isValid"] = $isValid;
	}

	public function getIsValid(){
	  return $this->isValid;
	}

                        	                   			private $deliveryFlag;
    	                        
	public function setDeliveryFlag($deliveryFlag){
		$this->deliveryFlag = $deliveryFlag;
         $this->apiParas["deliveryFlag"] = $deliveryFlag;
	}

	public function getDeliveryFlag(){
	  return $this->deliveryFlag;
	}

                        	                   			private $pickupFlag;
    	                        
	public function setPickupFlag($pickupFlag){
		$this->pickupFlag = $pickupFlag;
         $this->apiParas["pickupFlag"] = $pickupFlag;
	}

	public function getPickupFlag(){
	  return $this->pickupFlag;
	}

                            }





        
 

