<?php
class JwPurchaseOrderOrderDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.order.orderDetail";
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
                                                        		                                    	                   			private $orderCode;
    	                        
	public function setOrderCode($orderCode){
		$this->orderCode = $orderCode;
         $this->apiParas["orderCode"] = $orderCode;
	}

	public function getOrderCode(){
	  return $this->orderCode;
	}

                        	                        	                            }





        
 

