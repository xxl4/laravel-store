<?php
class ErsFangAddOrUpdateChannelRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdateChannel";
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

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $channelName;
    	                        
	public function setChannelName($channelName){
		$this->channelName = $channelName;
         $this->apiParas["channelName"] = $channelName;
	}

	public function getChannelName(){
	  return $this->channelName;
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

                        	                   			private $companyLogo;
    	                        
	public function setCompanyLogo($companyLogo){
		$this->companyLogo = $companyLogo;
         $this->apiParas["companyLogo"] = $companyLogo;
	}

	public function getCompanyLogo(){
	  return $this->companyLogo;
	}

                        	                   			private $companyDes;
    	                        
	public function setCompanyDes($companyDes){
		$this->companyDes = $companyDes;
         $this->apiParas["companyDes"] = $companyDes;
	}

	public function getCompanyDes(){
	  return $this->companyDes;
	}

                        	                   			private $purAgentRate;
    	                        
	public function setPurAgentRate($purAgentRate){
		$this->purAgentRate = $purAgentRate;
         $this->apiParas["purAgentRate"] = $purAgentRate;
	}

	public function getPurAgentRate(){
	  return $this->purAgentRate;
	}

                        	                   			private $sellAgentRate;
    	                        
	public function setSellAgentRate($sellAgentRate){
		$this->sellAgentRate = $sellAgentRate;
         $this->apiParas["sellAgentRate"] = $sellAgentRate;
	}

	public function getSellAgentRate(){
	  return $this->sellAgentRate;
	}

                        	                   			private $purCagentDes;
    	                        
	public function setPurCagentDes($purCagentDes){
		$this->purCagentDes = $purCagentDes;
         $this->apiParas["purCagentDes"] = $purCagentDes;
	}

	public function getPurCagentDes(){
	  return $this->purCagentDes;
	}

                        	                   			private $sellCagentDes;
    	                        
	public function setSellCagentDes($sellCagentDes){
		$this->sellCagentDes = $sellCagentDes;
         $this->apiParas["sellCagentDes"] = $sellCagentDes;
	}

	public function getSellCagentDes(){
	  return $this->sellCagentDes;
	}

                        	                            }





        
 

