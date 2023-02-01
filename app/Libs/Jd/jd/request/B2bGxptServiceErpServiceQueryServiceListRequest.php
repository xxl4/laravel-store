<?php
class B2bGxptServiceErpServiceQueryServiceListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.gxpt.serviceErpService.queryServiceList";
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
                                                        		                                    	                   			private $applyStartDate;
    	                        
	public function setApplyStartDate($applyStartDate){
		$this->applyStartDate = $applyStartDate;
         $this->apiParas["applyStartDate"] = $applyStartDate;
	}

	public function getApplyStartDate(){
	  return $this->applyStartDate;
	}

                        	                   			private $purchaseId;
    	                        
	public function setPurchaseId($purchaseId){
		$this->purchaseId = $purchaseId;
         $this->apiParas["purchaseId"] = $purchaseId;
	}

	public function getPurchaseId(){
	  return $this->purchaseId;
	}

                        	                        	                   			private $orderStatus;
    	                        
	public function setOrderStatus($orderStatus){
		$this->orderStatus = $orderStatus;
         $this->apiParas["orderStatus"] = $orderStatus;
	}

	public function getOrderStatus(){
	  return $this->orderStatus;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $applyEndDate;
    	                        
	public function setApplyEndDate($applyEndDate){
		$this->applyEndDate = $applyEndDate;
         $this->apiParas["applyEndDate"] = $applyEndDate;
	}

	public function getApplyEndDate(){
	  return $this->applyEndDate;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                        	                   			private $submitEndDate;
    	                        
	public function setSubmitEndDate($submitEndDate){
		$this->submitEndDate = $submitEndDate;
         $this->apiParas["submitEndDate"] = $submitEndDate;
	}

	public function getSubmitEndDate(){
	  return $this->submitEndDate;
	}

                        	                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $serviceStatus;
    	                        
	public function setServiceStatus($serviceStatus){
		$this->serviceStatus = $serviceStatus;
         $this->apiParas["serviceStatus"] = $serviceStatus;
	}

	public function getServiceStatus(){
	  return $this->serviceStatus;
	}

                        	                   			private $submitStartDate;
    	                        
	public function setSubmitStartDate($submitStartDate){
		$this->submitStartDate = $submitStartDate;
         $this->apiParas["submitStartDate"] = $submitStartDate;
	}

	public function getSubmitStartDate(){
	  return $this->submitStartDate;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                   			private $saleServiceType;
    	                        
	public function setSaleServiceType($saleServiceType){
		$this->saleServiceType = $saleServiceType;
         $this->apiParas["saleServiceType"] = $saleServiceType;
	}

	public function getSaleServiceType(){
	  return $this->saleServiceType;
	}

                        	                   			private $startModified;
    	                        
	public function setStartModified($startModified){
		$this->startModified = $startModified;
         $this->apiParas["startModified"] = $startModified;
	}

	public function getStartModified(){
	  return $this->startModified;
	}

                        	                   			private $endModified;
    	                        
	public function setEndModified($endModified){
		$this->endModified = $endModified;
         $this->apiParas["endModified"] = $endModified;
	}

	public function getEndModified(){
	  return $this->endModified;
	}

                            }





        
 

