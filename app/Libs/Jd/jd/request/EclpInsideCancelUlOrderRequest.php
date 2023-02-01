<?php
class EclpInsideCancelUlOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.inside.cancelUlOrder";
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
                                                        		                                    	                   			private $ulNo;
    	                        
	public function setUlNo($ulNo){
		$this->ulNo = $ulNo;
         $this->apiParas["ulNo"] = $ulNo;
	}

	public function getUlNo(){
	  return $this->ulNo;
	}

                        	                   			private $outUlNo;
    	                        
	public function setOutUlNo($outUlNo){
		$this->outUlNo = $outUlNo;
         $this->apiParas["outUlNo"] = $outUlNo;
	}

	public function getOutUlNo(){
	  return $this->outUlNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $wareHouseNo;
    	                        
	public function setWareHouseNo($wareHouseNo){
		$this->wareHouseNo = $wareHouseNo;
         $this->apiParas["wareHouseNo"] = $wareHouseNo;
	}

	public function getWareHouseNo(){
	  return $this->wareHouseNo;
	}

                                                    	}





        
 

