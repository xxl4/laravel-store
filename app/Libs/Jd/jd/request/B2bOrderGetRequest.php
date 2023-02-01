<?php
class B2bOrderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.order.get";
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
                                                        		                                    	                   			private $jdOrderId;
    	                        
	public function setJdOrderId($jdOrderId){
		$this->jdOrderId = $jdOrderId;
         $this->apiParas["jdOrderId"] = $jdOrderId;
	}

	public function getJdOrderId(){
	  return $this->jdOrderId;
	}

                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $customKeys;
                              public function setCustomKeys($customKeys ){
                 $this->customKeys=$customKeys;
                 $this->apiParas["customKeys"] = $customKeys;
              }

              public function getCustomKeys(){
              	return $this->customKeys;
              }
                                                                                                                }





        
 

