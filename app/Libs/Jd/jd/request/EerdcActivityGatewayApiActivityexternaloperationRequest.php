<?php
class EerdcActivityGatewayApiActivityexternaloperationRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eerdc.activity.gateway.api.activityexternaloperation";
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
                                    	                        	                        	                   			private $operType;
    	                        
	public function setOperType($operType){
		$this->operType = $operType;
         $this->apiParas["operType"] = $operType;
	}

	public function getOperType(){
	  return $this->operType;
	}

                        	                   			private $jsonData;
    	                        
	public function setJsonData($jsonData){
		$this->jsonData = $jsonData;
         $this->apiParas["jsonData"] = $jsonData;
	}

	public function getJsonData(){
	  return $this->jsonData;
	}

                        	                   			private $extStr;
    	                        
	public function setExtStr($extStr){
		$this->extStr = $extStr;
         $this->apiParas["extStr"] = $extStr;
	}

	public function getExtStr(){
	  return $this->extStr;
	}

}





        
 

