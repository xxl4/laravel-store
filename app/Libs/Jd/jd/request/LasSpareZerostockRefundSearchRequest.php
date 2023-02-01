<?php
class LasSpareZerostockRefundSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.las.spare.zerostock.refund.search";
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
                                    	                   			private $outNo;
    	                                                            
	public function setOutNo($outNo){
		$this->outNo = $outNo;
         $this->apiParas["out_no"] = $outNo;
	}

	public function getOutNo(){
	  return $this->outNo;
	}

}





        
 

