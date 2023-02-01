<?php
class ErsFangAddOrUpdatePlotRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ers.fang.addOrUpdatePlot";
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
                                                        		                                    	                   			private $cityCode;
    	                        
	public function setCityCode($cityCode){
		$this->cityCode = $cityCode;
         $this->apiParas["cityCode"] = $cityCode;
	}

	public function getCityCode(){
	  return $this->cityCode;
	}

                        	                   			private $areaCode;
    	                        
	public function setAreaCode($areaCode){
		$this->areaCode = $areaCode;
         $this->apiParas["areaCode"] = $areaCode;
	}

	public function getAreaCode(){
	  return $this->areaCode;
	}

                        	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                        	                   			private $brokerIds;
    	                        
	public function setBrokerIds($brokerIds){
		$this->brokerIds = $brokerIds;
         $this->apiParas["brokerIds"] = $brokerIds;
	}

	public function getBrokerIds(){
	  return $this->brokerIds;
	}

                        	                   			private $plotName;
    	                        
	public function setPlotName($plotName){
		$this->plotName = $plotName;
         $this->apiParas["plotName"] = $plotName;
	}

	public function getPlotName(){
	  return $this->plotName;
	}

                        	                   			private $plotNickname;
    	                        
	public function setPlotNickname($plotNickname){
		$this->plotNickname = $plotNickname;
         $this->apiParas["plotNickname"] = $plotNickname;
	}

	public function getPlotNickname(){
	  return $this->plotNickname;
	}

                        	                   			private $estateType;
    	                        
	public function setEstateType($estateType){
		$this->estateType = $estateType;
         $this->apiParas["estateType"] = $estateType;
	}

	public function getEstateType(){
	  return $this->estateType;
	}

                        	                   			private $buildYear;
    	                        
	public function setBuildYear($buildYear){
		$this->buildYear = $buildYear;
         $this->apiParas["buildYear"] = $buildYear;
	}

	public function getBuildYear(){
	  return $this->buildYear;
	}

                        	                   			private $volumeRate;
    	                        
	public function setVolumeRate($volumeRate){
		$this->volumeRate = $volumeRate;
         $this->apiParas["volumeRate"] = $volumeRate;
	}

	public function getVolumeRate(){
	  return $this->volumeRate;
	}

                        	                   			private $greenRate;
    	                        
	public function setGreenRate($greenRate){
		$this->greenRate = $greenRate;
         $this->apiParas["greenRate"] = $greenRate;
	}

	public function getGreenRate(){
	  return $this->greenRate;
	}

                        	                   			private $estateAmt;
    	                        
	public function setEstateAmt($estateAmt){
		$this->estateAmt = $estateAmt;
         $this->apiParas["estateAmt"] = $estateAmt;
	}

	public function getEstateAmt(){
	  return $this->estateAmt;
	}

                        	                   			private $estateCompany;
    	                        
	public function setEstateCompany($estateCompany){
		$this->estateCompany = $estateCompany;
         $this->apiParas["estateCompany"] = $estateCompany;
	}

	public function getEstateCompany(){
	  return $this->estateCompany;
	}

                        	                   			private $buildCompany;
    	                        
	public function setBuildCompany($buildCompany){
		$this->buildCompany = $buildCompany;
         $this->apiParas["buildCompany"] = $buildCompany;
	}

	public function getBuildCompany(){
	  return $this->buildCompany;
	}

                        	                   			private $tradingAreaId;
    	                        
	public function setTradingAreaId($tradingAreaId){
		$this->tradingAreaId = $tradingAreaId;
         $this->apiParas["tradingAreaId"] = $tradingAreaId;
	}

	public function getTradingAreaId(){
	  return $this->tradingAreaId;
	}

                        	                   			private $addressDes;
    	                        
	public function setAddressDes($addressDes){
		$this->addressDes = $addressDes;
         $this->apiParas["addressDes"] = $addressDes;
	}

	public function getAddressDes(){
	  return $this->addressDes;
	}

                        	                   			private $loopLineId;
    	                        
	public function setLoopLineId($loopLineId){
		$this->loopLineId = $loopLineId;
         $this->apiParas["loopLineId"] = $loopLineId;
	}

	public function getLoopLineId(){
	  return $this->loopLineId;
	}

                        	                   			private $addressLat;
    	                        
	public function setAddressLat($addressLat){
		$this->addressLat = $addressLat;
         $this->apiParas["addressLat"] = $addressLat;
	}

	public function getAddressLat(){
	  return $this->addressLat;
	}

                        	                   			private $addressLon;
    	                        
	public function setAddressLon($addressLon){
		$this->addressLon = $addressLon;
         $this->apiParas["addressLon"] = $addressLon;
	}

	public function getAddressLon(){
	  return $this->addressLon;
	}

                        	                   			private $buildType;
    	                        
	public function setBuildType($buildType){
		$this->buildType = $buildType;
         $this->apiParas["buildType"] = $buildType;
	}

	public function getBuildType(){
	  return $this->buildType;
	}

                        	                   			private $estateHeating;
    	                        
	public function setEstateHeating($estateHeating){
		$this->estateHeating = $estateHeating;
         $this->apiParas["estateHeating"] = $estateHeating;
	}

	public function getEstateHeating(){
	  return $this->estateHeating;
	}

                        	                   			private $buildingNum;
    	                        
	public function setBuildingNum($buildingNum){
		$this->buildingNum = $buildingNum;
         $this->apiParas["buildingNum"] = $buildingNum;
	}

	public function getBuildingNum(){
	  return $this->buildingNum;
	}

                        	                   			private $houseNum;
    	                        
	public function setHouseNum($houseNum){
		$this->houseNum = $houseNum;
         $this->apiParas["houseNum"] = $houseNum;
	}

	public function getHouseNum(){
	  return $this->houseNum;
	}

                        	                   			private $totalArea;
    	                        
	public function setTotalArea($totalArea){
		$this->totalArea = $totalArea;
         $this->apiParas["totalArea"] = $totalArea;
	}

	public function getTotalArea(){
	  return $this->totalArea;
	}

                        	                   			private $plotDes;
    	                        
	public function setPlotDes($plotDes){
		$this->plotDes = $plotDes;
         $this->apiParas["plotDes"] = $plotDes;
	}

	public function getPlotDes(){
	  return $this->plotDes;
	}

                        	                   			private $parkingCount;
    	                        
	public function setParkingCount($parkingCount){
		$this->parkingCount = $parkingCount;
         $this->apiParas["parkingCount"] = $parkingCount;
	}

	public function getParkingCount(){
	  return $this->parkingCount;
	}

                        	                   			private $parkingRate;
    	                        
	public function setParkingRate($parkingRate){
		$this->parkingRate = $parkingRate;
         $this->apiParas["parkingRate"] = $parkingRate;
	}

	public function getParkingRate(){
	  return $this->parkingRate;
	}

                        	                   			private $estateWater;
    	                        
	public function setEstateWater($estateWater){
		$this->estateWater = $estateWater;
         $this->apiParas["estateWater"] = $estateWater;
	}

	public function getEstateWater(){
	  return $this->estateWater;
	}

                        	                   			private $estateElectric;
    	                        
	public function setEstateElectric($estateElectric){
		$this->estateElectric = $estateElectric;
         $this->apiParas["estateElectric"] = $estateElectric;
	}

	public function getEstateElectric(){
	  return $this->estateElectric;
	}

                        	                   			private $latLonType;
    	                        
	public function setLatLonType($latLonType){
		$this->latLonType = $latLonType;
         $this->apiParas["latLonType"] = $latLonType;
	}

	public function getLatLonType(){
	  return $this->latLonType;
	}

                        	                   			private $extensionField;
    	                        
	public function setExtensionField($extensionField){
		$this->extensionField = $extensionField;
         $this->apiParas["extensionField"] = $extensionField;
	}

	public function getExtensionField(){
	  return $this->extensionField;
	}

                        	                   			private $ifUse;
    	                        
	public function setIfUse($ifUse){
		$this->ifUse = $ifUse;
         $this->apiParas["ifUse"] = $ifUse;
	}

	public function getIfUse(){
	  return $this->ifUse;
	}

                            }





        
 

