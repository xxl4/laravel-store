<?php
class SubmitStoreOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.submitStoreOrder";
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
                                                        		                                    	                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $countryId;
    	                        
	public function setCountryId($countryId){
		$this->countryId = $countryId;
         $this->apiParas["countryId"] = $countryId;
	}

	public function getCountryId(){
	  return $this->countryId;
	}

                        	                   			private $townId;
    	                        
	public function setTownId($townId){
		$this->townId = $townId;
         $this->apiParas["townId"] = $townId;
	}

	public function getTownId(){
	  return $this->townId;
	}

                        	                   			private $receiver;
    	                        
	public function setReceiver($receiver){
		$this->receiver = $receiver;
         $this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver(){
	  return $this->receiver;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                        	                   			private $totalPrice;
    	                        
	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
         $this->apiParas["totalPrice"] = $totalPrice;
	}

	public function getTotalPrice(){
	  return $this->totalPrice;
	}

                        	                   			private $salesPin;
    	                        
	public function setSalesPin($salesPin){
		$this->salesPin = $salesPin;
         $this->apiParas["salesPin"] = $salesPin;
	}

	public function getSalesPin(){
	  return $this->salesPin;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $categoryId1;
                              public function setCategoryId1($categoryId1 ){
                 $this->categoryId1=$categoryId1;
                 $this->apiParas["categoryId1"] = $categoryId1;
              }

              public function getCategoryId1(){
              	return $this->categoryId1;
              }
                                                                                                                                                                                                                                                                                                                       private $categoryId2;
                              public function setCategoryId2($categoryId2 ){
                 $this->categoryId2=$categoryId2;
                 $this->apiParas["categoryId2"] = $categoryId2;
              }

              public function getCategoryId2(){
              	return $this->categoryId2;
              }
                                                                                                                                                                                                                                                                                                                       private $categoryId3;
                              public function setCategoryId3($categoryId3 ){
                 $this->categoryId3=$categoryId3;
                 $this->apiParas["categoryId3"] = $categoryId3;
              }

              public function getCategoryId3(){
              	return $this->categoryId3;
              }
                                                                                                                                                                                                                                                                                                                       private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                       private $skuName;
                              public function setSkuName($skuName ){
                 $this->skuName=$skuName;
                 $this->apiParas["skuName"] = $skuName;
              }

              public function getSkuName(){
              	return $this->skuName;
              }
                                                                                                                                                                                                                                                                                                                       private $purchaseNum;
                              public function setPurchaseNum($purchaseNum ){
                 $this->purchaseNum=$purchaseNum;
                 $this->apiParas["purchaseNum"] = $purchaseNum;
              }

              public function getPurchaseNum(){
              	return $this->purchaseNum;
              }
                                                                                                                                                                                                                                                                                                                       private $skuPrice;
                              public function setSkuPrice($skuPrice ){
                 $this->skuPrice=$skuPrice;
                 $this->apiParas["skuPrice"] = $skuPrice;
              }

              public function getSkuPrice(){
              	return $this->skuPrice;
              }
                                                                                                                                            }





        
 

