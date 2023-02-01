<?php
class ErsFangPlotSelectResourceBrokerByResourceIdRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.plot.selectResourceBrokerByResourceId";
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
                                                        		                                    	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $pSourceId;
    	                        
	public function setPSourceId($pSourceId){
		$this->pSourceId = $pSourceId;
         $this->apiParas["pSourceId"] = $pSourceId;
	}

	public function getPSourceId(){
	  return $this->pSourceId;
	}

                        	                            }





        
 

