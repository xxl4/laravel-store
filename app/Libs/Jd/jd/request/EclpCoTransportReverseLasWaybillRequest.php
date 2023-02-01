<?php
class EclpCoTransportReverseLasWaybillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.transportReverseLasWaybill";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $salePlatform;
    	                        
	public function setSalePlatform($salePlatform){
		$this->salePlatform = $salePlatform;
         $this->apiParas["salePlatform"] = $salePlatform;
	}

	public function getSalePlatform(){
	  return $this->salePlatform;
	}

                        	                   			private $customerPin;
    	                        
	public function setCustomerPin($customerPin){
		$this->customerPin = $customerPin;
         $this->apiParas["customerPin"] = $customerPin;
	}

	public function getCustomerPin(){
	  return $this->customerPin;
	}

                        	                   			private $associateSoNo;
    	                        
	public function setAssociateSoNo($associateSoNo){
		$this->associateSoNo = $associateSoNo;
         $this->apiParas["associateSoNo"] = $associateSoNo;
	}

	public function getAssociateSoNo(){
	  return $this->associateSoNo;
	}

                        	                   			private $senderName;
    	                        
	public function setSenderName($senderName){
		$this->senderName = $senderName;
         $this->apiParas["senderName"] = $senderName;
	}

	public function getSenderName(){
	  return $this->senderName;
	}

                        	                   			private $senderMobile;
    	                        
	public function setSenderMobile($senderMobile){
		$this->senderMobile = $senderMobile;
         $this->apiParas["senderMobile"] = $senderMobile;
	}

	public function getSenderMobile(){
	  return $this->senderMobile;
	}

                        	                   			private $senderPhone;
    	                        
	public function setSenderPhone($senderPhone){
		$this->senderPhone = $senderPhone;
         $this->apiParas["senderPhone"] = $senderPhone;
	}

	public function getSenderPhone(){
	  return $this->senderPhone;
	}

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
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

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $isFragile;
    	                        
	public function setIsFragile($isFragile){
		$this->isFragile = $isFragile;
         $this->apiParas["isFragile"] = $isFragile;
	}

	public function getIsFragile(){
	  return $this->isFragile;
	}

                        	                   			private $pickupReturnReason;
    	                        
	public function setPickupReturnReason($pickupReturnReason){
		$this->pickupReturnReason = $pickupReturnReason;
         $this->apiParas["pickupReturnReason"] = $pickupReturnReason;
	}

	public function getPickupReturnReason(){
	  return $this->pickupReturnReason;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $weight;
                              public function setWeight($weight ){
                 $this->weight=$weight;
                 $this->apiParas["weight"] = $weight;
              }

              public function getWeight(){
              	return $this->weight;
              }
                                                                                                                                                                                                                                                                                                                                              private $length;
                              public function setLength($length ){
                 $this->length=$length;
                 $this->apiParas["length"] = $length;
              }

              public function getLength(){
              	return $this->length;
              }
                                                                                                                                                                                                                                                                                                                                              private $width;
                              public function setWidth($width ){
                 $this->width=$width;
                 $this->apiParas["width"] = $width;
              }

              public function getWidth(){
              	return $this->width;
              }
                                                                                                                                                                                                                                                                                                                                              private $height;
                              public function setHeight($height ){
                 $this->height=$height;
                 $this->apiParas["height"] = $height;
              }

              public function getHeight(){
              	return $this->height;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageName;
                              public function setPackageName($packageName ){
                 $this->packageName=$packageName;
                 $this->apiParas["packageName"] = $packageName;
              }

              public function getPackageName(){
              	return $this->packageName;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageQty;
                              public function setPackageQty($packageQty ){
                 $this->packageQty=$packageQty;
                 $this->apiParas["packageQty"] = $packageQty;
              }

              public function getPackageQty(){
              	return $this->packageQty;
              }
                                                                                                                                        	}





        
 

