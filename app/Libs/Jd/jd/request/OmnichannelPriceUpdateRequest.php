<?php
class OmnichannelPriceUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnichannel.price.update";
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
                              public function setVenderId($venderId ){
                 $this->venderId=$venderId;
                 $this->apiParas["venderId"] = $venderId;
              }

              public function getVenderId(){
              	return $this->venderId;
              }
                                                                                                                                                                                                                                                                                                                                              private $saleSkuId;
                              public function setSaleSkuId($saleSkuId ){
                 $this->saleSkuId=$saleSkuId;
                 $this->apiParas["saleSkuId"] = $saleSkuId;
              }

              public function getSaleSkuId(){
              	return $this->saleSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $saleSkuName;
                              public function setSaleSkuName($saleSkuName ){
                 $this->saleSkuName=$saleSkuName;
                 $this->apiParas["saleSkuName"] = $saleSkuName;
              }

              public function getSaleSkuName(){
              	return $this->saleSkuName;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerSkuId;
                              public function setOuterSkuId($outerSkuId ){
                 $this->outerSkuId=$outerSkuId;
                 $this->apiParas["outerSkuId"] = $outerSkuId;
              }

              public function getOuterSkuId(){
              	return $this->outerSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerSkuName;
                              public function setOuterSkuName($outerSkuName ){
                 $this->outerSkuName=$outerSkuName;
                 $this->apiParas["outerSkuName"] = $outerSkuName;
              }

              public function getOuterSkuName(){
              	return $this->outerSkuName;
              }
                                                                                                                                                                                                                                                                                                                                              private $upc;
                              public function setUpc($upc ){
                 $this->upc=$upc;
                 $this->apiParas["upc"] = $upc;
              }

              public function getUpc(){
              	return $this->upc;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerStoreId;
                              public function setOuterStoreId($outerStoreId ){
                 $this->outerStoreId=$outerStoreId;
                 $this->apiParas["outerStoreId"] = $outerStoreId;
              }

              public function getOuterStoreId(){
              	return $this->outerStoreId;
              }
                                                                                                                                                                                                                                                                                                                                              private $priceMode;
                              public function setPriceMode($priceMode ){
                 $this->priceMode=$priceMode;
                 $this->apiParas["priceMode"] = $priceMode;
              }

              public function getPriceMode(){
              	return $this->priceMode;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                                              private $updateTime;
                              public function setUpdateTime($updateTime ){
                 $this->updateTime=$updateTime;
                 $this->apiParas["updateTime"] = $updateTime;
              }

              public function getUpdateTime(){
              	return $this->updateTime;
              }
                                                                                                                }





        
 

