<?php
class B2bPoPoMidProviderQueryPurOrdersRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.po.PoMidProvider.queryPurOrders";
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
                                                        		                                    	                        	                   			private $userName;
    	                        
	public function setUserName($userName){
		$this->userName = $userName;
         $this->apiParas["userName"] = $userName;
	}

	public function getUserName(){
	  return $this->userName;
	}

                        	                   			private $companyName;
    	                        
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["companyName"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $issueInvoice;
    	                        
	public function setIssueInvoice($issueInvoice){
		$this->issueInvoice = $issueInvoice;
         $this->apiParas["issueInvoice"] = $issueInvoice;
	}

	public function getIssueInvoice(){
	  return $this->issueInvoice;
	}

                        	                   			private $submitPoTimeFrom;
    	                        
	public function setSubmitPoTimeFrom($submitPoTimeFrom){
		$this->submitPoTimeFrom = $submitPoTimeFrom;
         $this->apiParas["submitPoTimeFrom"] = $submitPoTimeFrom;
	}

	public function getSubmitPoTimeFrom(){
	  return $this->submitPoTimeFrom;
	}

                        	                   			private $submitPoTimeTo;
    	                        
	public function setSubmitPoTimeTo($submitPoTimeTo){
		$this->submitPoTimeTo = $submitPoTimeTo;
         $this->apiParas["submitPoTimeTo"] = $submitPoTimeTo;
	}

	public function getSubmitPoTimeTo(){
	  return $this->submitPoTimeTo;
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

                        	                   			private $consProvinceId;
    	                        
	public function setConsProvinceId($consProvinceId){
		$this->consProvinceId = $consProvinceId;
         $this->apiParas["consProvinceId"] = $consProvinceId;
	}

	public function getConsProvinceId(){
	  return $this->consProvinceId;
	}

                        	                   			private $consCityId;
    	                        
	public function setConsCityId($consCityId){
		$this->consCityId = $consCityId;
         $this->apiParas["consCityId"] = $consCityId;
	}

	public function getConsCityId(){
	  return $this->consCityId;
	}

                        	                   			private $consCountyId;
    	                        
	public function setConsCountyId($consCountyId){
		$this->consCountyId = $consCountyId;
         $this->apiParas["consCountyId"] = $consCountyId;
	}

	public function getConsCountyId(){
	  return $this->consCountyId;
	}

                        	                   			private $consTownId;
    	                        
	public function setConsTownId($consTownId){
		$this->consTownId = $consTownId;
         $this->apiParas["consTownId"] = $consTownId;
	}

	public function getConsTownId(){
	  return $this->consTownId;
	}

                        	                   			private $consName;
    	                        
	public function setConsName($consName){
		$this->consName = $consName;
         $this->apiParas["consName"] = $consName;
	}

	public function getConsName(){
	  return $this->consName;
	}

                        	                   	                    		private $thirdOrderIds;
    	                        
	public function setThirdOrderIds($thirdOrderIds){
		$this->thirdOrderIds = $thirdOrderIds;
         $this->apiParas["thirdOrderIds"] = $thirdOrderIds;
	}

	public function getThirdOrderIds(){
	  return $this->thirdOrderIds;
	}

                        	                   	                    		private $thirdPoIds;
    	                        
	public function setThirdPoIds($thirdPoIds){
		$this->thirdPoIds = $thirdPoIds;
         $this->apiParas["thirdPoIds"] = $thirdPoIds;
	}

	public function getThirdPoIds(){
	  return $this->thirdPoIds;
	}

                        	                   	                    		private $skuIndustryIds;
    	                        
	public function setSkuIndustryIds($skuIndustryIds){
		$this->skuIndustryIds = $skuIndustryIds;
         $this->apiParas["skuIndustryIds"] = $skuIndustryIds;
	}

	public function getSkuIndustryIds(){
	  return $this->skuIndustryIds;
	}

                        	                   	                    		private $poValidStates;
    	                        
	public function setPoValidStates($poValidStates){
		$this->poValidStates = $poValidStates;
         $this->apiParas["poValidStates"] = $poValidStates;
	}

	public function getPoValidStates(){
	  return $this->poValidStates;
	}

                        	                   	                    		private $pins;
    	                        
	public function setPins($pins){
		$this->pins = $pins;
         $this->apiParas["pins"] = $pins;
	}

	public function getPins(){
	  return $this->pins;
	}

                        	                   	                    		private $sortTypes;
    	                        
	public function setSortTypes($sortTypes){
		$this->sortTypes = $sortTypes;
         $this->apiParas["sortTypes"] = $sortTypes;
	}

	public function getSortTypes(){
	  return $this->sortTypes;
	}

                        	                   	                    		private $skuIndustryTypes;
    	                        
	public function setSkuIndustryTypes($skuIndustryTypes){
		$this->skuIndustryTypes = $skuIndustryTypes;
         $this->apiParas["skuIndustryTypes"] = $skuIndustryTypes;
	}

	public function getSkuIndustryTypes(){
	  return $this->skuIndustryTypes;
	}

                        	                   	                    		private $popVenderIds;
    	                        
	public function setPopVenderIds($popVenderIds){
		$this->popVenderIds = $popVenderIds;
         $this->apiParas["popVenderIds"] = $popVenderIds;
	}

	public function getPopVenderIds(){
	  return $this->popVenderIds;
	}

                        	                   	                    		private $paymentTypes;
    	                        
	public function setPaymentTypes($paymentTypes){
		$this->paymentTypes = $paymentTypes;
         $this->apiParas["paymentTypes"] = $paymentTypes;
	}

	public function getPaymentTypes(){
	  return $this->paymentTypes;
	}

                        	                   	                    		private $poChannels;
    	                        
	public function setPoChannels($poChannels){
		$this->poChannels = $poChannels;
         $this->apiParas["poChannels"] = $poChannels;
	}

	public function getPoChannels(){
	  return $this->poChannels;
	}

                        	                   	                    		private $poIds;
    	                        
	public function setPoIds($poIds){
		$this->poIds = $poIds;
         $this->apiParas["poIds"] = $poIds;
	}

	public function getPoIds(){
	  return $this->poIds;
	}

                        	                   	                    		private $poTiers;
    	                        
	public function setPoTiers($poTiers){
		$this->poTiers = $poTiers;
         $this->apiParas["poTiers"] = $poTiers;
	}

	public function getPoTiers(){
	  return $this->poTiers;
	}

                        	                   	                    		private $b2bVenderIds;
    	                        
	public function setB2bVenderIds($b2bVenderIds){
		$this->b2bVenderIds = $b2bVenderIds;
         $this->apiParas["b2bVenderIds"] = $b2bVenderIds;
	}

	public function getB2bVenderIds(){
	  return $this->b2bVenderIds;
	}

                        	                   	                    		private $jdOrderIds;
    	                        
	public function setJdOrderIds($jdOrderIds){
		$this->jdOrderIds = $jdOrderIds;
         $this->apiParas["jdOrderIds"] = $jdOrderIds;
	}

	public function getJdOrderIds(){
	  return $this->jdOrderIds;
	}

                        	                   	                    		private $skuIds;
    	                        
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
         $this->apiParas["skuIds"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                        	                   	                    		private $poStatuses;
    	                        
	public function setPoStatuses($poStatuses){
		$this->poStatuses = $poStatuses;
         $this->apiParas["poStatuses"] = $poStatuses;
	}

	public function getPoStatuses(){
	  return $this->poStatuses;
	}

                        	                            }





        
 

