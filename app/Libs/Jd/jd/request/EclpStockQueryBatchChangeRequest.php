<?php
class EclpStockQueryBatchChangeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryBatchChange";
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

                        	                   			private $allocativeCenterNo;
    	                        
	public function setAllocativeCenterNo($allocativeCenterNo){
		$this->allocativeCenterNo = $allocativeCenterNo;
         $this->apiParas["allocativeCenterNo"] = $allocativeCenterNo;
	}

	public function getAllocativeCenterNo(){
	  return $this->allocativeCenterNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $batchAttrChangeNo;
    	                        
	public function setBatchAttrChangeNo($batchAttrChangeNo){
		$this->batchAttrChangeNo = $batchAttrChangeNo;
         $this->apiParas["batchAttrChangeNo"] = $batchAttrChangeNo;
	}

	public function getBatchAttrChangeNo(){
	  return $this->batchAttrChangeNo;
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

                        	                   			private $startPage;
    	                        
	public function setStartPage($startPage){
		$this->startPage = $startPage;
         $this->apiParas["startPage"] = $startPage;
	}

	public function getStartPage(){
	  return $this->startPage;
	}

                        	                   			private $onePageNum;
    	                        
	public function setOnePageNum($onePageNum){
		$this->onePageNum = $onePageNum;
         $this->apiParas["onePageNum"] = $onePageNum;
	}

	public function getOnePageNum(){
	  return $this->onePageNum;
	}

                                                    	}





        
 

