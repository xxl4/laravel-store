<?php
class SvcBookingListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.svc.booking.list";
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
                                                        		                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                        	                   			private $verificationStatus;
    	                        
	public function setVerificationStatus($verificationStatus){
		$this->verificationStatus = $verificationStatus;
         $this->apiParas["verificationStatus"] = $verificationStatus;
	}

	public function getVerificationStatus(){
	  return $this->verificationStatus;
	}

                        	                   			private $storeName;
    	                        
	public function setStoreName($storeName){
		$this->storeName = $storeName;
         $this->apiParas["storeName"] = $storeName;
	}

	public function getStoreName(){
	  return $this->storeName;
	}

                        	                   			private $lcnNo;
    	                        
	public function setLcnNo($lcnNo){
		$this->lcnNo = $lcnNo;
         $this->apiParas["lcnNo"] = $lcnNo;
	}

	public function getLcnNo(){
	  return $this->lcnNo;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $submitTimeStart;
    	                        
	public function setSubmitTimeStart($submitTimeStart){
		$this->submitTimeStart = $submitTimeStart;
         $this->apiParas["submitTimeStart"] = $submitTimeStart;
	}

	public function getSubmitTimeStart(){
	  return $this->submitTimeStart;
	}

                        	                   			private $submitTimeEnd;
    	                        
	public function setSubmitTimeEnd($submitTimeEnd){
		$this->submitTimeEnd = $submitTimeEnd;
         $this->apiParas["submitTimeEnd"] = $submitTimeEnd;
	}

	public function getSubmitTimeEnd(){
	  return $this->submitTimeEnd;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                            }





        
 

