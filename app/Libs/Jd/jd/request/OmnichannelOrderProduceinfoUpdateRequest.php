<?php
class OmnichannelOrderProduceinfoUpdateRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.omnichannel.order.produceinfo.update";
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
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                        	                   			private $storeType;
    	                        
	public function setStoreType($storeType){
		$this->storeType = $storeType;
         $this->apiParas["storeType"] = $storeType;
	}

	public function getStoreType(){
	  return $this->storeType;
	}

                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $operateName;
    	                        
	public function setOperateName($operateName){
		$this->operateName = $operateName;
         $this->apiParas["operateName"] = $operateName;
	}

	public function getOperateName(){
	  return $this->operateName;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                            }





        
 

