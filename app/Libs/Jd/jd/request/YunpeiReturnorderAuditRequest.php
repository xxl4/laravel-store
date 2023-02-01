<?php
class YunpeiReturnorderAuditRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.returnorder.audit";
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
                                    	                        	                   			private $returnBillSn;
    	                                                                        
	public function setReturnBillSn($returnBillSn){
		$this->returnBillSn = $returnBillSn;
         $this->apiParas["return_bill_sn"] = $returnBillSn;
	}

	public function getReturnBillSn(){
	  return $this->returnBillSn;
	}

                        	                   			private $isAgree;
    	                                                            
	public function setIsAgree($isAgree){
		$this->isAgree = $isAgree;
         $this->apiParas["is_agree"] = $isAgree;
	}

	public function getIsAgree(){
	  return $this->isAgree;
	}

                        	                   			private $opinion;
    	                        
	public function setOpinion($opinion){
		$this->opinion = $opinion;
         $this->apiParas["opinion"] = $opinion;
	}

	public function getOpinion(){
	  return $this->opinion;
	}

}





        
 

