<?php
class PopVideoInfosDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.video.infos.delete";
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
                                    	                        	                   	                    		private $videoIds;
    	                                                            
	public function setVideoIds($videoIds){
		$this->videoIds = $videoIds;
         $this->apiParas["video_ids"] = $videoIds;
	}

	public function getVideoIds(){
	  return $this->videoIds;
	}

                                            		                                    	                        	                        	                        	                            }





        
 

