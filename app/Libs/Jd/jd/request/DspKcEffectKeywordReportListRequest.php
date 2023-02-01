<?php
class DspKcEffectKeywordReportListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.kc.effect.keyword.report.list";
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
                                                        		                                    	                        	                   			private $startDay;
    	                        
	public function setStartDay($startDay){
		$this->startDay = $startDay;
         $this->apiParas["startDay"] = $startDay;
	}

	public function getStartDay(){
	  return $this->startDay;
	}

                        	                   			private $endDay;
    	                        
	public function setEndDay($endDay){
		$this->endDay = $endDay;
         $this->apiParas["endDay"] = $endDay;
	}

	public function getEndDay(){
	  return $this->endDay;
	}

                        	                   			private $isDaily;
    	                        
	public function setIsDaily($isDaily){
		$this->isDaily = $isDaily;
         $this->apiParas["isDaily"] = $isDaily;
	}

	public function getIsDaily(){
	  return $this->isDaily;
	}

                        	                   			private $clickOrOrderDay;
    	                        
	public function setClickOrOrderDay($clickOrOrderDay){
		$this->clickOrOrderDay = $clickOrOrderDay;
         $this->apiParas["clickOrOrderDay"] = $clickOrOrderDay;
	}

	public function getClickOrOrderDay(){
	  return $this->clickOrOrderDay;
	}

                        	                   			private $areaId;
    	                        
	public function setAreaId($areaId){
		$this->areaId = $areaId;
         $this->apiParas["areaId"] = $areaId;
	}

	public function getAreaId(){
	  return $this->areaId;
	}

                        	                   			private $campaignId;
    	                        
	public function setCampaignId($campaignId){
		$this->campaignId = $campaignId;
         $this->apiParas["campaignId"] = $campaignId;
	}

	public function getCampaignId(){
	  return $this->campaignId;
	}

                        	                   			private $groupId;
    	                        
	public function setGroupId($groupId){
		$this->groupId = $groupId;
         $this->apiParas["groupId"] = $groupId;
	}

	public function getGroupId(){
	  return $this->groupId;
	}

                        	                   			private $adId;
    	                        
	public function setAdId($adId){
		$this->adId = $adId;
         $this->apiParas["adId"] = $adId;
	}

	public function getAdId(){
	  return $this->adId;
	}

                        	                   			private $keywords;
    	                        
	public function setKeywords($keywords){
		$this->keywords = $keywords;
         $this->apiParas["keywords"] = $keywords;
	}

	public function getKeywords(){
	  return $this->keywords;
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





        
 

