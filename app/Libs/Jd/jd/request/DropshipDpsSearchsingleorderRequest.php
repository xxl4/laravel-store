<?php
class DropshipDpsSearchsingleorderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.searchsingleorder";
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
                                                        		                                    	                        	                   			private $customOrderId;
    	                        
	public function setCustomOrderId($customOrderId){
		$this->customOrderId = $customOrderId;
         $this->apiParas["customOrderId"] = $customOrderId;
	}

	public function getCustomOrderId(){
	  return $this->customOrderId;
	}

                            }





        
 

