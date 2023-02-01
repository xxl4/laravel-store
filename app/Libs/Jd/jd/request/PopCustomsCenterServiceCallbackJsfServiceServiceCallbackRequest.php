<?php
class PopCustomsCenterServiceCallbackJsfServiceServiceCallbackRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.customs.center.ServiceCallbackJsfService.serviceCallback";
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
                                                        		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $orderDesc;
    	                        
	public function setOrderDesc($orderDesc){
		$this->orderDesc = $orderDesc;
         $this->apiParas["orderDesc"] = $orderDesc;
	}

	public function getOrderDesc(){
	  return $this->orderDesc;
	}

                        	                        	                   			private $goodsCheck;
    	                        
	public function setGoodsCheck($goodsCheck){
		$this->goodsCheck = $goodsCheck;
         $this->apiParas["goodsCheck"] = $goodsCheck;
	}

	public function getGoodsCheck(){
	  return $this->goodsCheck;
	}

                            }





        
 

