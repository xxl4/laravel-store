<?php
class VenderInfoQueryByPinRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.info.queryByPin";
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
                                    	                                            		                                    	                   			private $extJsonParam;
    	                                                                        
	public function setExtJsonParam($extJsonParam){
		$this->extJsonParam = $extJsonParam;
         $this->apiParas["ext_json_param"] = $extJsonParam;
	}

	public function getExtJsonParam(){
	  return $this->extJsonParam;
	}

                            }





        
 

