<?php
class QueryOrderBasicInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.queryOrderBasicInfo";
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

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderList;
                              public function setOrderList($orderList ){
                 $this->orderList=$orderList;
                 $this->apiParas["orderList"] = $orderList;
              }

              public function getOrderList(){
              	return $this->orderList;
              }
                                                                                                                                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $index;
    	                        
	public function setIndex($index){
		$this->index = $index;
         $this->apiParas["index"] = $index;
	}

	public function getIndex(){
	  return $this->index;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
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





        
 

