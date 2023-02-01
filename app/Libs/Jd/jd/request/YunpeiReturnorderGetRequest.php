<?php
class YunpeiReturnorderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.returnorder.get";
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

}





        
 

