<?php
class VirtualCrabCouponDeliverycouponRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.virtual.crabCoupon.deliverycoupon";
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

                        	                   			private $merchantName;
    	                        
	public function setMerchantName($merchantName){
		$this->merchantName = $merchantName;
         $this->apiParas["merchantName"] = $merchantName;
	}

	public function getMerchantName(){
	  return $this->merchantName;
	}

                        	                   			private $merchantId;
    	                        
	public function setMerchantId($merchantId){
		$this->merchantId = $merchantId;
         $this->apiParas["merchantId"] = $merchantId;
	}

	public function getMerchantId(){
	  return $this->merchantId;
	}

                        	                   			private $trackingName;
    	                        
	public function setTrackingName($trackingName){
		$this->trackingName = $trackingName;
         $this->apiParas["trackingName"] = $trackingName;
	}

	public function getTrackingName(){
	  return $this->trackingName;
	}

                        	                   			private $trackingNumber;
    	                        
	public function setTrackingNumber($trackingNumber){
		$this->trackingNumber = $trackingNumber;
         $this->apiParas["trackingNumber"] = $trackingNumber;
	}

	public function getTrackingNumber(){
	  return $this->trackingNumber;
	}

                        	                   			private $trackingCode;
    	                        
	public function setTrackingCode($trackingCode){
		$this->trackingCode = $trackingCode;
         $this->apiParas["trackingCode"] = $trackingCode;
	}

	public function getTrackingCode(){
	  return $this->trackingCode;
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

                        	                   			private $deliveryStatus;
    	                        
	public function setDeliveryStatus($deliveryStatus){
		$this->deliveryStatus = $deliveryStatus;
         $this->apiParas["deliveryStatus"] = $deliveryStatus;
	}

	public function getDeliveryStatus(){
	  return $this->deliveryStatus;
	}

                        	                   			private $deliverySerialNumber;
    	                        
	public function setDeliverySerialNumber($deliverySerialNumber){
		$this->deliverySerialNumber = $deliverySerialNumber;
         $this->apiParas["deliverySerialNumber"] = $deliverySerialNumber;
	}

	public function getDeliverySerialNumber(){
	  return $this->deliverySerialNumber;
	}

                                                    	                        	                        	}





        
 

