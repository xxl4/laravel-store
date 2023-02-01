<?php
class B2bGxptProductServiceQueryProductStockRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.gxpt.ProductService.queryProductStock";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuSet;
                              public function setSkuSet($skuSet ){
                 $this->skuSet=$skuSet;
                 $this->apiParas["skuSet"] = $skuSet;
              }

              public function getSkuSet(){
              	return $this->skuSet;
              }
                                                                                                                                        	}





        
 

