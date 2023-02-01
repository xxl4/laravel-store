<?php
class B2bWareQuerySkuToPoolRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.ware.querySkuToPool";
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
                                                        		                                    	                   			private $businessChannel;
    	                        
	public function setBusinessChannel($businessChannel){
		$this->businessChannel = $businessChannel;
         $this->apiParas["businessChannel"] = $businessChannel;
	}

	public function getBusinessChannel(){
	  return $this->businessChannel;
	}

                        	                                                                        		                                    	                   			private $mappingId;
    	                        
	public function setMappingId($mappingId){
		$this->mappingId = $mappingId;
         $this->apiParas["mappingId"] = $mappingId;
	}

	public function getMappingId(){
	  return $this->mappingId;
	}

                        	                   			private $minJdSkuId;
    	                        
	public function setMinJdSkuId($minJdSkuId){
		$this->minJdSkuId = $minJdSkuId;
         $this->apiParas["minJdSkuId"] = $minJdSkuId;
	}

	public function getMinJdSkuId(){
	  return $this->minJdSkuId;
	}

                        	                   			private $jdSkuId;
    	                        
	public function setJdSkuId($jdSkuId){
		$this->jdSkuId = $jdSkuId;
         $this->apiParas["jdSkuId"] = $jdSkuId;
	}

	public function getJdSkuId(){
	  return $this->jdSkuId;
	}

                        	                   			private $totalItem;
    	                        
	public function setTotalItem($totalItem){
		$this->totalItem = $totalItem;
         $this->apiParas["totalItem"] = $totalItem;
	}

	public function getTotalItem(){
	  return $this->totalItem;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $totalPage;
    	                        
	public function setTotalPage($totalPage){
		$this->totalPage = $totalPage;
         $this->apiParas["totalPage"] = $totalPage;
	}

	public function getTotalPage(){
	  return $this->totalPage;
	}

                        	                   			private $mappingType;
    	                        
	public function setMappingType($mappingType){
		$this->mappingType = $mappingType;
         $this->apiParas["mappingType"] = $mappingType;
	}

	public function getMappingType(){
	  return $this->mappingType;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $b2bSkuToPoolQueryTypeEnum;
    	                        
	public function setB2bSkuToPoolQueryTypeEnum($b2bSkuToPoolQueryTypeEnum){
		$this->b2bSkuToPoolQueryTypeEnum = $b2bSkuToPoolQueryTypeEnum;
         $this->apiParas["b2bSkuToPoolQueryTypeEnum"] = $b2bSkuToPoolQueryTypeEnum;
	}

	public function getB2bSkuToPoolQueryTypeEnum(){
	  return $this->b2bSkuToPoolQueryTypeEnum;
	}

                        	                   			private $b2bPoolId;
    	                        
	public function setB2bPoolId($b2bPoolId){
		$this->b2bPoolId = $b2bPoolId;
         $this->apiParas["b2bPoolId"] = $b2bPoolId;
	}

	public function getB2bPoolId(){
	  return $this->b2bPoolId;
	}

                            }





        
 

