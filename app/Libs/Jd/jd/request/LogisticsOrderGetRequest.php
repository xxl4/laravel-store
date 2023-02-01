<?php
class LogisticsOrderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.logistics.order.get";
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
                                    	                   			private $receiptNo;
    	                                                            
	public function setReceiptNo($receiptNo){
		$this->receiptNo = $receiptNo;
         $this->apiParas["receipt_no"] = $receiptNo;
	}

	public function getReceiptNo(){
	  return $this->receiptNo;
	}

                        	}





        
 

