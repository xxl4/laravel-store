<?php
class LogisticsO2oOrderSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.o2o.order.search";
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

                        	                   			private $orderState;
    	                                                            
	public function setOrderState($orderState){
		$this->orderState = $orderState;
         $this->apiParas["order_state"] = $orderState;
	}

	public function getOrderState(){
	  return $this->orderState;
	}

                        	                   			private $orderTimeStart;
    	                                                                        
	public function setOrderTimeStart($orderTimeStart){
		$this->orderTimeStart = $orderTimeStart;
         $this->apiParas["order_time_start"] = $orderTimeStart;
	}

	public function getOrderTimeStart(){
	  return $this->orderTimeStart;
	}

                        	                   			private $orderTimeEnd;
    	                                                                        
	public function setOrderTimeEnd($orderTimeEnd){
		$this->orderTimeEnd = $orderTimeEnd;
         $this->apiParas["order_time_end"] = $orderTimeEnd;
	}

	public function getOrderTimeEnd(){
	  return $this->orderTimeEnd;
	}

                        	                   			private $orderUpdateTimeStart;
    	                                                                                    
	public function setOrderUpdateTimeStart($orderUpdateTimeStart){
		$this->orderUpdateTimeStart = $orderUpdateTimeStart;
         $this->apiParas["order_update_time_start"] = $orderUpdateTimeStart;
	}

	public function getOrderUpdateTimeStart(){
	  return $this->orderUpdateTimeStart;
	}

                        	                   			private $orderUpdateTimeEnd;
    	                                                                                    
	public function setOrderUpdateTimeEnd($orderUpdateTimeEnd){
		$this->orderUpdateTimeEnd = $orderUpdateTimeEnd;
         $this->apiParas["order_update_time_end"] = $orderUpdateTimeEnd;
	}

	public function getOrderUpdateTimeEnd(){
	  return $this->orderUpdateTimeEnd;
	}

                        	                   			private $currentPage;
    	                                                            
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

}





        
 

