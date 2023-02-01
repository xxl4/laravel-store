<?php
class PurchaseOrderStockOutRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.purchase.order.stock.out";
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
                                    	                        	                   			private $purchaseId;
    	                        
	public function setPurchaseId($purchaseId){
		$this->purchaseId = $purchaseId;
         $this->apiParas["purchaseId"] = $purchaseId;
	}

	public function getPurchaseId(){
	  return $this->purchaseId;
	}

                        	                   			private $shipmentId;
    	                        
	public function setShipmentId($shipmentId){
		$this->shipmentId = $shipmentId;
         $this->apiParas["shipmentId"] = $shipmentId;
	}

	public function getShipmentId(){
	  return $this->shipmentId;
	}

                        	                   			private $shipmentNo;
    	                        
	public function setShipmentNo($shipmentNo){
		$this->shipmentNo = $shipmentNo;
         $this->apiParas["shipmentNo"] = $shipmentNo;
	}

	public function getShipmentNo(){
	  return $this->shipmentNo;
	}

                        	                   			private $tradeNo;
    	                        
	public function setTradeNo($tradeNo){
		$this->tradeNo = $tradeNo;
         $this->apiParas["tradeNo"] = $tradeNo;
	}

	public function getTradeNo(){
	  return $this->tradeNo;
	}

}





        
 

