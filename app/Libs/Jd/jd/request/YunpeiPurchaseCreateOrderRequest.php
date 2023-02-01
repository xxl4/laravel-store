<?php
class YunpeiPurchaseCreateOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.purchase.createOrder";
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
                                    	                        	                   			private $addressDetail;
    	                                                            
	public function setAddressDetail($addressDetail){
		$this->addressDetail = $addressDetail;
         $this->apiParas["address_detail"] = $addressDetail;
	}

	public function getAddressDetail(){
	  return $this->addressDetail;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $cityName;
    	                                                            
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["city_name"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $sellerRequestList;
    	                                                                        
	public function setSellerRequestList($sellerRequestList){
		$this->sellerRequestList = $sellerRequestList;
         $this->apiParas["seller_request_list"] = $sellerRequestList;
	}

	public function getSellerRequestList(){
	  return $this->sellerRequestList;
	}

}





        
 

