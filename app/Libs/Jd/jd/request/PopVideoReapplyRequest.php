<?php
class PopVideoReapplyRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.reapply";
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
                                    	                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                        	                   			private $applyReason;
    	                                                            
	public function setApplyReason($applyReason){
		$this->applyReason = $applyReason;
         $this->apiParas["apply_reason"] = $applyReason;
	}

	public function getApplyReason(){
	  return $this->applyReason;
	}

                                            		                                    	                        	                        	                        	                            }





        
 

