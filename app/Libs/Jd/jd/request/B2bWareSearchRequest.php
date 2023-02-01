<?php
class B2bWareSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.ware.search";
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
                                                        		                                    	                   			private $channelType;
    	                        
	public function setChannelType($channelType){
		$this->channelType = $channelType;
         $this->apiParas["channelType"] = $channelType;
	}

	public function getChannelType(){
	  return $this->channelType;
	}

                                                                        		                                    	                        	                   			private $thirdCid;
    	                        
	public function setThirdCid($thirdCid){
		$this->thirdCid = $thirdCid;
         $this->apiParas["thirdCid"] = $thirdCid;
	}

	public function getThirdCid(){
	  return $this->thirdCid;
	}

                        	                   			private $skuSearchTypeEnum;
    	                        
	public function setSkuSearchTypeEnum($skuSearchTypeEnum){
		$this->skuSearchTypeEnum = $skuSearchTypeEnum;
         $this->apiParas["skuSearchTypeEnum"] = $skuSearchTypeEnum;
	}

	public function getSkuSearchTypeEnum(){
	  return $this->skuSearchTypeEnum;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $laskSkuId;
    	                        
	public function setLaskSkuId($laskSkuId){
		$this->laskSkuId = $laskSkuId;
         $this->apiParas["laskSkuId"] = $laskSkuId;
	}

	public function getLaskSkuId(){
	  return $this->laskSkuId;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                            }





        
 

