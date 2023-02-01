<?php
class PopOrderFbpSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.fbp.search";
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

                        	                   			private $orderState;
    	                        
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["orderState"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $colType;
    	                        
	public function setColType($colType){
		$this->colType = $colType;
         $this->apiParas["colType"] = $colType;
	}

	public function getColType(){
	  return $this->colType;
	}

                        	                   			private $optionalFields;
    	                        
	public function setOptionalFields($optionalFields){
		$this->optionalFields = $optionalFields;
         $this->apiParas["optionalFields"] = $optionalFields;
	}

	public function getOptionalFields(){
	  return $this->optionalFields;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $dateType;
    	                        
	public function setDateType($dateType){
		$this->dateType = $dateType;
         $this->apiParas["dateType"] = $dateType;
	}

	public function getDateType(){
	  return $this->dateType;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $cky2;
    	                        
	public function setCky2($cky2){
		$this->cky2 = $cky2;
         $this->apiParas["cky2"] = $cky2;
	}

	public function getCky2(){
	  return $this->cky2;
	}

                            }





        
 

