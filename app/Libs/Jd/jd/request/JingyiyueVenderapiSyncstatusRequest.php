<?php
class JingyiyueVenderapiSyncstatusRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jingyiyue.venderapi.syncstatus";
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
                                                        		                                    	                   			private $sourceKey;
    	                        
	public function setSourceKey($sourceKey){
		$this->sourceKey = $sourceKey;
         $this->apiParas["sourceKey"] = $sourceKey;
	}

	public function getSourceKey(){
	  return $this->sourceKey;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $stateDesc;
    	                        
	public function setStateDesc($stateDesc){
		$this->stateDesc = $stateDesc;
         $this->apiParas["stateDesc"] = $stateDesc;
	}

	public function getStateDesc(){
	  return $this->stateDesc;
	}

                        	                        	                   			private $stateCode;
    	                        
	public function setStateCode($stateCode){
		$this->stateCode = $stateCode;
         $this->apiParas["stateCode"] = $stateCode;
	}

	public function getStateCode(){
	  return $this->stateCode;
	}

                        	                   			private $pushTime;
    	                        
	public function setPushTime($pushTime){
		$this->pushTime = $pushTime;
         $this->apiParas["pushTime"] = $pushTime;
	}

	public function getPushTime(){
	  return $this->pushTime;
	}

                        	                   			private $extInfo;
    	                        
	public function setExtInfo($extInfo){
		$this->extInfo = $extInfo;
         $this->apiParas["extInfo"] = $extInfo;
	}

	public function getExtInfo(){
	  return $this->extInfo;
	}

                            }





        
 

