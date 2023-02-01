<?php
class VenderShopcategoryFindSubShopCategoriesByParentCidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.shopcategory.findSubShopCategoriesByParentCid";
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
                                    	                        	                   			private $parentCid;
    	                                                            
	public function setParentCid($parentCid){
		$this->parentCid = $parentCid;
         $this->apiParas["parent_cid"] = $parentCid;
	}

	public function getParentCid(){
	  return $this->parentCid;
	}

}





        
 

