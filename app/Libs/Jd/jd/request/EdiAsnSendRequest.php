<?php
class EdiAsnSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.asn.send";
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
                                                        		                                    	                   			private $purchaseOrderCode;
    	                        
	public function setPurchaseOrderCode($purchaseOrderCode){
		$this->purchaseOrderCode = $purchaseOrderCode;
         $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
	}

	public function getPurchaseOrderCode(){
	  return $this->purchaseOrderCode;
	}

                        	                   			private $deliveryCenterCode;
    	                        
	public function setDeliveryCenterCode($deliveryCenterCode){
		$this->deliveryCenterCode = $deliveryCenterCode;
         $this->apiParas["deliveryCenterCode"] = $deliveryCenterCode;
	}

	public function getDeliveryCenterCode(){
	  return $this->deliveryCenterCode;
	}

                        	                   			private $deliveryCenterName;
    	                        
	public function setDeliveryCenterName($deliveryCenterName){
		$this->deliveryCenterName = $deliveryCenterName;
         $this->apiParas["deliveryCenterName"] = $deliveryCenterName;
	}

	public function getDeliveryCenterName(){
	  return $this->deliveryCenterName;
	}

                        	                   			private $warehouseCode;
    	                        
	public function setWarehouseCode($warehouseCode){
		$this->warehouseCode = $warehouseCode;
         $this->apiParas["warehouseCode"] = $warehouseCode;
	}

	public function getWarehouseCode(){
	  return $this->warehouseCode;
	}

                        	                   			private $warehouseName;
    	                        
	public function setWarehouseName($warehouseName){
		$this->warehouseName = $warehouseName;
         $this->apiParas["warehouseName"] = $warehouseName;
	}

	public function getWarehouseName(){
	  return $this->warehouseName;
	}

                        	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                   			private $vendorShipmentCode;
    	                        
	public function setVendorShipmentCode($vendorShipmentCode){
		$this->vendorShipmentCode = $vendorShipmentCode;
         $this->apiParas["vendorShipmentCode"] = $vendorShipmentCode;
	}

	public function getVendorShipmentCode(){
	  return $this->vendorShipmentCode;
	}

                        	                   			private $jdShipmentCode;
    	                        
	public function setJdShipmentCode($jdShipmentCode){
		$this->jdShipmentCode = $jdShipmentCode;
         $this->apiParas["jdShipmentCode"] = $jdShipmentCode;
	}

	public function getJdShipmentCode(){
	  return $this->jdShipmentCode;
	}

                        	                   			private $deleted;
    	                        
	public function setDeleted($deleted){
		$this->deleted = $deleted;
         $this->apiParas["deleted"] = $deleted;
	}

	public function getDeleted(){
	  return $this->deleted;
	}

                        	                   			private $supposedShipmentTime;
    	                        
	public function setSupposedShipmentTime($supposedShipmentTime){
		$this->supposedShipmentTime = $supposedShipmentTime;
         $this->apiParas["supposedShipmentTime"] = $supposedShipmentTime;
	}

	public function getSupposedShipmentTime(){
	  return $this->supposedShipmentTime;
	}

                        	                   			private $supposedArrivedTime;
    	                        
	public function setSupposedArrivedTime($supposedArrivedTime){
		$this->supposedArrivedTime = $supposedArrivedTime;
         $this->apiParas["supposedArrivedTime"] = $supposedArrivedTime;
	}

	public function getSupposedArrivedTime(){
	  return $this->supposedArrivedTime;
	}

                        	                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $jdSku;
                              public function setJdSku($jdSku ){
                 $this->jdSku=$jdSku;
                 $this->apiParas["jdSku"] = $jdSku;
              }

              public function getJdSku(){
              	return $this->jdSku;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorProductId;
                              public function setVendorProductId($vendorProductId ){
                 $this->vendorProductId=$vendorProductId;
                 $this->apiParas["vendorProductId"] = $vendorProductId;
              }

              public function getVendorProductId(){
              	return $this->vendorProductId;
              }
                                                                                                                                                                                                                                                                                                                                              private $productName;
                              public function setProductName($productName ){
                 $this->productName=$productName;
                 $this->apiParas["productName"] = $productName;
              }

              public function getProductName(){
              	return $this->productName;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                }





        
 

