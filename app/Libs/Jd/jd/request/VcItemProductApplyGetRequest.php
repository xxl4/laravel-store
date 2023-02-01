<?php
class VcItemProductApplyGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.product.apply.get";
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
                                    	                        	                   			private $applyId;
    	                        
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["applyId"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

}





        
 

