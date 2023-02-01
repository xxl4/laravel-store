<?php
class FindStoresGroupListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.findStoresGroupList";
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
                                                        		                                    	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $creator;
    	                        
	public function setCreator($creator){
		$this->creator = $creator;
         $this->apiParas["creator"] = $creator;
	}

	public function getCreator(){
	  return $this->creator;
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

}





        
 

