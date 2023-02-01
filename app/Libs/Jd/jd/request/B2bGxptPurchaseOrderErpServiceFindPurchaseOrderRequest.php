<?php
class B2bGxptPurchaseOrderErpServiceFindPurchaseOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.gxpt.purchaseOrderErpService.findPurchaseOrder";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $purchaseOrderId;
    	                        
	public function setPurchaseOrderId($purchaseOrderId){
		$this->purchaseOrderId = $purchaseOrderId;
         $this->apiParas["purchaseOrderId"] = $purchaseOrderId;
	}

	public function getPurchaseOrderId(){
	  return $this->purchaseOrderId;
	}

                        	                   			private $jdOrderId;
    	                        
	public function setJdOrderId($jdOrderId){
		$this->jdOrderId = $jdOrderId;
         $this->apiParas["jdOrderId"] = $jdOrderId;
	}

	public function getJdOrderId(){
	  return $this->jdOrderId;
	}

                        	}





        
 

