<?php
class DspAdkckeywordKeywordDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkckeyword.keyword.delete";
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
                                    	                        	                   			private $adGroupId;
    	                        
	public function setAdGroupId($adGroupId){
		$this->adGroupId = $adGroupId;
         $this->apiParas["adGroupId"] = $adGroupId;
	}

	public function getAdGroupId(){
	  return $this->adGroupId;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $keyWordsName;
                              public function setKeyWordsName($keyWordsName ){
                 $this->keyWordsName=$keyWordsName;
                 $this->apiParas["keyWordsName"] = $keyWordsName;
              }

              public function getKeyWordsName(){
              	return $this->keyWordsName;
              }
                                                                                                                }





        
 

