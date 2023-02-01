<?php
class EclpOrderQueryOrderCartonBySoNoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.queryOrderCartonBySoNo";
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
                                    	                   			private $soNo;
    	                        
	public function setSoNo($soNo){
		$this->soNo = $soNo;
         $this->apiParas["soNo"] = $soNo;
	}

	public function getSoNo(){
	  return $this->soNo;
	}

}





        
 

