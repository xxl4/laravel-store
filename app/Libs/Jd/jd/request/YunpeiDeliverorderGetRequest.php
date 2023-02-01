<?php
class YunpeiDeliverorderGetRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.deliverorder.get";
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
                                    	                        	                   			private $wayBillNo;
    	                                                                        
	public function setWayBillNo($wayBillNo){
		$this->wayBillNo = $wayBillNo;
         $this->apiParas["way_bill_no"] = $wayBillNo;
	}

	public function getWayBillNo(){
	  return $this->wayBillNo;
	}

}





        
 

