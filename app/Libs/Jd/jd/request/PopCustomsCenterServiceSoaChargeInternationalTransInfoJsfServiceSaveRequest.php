<?php
class PopCustomsCenterServiceSoaChargeInternationalTransInfoJsfServiceSaveRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.customs.center.service.soa.charge.InternationalTransInfoJsfService.save";
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
                                                        		                                    	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                        	                                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $interWayBillNo;
    	                        
	public function setInterWayBillNo($interWayBillNo){
		$this->interWayBillNo = $interWayBillNo;
         $this->apiParas["interWayBillNo"] = $interWayBillNo;
	}

	public function getInterWayBillNo(){
	  return $this->interWayBillNo;
	}

                        	                   			private $interTransName;
    	                        
	public function setInterTransName($interTransName){
		$this->interTransName = $interTransName;
         $this->apiParas["interTransName"] = $interTransName;
	}

	public function getInterTransName(){
	  return $this->interTransName;
	}

                        	                   			private $interTransMode;
    	                        
	public function setInterTransMode($interTransMode){
		$this->interTransMode = $interTransMode;
         $this->apiParas["interTransMode"] = $interTransMode;
	}

	public function getInterTransMode(){
	  return $this->interTransMode;
	}

                        	                   			private $fromCity;
    	                        
	public function setFromCity($fromCity){
		$this->fromCity = $fromCity;
         $this->apiParas["fromCity"] = $fromCity;
	}

	public function getFromCity(){
	  return $this->fromCity;
	}

                        	                   			private $toCity;
    	                        
	public function setToCity($toCity){
		$this->toCity = $toCity;
         $this->apiParas["toCity"] = $toCity;
	}

	public function getToCity(){
	  return $this->toCity;
	}

                        	                   			private $actualW;
    	                        
	public function setActualW($actualW){
		$this->actualW = $actualW;
         $this->apiParas["actualW"] = $actualW;
	}

	public function getActualW(){
	  return $this->actualW;
	}

                        	                   			private $chargedW;
    	                        
	public function setChargedW($chargedW){
		$this->chargedW = $chargedW;
         $this->apiParas["chargedW"] = $chargedW;
	}

	public function getChargedW(){
	  return $this->chargedW;
	}

                            }





        
 

