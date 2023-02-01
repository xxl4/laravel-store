<?php
class LogisticsO2oOrderQueryAfsRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.order.queryAfs";
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
                                    	                        	                   			private $stationNo;
    	                                                            
	public function setStationNo($stationNo){
		$this->stationNo = $stationNo;
         $this->apiParas["station_no"] = $stationNo;
	}

	public function getStationNo(){
	  return $this->stationNo;
	}

                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $customerOrderId;
    	                                                                        
	public function setCustomerOrderId($customerOrderId){
		$this->customerOrderId = $customerOrderId;
         $this->apiParas["customer_order_id"] = $customerOrderId;
	}

	public function getCustomerOrderId(){
	  return $this->customerOrderId;
	}

                        	                   			private $customerOrderState;
    	                                                                        
	public function setCustomerOrderState($customerOrderState){
		$this->customerOrderState = $customerOrderState;
         $this->apiParas["customer_order_state"] = $customerOrderState;
	}

	public function getCustomerOrderState(){
	  return $this->customerOrderState;
	}

                        	                   			private $customerOrderTimeStart;
    	                                                                                    
	public function setCustomerOrderTimeStart($customerOrderTimeStart){
		$this->customerOrderTimeStart = $customerOrderTimeStart;
         $this->apiParas["customer_order_time_start"] = $customerOrderTimeStart;
	}

	public function getCustomerOrderTimeStart(){
	  return $this->customerOrderTimeStart;
	}

                        	                   			private $customerOrderTimeEnd;
    	                                                                                    
	public function setCustomerOrderTimeEnd($customerOrderTimeEnd){
		$this->customerOrderTimeEnd = $customerOrderTimeEnd;
         $this->apiParas["customer_order_time_end"] = $customerOrderTimeEnd;
	}

	public function getCustomerOrderTimeEnd(){
	  return $this->customerOrderTimeEnd;
	}

                        	                   			private $customerOrderUpdateTimeStart;
    	                                                                                                
	public function setCustomerOrderUpdateTimeStart($customerOrderUpdateTimeStart){
		$this->customerOrderUpdateTimeStart = $customerOrderUpdateTimeStart;
         $this->apiParas["customer_order_update_time_start"] = $customerOrderUpdateTimeStart;
	}

	public function getCustomerOrderUpdateTimeStart(){
	  return $this->customerOrderUpdateTimeStart;
	}

                        	                   			private $customerOrderUpdateTimeEnd;
    	                                                                                                
	public function setCustomerOrderUpdateTimeEnd($customerOrderUpdateTimeEnd){
		$this->customerOrderUpdateTimeEnd = $customerOrderUpdateTimeEnd;
         $this->apiParas["customer_order_update_time_end"] = $customerOrderUpdateTimeEnd;
	}

	public function getCustomerOrderUpdateTimeEnd(){
	  return $this->customerOrderUpdateTimeEnd;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $pageNum;
    	                                                            
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["page_num"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

}





        
 

