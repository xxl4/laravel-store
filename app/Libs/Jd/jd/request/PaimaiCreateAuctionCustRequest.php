<?php
class PaimaiCreateAuctionCustRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.paimai.createAuctionCust";
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
                                                        		                                    	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $summary;
    	                        
	public function setSummary($summary){
		$this->summary = $summary;
         $this->apiParas["summary"] = $summary;
	}

	public function getSummary(){
	  return $this->summary;
	}

                        	                   			private $thumbTopUrl;
    	                        
	public function setThumbTopUrl($thumbTopUrl){
		$this->thumbTopUrl = $thumbTopUrl;
         $this->apiParas["thumbTopUrl"] = $thumbTopUrl;
	}

	public function getThumbTopUrl(){
	  return $this->thumbTopUrl;
	}

                        	                   			private $thumbEntranceUrl;
    	                        
	public function setThumbEntranceUrl($thumbEntranceUrl){
		$this->thumbEntranceUrl = $thumbEntranceUrl;
         $this->apiParas["thumbEntranceUrl"] = $thumbEntranceUrl;
	}

	public function getThumbEntranceUrl(){
	  return $this->thumbEntranceUrl;
	}

                        	                   			private $auctionCustType;
    	                        
	public function setAuctionCustType($auctionCustType){
		$this->auctionCustType = $auctionCustType;
         $this->apiParas["auctionCustType"] = $auctionCustType;
	}

	public function getAuctionCustType(){
	  return $this->auctionCustType;
	}

                        	                        	                        	                   			private $auctionForm;
    	                        
	public function setAuctionForm($auctionForm){
		$this->auctionForm = $auctionForm;
         $this->apiParas["auctionForm"] = $auctionForm;
	}

	public function getAuctionForm(){
	  return $this->auctionForm;
	}

                        	                   			private $sortType;
    	                        
	public function setSortType($sortType){
		$this->sortType = $sortType;
         $this->apiParas["sortType"] = $sortType;
	}

	public function getSortType(){
	  return $this->sortType;
	}

                        	                   			private $startTime;
    	                        
	public function setStartTime($startTime){
		$this->startTime = $startTime;
         $this->apiParas["startTime"] = $startTime;
	}

	public function getStartTime(){
	  return $this->startTime;
	}

                        	                   			private $endTime;
    	                        
	public function setEndTime($endTime){
		$this->endTime = $endTime;
         $this->apiParas["endTime"] = $endTime;
	}

	public function getEndTime(){
	  return $this->endTime;
	}

                        	                   			private $auctionType;
    	                        
	public function setAuctionType($auctionType){
		$this->auctionType = $auctionType;
         $this->apiParas["auctionType"] = $auctionType;
	}

	public function getAuctionType(){
	  return $this->auctionType;
	}

                        	                   			private $paimaiIds;
    	                        
	public function setPaimaiIds($paimaiIds){
		$this->paimaiIds = $paimaiIds;
         $this->apiParas["paimaiIds"] = $paimaiIds;
	}

	public function getPaimaiIds(){
	  return $this->paimaiIds;
	}

                        	                   			private $exteriorId;
    	                        
	public function setExteriorId($exteriorId){
		$this->exteriorId = $exteriorId;
         $this->apiParas["exteriorId"] = $exteriorId;
	}

	public function getExteriorId(){
	  return $this->exteriorId;
	}

                        	                   			private $biddingPeriod;
    	                        
	public function setBiddingPeriod($biddingPeriod){
		$this->biddingPeriod = $biddingPeriod;
         $this->apiParas["biddingPeriod"] = $biddingPeriod;
	}

	public function getBiddingPeriod(){
	  return $this->biddingPeriod;
	}

                            }





        
 

