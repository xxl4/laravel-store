<?php
class EclpGoodsQueryGoodsByPageAndTimeRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.goods.queryGoodsByPageAndTime";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $isvGoodsNos;
    	                        
	public function setIsvGoodsNos($isvGoodsNos){
		$this->isvGoodsNos = $isvGoodsNos;
         $this->apiParas["isvGoodsNos"] = $isvGoodsNos;
	}

	public function getIsvGoodsNos(){
	  return $this->isvGoodsNos;
	}

                        	                   			private $goodsNos;
    	                        
	public function setGoodsNos($goodsNos){
		$this->goodsNos = $goodsNos;
         $this->apiParas["goodsNos"] = $goodsNos;
	}

	public function getGoodsNos(){
	  return $this->goodsNos;
	}

                        	                   			private $pageNo;
    	                        
	public function setPageNo($pageNo){
		$this->pageNo = $pageNo;
         $this->apiParas["pageNo"] = $pageNo;
	}

	public function getPageNo(){
	  return $this->pageNo;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $updateTimeStart;
    	                        
	public function setUpdateTimeStart($updateTimeStart){
		$this->updateTimeStart = $updateTimeStart;
         $this->apiParas["updateTimeStart"] = $updateTimeStart;
	}

	public function getUpdateTimeStart(){
	  return $this->updateTimeStart;
	}

                        	                   			private $updateTimeEnd;
    	                        
	public function setUpdateTimeEnd($updateTimeEnd){
		$this->updateTimeEnd = $updateTimeEnd;
         $this->apiParas["updateTimeEnd"] = $updateTimeEnd;
	}

	public function getUpdateTimeEnd(){
	  return $this->updateTimeEnd;
	}

                                                    	}





        
 

