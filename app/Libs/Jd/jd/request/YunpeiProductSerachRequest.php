<?php
class YunpeiProductSerachRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.product.serach";
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
                                    	                        	                   			private $productId;
    	                                                            
	public function setProductId($productId){
		$this->productId = $productId;
         $this->apiParas["product_id"] = $productId;
	}

	public function getProductId(){
	  return $this->productId;
	}

                        	                   			private $oeId;
    	                                                            
	public function setOeId($oeId){
		$this->oeId = $oeId;
         $this->apiParas["oe_id"] = $oeId;
	}

	public function getOeId(){
	  return $this->oeId;
	}

                        	                   			private $pageNo;
    	                                                            
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $popProductSn;
    	                                                                        
	public function setPopProductSn($popProductSn){
		$this->popProductSn = $popProductSn;
         $this->apiParas["pop_product_sn"] = $popProductSn;
	}

	public function getPopProductSn(){
	  return $this->popProductSn;
	}

}





        
 

