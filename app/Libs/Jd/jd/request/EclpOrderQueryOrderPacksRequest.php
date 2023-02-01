<?php
class EclpOrderQueryOrderPacksRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.queryOrderPacks";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $eclpSoNo;
                              public function setEclpSoNo($eclpSoNo ){
                 $this->eclpSoNo=$eclpSoNo;
                 $this->apiParas["eclpSoNo"] = $eclpSoNo;
              }

              public function getEclpSoNo(){
              	return $this->eclpSoNo;
              }
                                                                                                                                        	}





        
 

