<?php
class EclpCoGetReceiptFlagPhotoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.getReceiptFlagPhoto";
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
                                    	                   			private $lwbNo;
    	                        
	public function setLwbNo($lwbNo){
		$this->lwbNo = $lwbNo;
         $this->apiParas["lwbNo"] = $lwbNo;
	}

	public function getLwbNo(){
	  return $this->lwbNo;
	}

                        	                        	}





        
 

