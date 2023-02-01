<?php
class EdiRealtimeinventoryQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.realtimeinventory.query";
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
                                                        		                                    	                   			private $operatorErp;
    	                        
	public function setOperatorErp($operatorErp){
		$this->operatorErp = $operatorErp;
         $this->apiParas["operatorErp"] = $operatorErp;
	}

	public function getOperatorErp(){
	  return $this->operatorErp;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $jdSku;
                              public function setJdSku($jdSku ){
                 $this->jdSku=$jdSku;
                 $this->apiParas["jdSku"] = $jdSku;
              }

              public function getJdSku(){
              	return $this->jdSku;
              }
                                                                                                                                        	                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                            }





        
 

