<?php
class DataVenderSmsSignStatusGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.data.vender.sms.sign.status.get";
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
                                    	                        	                        	                   			private $channel;
    	                        
	public function setChannel($channel){
		$this->channel = $channel;
         $this->apiParas["channel"] = $channel;
	}

	public function getChannel(){
	  return $this->channel;
	}

}





        
 

