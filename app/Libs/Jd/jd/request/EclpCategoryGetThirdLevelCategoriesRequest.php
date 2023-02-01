<?php
class EclpCategoryGetThirdLevelCategoriesRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.category.getThirdLevelCategories";
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
                                                        		                                    	                   			private $secondCategoryNo;
    	                        
	public function setSecondCategoryNo($secondCategoryNo){
		$this->secondCategoryNo = $secondCategoryNo;
         $this->apiParas["secondCategoryNo"] = $secondCategoryNo;
	}

	public function getSecondCategoryNo(){
	  return $this->secondCategoryNo;
	}

                        	                   			private $thirdCategoryNo;
    	                        
	public function setThirdCategoryNo($thirdCategoryNo){
		$this->thirdCategoryNo = $thirdCategoryNo;
         $this->apiParas["thirdCategoryNo"] = $thirdCategoryNo;
	}

	public function getThirdCategoryNo(){
	  return $this->thirdCategoryNo;
	}

                                                    	}





        
 

