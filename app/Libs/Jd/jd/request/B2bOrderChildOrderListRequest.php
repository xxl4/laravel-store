<?php
class B2bOrderChildOrderListRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.order.childOrderList";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderId;
                              public function setOrderId($orderId ){
                 $this->orderId=$orderId;
                 $this->apiParas["orderId"] = $orderId;
              }

              public function getOrderId(){
              	return $this->orderId;
              }
                                                                                                                                        	                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $customKeys;
                              public function setCustomKeys($customKeys ){
                 $this->customKeys=$customKeys;
                 $this->apiParas["customKeys"] = $customKeys;
              }

              public function getCustomKeys(){
              	return $this->customKeys;
              }
                                                                                                                }





        
 

