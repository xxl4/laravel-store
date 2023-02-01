<?php
class ComJdRuleManageApiServiceNewWareServiceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.rule.manage.api.service.NewWareService";
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
                                                        		                                    	                        	                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   	                    		private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $brandId;
    	                        
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brandId"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $spuName;
    	                        
	public function setSpuName($spuName){
		$this->spuName = $spuName;
         $this->apiParas["spuName"] = $spuName;
	}

	public function getSpuName(){
	  return $this->spuName;
	}

                        	                   			private $itemNumber;
    	                        
	public function setItemNumber($itemNumber){
		$this->itemNumber = $itemNumber;
         $this->apiParas["itemNumber"] = $itemNumber;
	}

	public function getItemNumber(){
	  return $this->itemNumber;
	}

                        	                   			private $tagUrl;
    	                        
	public function setTagUrl($tagUrl){
		$this->tagUrl = $tagUrl;
         $this->apiParas["tagUrl"] = $tagUrl;
	}

	public function getTagUrl(){
	  return $this->tagUrl;
	}

                            }





        
 

