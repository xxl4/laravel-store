<?php
class WaitAuditDetailProviderFindWaitAuditApplyDetailRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.WaitAuditDetailProvider.findWaitAuditApplyDetail";
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
                                                        		                                    	                   			private $afsApplyId;
    	                        
	public function setAfsApplyId($afsApplyId){
		$this->afsApplyId = $afsApplyId;
         $this->apiParas["afsApplyId"] = $afsApplyId;
	}

	public function getAfsApplyId(){
	  return $this->afsApplyId;
	}

                        	                   			private $afsServiceStatus;
    	                        
	public function setAfsServiceStatus($afsServiceStatus){
		$this->afsServiceStatus = $afsServiceStatus;
         $this->apiParas["afsServiceStatus"] = $afsServiceStatus;
	}

	public function getAfsServiceStatus(){
	  return $this->afsServiceStatus;
	}

                        	                   			private $buId;
    	                        
	public function setBuId($buId){
		$this->buId = $buId;
         $this->apiParas["buId"] = $buId;
	}

	public function getBuId(){
	  return $this->buId;
	}

                                            		                                    	                   			private $operatorPin;
    	                        
	public function setOperatorPin($operatorPin){
		$this->operatorPin = $operatorPin;
         $this->apiParas["operatorPin"] = $operatorPin;
	}

	public function getOperatorPin(){
	  return $this->operatorPin;
	}

                        	                   			private $operatorNick;
    	                        
	public function setOperatorNick($operatorNick){
		$this->operatorNick = $operatorNick;
         $this->apiParas["operatorNick"] = $operatorNick;
	}

	public function getOperatorNick(){
	  return $this->operatorNick;
	}

                        	                   			private $operatorRemark;
    	                        
	public function setOperatorRemark($operatorRemark){
		$this->operatorRemark = $operatorRemark;
         $this->apiParas["operatorRemark"] = $operatorRemark;
	}

	public function getOperatorRemark(){
	  return $this->operatorRemark;
	}

                        	                   			private $operatorDate;
    	                        
	public function setOperatorDate($operatorDate){
		$this->operatorDate = $operatorDate;
         $this->apiParas["operatorDate"] = $operatorDate;
	}

	public function getOperatorDate(){
	  return $this->operatorDate;
	}

                        	                   			private $platformSrc;
    	                        
	public function setPlatformSrc($platformSrc){
		$this->platformSrc = $platformSrc;
         $this->apiParas["platformSrc"] = $platformSrc;
	}

	public function getPlatformSrc(){
	  return $this->platformSrc;
	}

                                                        }





        
 

