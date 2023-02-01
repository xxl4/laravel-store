<?php
class VssReportJosSearchBrandPerformanceInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vss.report.jos.searchBrandPerformanceInfo";
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
                                    	                        	                        	                   			private $searchType;
    	                        
	public function setSearchType($searchType){
		$this->searchType = $searchType;
         $this->apiParas["searchType"] = $searchType;
	}

	public function getSearchType(){
	  return $this->searchType;
	}

                        	                   			private $year;
    	                        
	public function setYear($year){
		$this->year = $year;
         $this->apiParas["year"] = $year;
	}

	public function getYear(){
	  return $this->year;
	}

                        	                   			private $month;
    	                        
	public function setMonth($month){
		$this->month = $month;
         $this->apiParas["month"] = $month;
	}

	public function getMonth(){
	  return $this->month;
	}

                        	                   			private $daysCode;
    	                        
	public function setDaysCode($daysCode){
		$this->daysCode = $daysCode;
         $this->apiParas["daysCode"] = $daysCode;
	}

	public function getDaysCode(){
	  return $this->daysCode;
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





        
 

