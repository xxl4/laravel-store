<?php
class EdiStatementQueryApproveStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.statement.queryApproveStatus";
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
                                                        		                                    	                        	                   			private $billNo;
    	                        
	public function setBillNo($billNo){
		$this->billNo = $billNo;
         $this->apiParas["billNo"] = $billNo;
	}

	public function getBillNo(){
	  return $this->billNo;
	}

                            }





        
 

