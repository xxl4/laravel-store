<?php
class B2bPoPoMidProviderBackCheckRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.po.PoMidProvider.backCheck";
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
                                                        		                                    	                        	                   			private $thirdPoId;
    	                        
	public function setThirdPoId($thirdPoId){
		$this->thirdPoId = $thirdPoId;
         $this->apiParas["thirdPoId"] = $thirdPoId;
	}

	public function getThirdPoId(){
	  return $this->thirdPoId;
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





        
 

