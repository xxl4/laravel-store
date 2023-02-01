<?php
class B2bMessageGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.message.get";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $typeId;
                              public function setTypeId($typeId ){
                 $this->typeId=$typeId;
                 $this->apiParas["typeId"] = $typeId;
              }

              public function getTypeId(){
              	return $this->typeId;
              }
                                                                                                                                        	                        	                            }





        
 

