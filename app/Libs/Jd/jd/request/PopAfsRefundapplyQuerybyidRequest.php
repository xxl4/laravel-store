<?php
class PopAfsRefundapplyQuerybyidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.refundapply.querybyid";
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
                                    	                        	                   			private $raId;
    	                                                            
	public function setRaId($raId){
		$this->raId = $raId;
         $this->apiParas["ra_id"] = $raId;
	}

	public function getRaId(){
	  return $this->raId;
	}

}





        
 

