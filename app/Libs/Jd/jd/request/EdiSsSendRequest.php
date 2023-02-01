<?php
class EdiSsSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.ss.send";
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
                                                        		                                    	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $purchaseOrderCode;
    	                        
	public function setPurchaseOrderCode($purchaseOrderCode){
		$this->purchaseOrderCode = $purchaseOrderCode;
         $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
	}

	public function getPurchaseOrderCode(){
	  return $this->purchaseOrderCode;
	}

                        	                   			private $jdShipmentNumber;
    	                        
	public function setJdShipmentNumber($jdShipmentNumber){
		$this->jdShipmentNumber = $jdShipmentNumber;
         $this->apiParas["jdShipmentNumber"] = $jdShipmentNumber;
	}

	public function getJdShipmentNumber(){
	  return $this->jdShipmentNumber;
	}

                        	                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $vendorShipmentNumber;
                              public function setVendorShipmentNumber($vendorShipmentNumber ){
                 $this->vendorShipmentNumber=$vendorShipmentNumber;
                 $this->apiParas["vendorShipmentNumber"] = $vendorShipmentNumber;
              }

              public function getVendorShipmentNumber(){
              	return $this->vendorShipmentNumber;
              }
                                                                                                                                                                                                                                                                                                                                              private $serialNumber;
                              public function setSerialNumber($serialNumber ){
                 $this->serialNumber=$serialNumber;
                 $this->apiParas["serialNumber"] = $serialNumber;
              }

              public function getSerialNumber(){
              	return $this->serialNumber;
              }
                                                                                                                                                                                                                                                                                                                                              private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $vendorProductId;
                              public function setVendorProductId($vendorProductId ){
                 $this->vendorProductId=$vendorProductId;
                 $this->apiParas["vendorProductId"] = $vendorProductId;
              }

              public function getVendorProductId(){
              	return $this->vendorProductId;
              }
                                                                                                                }





        
 

