<?php
class GetFactoryAbutmentDeliveryInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getFactoryAbutmentDeliveryInfo";
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
                                    	                   			private $authorizedSequence;
    	                        
	public function setAuthorizedSequence($authorizedSequence){
		$this->authorizedSequence = $authorizedSequence;
         $this->apiParas["authorizedSequence"] = $authorizedSequence;
	}

	public function getAuthorizedSequence(){
	  return $this->authorizedSequence;
	}

}





        
 

