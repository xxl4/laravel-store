<?php
class NewhouseSynHouseClueRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.synHouseClue";
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
                                                        		                                    	                        	                   			private $clueId;
    	                        
	public function setClueId($clueId){
		$this->clueId = $clueId;
         $this->apiParas["clueId"] = $clueId;
	}

	public function getClueId(){
	  return $this->clueId;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                            }





        
 

