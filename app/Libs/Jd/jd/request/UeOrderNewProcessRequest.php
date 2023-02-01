<?php
class UeOrderNewProcessRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.process";
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
                                                        		                                    	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $deliverCompany;
    	                        
	public function setDeliverCompany($deliverCompany){
		$this->deliverCompany = $deliverCompany;
         $this->apiParas["deliverCompany"] = $deliverCompany;
	}

	public function getDeliverCompany(){
	  return $this->deliverCompany;
	}

                        	                   			private $deliverArriveDate;
    	                        
	public function setDeliverArriveDate($deliverArriveDate){
		$this->deliverArriveDate = $deliverArriveDate;
         $this->apiParas["deliverArriveDate"] = $deliverArriveDate;
	}

	public function getDeliverArriveDate(){
	  return $this->deliverArriveDate;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $assessValue;
    	                        
	public function setAssessValue($assessValue){
		$this->assessValue = $assessValue;
         $this->apiParas["assessValue"] = $assessValue;
	}

	public function getAssessValue(){
	  return $this->assessValue;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $level;
    	                        
	public function setLevel($level){
		$this->level = $level;
         $this->apiParas["level"] = $level;
	}

	public function getLevel(){
	  return $this->level;
	}

                        	                   			private $newPartPrice;
    	                        
	public function setNewPartPrice($newPartPrice){
		$this->newPartPrice = $newPartPrice;
         $this->apiParas["newPartPrice"] = $newPartPrice;
	}

	public function getNewPartPrice(){
	  return $this->newPartPrice;
	}

                        	                   			private $newPartQty;
    	                        
	public function setNewPartQty($newPartQty){
		$this->newPartQty = $newPartQty;
         $this->apiParas["newPartQty"] = $newPartQty;
	}

	public function getNewPartQty(){
	  return $this->newPartQty;
	}

                        	                   			private $barcode2;
    	                        
	public function setBarcode2($barcode2){
		$this->barcode2 = $barcode2;
         $this->apiParas["barcode2"] = $barcode2;
	}

	public function getBarcode2(){
	  return $this->barcode2;
	}

                        	                   			private $barcode1;
    	                        
	public function setBarcode1($barcode1){
		$this->barcode1 = $barcode1;
         $this->apiParas["barcode1"] = $barcode1;
	}

	public function getBarcode1(){
	  return $this->barcode1;
	}

                        	                   			private $appointTimes;
    	                        
	public function setAppointTimes($appointTimes){
		$this->appointTimes = $appointTimes;
         $this->apiParas["appointTimes"] = $appointTimes;
	}

	public function getAppointTimes(){
	  return $this->appointTimes;
	}

                        	                   			private $engineerCode;
    	                        
	public function setEngineerCode($engineerCode){
		$this->engineerCode = $engineerCode;
         $this->apiParas["engineerCode"] = $engineerCode;
	}

	public function getEngineerCode(){
	  return $this->engineerCode;
	}

                        	                   			private $partStat;
    	                        
	public function setPartStat($partStat){
		$this->partStat = $partStat;
         $this->apiParas["partStat"] = $partStat;
	}

	public function getPartStat(){
	  return $this->partStat;
	}

                        	                   			private $failureReason;
    	                        
	public function setFailureReason($failureReason){
		$this->failureReason = $failureReason;
         $this->apiParas["failureReason"] = $failureReason;
	}

	public function getFailureReason(){
	  return $this->failureReason;
	}

                        	                   			private $bookOperateDate;
    	                        
	public function setBookOperateDate($bookOperateDate){
		$this->bookOperateDate = $bookOperateDate;
         $this->apiParas["bookOperateDate"] = $bookOperateDate;
	}

	public function getBookOperateDate(){
	  return $this->bookOperateDate;
	}

                        	                   			private $oldPartQty;
    	                        
	public function setOldPartQty($oldPartQty){
		$this->oldPartQty = $oldPartQty;
         $this->apiParas["oldPartQty"] = $oldPartQty;
	}

	public function getOldPartQty(){
	  return $this->oldPartQty;
	}

                        	                   			private $uniqueId;
    	                        
	public function setUniqueId($uniqueId){
		$this->uniqueId = $uniqueId;
         $this->apiParas["uniqueId"] = $uniqueId;
	}

	public function getUniqueId(){
	  return $this->uniqueId;
	}

                        	                   			private $oldPartCode;
    	                        
	public function setOldPartCode($oldPartCode){
		$this->oldPartCode = $oldPartCode;
         $this->apiParas["oldPartCode"] = $oldPartCode;
	}

	public function getOldPartCode(){
	  return $this->oldPartCode;
	}

                        	                   			private $bookDate;
    	                        
	public function setBookDate($bookDate){
		$this->bookDate = $bookDate;
         $this->apiParas["bookDate"] = $bookDate;
	}

	public function getBookDate(){
	  return $this->bookDate;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $deliverNo;
    	                        
	public function setDeliverNo($deliverNo){
		$this->deliverNo = $deliverNo;
         $this->apiParas["deliverNo"] = $deliverNo;
	}

	public function getDeliverNo(){
	  return $this->deliverNo;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	                   			private $contactMan;
    	                        
	public function setContactMan($contactMan){
		$this->contactMan = $contactMan;
         $this->apiParas["contactMan"] = $contactMan;
	}

	public function getContactMan(){
	  return $this->contactMan;
	}

                        	                   			private $failureName;
    	                        
	public function setFailureName($failureName){
		$this->failureName = $failureName;
         $this->apiParas["failureName"] = $failureName;
	}

	public function getFailureName(){
	  return $this->failureName;
	}

                        	                   			private $bookTimes;
    	                        
	public function setBookTimes($bookTimes){
		$this->bookTimes = $bookTimes;
         $this->apiParas["bookTimes"] = $bookTimes;
	}

	public function getBookTimes(){
	  return $this->bookTimes;
	}

                        	                   			private $engineerName;
    	                        
	public function setEngineerName($engineerName){
		$this->engineerName = $engineerName;
         $this->apiParas["engineerName"] = $engineerName;
	}

	public function getEngineerName(){
	  return $this->engineerName;
	}

                        	                   			private $pic1;
    	                        
	public function setPic1($pic1){
		$this->pic1 = $pic1;
         $this->apiParas["pic1"] = $pic1;
	}

	public function getPic1(){
	  return $this->pic1;
	}

                        	                   			private $assessItem;
    	                        
	public function setAssessItem($assessItem){
		$this->assessItem = $assessItem;
         $this->apiParas["assessItem"] = $assessItem;
	}

	public function getAssessItem(){
	  return $this->assessItem;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $siteMobile;
    	                        
	public function setSiteMobile($siteMobile){
		$this->siteMobile = $siteMobile;
         $this->apiParas["siteMobile"] = $siteMobile;
	}

	public function getSiteMobile(){
	  return $this->siteMobile;
	}

                        	                   			private $processType;
    	                        
	public function setProcessType($processType){
		$this->processType = $processType;
         $this->apiParas["processType"] = $processType;
	}

	public function getProcessType(){
	  return $this->processType;
	}

                        	                   			private $pic2;
    	                        
	public function setPic2($pic2){
		$this->pic2 = $pic2;
         $this->apiParas["pic2"] = $pic2;
	}

	public function getPic2(){
	  return $this->pic2;
	}

                        	                   			private $pic3;
    	                        
	public function setPic3($pic3){
		$this->pic3 = $pic3;
         $this->apiParas["pic3"] = $pic3;
	}

	public function getPic3(){
	  return $this->pic3;
	}

                        	                   			private $engineerMobile;
    	                        
	public function setEngineerMobile($engineerMobile){
		$this->engineerMobile = $engineerMobile;
         $this->apiParas["engineerMobile"] = $engineerMobile;
	}

	public function getEngineerMobile(){
	  return $this->engineerMobile;
	}

                        	                   			private $dealRemark;
    	                        
	public function setDealRemark($dealRemark){
		$this->dealRemark = $dealRemark;
         $this->apiParas["dealRemark"] = $dealRemark;
	}

	public function getDealRemark(){
	  return $this->dealRemark;
	}

                        	                   			private $pic4;
    	                        
	public function setPic4($pic4){
		$this->pic4 = $pic4;
         $this->apiParas["pic4"] = $pic4;
	}

	public function getPic4(){
	  return $this->pic4;
	}

                        	                   			private $fixMethod;
    	                        
	public function setFixMethod($fixMethod){
		$this->fixMethod = $fixMethod;
         $this->apiParas["fixMethod"] = $fixMethod;
	}

	public function getFixMethod(){
	  return $this->fixMethod;
	}

                        	                   			private $siteCode;
    	                        
	public function setSiteCode($siteCode){
		$this->siteCode = $siteCode;
         $this->apiParas["siteCode"] = $siteCode;
	}

	public function getSiteCode(){
	  return $this->siteCode;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $newPartName;
    	                        
	public function setNewPartName($newPartName){
		$this->newPartName = $newPartName;
         $this->apiParas["newPartName"] = $newPartName;
	}

	public function getNewPartName(){
	  return $this->newPartName;
	}

                        	                   			private $oldPartName;
    	                        
	public function setOldPartName($oldPartName){
		$this->oldPartName = $oldPartName;
         $this->apiParas["oldPartName"] = $oldPartName;
	}

	public function getOldPartName(){
	  return $this->oldPartName;
	}

                        	                   			private $cancleReason;
    	                        
	public function setCancleReason($cancleReason){
		$this->cancleReason = $cancleReason;
         $this->apiParas["cancleReason"] = $cancleReason;
	}

	public function getCancleReason(){
	  return $this->cancleReason;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                        	                   			private $newPartCode;
    	                        
	public function setNewPartCode($newPartCode){
		$this->newPartCode = $newPartCode;
         $this->apiParas["newPartCode"] = $newPartCode;
	}

	public function getNewPartCode(){
	  return $this->newPartCode;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $dealResult;
    	                        
	public function setDealResult($dealResult){
		$this->dealResult = $dealResult;
         $this->apiParas["dealResult"] = $dealResult;
	}

	public function getDealResult(){
	  return $this->dealResult;
	}

                        	                   			private $settleCode;
    	                        
	public function setSettleCode($settleCode){
		$this->settleCode = $settleCode;
         $this->apiParas["settleCode"] = $settleCode;
	}

	public function getSettleCode(){
	  return $this->settleCode;
	}

                        	                   			private $pid;
    	                        
	public function setPid($pid){
		$this->pid = $pid;
         $this->apiParas["pid"] = $pid;
	}

	public function getPid(){
	  return $this->pid;
	}

                        	                   			private $sitePhoto;
    	                        
	public function setSitePhoto($sitePhoto){
		$this->sitePhoto = $sitePhoto;
         $this->apiParas["sitePhoto"] = $sitePhoto;
	}

	public function getSitePhoto(){
	  return $this->sitePhoto;
	}

                        	                   			private $insuranceNo;
    	                        
	public function setInsuranceNo($insuranceNo){
		$this->insuranceNo = $insuranceNo;
         $this->apiParas["insuranceNo"] = $insuranceNo;
	}

	public function getInsuranceNo(){
	  return $this->insuranceNo;
	}

                        	                   			private $insurancePhoto;
    	                        
	public function setInsurancePhoto($insurancePhoto){
		$this->insurancePhoto = $insurancePhoto;
         $this->apiParas["insurancePhoto"] = $insurancePhoto;
	}

	public function getInsurancePhoto(){
	  return $this->insurancePhoto;
	}

                        	                   			private $engineerPhoto;
    	                        
	public function setEngineerPhoto($engineerPhoto){
		$this->engineerPhoto = $engineerPhoto;
         $this->apiParas["engineerPhoto"] = $engineerPhoto;
	}

	public function getEngineerPhoto(){
	  return $this->engineerPhoto;
	}

                            }





        
 

