<?php
class VirtualCrabCouponAppointRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.virtual.crabCoupon.appoint";
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
                                                        		                                    	                   			private $couponNumber;
    	                        
	public function setCouponNumber($couponNumber){
		$this->couponNumber = $couponNumber;
         $this->apiParas["couponNumber"] = $couponNumber;
	}

	public function getCouponNumber(){
	  return $this->couponNumber;
	}

                        	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $merchantName;
    	                        
	public function setMerchantName($merchantName){
		$this->merchantName = $merchantName;
         $this->apiParas["merchantName"] = $merchantName;
	}

	public function getMerchantName(){
	  return $this->merchantName;
	}

                        	                   			private $appointTime;
    	                        
	public function setAppointTime($appointTime){
		$this->appointTime = $appointTime;
         $this->apiParas["appointTime"] = $appointTime;
	}

	public function getAppointTime(){
	  return $this->appointTime;
	}

                        	                   			private $deliveryType;
    	                        
	public function setDeliveryType($deliveryType){
		$this->deliveryType = $deliveryType;
         $this->apiParas["deliveryType"] = $deliveryType;
	}

	public function getDeliveryType(){
	  return $this->deliveryType;
	}

                        	                   			private $deliveryAddress;
    	                        
	public function setDeliveryAddress($deliveryAddress){
		$this->deliveryAddress = $deliveryAddress;
         $this->apiParas["deliveryAddress"] = $deliveryAddress;
	}

	public function getDeliveryAddress(){
	  return $this->deliveryAddress;
	}

                        	                   			private $deliveryTime;
    	                        
	public function setDeliveryTime($deliveryTime){
		$this->deliveryTime = $deliveryTime;
         $this->apiParas["deliveryTime"] = $deliveryTime;
	}

	public function getDeliveryTime(){
	  return $this->deliveryTime;
	}

                        	                   			private $receiverName;
    	                        
	public function setReceiverName($receiverName){
		$this->receiverName = $receiverName;
         $this->apiParas["receiverName"] = $receiverName;
	}

	public function getReceiverName(){
	  return $this->receiverName;
	}

                        	                   			private $receiverMobile;
    	                        
	public function setReceiverMobile($receiverMobile){
		$this->receiverMobile = $receiverMobile;
         $this->apiParas["receiverMobile"] = $receiverMobile;
	}

	public function getReceiverMobile(){
	  return $this->receiverMobile;
	}

                        	                   			private $appointSerialNumber;
    	                        
	public function setAppointSerialNumber($appointSerialNumber){
		$this->appointSerialNumber = $appointSerialNumber;
         $this->apiParas["appointSerialNumber"] = $appointSerialNumber;
	}

	public function getAppointSerialNumber(){
	  return $this->appointSerialNumber;
	}

                                                    	                        	                        	}





        
 

