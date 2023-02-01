<?php
class LogisticsOtherInstoreQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.otherInstore.query";
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
                                    	                   			private $inBoundNo;
    	                                                                        
	public function setInBoundNo($inBoundNo){
		$this->inBoundNo = $inBoundNo;
         $this->apiParas["in_bound_no"] = $inBoundNo;
	}

	public function getInBoundNo(){
	  return $this->inBoundNo;
	}

                        	}





        
 

