<?php
class PresortWithReturnDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.presortWithReturnDetail";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $batchId;
                              public function setBatchId($batchId ){
                 $this->batchId=$batchId;
                 $this->apiParas["batchId"] = $batchId;
              }

              public function getBatchId(){
              	return $this->batchId;
              }
                                                                                                                                                                                                                                                                                                                                              private $responseCode;
                              public function setResponseCode($responseCode ){
                 $this->responseCode=$responseCode;
                 $this->apiParas["responseCode"] = $responseCode;
              }

              public function getResponseCode(){
              	return $this->responseCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $responseMessage;
                              public function setResponseMessage($responseMessage ){
                 $this->responseMessage=$responseMessage;
                 $this->apiParas["responseMessage"] = $responseMessage;
              }

              public function getResponseMessage(){
              	return $this->responseMessage;
              }
                                                                                                                                                                                                                                                                                                                                              private $provinceId;
                              public function setProvinceId($provinceId ){
                 $this->provinceId=$provinceId;
                 $this->apiParas["provinceId"] = $provinceId;
              }

              public function getProvinceId(){
              	return $this->provinceId;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityId;
                              public function setCityId($cityId ){
                 $this->cityId=$cityId;
                 $this->apiParas["cityId"] = $cityId;
              }

              public function getCityId(){
              	return $this->cityId;
              }
                                                                                                                                                                                                                                                                                                                                              private $countyId;
                              public function setCountyId($countyId ){
                 $this->countyId=$countyId;
                 $this->apiParas["countyId"] = $countyId;
              }

              public function getCountyId(){
              	return $this->countyId;
              }
                                                                                                                                                                                                                                                                                                                                              private $townId;
                              public function setTownId($townId ){
                 $this->townId=$townId;
                 $this->apiParas["townId"] = $townId;
              }

              public function getTownId(){
              	return $this->townId;
              }
                                                                                                                                                                                                                                                                                                                                              private $fullAddress;
                              public function setFullAddress($fullAddress ){
                 $this->fullAddress=$fullAddress;
                 $this->apiParas["fullAddress"] = $fullAddress;
              }

              public function getFullAddress(){
              	return $this->fullAddress;
              }
                                                                                                                                                                                                                                                                                                                                              private $companyCode;
                              public function setCompanyCode($companyCode ){
                 $this->companyCode=$companyCode;
                 $this->apiParas["companyCode"] = $companyCode;
              }

              public function getCompanyCode(){
              	return $this->companyCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $waybillCode;
                              public function setWaybillCode($waybillCode ){
                 $this->waybillCode=$waybillCode;
                 $this->apiParas["waybillCode"] = $waybillCode;
              }

              public function getWaybillCode(){
              	return $this->waybillCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $phoneCode;
                              public function setPhoneCode($phoneCode ){
                 $this->phoneCode=$phoneCode;
                 $this->apiParas["phoneCode"] = $phoneCode;
              }

              public function getPhoneCode(){
              	return $this->phoneCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $provinceName;
                              public function setProvinceName($provinceName ){
                 $this->provinceName=$provinceName;
                 $this->apiParas["provinceName"] = $provinceName;
              }

              public function getProvinceName(){
              	return $this->provinceName;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityName;
                              public function setCityName($cityName ){
                 $this->cityName=$cityName;
                 $this->apiParas["cityName"] = $cityName;
              }

              public function getCityName(){
              	return $this->cityName;
              }
                                                                                                                                                                                                                                                                                                                                              private $countyName;
                              public function setCountyName($countyName ){
                 $this->countyName=$countyName;
                 $this->apiParas["countyName"] = $countyName;
              }

              public function getCountyName(){
              	return $this->countyName;
              }
                                                                                                                                                                                                                                                                                                                                              private $townName;
                              public function setTownName($townName ){
                 $this->townName=$townName;
                 $this->apiParas["townName"] = $townName;
              }

              public function getTownName(){
              	return $this->townName;
              }
                                                                                                                                                                                                                                                                                                                                              private $lat;
                              public function setLat($lat ){
                 $this->lat=$lat;
                 $this->apiParas["lat"] = $lat;
              }

              public function getLat(){
              	return $this->lat;
              }
                                                                                                                                                                                                                                                                                                                                              private $lng;
                              public function setLng($lng ){
                 $this->lng=$lng;
                 $this->apiParas["lng"] = $lng;
              }

              public function getLng(){
              	return $this->lng;
              }
                                                                                                                }





        
 

