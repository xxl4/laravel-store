<?php
class PresortSitefenceimportServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.presort.sitefenceimport.service";
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
                                    	                                            		                                    	                   			private $operationType;
    	                        
	public function setOperationType($operationType){
		$this->operationType = $operationType;
         $this->apiParas["operationType"] = $operationType;
	}

	public function getOperationType(){
	  return $this->operationType;
	}

                        	                   			private $siteCode;
    	                        
	public function setSiteCode($siteCode){
		$this->siteCode = $siteCode;
         $this->apiParas["siteCode"] = $siteCode;
	}

	public function getSiteCode(){
	  return $this->siteCode;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $siteLocation;
    	                        
	public function setSiteLocation($siteLocation){
		$this->siteLocation = $siteLocation;
         $this->apiParas["siteLocation"] = $siteLocation;
	}

	public function getSiteLocation(){
	  return $this->siteLocation;
	}

                        	                   			private $fenceNum;
    	                        
	public function setFenceNum($fenceNum){
		$this->fenceNum = $fenceNum;
         $this->apiParas["fenceNum"] = $fenceNum;
	}

	public function getFenceNum(){
	  return $this->fenceNum;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $fenceArray;
                              public function setFenceArray($fenceArray ){
                 $this->fenceArray=$fenceArray;
                 $this->apiParas["fenceArray"] = $fenceArray;
              }

              public function getFenceArray(){
              	return $this->fenceArray;
              }
                                                                                                                                            }





        
 

