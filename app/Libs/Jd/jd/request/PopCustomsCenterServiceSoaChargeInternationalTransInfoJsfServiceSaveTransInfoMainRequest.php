<?php
class PopCustomsCenterServiceSoaChargeInternationalTransInfoJsfServiceSaveTransInfoMainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.customs.center.service.soa.charge.InternationalTransInfoJsfService.saveTransInfoMain";
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

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                        	                                                                        		                                    	                   			private $mainOrderNo;
    	                        
	public function setMainOrderNo($mainOrderNo){
		$this->mainOrderNo = $mainOrderNo;
         $this->apiParas["mainOrderNo"] = $mainOrderNo;
	}

	public function getMainOrderNo(){
	  return $this->mainOrderNo;
	}

                        	                   			private $orderAmount;
    	                        
	public function setOrderAmount($orderAmount){
		$this->orderAmount = $orderAmount;
         $this->apiParas["orderAmount"] = $orderAmount;
	}

	public function getOrderAmount(){
	  return $this->orderAmount;
	}

                        	                   			private $fromPortDate;
    	                        
	public function setFromPortDate($fromPortDate){
		$this->fromPortDate = $fromPortDate;
         $this->apiParas["fromPortDate"] = $fromPortDate;
	}

	public function getFromPortDate(){
	  return $this->fromPortDate;
	}

                        	                   			private $toPortDate;
    	                        
	public function setToPortDate($toPortDate){
		$this->toPortDate = $toPortDate;
         $this->apiParas["toPortDate"] = $toPortDate;
	}

	public function getToPortDate(){
	  return $this->toPortDate;
	}

                        	                   			private $interTransMode;
    	                        
	public function setInterTransMode($interTransMode){
		$this->interTransMode = $interTransMode;
         $this->apiParas["interTransMode"] = $interTransMode;
	}

	public function getInterTransMode(){
	  return $this->interTransMode;
	}

                        	                   			private $shipId;
    	                        
	public function setShipId($shipId){
		$this->shipId = $shipId;
         $this->apiParas["shipId"] = $shipId;
	}

	public function getShipId(){
	  return $this->shipId;
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

                        	                   			private $ex1;
    	                        
	public function setEx1($ex1){
		$this->ex1 = $ex1;
         $this->apiParas["ex1"] = $ex1;
	}

	public function getEx1(){
	  return $this->ex1;
	}

                        	                   			private $ex2;
    	                        
	public function setEx2($ex2){
		$this->ex2 = $ex2;
         $this->apiParas["ex2"] = $ex2;
	}

	public function getEx2(){
	  return $this->ex2;
	}

                        	                   			private $ex3;
    	                        
	public function setEx3($ex3){
		$this->ex3 = $ex3;
         $this->apiParas["ex3"] = $ex3;
	}

	public function getEx3(){
	  return $this->ex3;
	}

                        	                   			private $ex4;
    	                        
	public function setEx4($ex4){
		$this->ex4 = $ex4;
         $this->apiParas["ex4"] = $ex4;
	}

	public function getEx4(){
	  return $this->ex4;
	}

                        	                   			private $ex5;
    	                        
	public function setEx5($ex5){
		$this->ex5 = $ex5;
         $this->apiParas["ex5"] = $ex5;
	}

	public function getEx5(){
	  return $this->ex5;
	}

                            }





        
 

