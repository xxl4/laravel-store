<?php
class DropshipDpsSplitOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.splitOrder";
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
                                    	                        	                   			private $splitOrderJson;
    	                        
	public function setSplitOrderJson($splitOrderJson){
		$this->splitOrderJson = $splitOrderJson;
         $this->apiParas["splitOrderJson"] = $splitOrderJson;
	}

	public function getSplitOrderJson(){
	  return $this->splitOrderJson;
	}

}





        
 

