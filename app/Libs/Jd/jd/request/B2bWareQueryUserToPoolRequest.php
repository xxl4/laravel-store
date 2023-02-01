<?php
class B2bWareQueryUserToPoolRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.ware.queryUserToPool";
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

                        	                   			private $endModifyTime;
    	                        
	public function setEndModifyTime($endModifyTime){
		$this->endModifyTime = $endModifyTime;
         $this->apiParas["endModifyTime"] = $endModifyTime;
	}

	public function getEndModifyTime(){
	  return $this->endModifyTime;
	}

                        	                   			private $userToPoolSortField;
    	                        
	public function setUserToPoolSortField($userToPoolSortField){
		$this->userToPoolSortField = $userToPoolSortField;
         $this->apiParas["userToPoolSortField"] = $userToPoolSortField;
	}

	public function getUserToPoolSortField(){
	  return $this->userToPoolSortField;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $startCreateTime;
    	                        
	public function setStartCreateTime($startCreateTime){
		$this->startCreateTime = $startCreateTime;
         $this->apiParas["startCreateTime"] = $startCreateTime;
	}

	public function getStartCreateTime(){
	  return $this->startCreateTime;
	}

                        	                   			private $attributeId;
    	                        
	public function setAttributeId($attributeId){
		$this->attributeId = $attributeId;
         $this->apiParas["attributeId"] = $attributeId;
	}

	public function getAttributeId(){
	  return $this->attributeId;
	}

                        	                   			private $mappingLevel;
    	                        
	public function setMappingLevel($mappingLevel){
		$this->mappingLevel = $mappingLevel;
         $this->apiParas["mappingLevel"] = $mappingLevel;
	}

	public function getMappingLevel(){
	  return $this->mappingLevel;
	}

                        	                   			private $startModifyTime;
    	                        
	public function setStartModifyTime($startModifyTime){
		$this->startModifyTime = $startModifyTime;
         $this->apiParas["startModifyTime"] = $startModifyTime;
	}

	public function getStartModifyTime(){
	  return $this->startModifyTime;
	}

                        	                   			private $b2bMappingId;
    	                        
	public function setB2bMappingId($b2bMappingId){
		$this->b2bMappingId = $b2bMappingId;
         $this->apiParas["b2bMappingId"] = $b2bMappingId;
	}

	public function getB2bMappingId(){
	  return $this->b2bMappingId;
	}

                        	                   			private $cateType;
    	                        
	public function setCateType($cateType){
		$this->cateType = $cateType;
         $this->apiParas["cateType"] = $cateType;
	}

	public function getCateType(){
	  return $this->cateType;
	}

                        	                   			private $wareMappingType;
    	                        
	public function setWareMappingType($wareMappingType){
		$this->wareMappingType = $wareMappingType;
         $this->apiParas["wareMappingType"] = $wareMappingType;
	}

	public function getWareMappingType(){
	  return $this->wareMappingType;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $bizPoolType;
    	                        
	public function setBizPoolType($bizPoolType){
		$this->bizPoolType = $bizPoolType;
         $this->apiParas["bizPoolType"] = $bizPoolType;
	}

	public function getBizPoolType(){
	  return $this->bizPoolType;
	}

                        	                   			private $b2bUserToPoolQueryTypeEnum;
    	                        
	public function setB2bUserToPoolQueryTypeEnum($b2bUserToPoolQueryTypeEnum){
		$this->b2bUserToPoolQueryTypeEnum = $b2bUserToPoolQueryTypeEnum;
         $this->apiParas["b2bUserToPoolQueryTypeEnum"] = $b2bUserToPoolQueryTypeEnum;
	}

	public function getB2bUserToPoolQueryTypeEnum(){
	  return $this->b2bUserToPoolQueryTypeEnum;
	}

                        	                   			private $editor;
    	                        
	public function setEditor($editor){
		$this->editor = $editor;
         $this->apiParas["editor"] = $editor;
	}

	public function getEditor(){
	  return $this->editor;
	}

                        	                   			private $creator;
    	                        
	public function setCreator($creator){
		$this->creator = $creator;
         $this->apiParas["creator"] = $creator;
	}

	public function getCreator(){
	  return $this->creator;
	}

                        	                   			private $totalItem;
    	                        
	public function setTotalItem($totalItem){
		$this->totalItem = $totalItem;
         $this->apiParas["totalItem"] = $totalItem;
	}

	public function getTotalItem(){
	  return $this->totalItem;
	}

                        	                   			private $totalPage;
    	                        
	public function setTotalPage($totalPage){
		$this->totalPage = $totalPage;
         $this->apiParas["totalPage"] = $totalPage;
	}

	public function getTotalPage(){
	  return $this->totalPage;
	}

                        	                   			private $sortTypeEnum;
    	                        
	public function setSortTypeEnum($sortTypeEnum){
		$this->sortTypeEnum = $sortTypeEnum;
         $this->apiParas["sortTypeEnum"] = $sortTypeEnum;
	}

	public function getSortTypeEnum(){
	  return $this->sortTypeEnum;
	}

                        	                   			private $b2bPoolId;
    	                        
	public function setB2bPoolId($b2bPoolId){
		$this->b2bPoolId = $b2bPoolId;
         $this->apiParas["b2bPoolId"] = $b2bPoolId;
	}

	public function getB2bPoolId(){
	  return $this->b2bPoolId;
	}

                        	                   			private $endCreateTime;
    	                        
	public function setEndCreateTime($endCreateTime){
		$this->endCreateTime = $endCreateTime;
         $this->apiParas["endCreateTime"] = $endCreateTime;
	}

	public function getEndCreateTime(){
	  return $this->endCreateTime;
	}

                        	                   			private $b2bPoolName;
    	                        
	public function setB2bPoolName($b2bPoolName){
		$this->b2bPoolName = $b2bPoolName;
         $this->apiParas["b2bPoolName"] = $b2bPoolName;
	}

	public function getB2bPoolName(){
	  return $this->b2bPoolName;
	}

                        	                   			private $lastB2bMappingId;
    	                        
	public function setLastB2bMappingId($lastB2bMappingId){
		$this->lastB2bMappingId = $lastB2bMappingId;
         $this->apiParas["lastB2bMappingId"] = $lastB2bMappingId;
	}

	public function getLastB2bMappingId(){
	  return $this->lastB2bMappingId;
	}

                        	                   			private $cateId;
    	                        
	public function setCateId($cateId){
		$this->cateId = $cateId;
         $this->apiParas["cateId"] = $cateId;
	}

	public function getCateId(){
	  return $this->cateId;
	}

                        	                   			private $mappingType;
    	                        
	public function setMappingType($mappingType){
		$this->mappingType = $mappingType;
         $this->apiParas["mappingType"] = $mappingType;
	}

	public function getMappingType(){
	  return $this->mappingType;
	}

                        	                   			private $poolGroupId;
    	                        
	public function setPoolGroupId($poolGroupId){
		$this->poolGroupId = $poolGroupId;
         $this->apiParas["poolGroupId"] = $poolGroupId;
	}

	public function getPoolGroupId(){
	  return $this->poolGroupId;
	}

                        	                   			private $thirdMappingId;
    	                        
	public function setThirdMappingId($thirdMappingId){
		$this->thirdMappingId = $thirdMappingId;
         $this->apiParas["thirdMappingId"] = $thirdMappingId;
	}

	public function getThirdMappingId(){
	  return $this->thirdMappingId;
	}

                        	                   			private $outerMappingId;
    	                        
	public function setOuterMappingId($outerMappingId){
		$this->outerMappingId = $outerMappingId;
         $this->apiParas["outerMappingId"] = $outerMappingId;
	}

	public function getOuterMappingId(){
	  return $this->outerMappingId;
	}

                        	                   			private $dataSource;
    	                        
	public function setDataSource($dataSource){
		$this->dataSource = $dataSource;
         $this->apiParas["dataSource"] = $dataSource;
	}

	public function getDataSource(){
	  return $this->dataSource;
	}

                            }





        
 

