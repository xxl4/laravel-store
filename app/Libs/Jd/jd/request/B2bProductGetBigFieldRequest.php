<?php
class B2bProductGetBigFieldRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.product.getBigField";
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
                                    	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $fieldKeys;
                              public function setFieldKeys($fieldKeys ){
                 $this->fieldKeys=$fieldKeys;
                 $this->apiParas["fieldKeys"] = $fieldKeys;
              }

              public function getFieldKeys(){
              	return $this->fieldKeys;
              }
                                                                                                                                        	}





        
 

