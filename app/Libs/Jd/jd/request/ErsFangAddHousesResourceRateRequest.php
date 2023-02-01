<?php
class ErsFangAddHousesResourceRateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addHousesResourceRate";
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

                        	                   			private $totalPrice;
    	                        
	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
         $this->apiParas["totalPrice"] = $totalPrice;
	}

	public function getTotalPrice(){
	  return $this->totalPrice;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $pSourceId;
    	                        
	public function setPSourceId($pSourceId){
		$this->pSourceId = $pSourceId;
         $this->apiParas["pSourceId"] = $pSourceId;
	}

	public function getPSourceId(){
	  return $this->pSourceId;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
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





        
 

