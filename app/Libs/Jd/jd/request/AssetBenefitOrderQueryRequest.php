<?php
class AssetBenefitOrderQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asset.benefit.order.query";
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
                                                        		                                    	                   			private $requestId;
    	                                                            
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["request_id"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                            }





        
 

