<?php
class ErsFangAddOrUpdateHouseResourceRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdateHouseResource";
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
                                                        		                                    	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                        	                   			private $plotId;
    	                        
	public function setPlotId($plotId){
		$this->plotId = $plotId;
         $this->apiParas["plotId"] = $plotId;
	}

	public function getPlotId(){
	  return $this->plotId;
	}

                        	                   			private $number;
    	                        
	public function setNumber($number){
		$this->number = $number;
         $this->apiParas["number"] = $number;
	}

	public function getNumber(){
	  return $this->number;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $labels;
    	                        
	public function setLabels($labels){
		$this->labels = $labels;
         $this->apiParas["labels"] = $labels;
	}

	public function getLabels(){
	  return $this->labels;
	}

                        	                   			private $estateType;
    	                        
	public function setEstateType($estateType){
		$this->estateType = $estateType;
         $this->apiParas["estateType"] = $estateType;
	}

	public function getEstateType(){
	  return $this->estateType;
	}

                        	                   			private $room;
    	                        
	public function setRoom($room){
		$this->room = $room;
         $this->apiParas["room"] = $room;
	}

	public function getRoom(){
	  return $this->room;
	}

                        	                   			private $hall;
    	                        
	public function setHall($hall){
		$this->hall = $hall;
         $this->apiParas["hall"] = $hall;
	}

	public function getHall(){
	  return $this->hall;
	}

                        	                   			private $toilet;
    	                        
	public function setToilet($toilet){
		$this->toilet = $toilet;
         $this->apiParas["toilet"] = $toilet;
	}

	public function getToilet(){
	  return $this->toilet;
	}

                        	                   			private $kitchen;
    	                        
	public function setKitchen($kitchen){
		$this->kitchen = $kitchen;
         $this->apiParas["kitchen"] = $kitchen;
	}

	public function getKitchen(){
	  return $this->kitchen;
	}

                        	                   			private $downPayment;
    	                        
	public function setDownPayment($downPayment){
		$this->downPayment = $downPayment;
         $this->apiParas["downPayment"] = $downPayment;
	}

	public function getDownPayment(){
	  return $this->downPayment;
	}

                        	                   			private $structureArea;
    	                        
	public function setStructureArea($structureArea){
		$this->structureArea = $structureArea;
         $this->apiParas["structureArea"] = $structureArea;
	}

	public function getStructureArea(){
	  return $this->structureArea;
	}

                        	                   			private $usableArea;
    	                        
	public function setUsableArea($usableArea){
		$this->usableArea = $usableArea;
         $this->apiParas["usableArea"] = $usableArea;
	}

	public function getUsableArea(){
	  return $this->usableArea;
	}

                        	                   			private $orientation;
    	                        
	public function setOrientation($orientation){
		$this->orientation = $orientation;
         $this->apiParas["orientation"] = $orientation;
	}

	public function getOrientation(){
	  return $this->orientation;
	}

                        	                   			private $fitmentType;
    	                        
	public function setFitmentType($fitmentType){
		$this->fitmentType = $fitmentType;
         $this->apiParas["fitmentType"] = $fitmentType;
	}

	public function getFitmentType(){
	  return $this->fitmentType;
	}

                        	                   			private $buildYear;
    	                        
	public function setBuildYear($buildYear){
		$this->buildYear = $buildYear;
         $this->apiParas["buildYear"] = $buildYear;
	}

	public function getBuildYear(){
	  return $this->buildYear;
	}

                        	                   			private $totalFloor;
    	                        
	public function setTotalFloor($totalFloor){
		$this->totalFloor = $totalFloor;
         $this->apiParas["totalFloor"] = $totalFloor;
	}

	public function getTotalFloor(){
	  return $this->totalFloor;
	}

                        	                   			private $locationFloor;
    	                        
	public function setLocationFloor($locationFloor){
		$this->locationFloor = $locationFloor;
         $this->apiParas["locationFloor"] = $locationFloor;
	}

	public function getLocationFloor(){
	  return $this->locationFloor;
	}

                        	                   			private $floorLabel;
    	                        
	public function setFloorLabel($floorLabel){
		$this->floorLabel = $floorLabel;
         $this->apiParas["floorLabel"] = $floorLabel;
	}

	public function getFloorLabel(){
	  return $this->floorLabel;
	}

                        	                   			private $recordNumber;
    	                        
	public function setRecordNumber($recordNumber){
		$this->recordNumber = $recordNumber;
         $this->apiParas["recordNumber"] = $recordNumber;
	}

	public function getRecordNumber(){
	  return $this->recordNumber;
	}

                        	                   			private $housePutawayTime;
    	                        
	public function setHousePutawayTime($housePutawayTime){
		$this->housePutawayTime = $housePutawayTime;
         $this->apiParas["housePutawayTime"] = $housePutawayTime;
	}

	public function getHousePutawayTime(){
	  return $this->housePutawayTime;
	}

                        	                   			private $houseUpdateTime;
    	                        
	public function setHouseUpdateTime($houseUpdateTime){
		$this->houseUpdateTime = $houseUpdateTime;
         $this->apiParas["houseUpdateTime"] = $houseUpdateTime;
	}

	public function getHouseUpdateTime(){
	  return $this->houseUpdateTime;
	}

                        	                   			private $houseStatus;
    	                        
	public function setHouseStatus($houseStatus){
		$this->houseStatus = $houseStatus;
         $this->apiParas["houseStatus"] = $houseStatus;
	}

	public function getHouseStatus(){
	  return $this->houseStatus;
	}

                        	                   			private $houseTerm;
    	                        
	public function setHouseTerm($houseTerm){
		$this->houseTerm = $houseTerm;
         $this->apiParas["houseTerm"] = $houseTerm;
	}

	public function getHouseTerm(){
	  return $this->houseTerm;
	}

                        	                   			private $propertyYear;
    	                        
	public function setPropertyYear($propertyYear){
		$this->propertyYear = $propertyYear;
         $this->apiParas["propertyYear"] = $propertyYear;
	}

	public function getPropertyYear(){
	  return $this->propertyYear;
	}

                        	                   			private $tradeAffiliation;
    	                        
	public function setTradeAffiliation($tradeAffiliation){
		$this->tradeAffiliation = $tradeAffiliation;
         $this->apiParas["tradeAffiliation"] = $tradeAffiliation;
	}

	public function getTradeAffiliation(){
	  return $this->tradeAffiliation;
	}

                        	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                            }





        
 

