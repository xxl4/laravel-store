<?php
class ErsFangSaveTradingAreaRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.saveTradingArea";
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

                        	                        	                   			private $tradingAreaName;
    	                        
	public function setTradingAreaName($tradingAreaName){
		$this->tradingAreaName = $tradingAreaName;
         $this->apiParas["tradingAreaName"] = $tradingAreaName;
	}

	public function getTradingAreaName(){
	  return $this->tradingAreaName;
	}

                        	                   			private $addressLat;
    	                        
	public function setAddressLat($addressLat){
		$this->addressLat = $addressLat;
         $this->apiParas["addressLat"] = $addressLat;
	}

	public function getAddressLat(){
	  return $this->addressLat;
	}

                        	                   			private $addressLon;
    	                        
	public function setAddressLon($addressLon){
		$this->addressLon = $addressLon;
         $this->apiParas["addressLon"] = $addressLon;
	}

	public function getAddressLon(){
	  return $this->addressLon;
	}

                        	                   			private $latLonType;
    	                        
	public function setLatLonType($latLonType){
		$this->latLonType = $latLonType;
         $this->apiParas["latLonType"] = $latLonType;
	}

	public function getLatLonType(){
	  return $this->latLonType;
	}

                            }





        
 

