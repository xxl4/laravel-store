<?php
class DspAdkcunitDmpGetcrowdlistRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.dmp.getcrowdlist";
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
                                    	                        	                   			private $crowdName;
    	                        
	public function setCrowdName($crowdName){
		$this->crowdName = $crowdName;
         $this->apiParas["crowdName"] = $crowdName;
	}

	public function getCrowdName(){
	  return $this->crowdName;
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





        
 

