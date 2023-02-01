<?php
class ErsFangAddDealAverageRecordRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addDealAverageRecord";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $dealRecordValue;
                              public function setDealRecordValue($dealRecordValue ){
                 $this->dealRecordValue=$dealRecordValue;
                 $this->apiParas["dealRecordValue"] = $dealRecordValue;
              }

              public function getDealRecordValue(){
              	return $this->dealRecordValue;
              }
                                                                                                                                                                                                                                                                                                                                              private $cityCode;
                              public function setCityCode($cityCode ){
                 $this->cityCode=$cityCode;
                 $this->apiParas["cityCode"] = $cityCode;
              }

              public function getCityCode(){
              	return $this->cityCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $sourceId;
                              public function setSourceId($sourceId ){
                 $this->sourceId=$sourceId;
                 $this->apiParas["sourceId"] = $sourceId;
              }

              public function getSourceId(){
              	return $this->sourceId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                       private $pSourceId;
                              public function setPSourceId($pSourceId ){
                 $this->pSourceId=$pSourceId;
                 $this->apiParas["pSourceId"] = $pSourceId;
              }

              public function getPSourceId(){
              	return $this->pSourceId;
              }
                                                                                                                                                                                                                                                                                                                                              private $externalPlotName;
                              public function setExternalPlotName($externalPlotName ){
                 $this->externalPlotName=$externalPlotName;
                 $this->apiParas["externalPlotName"] = $externalPlotName;
              }

              public function getExternalPlotName(){
              	return $this->externalPlotName;
              }
                                                                                                                                                                                                                                                                                                                                              private $totalRate;
                              public function setTotalRate($totalRate ){
                 $this->totalRate=$totalRate;
                 $this->apiParas["totalRate"] = $totalRate;
              }

              public function getTotalRate(){
              	return $this->totalRate;
              }
                                                                                                                                                                                                                                                                                                                                              private $unitRate;
                              public function setUnitRate($unitRate ){
                 $this->unitRate=$unitRate;
                 $this->apiParas["unitRate"] = $unitRate;
              }

              public function getUnitRate(){
              	return $this->unitRate;
              }
                                                                                                                                                                                                                                                                                                                                              private $houseArea;
                              public function setHouseArea($houseArea ){
                 $this->houseArea=$houseArea;
                 $this->apiParas["houseArea"] = $houseArea;
              }

              public function getHouseArea(){
              	return $this->houseArea;
              }
                                                                                                                                                                                                                                                                                                                                              private $houseRoom;
                              public function setHouseRoom($houseRoom ){
                 $this->houseRoom=$houseRoom;
                 $this->apiParas["houseRoom"] = $houseRoom;
              }

              public function getHouseRoom(){
              	return $this->houseRoom;
              }
                                                                                                                                                                                                                                                                                                                                              private $houseHall;
                              public function setHouseHall($houseHall ){
                 $this->houseHall=$houseHall;
                 $this->apiParas["houseHall"] = $houseHall;
              }

              public function getHouseHall(){
              	return $this->houseHall;
              }
                                                                                                                                                                                                                                                                                                                                              private $finishTime;
                              public function setFinishTime($finishTime ){
                 $this->finishTime=$finishTime;
                 $this->apiParas["finishTime"] = $finishTime;
              }

              public function getFinishTime(){
              	return $this->finishTime;
              }
                                                                                                                                                                                                                                                                                                                                              private $externalChannelId;
                              public function setExternalChannelId($externalChannelId ){
                 $this->externalChannelId=$externalChannelId;
                 $this->apiParas["externalChannelId"] = $externalChannelId;
              }

              public function getExternalChannelId(){
              	return $this->externalChannelId;
              }
                                                                                                                                                                                                                                                                                                                                              private $externalChannelName;
                              public function setExternalChannelName($externalChannelName ){
                 $this->externalChannelName=$externalChannelName;
                 $this->apiParas["externalChannelName"] = $externalChannelName;
              }

              public function getExternalChannelName(){
              	return $this->externalChannelName;
              }
                                                                                                                                                                                                                                                                                                                                              private $externalBrokerId;
                              public function setExternalBrokerId($externalBrokerId ){
                 $this->externalBrokerId=$externalBrokerId;
                 $this->apiParas["externalBrokerId"] = $externalBrokerId;
              }

              public function getExternalBrokerId(){
              	return $this->externalBrokerId;
              }
                                                                                                                                                                                                                                                                                                                                              private $externalBrokerName;
                              public function setExternalBrokerName($externalBrokerName ){
                 $this->externalBrokerName=$externalBrokerName;
                 $this->apiParas["externalBrokerName"] = $externalBrokerName;
              }

              public function getExternalBrokerName(){
              	return $this->externalBrokerName;
              }
                                                                                                                }





        
 

