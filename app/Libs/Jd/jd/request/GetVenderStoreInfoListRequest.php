<?php
class GetVenderStoreInfoListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getVenderStoreInfoList";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $exStoreId;
                              public function setExStoreId($exStoreId ){
                 $this->exStoreId=$exStoreId;
                 $this->apiParas["exStoreId"] = $exStoreId;
              }

              public function getExStoreId(){
              	return $this->exStoreId;
              }
                                                                                                                                        	                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $storeId;
                              public function setStoreId($storeId ){
                 $this->storeId=$storeId;
                 $this->apiParas["storeId"] = $storeId;
              }

              public function getStoreId(){
              	return $this->storeId;
              }
                                                                                                                                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $storeStatus;
    	                        
	public function setStoreStatus($storeStatus){
		$this->storeStatus = $storeStatus;
         $this->apiParas["storeStatus"] = $storeStatus;
	}

	public function getStoreStatus(){
	  return $this->storeStatus;
	}

                        	                   			private $firstAddress;
    	                        
	public function setFirstAddress($firstAddress){
		$this->firstAddress = $firstAddress;
         $this->apiParas["firstAddress"] = $firstAddress;
	}

	public function getFirstAddress(){
	  return $this->firstAddress;
	}

                        	                   			private $secondAddress;
    	                        
	public function setSecondAddress($secondAddress){
		$this->secondAddress = $secondAddress;
         $this->apiParas["secondAddress"] = $secondAddress;
	}

	public function getSecondAddress(){
	  return $this->secondAddress;
	}

                        	                   			private $thirdAddress;
    	                        
	public function setThirdAddress($thirdAddress){
		$this->thirdAddress = $thirdAddress;
         $this->apiParas["thirdAddress"] = $thirdAddress;
	}

	public function getThirdAddress(){
	  return $this->thirdAddress;
	}

                            }





        
 

