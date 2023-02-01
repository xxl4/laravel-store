<?php
class ConfirmReceiptRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.confirmReceipt";
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
                                                        		                                    	                        	                   			private $bizToken;
    	                        
	public function setBizToken($bizToken){
		$this->bizToken = $bizToken;
         $this->apiParas["bizToken"] = $bizToken;
	}

	public function getBizToken(){
	  return $this->bizToken;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $projectId;
    	                        
	public function setProjectId($projectId){
		$this->projectId = $projectId;
         $this->apiParas["projectId"] = $projectId;
	}

	public function getProjectId(){
	  return $this->projectId;
	}

                        	                   			private $shopId;
    	                        
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shopId"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                            }





        
 

