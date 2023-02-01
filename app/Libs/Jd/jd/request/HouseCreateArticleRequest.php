<?php
class HouseCreateArticleRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.house.createArticle";
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
                                    	                   			private $articleInfo;
    	                        
	public function setArticleInfo($articleInfo){
		$this->articleInfo = $articleInfo;
         $this->apiParas["articleInfo"] = $articleInfo;
	}

	public function getArticleInfo(){
	  return $this->articleInfo;
	}

                        	                        	}





        
 

