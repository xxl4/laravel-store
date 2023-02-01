<?php
class AscServiceAndRefundViewRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.serviceAndRefund.view";
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
                                    	                        	                        	                                            		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $applyTimeBegin;
    	                        
	public function setApplyTimeBegin($applyTimeBegin){
		$this->applyTimeBegin = $applyTimeBegin;
         $this->apiParas["applyTimeBegin"] = $applyTimeBegin;
	}

	public function getApplyTimeBegin(){
	  return $this->applyTimeBegin;
	}

                        	                   			private $applyTimeEnd;
    	                        
	public function setApplyTimeEnd($applyTimeEnd){
		$this->applyTimeEnd = $applyTimeEnd;
         $this->apiParas["applyTimeEnd"] = $applyTimeEnd;
	}

	public function getApplyTimeEnd(){
	  return $this->applyTimeEnd;
	}

                        	                   			private $approveTimeBegin;
    	                        
	public function setApproveTimeBegin($approveTimeBegin){
		$this->approveTimeBegin = $approveTimeBegin;
         $this->apiParas["approveTimeBegin"] = $approveTimeBegin;
	}

	public function getApproveTimeBegin(){
	  return $this->approveTimeBegin;
	}

                        	                   			private $approveTimeEnd;
    	                        
	public function setApproveTimeEnd($approveTimeEnd){
		$this->approveTimeEnd = $approveTimeEnd;
         $this->apiParas["approveTimeEnd"] = $approveTimeEnd;
	}

	public function getApproveTimeEnd(){
	  return $this->approveTimeEnd;
	}

                                            		                                    	                   			private $pageNumber;
    	                        
	public function setPageNumber($pageNumber){
		$this->pageNumber = $pageNumber;
         $this->apiParas["pageNumber"] = $pageNumber;
	}

	public function getPageNumber(){
	  return $this->pageNumber;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                                                    	                   			private $extJsonStr;
    	                        
	public function setExtJsonStr($extJsonStr){
		$this->extJsonStr = $extJsonStr;
         $this->apiParas["extJsonStr"] = $extJsonStr;
	}

	public function getExtJsonStr(){
	  return $this->extJsonStr;
	}

                            }





        
 

