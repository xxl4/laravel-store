<?php
class EclpRtwCancelRtwOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.cancelRtwOrder";
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
                                                        		                                    	                   			private $isvRtwNum;
    	                        
	public function setIsvRtwNum($isvRtwNum){
		$this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
	}

	public function getIsvRtwNum(){
	  return $this->isvRtwNum;
	}

                        	                   			private $eclpRtwNum;
    	                        
	public function setEclpRtwNum($eclpRtwNum){
		$this->eclpRtwNum = $eclpRtwNum;
         $this->apiParas["eclpRtwNum"] = $eclpRtwNum;
	}

	public function getEclpRtwNum(){
	  return $this->eclpRtwNum;
	}

                        	                        	                   			private $cancelReson;
    	                        
	public function setCancelReson($cancelReson){
		$this->cancelReson = $cancelReson;
         $this->apiParas["cancelReson"] = $cancelReson;
	}

	public function getCancelReson(){
	  return $this->cancelReson;
	}

                        	                   			private $ownerNo;
    	                        
	public function setOwnerNo($ownerNo){
		$this->ownerNo = $ownerNo;
         $this->apiParas["ownerNo"] = $ownerNo;
	}

	public function getOwnerNo(){
	  return $this->ownerNo;
	}

                        	                   			private $orderInType;
    	                        
	public function setOrderInType($orderInType){
		$this->orderInType = $orderInType;
         $this->apiParas["orderInType"] = $orderInType;
	}

	public function getOrderInType(){
	  return $this->orderInType;
	}

                            }





        
 

