<?php
class EptWarecenterOutapiCtgattrQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ept.warecenter.outapi.ctgattr.query";
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
                                                        		                                    	                        	                   			private $catId;
    	                        
	public function setCatId($catId){
		$this->catId = $catId;
         $this->apiParas["catId"] = $catId;
	}

	public function getCatId(){
	  return $this->catId;
	}

                            }





        
 

