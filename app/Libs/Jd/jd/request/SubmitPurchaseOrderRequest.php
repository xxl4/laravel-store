<?php
class SubmitPurchaseOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.submitPurchaseOrder";
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

                        	                   			private $paymentId;
    	                        
	public function setPaymentId($paymentId){
		$this->paymentId = $paymentId;
         $this->apiParas["paymentId"] = $paymentId;
	}

	public function getPaymentId(){
	  return $this->paymentId;
	}

                        	                   			private $totalPrice;
    	                        
	public function setTotalPrice($totalPrice){
		$this->totalPrice = $totalPrice;
         $this->apiParas["totalPrice"] = $totalPrice;
	}

	public function getTotalPrice(){
	  return $this->totalPrice;
	}

                        	                        	                   			private $bizToken;
    	                        
	public function setBizToken($bizToken){
		$this->bizToken = $bizToken;
         $this->apiParas["bizToken"] = $bizToken;
	}

	public function getBizToken(){
	  return $this->bizToken;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $skuId;
                              public function setSkuId($skuId ){
                 $this->skuId=$skuId;
                 $this->apiParas["skuId"] = $skuId;
              }

              public function getSkuId(){
              	return $this->skuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $skuNum;
                              public function setSkuNum($skuNum ){
                 $this->skuNum=$skuNum;
                 $this->apiParas["skuNum"] = $skuNum;
              }

              public function getSkuNum(){
              	return $this->skuNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $purchasePrice;
                              public function setPurchasePrice($purchasePrice ){
                 $this->purchasePrice=$purchasePrice;
                 $this->apiParas["purchasePrice"] = $purchasePrice;
              }

              public function getPurchasePrice(){
              	return $this->purchasePrice;
              }
                                                                                                                }





        
 

