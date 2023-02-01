<?php
class VenderShopcategoryGetShopCategoryByCidRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.shopcategory.getShopCategoryByCid";
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
                                    	                        	                   			private $cid;
    	                        
	public function setCid($cid){
		$this->cid = $cid;
         $this->apiParas["cid"] = $cid;
	}

	public function getCid(){
	  return $this->cid;
	}

}





        
 

