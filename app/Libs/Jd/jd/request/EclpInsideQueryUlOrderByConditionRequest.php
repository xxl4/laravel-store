<?php
class EclpInsideQueryUlOrderByConditionRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.inside.queryUlOrderByCondition";
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
                                    	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                                            		                                    	                   			private $ulNo;
    	                        
	public function setUlNo($ulNo){
		$this->ulNo = $ulNo;
         $this->apiParas["ulNo"] = $ulNo;
	}

	public function getUlNo(){
	  return $this->ulNo;
	}

                        	                   			private $outUlNo;
    	                        
	public function setOutUlNo($outUlNo){
		$this->outUlNo = $outUlNo;
         $this->apiParas["outUlNo"] = $outUlNo;
	}

	public function getOutUlNo(){
	  return $this->outUlNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $allowReturnDest;
    	                        
	public function setAllowReturnDest($allowReturnDest){
		$this->allowReturnDest = $allowReturnDest;
         $this->apiParas["allowReturnDest"] = $allowReturnDest;
	}

	public function getAllowReturnDest(){
	  return $this->allowReturnDest;
	}

                                                    	}





        
 

