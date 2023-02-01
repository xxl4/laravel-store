<?php
class YunpeiOrderConfirmRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.order.confirm";
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
                                    	                        	                   			private $orderSn;
    	                                                            
	public function setOrderSn($orderSn){
		$this->orderSn = $orderSn;
         $this->apiParas["order_sn"] = $orderSn;
	}

	public function getOrderSn(){
	  return $this->orderSn;
	}

}





        
 

