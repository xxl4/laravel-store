<?php
class EdiRoDetailGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.ro.detail.get";
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
                                                        		                                    	                   			private $returnOrderCode;
    	                        
	public function setReturnOrderCode($returnOrderCode){
		$this->returnOrderCode = $returnOrderCode;
         $this->apiParas["returnOrderCode"] = $returnOrderCode;
	}

	public function getReturnOrderCode(){
	  return $this->returnOrderCode;
	}

                        	                            }





        
 

