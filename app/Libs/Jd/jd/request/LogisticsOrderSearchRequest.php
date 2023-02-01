<?php
class LogisticsOrderSearchRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.order.search";
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
                                    	                   			private $receiptNos;
    	                                                            
	public function setReceiptNos($receiptNos){
		$this->receiptNos = $receiptNos;
         $this->apiParas["receipt_nos"] = $receiptNos;
	}

	public function getReceiptNos(){
	  return $this->receiptNos;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	}





        
 

