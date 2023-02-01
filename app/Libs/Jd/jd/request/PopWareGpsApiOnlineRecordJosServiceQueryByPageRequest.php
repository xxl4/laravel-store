<?php
class PopWareGpsApiOnlineRecordJosServiceQueryByPageRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.ware.gps.api.OnlineRecordJosService.queryByPage";
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
                                    	                   			private $queryToJson;
    	                        
	public function setQueryToJson($queryToJson){
		$this->queryToJson = $queryToJson;
         $this->apiParas["queryToJson"] = $queryToJson;
	}

	public function getQueryToJson(){
	  return $this->queryToJson;
	}

                                            		                                    	                   			private $customsId;
    	                        
	public function setCustomsId($customsId){
		$this->customsId = $customsId;
         $this->apiParas["customsId"] = $customsId;
	}

	public function getCustomsId(){
	  return $this->customsId;
	}

                        	                   			private $serviceId;
    	                        
	public function setServiceId($serviceId){
		$this->serviceId = $serviceId;
         $this->apiParas["serviceId"] = $serviceId;
	}

	public function getServiceId(){
	  return $this->serviceId;
	}

                        	                        	                            }





        
 

