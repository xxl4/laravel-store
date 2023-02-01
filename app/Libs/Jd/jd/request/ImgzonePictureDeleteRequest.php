<?php
class ImgzonePictureDeleteRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.picture.delete";
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
                                    	                        	                   			private $pictureIds;
    	                                                            
	public function setPictureIds($pictureIds){
		$this->pictureIds = $pictureIds;
         $this->apiParas["picture_ids"] = $pictureIds;
	}

	public function getPictureIds(){
	  return $this->pictureIds;
	}

}





        
 

