<?php
class EclpStockQueryBatchAttrStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryBatchAttrStock";
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
                                                        		                                    	                   			private $cursor;
    	                        
	public function setCursor($cursor){
		$this->cursor = $cursor;
         $this->apiParas["cursor"] = $cursor;
	}

	public function getCursor(){
	  return $this->cursor;
	}

                        	                   			private $stockType;
    	                        
	public function setStockType($stockType){
		$this->stockType = $stockType;
         $this->apiParas["stockType"] = $stockType;
	}

	public function getStockType(){
	  return $this->stockType;
	}

                        	                   			private $goodsLevel;
    	                        
	public function setGoodsLevel($goodsLevel){
		$this->goodsLevel = $goodsLevel;
         $this->apiParas["goodsLevel"] = $goodsLevel;
	}

	public function getGoodsLevel(){
	  return $this->goodsLevel;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $sku;
    	                        
	public function setSku($sku){
		$this->sku = $sku;
         $this->apiParas["sku"] = $sku;
	}

	public function getSku(){
	  return $this->sku;
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

                                                    	}





        
 

