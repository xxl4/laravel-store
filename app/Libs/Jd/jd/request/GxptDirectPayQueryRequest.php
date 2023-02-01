<?php
class GxptDirectPayQueryRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.gxpt.directPay.query";
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
                                                        		                                    	                   			private $startCreated;
    	                        
	public function setStartCreated($startCreated){
		$this->startCreated = $startCreated;
         $this->apiParas["startCreated"] = $startCreated;
	}

	public function getStartCreated(){
	  return $this->startCreated;
	}

                        	                   			private $endCreated;
    	                        
	public function setEndCreated($endCreated){
		$this->endCreated = $endCreated;
         $this->apiParas["endCreated"] = $endCreated;
	}

	public function getEndCreated(){
	  return $this->endCreated;
	}

                        	                   			private $startModified;
    	                        
	public function setStartModified($startModified){
		$this->startModified = $startModified;
         $this->apiParas["startModified"] = $startModified;
	}

	public function getStartModified(){
	  return $this->startModified;
	}

                        	                   			private $endModified;
    	                        
	public function setEndModified($endModified){
		$this->endModified = $endModified;
         $this->apiParas["endModified"] = $endModified;
	}

	public function getEndModified(){
	  return $this->endModified;
	}

                        	                   			private $payType;
    	                        
	public function setPayType($payType){
		$this->payType = $payType;
         $this->apiParas["payType"] = $payType;
	}

	public function getPayType(){
	  return $this->payType;
	}

                        	                   			private $payState;
    	                        
	public function setPayState($payState){
		$this->payState = $payState;
         $this->apiParas["payState"] = $payState;
	}

	public function getPayState(){
	  return $this->payState;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                            }





        
 

