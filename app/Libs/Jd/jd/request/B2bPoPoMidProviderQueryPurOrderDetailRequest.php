<?php
class B2bPoPoMidProviderQueryPurOrderDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.po.PoMidProvider.queryPurOrderDetail";
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
                                                        		                                    	                        	                   			private $poId;
    	                        
	public function setPoId($poId){
		$this->poId = $poId;
         $this->apiParas["poId"] = $poId;
	}

	public function getPoId(){
	  return $this->poId;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $tagName;
                              public function setTagName($tagName ){
                 $this->tagName=$tagName;
                 $this->apiParas["tagName"] = $tagName;
              }

              public function getTagName(){
              	return $this->tagName;
              }
                                                                                                                }





        
 

