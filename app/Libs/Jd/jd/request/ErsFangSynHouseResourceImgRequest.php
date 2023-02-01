<?php
class ErsFangSynHouseResourceImgRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.synHouseResourceImg";
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

                        	                   			private $imgUrl;
    	                        
	public function setImgUrl($imgUrl){
		$this->imgUrl = $imgUrl;
         $this->apiParas["imgUrl"] = $imgUrl;
	}

	public function getImgUrl(){
	  return $this->imgUrl;
	}

                        	                   			private $imgType;
    	                        
	public function setImgType($imgType){
		$this->imgType = $imgType;
         $this->apiParas["imgType"] = $imgType;
	}

	public function getImgType(){
	  return $this->imgType;
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

                        	                   			private $pSourceId;
    	                        
	public function setPSourceId($pSourceId){
		$this->pSourceId = $pSourceId;
         $this->apiParas["pSourceId"] = $pSourceId;
	}

	public function getPSourceId(){
	  return $this->pSourceId;
	}

                        	                            }





        
 

