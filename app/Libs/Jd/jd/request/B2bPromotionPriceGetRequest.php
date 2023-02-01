<?php
class B2bPromotionPriceGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.promotion.price.get";
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
                                                        		                                    	                   			private $sku;
    	                        
	public function setSku($sku){
		$this->sku = $sku;
         $this->apiParas["sku"] = $sku;
	}

	public function getSku(){
	  return $this->sku;
	}

                                            		                                    	                   			private $platform;
    	                        
	public function setPlatform($platform){
		$this->platform = $platform;
         $this->apiParas["platform"] = $platform;
	}

	public function getPlatform(){
	  return $this->platform;
	}

                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

                                                                        		                                    	                        	                   			private $ip;
    	                        
	public function setIp($ip){
		$this->ip = $ip;
         $this->apiParas["ip"] = $ip;
	}

	public function getIp(){
	  return $this->ip;
	}

                                                    	                   			private $num;
    	                        
	public function setNum($num){
		$this->num = $num;
         $this->apiParas["num"] = $num;
	}

	public function getNum(){
	  return $this->num;
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

                                                                        		                                    	                   			private $pLine;
    	                        
	public function setPLine($pLine){
		$this->pLine = $pLine;
         $this->apiParas["pLine"] = $pLine;
	}

	public function getPLine(){
	  return $this->pLine;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $pRICESKUEXTMAP;
    	                                                                                    
	public function setPRICESKUEXTMAP($pRICESKUEXTMAP){
		$this->pRICESKUEXTMAP = $pRICESKUEXTMAP;
         $this->apiParas["PRICE_SKU_EXT_MAP"] = $pRICESKUEXTMAP;
	}

	public function getPRICESKUEXTMAP(){
	  return $this->pRICESKUEXTMAP;
	}

                                                        }





        
 

