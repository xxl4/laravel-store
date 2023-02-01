<?php
class IsvUploadBatchLogRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.uploadBatchLog";
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
                                                        		                                    	                   			private $josAppKey;
    	                        
	public function setJosAppKey($josAppKey){
		$this->josAppKey = $josAppKey;
         $this->apiParas["josAppKey"] = $josAppKey;
	}

	public function getJosAppKey(){
	  return $this->josAppKey;
	}

                        	                   			private $data;
    	                        
	public function setData($data){
		$this->data = $data;
         $this->apiParas["data"] = $data;
	}

	public function getData(){
	  return $this->data;
	}

                        	                   			private $timeStamp;
    	                                                            
	public function setTimeStamp($timeStamp){
		$this->timeStamp = $timeStamp;
         $this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp(){
	  return $this->timeStamp;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                            }





        
 

