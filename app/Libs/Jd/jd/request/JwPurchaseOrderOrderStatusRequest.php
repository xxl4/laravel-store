<?php
class JwPurchaseOrderOrderStatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jw.purchase.order.orderStatus";
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
                                                        		                                    	                   	                    		private $orderCodes;
    	                        
	public function setOrderCodes($orderCodes){
		$this->orderCodes = $orderCodes;
         $this->apiParas["orderCodes"] = $orderCodes;
	}

	public function getOrderCodes(){
	  return $this->orderCodes;
	}

                        	                        	                            }





        
 

