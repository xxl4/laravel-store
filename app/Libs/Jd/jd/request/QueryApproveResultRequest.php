<?php
class QueryApproveResultRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryApproveResult";
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
                                    	                   			private $approveParam;
    	                        
	public function setApproveParam($approveParam){
		$this->approveParam = $approveParam;
         $this->apiParas["approveParam"] = $approveParam;
	}

	public function getApproveParam(){
	  return $this->approveParam;
	}

}





        
 

