<?php
class EclpExceptionQueryExceptionListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.exception.queryExceptionList";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   	                    		private $orderNos;
    	                        
	public function setOrderNos($orderNos){
		$this->orderNos = $orderNos;
         $this->apiParas["orderNos"] = $orderNos;
	}

	public function getOrderNos(){
	  return $this->orderNos;
	}

                        	                   	                    		private $isvOrderNos;
    	                        
	public function setIsvOrderNos($isvOrderNos){
		$this->isvOrderNos = $isvOrderNos;
         $this->apiParas["isvOrderNos"] = $isvOrderNos;
	}

	public function getIsvOrderNos(){
	  return $this->isvOrderNos;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $bizType;
    	                        
	public function setBizType($bizType){
		$this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
	}

	public function getBizType(){
	  return $this->bizType;
	}

                        	                   			private $createTimeStart;
    	                        
	public function setCreateTimeStart($createTimeStart){
		$this->createTimeStart = $createTimeStart;
         $this->apiParas["createTimeStart"] = $createTimeStart;
	}

	public function getCreateTimeStart(){
	  return $this->createTimeStart;
	}

                        	                   			private $createTimeEnd;
    	                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["createTimeEnd"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
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





        
 

