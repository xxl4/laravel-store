<?php
class YunpeiPurchaseAddressAddRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.purchase.address.add";
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
                                    	                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $district;
    	                        
	public function setDistrict($district){
		$this->district = $district;
         $this->apiParas["district"] = $district;
	}

	public function getDistrict(){
	  return $this->district;
	}

                        	                   			private $street;
    	                        
	public function setStreet($street){
		$this->street = $street;
         $this->apiParas["street"] = $street;
	}

	public function getStreet(){
	  return $this->street;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $consignee;
    	                        
	public function setConsignee($consignee){
		$this->consignee = $consignee;
         $this->apiParas["consignee"] = $consignee;
	}

	public function getConsignee(){
	  return $this->consignee;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $isDefault;
    	                                                            
	public function setIsDefault($isDefault){
		$this->isDefault = $isDefault;
         $this->apiParas["is_default"] = $isDefault;
	}

	public function getIsDefault(){
	  return $this->isDefault;
	}

}





        
 

