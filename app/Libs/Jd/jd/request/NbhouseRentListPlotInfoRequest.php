<?php
class NbhouseRentListPlotInfoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.nbhouse.rent.listPlotInfo";
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
                                                        		                                    	                   			private $lat;
    	                        
	public function setLat($lat){
		$this->lat = $lat;
         $this->apiParas["lat"] = $lat;
	}

	public function getLat(){
	  return $this->lat;
	}

                        	                   			private $lon;
    	                        
	public function setLon($lon){
		$this->lon = $lon;
         $this->apiParas["lon"] = $lon;
	}

	public function getLon(){
	  return $this->lon;
	}

                        	                   			private $distance;
    	                        
	public function setDistance($distance){
		$this->distance = $distance;
         $this->apiParas["distance"] = $distance;
	}

	public function getDistance(){
	  return $this->distance;
	}

                        	                   			private $plotName;
    	                        
	public function setPlotName($plotName){
		$this->plotName = $plotName;
         $this->apiParas["plotName"] = $plotName;
	}

	public function getPlotName(){
	  return $this->plotName;
	}

                        	                   			private $plotCode;
    	                        
	public function setPlotCode($plotCode){
		$this->plotCode = $plotCode;
         $this->apiParas["plotCode"] = $plotCode;
	}

	public function getPlotCode(){
	  return $this->plotCode;
	}

                        	                   			private $matchName;
    	                        
	public function setMatchName($matchName){
		$this->matchName = $matchName;
         $this->apiParas["matchName"] = $matchName;
	}

	public function getMatchName(){
	  return $this->matchName;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
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





        
 

