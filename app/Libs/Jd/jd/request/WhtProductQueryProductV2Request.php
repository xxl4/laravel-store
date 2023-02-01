<?php
class WhtProductQueryProductV2Request
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wht.product.queryProductV2";
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
                                                        		                                    	                   			private $systemId;
    	                                                            
	public function setSystemId($systemId){
		$this->systemId = $systemId;
         $this->apiParas["system_id"] = $systemId;
	}

	public function getSystemId(){
	  return $this->systemId;
	}

                        	                   			private $shopId;
    	                                                            
	public function setShopId($shopId){
		$this->shopId = $shopId;
         $this->apiParas["shop_id"] = $shopId;
	}

	public function getShopId(){
	  return $this->shopId;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $scrollId;
    	                                                            
	public function setScrollId($scrollId){
		$this->scrollId = $scrollId;
         $this->apiParas["scroll_id"] = $scrollId;
	}

	public function getScrollId(){
	  return $this->scrollId;
	}

                        	                   			private $startTime;
    	                                                            
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["start_time"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $uuid;
    	                        
	public function setUuid($uuid){
		$this->uuid = $uuid;
         $this->apiParas["uuid"] = $uuid;
	}

	public function getUuid(){
	  return $this->uuid;
	}

                            }





        
 

