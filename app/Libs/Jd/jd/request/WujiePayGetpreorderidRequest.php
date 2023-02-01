<?php
class WujiePayGetpreorderidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wujie.pay.getpreorderid";
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
                                                        		                                    	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $bizId;
    	                        
	public function setBizId($bizId){
		$this->bizId = $bizId;
         $this->apiParas["bizId"] = $bizId;
	}

	public function getBizId(){
	  return $this->bizId;
	}

                        	                   			private $exStoreId;
    	                        
	public function setExStoreId($exStoreId){
		$this->exStoreId = $exStoreId;
         $this->apiParas["exStoreId"] = $exStoreId;
	}

	public function getExStoreId(){
	  return $this->exStoreId;
	}

                        	                   			private $outTradeNo;
    	                        
	public function setOutTradeNo($outTradeNo){
		$this->outTradeNo = $outTradeNo;
         $this->apiParas["outTradeNo"] = $outTradeNo;
	}

	public function getOutTradeNo(){
	  return $this->outTradeNo;
	}

                        	                   			private $amount;
    	                        
	public function setAmount($amount){
		$this->amount = $amount;
         $this->apiParas["amount"] = $amount;
	}

	public function getAmount(){
	  return $this->amount;
	}

                        	                   			private $notifyUrl;
    	                        
	public function setNotifyUrl($notifyUrl){
		$this->notifyUrl = $notifyUrl;
         $this->apiParas["notifyUrl"] = $notifyUrl;
	}

	public function getNotifyUrl(){
	  return $this->notifyUrl;
	}

                        	                   			private $extMap;
    	                        
	public function setExtMap($extMap){
		$this->extMap = $extMap;
         $this->apiParas["extMap"] = $extMap;
	}

	public function getExtMap(){
	  return $this->extMap;
	}

                        	                   			private $merchantNo;
    	                        
	public function setMerchantNo($merchantNo){
		$this->merchantNo = $merchantNo;
         $this->apiParas["merchantNo"] = $merchantNo;
	}

	public function getMerchantNo(){
	  return $this->merchantNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $storePrice;
                              public function setStorePrice($storePrice ){
                 $this->storePrice=$storePrice;
                 $this->apiParas["storePrice"] = $storePrice;
              }

              public function getStorePrice(){
              	return $this->storePrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $exSkuId;
                              public function setExSkuId($exSkuId ){
                 $this->exSkuId=$exSkuId;
                 $this->apiParas["exSkuId"] = $exSkuId;
              }

              public function getExSkuId(){
              	return $this->exSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $count;
                              public function setCount($count ){
                 $this->count=$count;
                 $this->apiParas["count"] = $count;
              }

              public function getCount(){
              	return $this->count;
              }
                                                                                                                                        	                   			private $returnUrl;
    	                        
	public function setReturnUrl($returnUrl){
		$this->returnUrl = $returnUrl;
         $this->apiParas["returnUrl"] = $returnUrl;
	}

	public function getReturnUrl(){
	  return $this->returnUrl;
	}

                            }





        
 

