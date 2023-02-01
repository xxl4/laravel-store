<?php
class HostingdataJddpDataListGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.hostingdata.jddp.data.list.get";
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
                                                        		                                    	                   			private $sqlId;
    	                        
	public function setSqlId($sqlId){
		$this->sqlId = $sqlId;
         $this->apiParas["sqlId"] = $sqlId;
	}

	public function getSqlId(){
	  return $this->sqlId;
	}

                        	                   			private $parameter;
    	                        
	public function setParameter($parameter){
		$this->parameter = $parameter;
         $this->apiParas["parameter"] = $parameter;
	}

	public function getParameter(){
	  return $this->parameter;
	}

                        	                        	                        	                            }





        
 

