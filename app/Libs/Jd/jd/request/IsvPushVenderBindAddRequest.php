<?php
class IsvPushVenderBindAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.push.vender.bind.add";
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
                                    	                        	                   			private $dbId;
    	                        
	public function setDbId($dbId){
		$this->dbId = $dbId;
         $this->apiParas["dbId"] = $dbId;
	}

	public function getDbId(){
	  return $this->dbId;
	}

                        	                        	}





        
 

