<?php
class ErsFangAddOrUpdatePlotBrokerRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdatePlotBroker";
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
                                                        		                                    	                   			private $brokerId;
    	                        
	public function setBrokerId($brokerId){
		$this->brokerId = $brokerId;
         $this->apiParas["brokerId"] = $brokerId;
	}

	public function getBrokerId(){
	  return $this->brokerId;
	}

                        	                   			private $plotId;
    	                        
	public function setPlotId($plotId){
		$this->plotId = $plotId;
         $this->apiParas["plotId"] = $plotId;
	}

	public function getPlotId(){
	  return $this->plotId;
	}

                        	                   			private $recommend;
    	                        
	public function setRecommend($recommend){
		$this->recommend = $recommend;
         $this->apiParas["recommend"] = $recommend;
	}

	public function getRecommend(){
	  return $this->recommend;
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





        
 

