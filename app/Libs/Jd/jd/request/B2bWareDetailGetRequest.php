<?php
class B2bWareDetailGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.ware.detail.get";
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
                                                        		                                    	                   			private $channelEnum;
    	                        
	public function setChannelEnum($channelEnum){
		$this->channelEnum = $channelEnum;
         $this->apiParas["channelEnum"] = $channelEnum;
	}

	public function getChannelEnum(){
	  return $this->channelEnum;
	}

                                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $bSkuGetExtendEnumsKyes;
                              public function setBSkuGetExtendEnumsKyes($bSkuGetExtendEnumsKyes ){
                 $this->bSkuGetExtendEnumsKyes=$bSkuGetExtendEnumsKyes;
                 $this->apiParas["bSkuGetExtendEnumsKyes"] = $bSkuGetExtendEnumsKyes;
              }

              public function getBSkuGetExtendEnumsKyes(){
              	return $this->bSkuGetExtendEnumsKyes;
              }
                                                                                                                                        	                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $bSkuGetEnumsKeys;
                              public function setBSkuGetEnumsKeys($bSkuGetEnumsKeys ){
                 $this->bSkuGetEnumsKeys=$bSkuGetEnumsKeys;
                 $this->apiParas["bSkuGetEnumsKeys"] = $bSkuGetEnumsKeys;
              }

              public function getBSkuGetEnumsKeys(){
              	return $this->bSkuGetEnumsKeys;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                               private $jdSkuIdsKeys;
                              public function setJdSkuIdsKeys($jdSkuIdsKeys ){
                 $this->jdSkuIdsKeys=$jdSkuIdsKeys;
                 $this->apiParas["jdSkuIdsKeys"] = $jdSkuIdsKeys;
              }

              public function getJdSkuIdsKeys(){
              	return $this->jdSkuIdsKeys;
              }
                                                                                                                                            }





        
 

