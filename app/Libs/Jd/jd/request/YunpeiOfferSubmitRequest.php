<?php
class YunpeiOfferSubmitRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yunpei.offer.submit";
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
                                    	                        	                   			private $demandSn;
    	                                                            
	public function setDemandSn($demandSn){
		$this->demandSn = $demandSn;
         $this->apiParas["demand_sn"] = $demandSn;
	}

	public function getDemandSn(){
	  return $this->demandSn;
	}

                        	                   			private $shippingType;
    	                                                            
	public function setShippingType($shippingType){
		$this->shippingType = $shippingType;
         $this->apiParas["shipping_type"] = $shippingType;
	}

	public function getShippingType(){
	  return $this->shippingType;
	}

                        	                   			private $shippingPayWay;
    	                                                                        
	public function setShippingPayWay($shippingPayWay){
		$this->shippingPayWay = $shippingPayWay;
         $this->apiParas["shipping_pay_way"] = $shippingPayWay;
	}

	public function getShippingPayWay(){
	  return $this->shippingPayWay;
	}

                        	                   			private $otherFee;
    	                                                            
	public function setOtherFee($otherFee){
		$this->otherFee = $otherFee;
         $this->apiParas["other_fee"] = $otherFee;
	}

	public function getOtherFee(){
	  return $this->otherFee;
	}

                        	                   			private $offerDetailParams;
    	                                                                        
	public function setOfferDetailParams($offerDetailParams){
		$this->offerDetailParams = $offerDetailParams;
         $this->apiParas["offer_detail_params"] = $offerDetailParams;
	}

	public function getOfferDetailParams(){
	  return $this->offerDetailParams;
	}

                        	                   			private $operateName;
    	                                                            
	public function setOperateName($operateName){
		$this->operateName = $operateName;
         $this->apiParas["operate_name"] = $operateName;
	}

	public function getOperateName(){
	  return $this->operateName;
	}

}





        
 

