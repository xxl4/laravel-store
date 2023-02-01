<?php
class YunpeiPurchaseProductQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.purchase.product.query";
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
                                    	                        	                   			private $level2CategoryId;
    	                                                                        
	public function setLevel2CategoryId($level2CategoryId){
		$this->level2CategoryId = $level2CategoryId;
         $this->apiParas["level2_category_id"] = $level2CategoryId;
	}

	public function getLevel2CategoryId(){
	  return $this->level2CategoryId;
	}

                        	                   			private $cityName;
    	                                                            
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["city_name"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $pageNo;
    	                                                            
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                                                            
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

