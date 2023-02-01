<?php
class JpassJournalQueryOrderBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jpass.journal.queryOrderBill";
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
                                                        		                                    	                   			private $bid;
    	                        
	public function setBid($bid){
		$this->bid = $bid;
         $this->apiParas["bid"] = $bid;
	}

	public function getBid(){
	  return $this->bid;
	}

                        	                        	                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $refOrderId;
    	                        
	public function setRefOrderId($refOrderId){
		$this->refOrderId = $refOrderId;
         $this->apiParas["refOrderId"] = $refOrderId;
	}

	public function getRefOrderId(){
	  return $this->refOrderId;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $sId;
                              public function setSId($sId ){
                 $this->sId=$sId;
                 $this->apiParas["sId"] = $sId;
              }

              public function getSId(){
              	return $this->sId;
              }
                                                                                                                                        	                   			private $refStoreId;
    	                        
	public function setRefStoreId($refStoreId){
		$this->refStoreId = $refStoreId;
         $this->apiParas["refStoreId"] = $refStoreId;
	}

	public function getRefStoreId(){
	  return $this->refStoreId;
	}

                        	                   			private $orderCompleteTime;
    	                        
	public function setOrderCompleteTime($orderCompleteTime){
		$this->orderCompleteTime = $orderCompleteTime;
         $this->apiParas["orderCompleteTime"] = $orderCompleteTime;
	}

	public function getOrderCompleteTime(){
	  return $this->orderCompleteTime;
	}

                        	                   			private $orderCompleteTimeBegin;
    	                        
	public function setOrderCompleteTimeBegin($orderCompleteTimeBegin){
		$this->orderCompleteTimeBegin = $orderCompleteTimeBegin;
         $this->apiParas["orderCompleteTimeBegin"] = $orderCompleteTimeBegin;
	}

	public function getOrderCompleteTimeBegin(){
	  return $this->orderCompleteTimeBegin;
	}

                        	                   			private $orderCompleteTimeEnd;
    	                        
	public function setOrderCompleteTimeEnd($orderCompleteTimeEnd){
		$this->orderCompleteTimeEnd = $orderCompleteTimeEnd;
         $this->apiParas["orderCompleteTimeEnd"] = $orderCompleteTimeEnd;
	}

	public function getOrderCompleteTimeEnd(){
	  return $this->orderCompleteTimeEnd;
	}

                        	                   			private $settleStatus;
    	                        
	public function setSettleStatus($settleStatus){
		$this->settleStatus = $settleStatus;
         $this->apiParas["settleStatus"] = $settleStatus;
	}

	public function getSettleStatus(){
	  return $this->settleStatus;
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

                            }





        
 

