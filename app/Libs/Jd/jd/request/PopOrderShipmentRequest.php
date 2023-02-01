<?php
class PopOrderShipmentRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.shipment";
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

                        	                   			private $logiCoprId;
    	                        
	public function setLogiCoprId($logiCoprId){
		$this->logiCoprId = $logiCoprId;
         $this->apiParas["logiCoprId"] = $logiCoprId;
	}

	public function getLogiCoprId(){
	  return $this->logiCoprId;
	}

                        	                   			private $logiNo;
    	                        
	public function setLogiNo($logiNo){
		$this->logiNo = $logiNo;
         $this->apiParas["logiNo"] = $logiNo;
	}

	public function getLogiNo(){
	  return $this->logiNo;
	}

                        	                   			private $installId;
    	                        
	public function setInstallId($installId){
		$this->installId = $installId;
         $this->apiParas["installId"] = $installId;
	}

	public function getInstallId(){
	  return $this->installId;
	}

                            }





        
 

