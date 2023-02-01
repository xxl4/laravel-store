<?php
class EclpSpareQueryTransOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.spare.queryTransOrder";
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
                                                        		                                    	                   			private $deptName;
    	                        
	public function setDeptName($deptName){
		$this->deptName = $deptName;
         $this->apiParas["deptName"] = $deptName;
	}

	public function getDeptName(){
	  return $this->deptName;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $destWarehouseNo;
    	                        
	public function setDestWarehouseNo($destWarehouseNo){
		$this->destWarehouseNo = $destWarehouseNo;
         $this->apiParas["destWarehouseNo"] = $destWarehouseNo;
	}

	public function getDestWarehouseNo(){
	  return $this->destWarehouseNo;
	}

                        	                   			private $sellerName;
    	                        
	public function setSellerName($sellerName){
		$this->sellerName = $sellerName;
         $this->apiParas["sellerName"] = $sellerName;
	}

	public function getSellerName(){
	  return $this->sellerName;
	}

                        	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
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

                        	                   			private $startWarehouseNo;
    	                        
	public function setStartWarehouseNo($startWarehouseNo){
		$this->startWarehouseNo = $startWarehouseNo;
         $this->apiParas["startWarehouseNo"] = $startWarehouseNo;
	}

	public function getStartWarehouseNo(){
	  return $this->startWarehouseNo;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                            }





        
 

