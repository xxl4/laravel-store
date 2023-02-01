<?php
class YunpeiReturnOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.returnOrder.confirm";
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
                                    	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $returnBillSn;
    	                                                                        
	public function setReturnBillSn($returnBillSn){
		$this->returnBillSn = $returnBillSn;
         $this->apiParas["return_bill_sn"] = $returnBillSn;
	}

	public function getReturnBillSn(){
	  return $this->returnBillSn;
	}

}





        
 

