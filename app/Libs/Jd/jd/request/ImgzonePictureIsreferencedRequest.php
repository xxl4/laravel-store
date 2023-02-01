<?php
class ImgzonePictureIsreferencedRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.isreferenced";
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
                                    	                        	                   			private $pictureId;
    	                                                            
	public function setPictureId($pictureId){
		$this->pictureId = $pictureId;
         $this->apiParas["picture_id"] = $pictureId;
	}

	public function getPictureId(){
	  return $this->pictureId;
	}

}





        
 

