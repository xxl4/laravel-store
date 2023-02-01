<?php
class VenderChildAccountQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vender.childAccount.query";
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
                                    	                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $size;
    	                        
	public function setSize($size){
		$this->size = $size;
         $this->apiParas["size"] = $size;
	}

	public function getSize(){
	  return $this->size;
	}

                        	}





        
 

