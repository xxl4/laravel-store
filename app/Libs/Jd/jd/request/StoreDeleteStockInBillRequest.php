<?php
class StoreDeleteStockInBillRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.store.deleteStockInBill";
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
                                    	                        	                   			private $stockInBillId;
    	                                                                                    
	public function setStockInBillId($stockInBillId){
		$this->stockInBillId = $stockInBillId;
         $this->apiParas["stock_in_bill_id"] = $stockInBillId;
	}

	public function getStockInBillId(){
	  return $this->stockInBillId;
	}

                        	}





        
 

