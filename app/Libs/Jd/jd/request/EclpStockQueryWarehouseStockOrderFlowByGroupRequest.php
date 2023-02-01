<?php
class EclpStockQueryWarehouseStockOrderFlowByGroupRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryWarehouseStockOrderFlowByGroup";
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
                                                        		                                    	                   			private $startDate;
    	                        
	public function setStartDate($startDate){
		$this->startDate = $startDate;
         $this->apiParas["startDate"] = $startDate;
	}

	public function getStartDate(){
	  return $this->startDate;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
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

                        	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $isvGoodsNo;
    	                        
	public function setIsvGoodsNo($isvGoodsNo){
		$this->isvGoodsNo = $isvGoodsNo;
         $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
	}

	public function getIsvGoodsNo(){
	  return $this->isvGoodsNo;
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

                                                    	}





        
 

