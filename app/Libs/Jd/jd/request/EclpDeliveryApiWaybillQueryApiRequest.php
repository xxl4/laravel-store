<?php
class EclpDeliveryApiWaybillQueryApiRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.delivery.api.WaybillQueryApi";
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
                                    	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $settleType;
    	                        
	public function setSettleType($settleType){
		$this->settleType = $settleType;
         $this->apiParas["settleType"] = $settleType;
	}

	public function getSettleType(){
	  return $this->settleType;
	}

                        	                   			private $traderCode;
    	                        
	public function setTraderCode($traderCode){
		$this->traderCode = $traderCode;
         $this->apiParas["traderCode"] = $traderCode;
	}

	public function getTraderCode(){
	  return $this->traderCode;
	}

                        	}





        
 

