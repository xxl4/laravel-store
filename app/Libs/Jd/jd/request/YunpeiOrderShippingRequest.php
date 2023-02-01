<?php
class YunpeiOrderShippingRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.order.shipping";
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

                        	                   			private $companyName;
    	                                                            
	public function setCompanyName($companyName){
		$this->companyName = $companyName;
         $this->apiParas["company_name"] = $companyName;
	}

	public function getCompanyName(){
	  return $this->companyName;
	}

                        	                   			private $deliveryBillId;
    	                                                                        
	public function setDeliveryBillId($deliveryBillId){
		$this->deliveryBillId = $deliveryBillId;
         $this->apiParas["delivery_bill_id"] = $deliveryBillId;
	}

	public function getDeliveryBillId(){
	  return $this->deliveryBillId;
	}

                        	                   			private $gtmDelivery;
    	                                                            
	public function setGtmDelivery($gtmDelivery){
		$this->gtmDelivery = $gtmDelivery;
         $this->apiParas["gtm_delivery"] = $gtmDelivery;
	}

	public function getGtmDelivery(){
	  return $this->gtmDelivery;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	}





        
 

