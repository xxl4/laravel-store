<?php
class PopJmGetUserBaseInfoByPinRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.jm.getUserBaseInfoByPin";
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
                                    	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $loadType;
    	                        
	public function setLoadType($loadType){
		$this->loadType = $loadType;
         $this->apiParas["loadType"] = $loadType;
	}

	public function getLoadType(){
	  return $this->loadType;
	}

}





        
 

