<?php
class VcItemPropsFindRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.props.find";
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
                                    	                        	                   			private $categoryLeafId;
    	                                                                        
	public function setCategoryLeafId($categoryLeafId){
		$this->categoryLeafId = $categoryLeafId;
         $this->apiParas["category_leaf_id"] = $categoryLeafId;
	}

	public function getCategoryLeafId(){
	  return $this->categoryLeafId;
	}

}





        
 

