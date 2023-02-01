<?php
class B2bOrderListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.order.list.get";
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

                        	                   			private $orderTier;
    	                        
	public function setOrderTier($orderTier){
		$this->orderTier = $orderTier;
         $this->apiParas["orderTier"] = $orderTier;
	}

	public function getOrderTier(){
	  return $this->orderTier;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $submitOrderTimeFrom;
    	                        
	public function setSubmitOrderTimeFrom($submitOrderTimeFrom){
		$this->submitOrderTimeFrom = $submitOrderTimeFrom;
         $this->apiParas["submitOrderTimeFrom"] = $submitOrderTimeFrom;
	}

	public function getSubmitOrderTimeFrom(){
	  return $this->submitOrderTimeFrom;
	}

                        	                   			private $submitOrderTimeTo;
    	                        
	public function setSubmitOrderTimeTo($submitOrderTimeTo){
		$this->submitOrderTimeTo = $submitOrderTimeTo;
         $this->apiParas["submitOrderTimeTo"] = $submitOrderTimeTo;
	}

	public function getSubmitOrderTimeTo(){
	  return $this->submitOrderTimeTo;
	}

                        	                        	                   	                    		private $jdOrderState;
    	                        
	public function setJdOrderState($jdOrderState){
		$this->jdOrderState = $jdOrderState;
         $this->apiParas["jdOrderState"] = $jdOrderState;
	}

	public function getJdOrderState(){
	  return $this->jdOrderState;
	}

                        	                   			private $deliverState;
    	                        
	public function setDeliverState($deliverState){
		$this->deliverState = $deliverState;
         $this->apiParas["deliverState"] = $deliverState;
	}

	public function getDeliverState(){
	  return $this->deliverState;
	}

                            }





        
 

