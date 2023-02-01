<?php
class EclpDeliveryApiPromiseInfoApiQueryFreightsAndPredictTimeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.delivery.api.promiseInfoApi.queryFreightsAndPredictTime";
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
                                                        		                                    	                   			private $senderProvinceName;
    	                        
	public function setSenderProvinceName($senderProvinceName){
		$this->senderProvinceName = $senderProvinceName;
         $this->apiParas["senderProvinceName"] = $senderProvinceName;
	}

	public function getSenderProvinceName(){
	  return $this->senderProvinceName;
	}

                        	                   			private $senderCityName;
    	                        
	public function setSenderCityName($senderCityName){
		$this->senderCityName = $senderCityName;
         $this->apiParas["senderCityName"] = $senderCityName;
	}

	public function getSenderCityName(){
	  return $this->senderCityName;
	}

                        	                   			private $senderCountryName;
    	                        
	public function setSenderCountryName($senderCountryName){
		$this->senderCountryName = $senderCountryName;
         $this->apiParas["senderCountryName"] = $senderCountryName;
	}

	public function getSenderCountryName(){
	  return $this->senderCountryName;
	}

                        	                   			private $senderCountrysideName;
    	                        
	public function setSenderCountrysideName($senderCountrysideName){
		$this->senderCountrysideName = $senderCountrysideName;
         $this->apiParas["senderCountrysideName"] = $senderCountrysideName;
	}

	public function getSenderCountrysideName(){
	  return $this->senderCountrysideName;
	}

                        	                   			private $senderAddress;
    	                        
	public function setSenderAddress($senderAddress){
		$this->senderAddress = $senderAddress;
         $this->apiParas["senderAddress"] = $senderAddress;
	}

	public function getSenderAddress(){
	  return $this->senderAddress;
	}

                        	                   			private $receiverProvinceName;
    	                        
	public function setReceiverProvinceName($receiverProvinceName){
		$this->receiverProvinceName = $receiverProvinceName;
         $this->apiParas["receiverProvinceName"] = $receiverProvinceName;
	}

	public function getReceiverProvinceName(){
	  return $this->receiverProvinceName;
	}

                        	                   			private $receiverCityName;
    	                        
	public function setReceiverCityName($receiverCityName){
		$this->receiverCityName = $receiverCityName;
         $this->apiParas["receiverCityName"] = $receiverCityName;
	}

	public function getReceiverCityName(){
	  return $this->receiverCityName;
	}

                        	                   			private $receiverCountryName;
    	                        
	public function setReceiverCountryName($receiverCountryName){
		$this->receiverCountryName = $receiverCountryName;
         $this->apiParas["receiverCountryName"] = $receiverCountryName;
	}

	public function getReceiverCountryName(){
	  return $this->receiverCountryName;
	}

                        	                   			private $receiverCountrysideName;
    	                        
	public function setReceiverCountrysideName($receiverCountrysideName){
		$this->receiverCountrysideName = $receiverCountrysideName;
         $this->apiParas["receiverCountrysideName"] = $receiverCountrysideName;
	}

	public function getReceiverCountrysideName(){
	  return $this->receiverCountrysideName;
	}

                        	                   			private $receiverAddress;
    	                        
	public function setReceiverAddress($receiverAddress){
		$this->receiverAddress = $receiverAddress;
         $this->apiParas["receiverAddress"] = $receiverAddress;
	}

	public function getReceiverAddress(){
	  return $this->receiverAddress;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $orderTime;
    	                        
	public function setOrderTime($orderTime){
		$this->orderTime = $orderTime;
         $this->apiParas["orderTime"] = $orderTime;
	}

	public function getOrderTime(){
	  return $this->orderTime;
	}

                            }





        
 

