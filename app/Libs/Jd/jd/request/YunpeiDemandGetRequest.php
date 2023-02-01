<?php
class YunpeiDemandGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.demand.get";
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
                                    	                        	                   			private $demandSn;
    	                                                            
	public function setDemandSn($demandSn){
		$this->demandSn = $demandSn;
         $this->apiParas["demand_sn"] = $demandSn;
	}

	public function getDemandSn(){
	  return $this->demandSn;
	}

}





        
 

