<?php
class RetailerCompanyCustomSelectInfosRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.retailer.company.custom.select.infos";
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
                                    	                        	                   			private $sellerId;
    	                        
	public function setSellerId($sellerId){
		$this->sellerId = $sellerId;
         $this->apiParas["sellerId"] = $sellerId;
	}

	public function getSellerId(){
	  return $this->sellerId;
	}

}





        
 

