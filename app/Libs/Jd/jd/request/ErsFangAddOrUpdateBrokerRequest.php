<?php
class ErsFangAddOrUpdateBrokerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdateBroker";
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
                                                        		                                    	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $extensionNum;
    	                        
	public function setExtensionNum($extensionNum){
		$this->extensionNum = $extensionNum;
         $this->apiParas["extensionNum"] = $extensionNum;
	}

	public function getExtensionNum(){
	  return $this->extensionNum;
	}

                        	                   			private $extensionPhone;
    	                        
	public function setExtensionPhone($extensionPhone){
		$this->extensionPhone = $extensionPhone;
         $this->apiParas["extensionPhone"] = $extensionPhone;
	}

	public function getExtensionPhone(){
	  return $this->extensionPhone;
	}

                        	                   			private $phoneNum;
    	                        
	public function setPhoneNum($phoneNum){
		$this->phoneNum = $phoneNum;
         $this->apiParas["phoneNum"] = $phoneNum;
	}

	public function getPhoneNum(){
	  return $this->phoneNum;
	}

                        	                   			private $headImg;
    	                        
	public function setHeadImg($headImg){
		$this->headImg = $headImg;
         $this->apiParas["headImg"] = $headImg;
	}

	public function getHeadImg(){
	  return $this->headImg;
	}

                        	                   			private $infoCard;
    	                        
	public function setInfoCard($infoCard){
		$this->infoCard = $infoCard;
         $this->apiParas["infoCard"] = $infoCard;
	}

	public function getInfoCard(){
	  return $this->infoCard;
	}

                        	                   			private $businessLicense;
    	                        
	public function setBusinessLicense($businessLicense){
		$this->businessLicense = $businessLicense;
         $this->apiParas["businessLicense"] = $businessLicense;
	}

	public function getBusinessLicense(){
	  return $this->businessLicense;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $areaName;
    	                        
	public function setAreaName($areaName){
		$this->areaName = $areaName;
         $this->apiParas["areaName"] = $areaName;
	}

	public function getAreaName(){
	  return $this->areaName;
	}

                        	                   			private $company;
    	                        
	public function setCompany($company){
		$this->company = $company;
         $this->apiParas["company"] = $company;
	}

	public function getCompany(){
	  return $this->company;
	}

                        	                   			private $tradingAreaId;
    	                        
	public function setTradingAreaId($tradingAreaId){
		$this->tradingAreaId = $tradingAreaId;
         $this->apiParas["tradingAreaId"] = $tradingAreaId;
	}

	public function getTradingAreaId(){
	  return $this->tradingAreaId;
	}

                        	                   			private $shop;
    	                        
	public function setShop($shop){
		$this->shop = $shop;
         $this->apiParas["shop"] = $shop;
	}

	public function getShop(){
	  return $this->shop;
	}

                        	                   			private $declaration;
    	                        
	public function setDeclaration($declaration){
		$this->declaration = $declaration;
         $this->apiParas["declaration"] = $declaration;
	}

	public function getDeclaration(){
	  return $this->declaration;
	}

                        	                   			private $speciality;
    	                        
	public function setSpeciality($speciality){
		$this->speciality = $speciality;
         $this->apiParas["speciality"] = $speciality;
	}

	public function getSpeciality(){
	  return $this->speciality;
	}

                        	                   			private $seniority;
    	                        
	public function setSeniority($seniority){
		$this->seniority = $seniority;
         $this->apiParas["seniority"] = $seniority;
	}

	public function getSeniority(){
	  return $this->seniority;
	}

                        	                   			private $workHours;
    	                        
	public function setWorkHours($workHours){
		$this->workHours = $workHours;
         $this->apiParas["workHours"] = $workHours;
	}

	public function getWorkHours(){
	  return $this->workHours;
	}

                        	                   			private $workingExperience;
    	                        
	public function setWorkingExperience($workingExperience){
		$this->workingExperience = $workingExperience;
         $this->apiParas["workingExperience"] = $workingExperience;
	}

	public function getWorkingExperience(){
	  return $this->workingExperience;
	}

                        	                   			private $brokerStatus;
    	                        
	public function setBrokerStatus($brokerStatus){
		$this->brokerStatus = $brokerStatus;
         $this->apiParas["brokerStatus"] = $brokerStatus;
	}

	public function getBrokerStatus(){
	  return $this->brokerStatus;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                            }





        
 

