<?php
class OmnichannelOrderLocateinfoSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnichannel.order.locateinfo.search";
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
                                    	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderIdListJsonStr;
                              public function setOrderIdListJsonStr($orderIdListJsonStr ){
                 $this->orderIdListJsonStr=$orderIdListJsonStr;
                 $this->apiParas["orderIdListJsonStr"] = $orderIdListJsonStr;
              }

              public function getOrderIdListJsonStr(){
              	return $this->orderIdListJsonStr;
              }
                                                                                                                }





        
 

