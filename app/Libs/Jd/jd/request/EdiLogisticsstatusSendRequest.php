<?php
class EdiLogisticsstatusSendRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.edi.logisticsstatus.send";
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
                                                        		                                    	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderType;
                              public function setOrderType($orderType ){
                 $this->orderType=$orderType;
                 $this->apiParas["orderType"] = $orderType;
              }

              public function getOrderType(){
              	return $this->orderType;
              }
                                                                                                                                                                                                                                                                                                                                              private $asnCode;
                              public function setAsnCode($asnCode ){
                 $this->asnCode=$asnCode;
                 $this->apiParas["asnCode"] = $asnCode;
              }

              public function getAsnCode(){
              	return $this->asnCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $purchaseOrderCode;
                              public function setPurchaseOrderCode($purchaseOrderCode ){
                 $this->purchaseOrderCode=$purchaseOrderCode;
                 $this->apiParas["purchaseOrderCode"] = $purchaseOrderCode;
              }

              public function getPurchaseOrderCode(){
              	return $this->purchaseOrderCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $supposedArrivedDate;
                              public function setSupposedArrivedDate($supposedArrivedDate ){
                 $this->supposedArrivedDate=$supposedArrivedDate;
                 $this->apiParas["supposedArrivedDate"] = $supposedArrivedDate;
              }

              public function getSupposedArrivedDate(){
              	return $this->supposedArrivedDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventCode;
                              public function setEventCode($eventCode ){
                 $this->eventCode=$eventCode;
                 $this->apiParas["eventCode"] = $eventCode;
              }

              public function getEventCode(){
              	return $this->eventCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventTime;
                              public function setEventTime($eventTime ){
                 $this->eventTime=$eventTime;
                 $this->apiParas["eventTime"] = $eventTime;
              }

              public function getEventTime(){
              	return $this->eventTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventLocation;
                              public function setEventLocation($eventLocation ){
                 $this->eventLocation=$eventLocation;
                 $this->apiParas["eventLocation"] = $eventLocation;
              }

              public function getEventLocation(){
              	return $this->eventLocation;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventNameCn;
                              public function setEventNameCn($eventNameCn ){
                 $this->eventNameCn=$eventNameCn;
                 $this->apiParas["eventNameCn"] = $eventNameCn;
              }

              public function getEventNameCn(){
              	return $this->eventNameCn;
              }
                                                                                                                                                                                                                                                                                                                                              private $eventNameEn;
                              public function setEventNameEn($eventNameEn ){
                 $this->eventNameEn=$eventNameEn;
                 $this->apiParas["eventNameEn"] = $eventNameEn;
              }

              public function getEventNameEn(){
              	return $this->eventNameEn;
              }
                                                                                                                                                                                                                                                                                                                                              private $nextEventCode;
                              public function setNextEventCode($nextEventCode ){
                 $this->nextEventCode=$nextEventCode;
                 $this->apiParas["nextEventCode"] = $nextEventCode;
              }

              public function getNextEventCode(){
              	return $this->nextEventCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $nextEventTime;
                              public function setNextEventTime($nextEventTime ){
                 $this->nextEventTime=$nextEventTime;
                 $this->apiParas["nextEventTime"] = $nextEventTime;
              }

              public function getNextEventTime(){
              	return $this->nextEventTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $nextEventLocation;
                              public function setNextEventLocation($nextEventLocation ){
                 $this->nextEventLocation=$nextEventLocation;
                 $this->apiParas["nextEventLocation"] = $nextEventLocation;
              }

              public function getNextEventLocation(){
              	return $this->nextEventLocation;
              }
                                                                                                                                                                                                                                                                                                                                              private $nextEventNameCn;
                              public function setNextEventNameCn($nextEventNameCn ){
                 $this->nextEventNameCn=$nextEventNameCn;
                 $this->apiParas["nextEventNameCn"] = $nextEventNameCn;
              }

              public function getNextEventNameCn(){
              	return $this->nextEventNameCn;
              }
                                                                                                                                                                                                                                                                                                                                              private $nextEventNameEn;
                              public function setNextEventNameEn($nextEventNameEn ){
                 $this->nextEventNameEn=$nextEventNameEn;
                 $this->apiParas["nextEventNameEn"] = $nextEventNameEn;
              }

              public function getNextEventNameEn(){
              	return $this->nextEventNameEn;
              }
                                                                                                                }





        
 

