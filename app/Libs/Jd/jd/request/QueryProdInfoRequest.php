<?php
class QueryProdInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryProdInfo";
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
                                                        		                                    	                   			private $shopId;
    	                        
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shopId"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $projectId;
    	                        
	public function setProjectId($projectId){
		$this->projectId = $projectId;
         $this->apiParas["projectId"] = $projectId;
	}

	public function getProjectId(){
	  return $this->projectId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuList;
                              public function setSkuList($skuList ){
                 $this->skuList=$skuList;
                 $this->apiParas["skuList"] = $skuList;
              }

              public function getSkuList(){
              	return $this->skuList;
              }
                                                                                                                                        	                   			private $isProduct;
    	                        
	public function setIsProduct($isProduct){
		$this->isProduct = $isProduct;
         $this->apiParas["isProduct"] = $isProduct;
	}

	public function getIsProduct(){
	  return $this->isProduct;
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

                            }





        
 

