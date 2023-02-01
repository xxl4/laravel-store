<?php
class PopAfsSoaCompensateQueryCompensateListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.soa.compensate.queryCompensateList";
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
                                                        		                                    	                        	                   			private $compensateId;
    	                        
	public function setCompensateId($compensateId){
		$this->compensateId = $compensateId;
         $this->apiParas["compensateId"] = $compensateId;
	}

	public function getCompensateId(){
	  return $this->compensateId;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $refId;
    	                        
	public function setRefId($refId){
		$this->refId = $refId;
         $this->apiParas["refId"] = $refId;
	}

	public function getRefId(){
	  return $this->refId;
	}

                        	                   			private $refType;
    	                        
	public function setRefType($refType){
		$this->refType = $refType;
         $this->apiParas["refType"] = $refType;
	}

	public function getRefType(){
	  return $this->refType;
	}

                        	                   			private $modifiedStartTime;
    	                        
	public function setModifiedStartTime($modifiedStartTime){
		$this->modifiedStartTime = $modifiedStartTime;
         $this->apiParas["modifiedStartTime"] = $modifiedStartTime;
	}

	public function getModifiedStartTime(){
	  return $this->modifiedStartTime;
	}

                        	                   			private $modifiedEndTime;
    	                        
	public function setModifiedEndTime($modifiedEndTime){
		$this->modifiedEndTime = $modifiedEndTime;
         $this->apiParas["modifiedEndTime"] = $modifiedEndTime;
	}

	public function getModifiedEndTime(){
	  return $this->modifiedEndTime;
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





        
 

