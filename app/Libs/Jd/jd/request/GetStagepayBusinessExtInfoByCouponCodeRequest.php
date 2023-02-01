<?php
class GetStagepayBusinessExtInfoByCouponCodeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getStagepayBusinessExtInfoByCouponCode";
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
                                    	                        	                   			private $CouponCode;
    	                        
	public function setCouponCode($CouponCode){
		$this->CouponCode = $CouponCode;
         $this->apiParas["CouponCode"] = $CouponCode;
	}

	public function getCouponCode(){
	  return $this->CouponCode;
	}

}





        
 

