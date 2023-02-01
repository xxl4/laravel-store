<?php
class DropshipDpsPrerefundRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.prerefund";
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
                                                        		                                    	                        	                   			private $customOrderId;
    	                        
	public function setCustomOrderId($customOrderId){
		$this->customOrderId = $customOrderId;
         $this->apiParas["customOrderId"] = $customOrderId;
	}

	public function getCustomOrderId(){
	  return $this->customOrderId;
	}

                        	                   			private $approvalSuggestion;
    	                        
	public function setApprovalSuggestion($approvalSuggestion){
		$this->approvalSuggestion = $approvalSuggestion;
         $this->apiParas["approvalSuggestion"] = $approvalSuggestion;
	}

	public function getApprovalSuggestion(){
	  return $this->approvalSuggestion;
	}

                        	                   			private $approvalState;
    	                        
	public function setApprovalState($approvalState){
		$this->approvalState = $approvalState;
         $this->apiParas["approvalState"] = $approvalState;
	}

	public function getApprovalState(){
	  return $this->approvalState;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $operatorState;
    	                        
	public function setOperatorState($operatorState){
		$this->operatorState = $operatorState;
         $this->apiParas["operatorState"] = $operatorState;
	}

	public function getOperatorState(){
	  return $this->operatorState;
	}

                            }





        
 

