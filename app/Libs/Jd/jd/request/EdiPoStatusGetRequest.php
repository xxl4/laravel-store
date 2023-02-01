<?php
class EdiPoStatusGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.po.status.get";
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
                                                        		                                    	                   			private $createTimeStart;
    	                        
	public function setCreateTimeStart($createTimeStart){
		$this->createTimeStart = $createTimeStart;
         $this->apiParas["createTimeStart"] = $createTimeStart;
	}

	public function getCreateTimeStart(){
	  return $this->createTimeStart;
	}

                        	                   			private $createTimeEnd;
    	                        
	public function setCreateTimeEnd($createTimeEnd){
		$this->createTimeEnd = $createTimeEnd;
         $this->apiParas["createTimeEnd"] = $createTimeEnd;
	}

	public function getCreateTimeEnd(){
	  return $this->createTimeEnd;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $purchaseOrderCode;
    	                        
	public function setPurchaseOrderCode($purchaseOrderCode){
		$this->purchaseOrderCode = $purchaseOrderCode;
         $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
	}

	public function getPurchaseOrderCode(){
	  return $this->purchaseOrderCode;
	}

                        	                   			private $bipLogicalDel;
    	                        
	public function setBipLogicalDel($bipLogicalDel){
		$this->bipLogicalDel = $bipLogicalDel;
         $this->apiParas["bipLogicalDel"] = $bipLogicalDel;
	}

	public function getBipLogicalDel(){
	  return $this->bipLogicalDel;
	}

                        	                   			private $bipStatus;
    	                        
	public function setBipStatus($bipStatus){
		$this->bipStatus = $bipStatus;
         $this->apiParas["bipStatus"] = $bipStatus;
	}

	public function getBipStatus(){
	  return $this->bipStatus;
	}

                        	                            }





        
 

