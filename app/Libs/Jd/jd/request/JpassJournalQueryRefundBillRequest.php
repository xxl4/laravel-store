<?php
class JpassJournalQueryRefundBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jpass.journal.queryRefundBill";
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

                        	                   			private $businessBillId;
    	                        
	public function setBusinessBillId($businessBillId){
		$this->businessBillId = $businessBillId;
         $this->apiParas["businessBillId"] = $businessBillId;
	}

	public function getBusinessBillId(){
	  return $this->businessBillId;
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

                        	                   			private $refStoreId;
    	                        
	public function setRefStoreId($refStoreId){
		$this->refStoreId = $refStoreId;
         $this->apiParas["refStoreId"] = $refStoreId;
	}

	public function getRefStoreId(){
	  return $this->refStoreId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $sId;
                              public function setSId($sId ){
                 $this->sId=$sId;
                 $this->apiParas["sId"] = $sId;
              }

              public function getSId(){
              	return $this->sId;
              }
                                                                                                                                        	                   			private $happenTime;
    	                        
	public function setHappenTime($happenTime){
		$this->happenTime = $happenTime;
         $this->apiParas["happenTime"] = $happenTime;
	}

	public function getHappenTime(){
	  return $this->happenTime;
	}

                        	                   			private $happenTimeBegin;
    	                        
	public function setHappenTimeBegin($happenTimeBegin){
		$this->happenTimeBegin = $happenTimeBegin;
         $this->apiParas["happenTimeBegin"] = $happenTimeBegin;
	}

	public function getHappenTimeBegin(){
	  return $this->happenTimeBegin;
	}

                        	                   			private $happenTimeEnd;
    	                        
	public function setHappenTimeEnd($happenTimeEnd){
		$this->happenTimeEnd = $happenTimeEnd;
         $this->apiParas["happenTimeEnd"] = $happenTimeEnd;
	}

	public function getHappenTimeEnd(){
	  return $this->happenTimeEnd;
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





        
 

