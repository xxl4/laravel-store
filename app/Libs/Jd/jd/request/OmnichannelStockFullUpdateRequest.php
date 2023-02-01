<?php
class OmnichannelStockFullUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnichannel.stock.full.update";
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
                                                        		                                    	                        	                   			private $totalItem;
    	                        
	public function setTotalItem($totalItem){
		$this->totalItem = $totalItem;
         $this->apiParas["totalItem"] = $totalItem;
	}

	public function getTotalItem(){
	  return $this->totalItem;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $stockType;
                              public function setStockType($stockType ){
                 $this->stockType=$stockType;
                 $this->apiParas["stockType"] = $stockType;
              }

              public function getStockType(){
              	return $this->stockType;
              }
                                                                                                                                                                                                                                                                                                                                              private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                                                                                                                                                                                                                              private $jdSkuId;
                              public function setJdSkuId($jdSkuId ){
                 $this->jdSkuId=$jdSkuId;
                 $this->apiParas["jdSkuId"] = $jdSkuId;
              }

              public function getJdSkuId(){
              	return $this->jdSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $outerSkuId;
                              public function setOuterSkuId($outerSkuId ){
                 $this->outerSkuId=$outerSkuId;
                 $this->apiParas["outerSkuId"] = $outerSkuId;
              }

              public function getOuterSkuId(){
              	return $this->outerSkuId;
              }
                                                                                                                                                                                                                                                                                                                                              private $spotStockNum;
                              public function setSpotStockNum($spotStockNum ){
                 $this->spotStockNum=$spotStockNum;
                 $this->apiParas["spotStockNum"] = $spotStockNum;
              }

              public function getSpotStockNum(){
              	return $this->spotStockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $saleStockNum;
                              public function setSaleStockNum($saleStockNum ){
                 $this->saleStockNum=$saleStockNum;
                 $this->apiParas["saleStockNum"] = $saleStockNum;
              }

              public function getSaleStockNum(){
              	return $this->saleStockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $produceStockNum;
                              public function setProduceStockNum($produceStockNum ){
                 $this->produceStockNum=$produceStockNum;
                 $this->apiParas["produceStockNum"] = $produceStockNum;
              }

              public function getProduceStockNum(){
              	return $this->produceStockNum;
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





        
 

