<?php
class OmnicStockImportRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnic.stock.import";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $jdSkuId;
                              public function setJdSkuId($jdSkuId ){
                 $this->jdSkuId=$jdSkuId;
                 $this->apiParas["jdSkuId"] = $jdSkuId;
              }

              public function getJdSkuId(){
              	return $this->jdSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $stockType;
                              public function setStockType($stockType ){
                 $this->stockType=$stockType;
                 $this->apiParas["stockType"] = $stockType;
              }

              public function getStockType(){
              	return $this->stockType;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerSkuId;
                              public function setOuterSkuId($outerSkuId ){
                 $this->outerSkuId=$outerSkuId;
                 $this->apiParas["outerSkuId"] = $outerSkuId;
              }

              public function getOuterSkuId(){
              	return $this->outerSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $upc;
                              public function setUpc($upc ){
                 $this->upc=$upc;
                 $this->apiParas["upc"] = $upc;
              }

              public function getUpc(){
              	return $this->upc;
              }
                                                                                                                                                                                                                                                                                                                                              private $updateTime;
                              public function setUpdateTime($updateTime ){
                 $this->updateTime=$updateTime;
                 $this->apiParas["updateTime"] = $updateTime;
              }

              public function getUpdateTime(){
              	return $this->updateTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $spotStockNum;
                              public function setSpotStockNum($spotStockNum ){
                 $this->spotStockNum=$spotStockNum;
                 $this->apiParas["spotStockNum"] = $spotStockNum;
              }

              public function getSpotStockNum(){
              	return $this->spotStockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                            }





        
 

