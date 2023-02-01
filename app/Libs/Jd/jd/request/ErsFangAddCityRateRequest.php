<?php
class ErsFangAddCityRateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addCityRate";
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

                        	                   			private $averageRate;
    	                        
	public function setAverageRate($averageRate){
		$this->averageRate = $averageRate;
         $this->apiParas["averageRate"] = $averageRate;
	}

	public function getAverageRate(){
	  return $this->averageRate;
	}

                        	                   			private $linkRelativeRate;
    	                        
	public function setLinkRelativeRate($linkRelativeRate){
		$this->linkRelativeRate = $linkRelativeRate;
         $this->apiParas["linkRelativeRate"] = $linkRelativeRate;
	}

	public function getLinkRelativeRate(){
	  return $this->linkRelativeRate;
	}

                        	                   			private $rateDate;
    	                        
	public function setRateDate($rateDate){
		$this->rateDate = $rateDate;
         $this->apiParas["rateDate"] = $rateDate;
	}

	public function getRateDate(){
	  return $this->rateDate;
	}

                        	                            }





        
 

