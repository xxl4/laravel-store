<?php
class FactoryProductQueryProductByPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.factory.product.queryProductByPage";
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
                                                        		                                    	                   			private $personalKey;
    	                        
	public function setPersonalKey($personalKey){
		$this->personalKey = $personalKey;
         $this->apiParas["personalKey"] = $personalKey;
	}

	public function getPersonalKey(){
	  return $this->personalKey;
	}

                        	                   			private $ptId;
    	                        
	public function setPtId($ptId){
		$this->ptId = $ptId;
         $this->apiParas["ptId"] = $ptId;
	}

	public function getPtId(){
	  return $this->ptId;
	}

                        	                        	                                                                        		                                    	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $materialType;
    	                        
	public function setMaterialType($materialType){
		$this->materialType = $materialType;
         $this->apiParas["materialType"] = $materialType;
	}

	public function getMaterialType(){
	  return $this->materialType;
	}

                        	                   			private $subType;
    	                        
	public function setSubType($subType){
		$this->subType = $subType;
         $this->apiParas["subType"] = $subType;
	}

	public function getSubType(){
	  return $this->subType;
	}

                        	                   	                    		private $skuList;
    	                        
	public function setSkuList($skuList){
		$this->skuList = $skuList;
         $this->apiParas["skuList"] = $skuList;
	}

	public function getSkuList(){
	  return $this->skuList;
	}

                                                    	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

}





        
 

