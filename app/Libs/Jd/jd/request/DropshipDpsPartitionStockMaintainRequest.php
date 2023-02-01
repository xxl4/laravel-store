<?php
class DropshipDpsPartitionStockMaintainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.partitionStock.maintain";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $stockNum;
                              public function setStockNum($stockNum ){
                 $this->stockNum=$stockNum;
                 $this->apiParas["stockNum"] = $stockNum;
              }

              public function getStockNum(){
              	return $this->stockNum;
              }
                                                                                                                                                                                                                                                                                                                                              private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                        	                        	                   			private $rfId;
    	                        
	public function setRfId($rfId){
		$this->rfId = $rfId;
         $this->apiParas["rfId"] = $rfId;
	}

	public function getRfId(){
	  return $this->rfId;
	}

}





        
 

