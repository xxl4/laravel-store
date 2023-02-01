<?php
class LdopAlphaProviderSignApproveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.provider.sign.approve";
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
         $this->apiParas["requestId"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                   			private $approveResult;
    	                        
	public function setApproveResult($approveResult){
		$this->approveResult = $approveResult;
         $this->apiParas["approveResult"] = $approveResult;
	}

	public function getApproveResult(){
	  return $this->approveResult;
	}

                        	                   			private $approveMessage;
    	                        
	public function setApproveMessage($approveMessage){
		$this->approveMessage = $approveMessage;
         $this->apiParas["approveMessage"] = $approveMessage;
	}

	public function getApproveMessage(){
	  return $this->approveMessage;
	}

                                                    	}





        
 

