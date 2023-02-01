<?php
class EclpAfsQueryServiceItemInfoByServiceNoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.afs.queryServiceItemInfoByServiceNo";
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
                                    	                   			private $servicesNo;
    	                        
	public function setServicesNo($servicesNo){
		$this->servicesNo = $servicesNo;
         $this->apiParas["servicesNo"] = $servicesNo;
	}

	public function getServicesNo(){
	  return $this->servicesNo;
	}

                        	}





        
 

