<?php
class DspPictureUploadRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.picture.upload";
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
                                    	                   			private $picFile;
    	                        
	public function setPicFile($picFile){
		$this->picFile = $picFile;
         $this->apiParas["picFile"] = $picFile;
	}

	public function getPicFile(){
	  return $this->picFile;
	}

}





        
 

