<?php
class YipOrderGetOrderCustomeInfosRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.order.getOrderCustomeInfos";
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

                        	                   			private $subSkuId;
    	                        
	public function setSubSkuId($subSkuId){
		$this->subSkuId = $subSkuId;
         $this->apiParas["subSkuId"] = $subSkuId;
	}

	public function getSubSkuId(){
	  return $this->subSkuId;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $customFields;
                              public function setCustomFields($customFields ){
                 $this->customFields=$customFields;
                 $this->apiParas["customFields"] = $customFields;
              }

              public function getCustomFields(){
              	return $this->customFields;
              }
                                                                                                                                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                            }





        
 

