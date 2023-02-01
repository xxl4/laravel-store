<?php
class EclpRtwAddRtwOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.rtw.addRtwOrder";
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
                                                        		                                    	                   			private $eclpSoNo;
    	                        
	public function setEclpSoNo($eclpSoNo){
		$this->eclpSoNo = $eclpSoNo;
         $this->apiParas["eclpSoNo"] = $eclpSoNo;
	}

	public function getEclpSoNo(){
	  return $this->eclpSoNo;
	}

                        	                   			private $eclpRtwNo;
    	                        
	public function setEclpRtwNo($eclpRtwNo){
		$this->eclpRtwNo = $eclpRtwNo;
         $this->apiParas["eclpRtwNo"] = $eclpRtwNo;
	}

	public function getEclpRtwNo(){
	  return $this->eclpRtwNo;
	}

                        	                   			private $isvRtwNum;
    	                        
	public function setIsvRtwNum($isvRtwNum){
		$this->isvRtwNum = $isvRtwNum;
         $this->apiParas["isvRtwNum"] = $isvRtwNum;
	}

	public function getIsvRtwNum(){
	  return $this->isvRtwNum;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $logicParam;
    	                        
	public function setLogicParam($logicParam){
		$this->logicParam = $logicParam;
         $this->apiParas["logicParam"] = $logicParam;
	}

	public function getLogicParam(){
	  return $this->logicParam;
	}

                        	                   			private $reson;
    	                        
	public function setReson($reson){
		$this->reson = $reson;
         $this->apiParas["reson"] = $reson;
	}

	public function getReson(){
	  return $this->reson;
	}

                        	                   			private $orderType;
    	                        
	public function setOrderType($orderType){
		$this->orderType = $orderType;
         $this->apiParas["orderType"] = $orderType;
	}

	public function getOrderType(){
	  return $this->orderType;
	}

                        	                   			private $packageNo;
    	                        
	public function setPackageNo($packageNo){
		$this->packageNo = $packageNo;
         $this->apiParas["packageNo"] = $packageNo;
	}

	public function getPackageNo(){
	  return $this->packageNo;
	}

                        	                   			private $isvSoNo;
    	                        
	public function setIsvSoNo($isvSoNo){
		$this->isvSoNo = $isvSoNo;
         $this->apiParas["isvSoNo"] = $isvSoNo;
	}

	public function getIsvSoNo(){
	  return $this->isvSoNo;
	}

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $shipperName;
    	                        
	public function setShipperName($shipperName){
		$this->shipperName = $shipperName;
         $this->apiParas["shipperName"] = $shipperName;
	}

	public function getShipperName(){
	  return $this->shipperName;
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

                        	                   			private $receiveLevel;
    	                        
	public function setReceiveLevel($receiveLevel){
		$this->receiveLevel = $receiveLevel;
         $this->apiParas["receiveLevel"] = $receiveLevel;
	}

	public function getReceiveLevel(){
	  return $this->receiveLevel;
	}

                        	                   			private $sellerRemark;
    	                        
	public function setSellerRemark($sellerRemark){
		$this->sellerRemark = $sellerRemark;
         $this->apiParas["sellerRemark"] = $sellerRemark;
	}

	public function getSellerRemark(){
	  return $this->sellerRemark;
	}

                        	                   			private $salesMan;
    	                        
	public function setSalesMan($salesMan){
		$this->salesMan = $salesMan;
         $this->apiParas["salesMan"] = $salesMan;
	}

	public function getSalesMan(){
	  return $this->salesMan;
	}

                        	                   			private $salesBillingStaff;
    	                        
	public function setSalesBillingStaff($salesBillingStaff){
		$this->salesBillingStaff = $salesBillingStaff;
         $this->apiParas["salesBillingStaff"] = $salesBillingStaff;
	}

	public function getSalesBillingStaff(){
	  return $this->salesBillingStaff;
	}

                        	                   			private $drugElectronicSupervisionCode;
    	                        
	public function setDrugElectronicSupervisionCode($drugElectronicSupervisionCode){
		$this->drugElectronicSupervisionCode = $drugElectronicSupervisionCode;
         $this->apiParas["drugElectronicSupervisionCode"] = $drugElectronicSupervisionCode;
	}

	public function getDrugElectronicSupervisionCode(){
	  return $this->drugElectronicSupervisionCode;
	}

                        	                   			private $registerOrgNo;
    	                        
	public function setRegisterOrgNo($registerOrgNo){
		$this->registerOrgNo = $registerOrgNo;
         $this->apiParas["registerOrgNo"] = $registerOrgNo;
	}

	public function getRegisterOrgNo(){
	  return $this->registerOrgNo;
	}

                        	                   			private $registerOrgName;
    	                        
	public function setRegisterOrgName($registerOrgName){
		$this->registerOrgName = $registerOrgName;
         $this->apiParas["registerOrgName"] = $registerOrgName;
	}

	public function getRegisterOrgName(){
	  return $this->registerOrgName;
	}

                        	                   			private $customerName;
    	                        
	public function setCustomerName($customerName){
		$this->customerName = $customerName;
         $this->apiParas["customerName"] = $customerName;
	}

	public function getCustomerName(){
	  return $this->customerName;
	}

                        	                   			private $receivePriority;
    	                        
	public function setReceivePriority($receivePriority){
		$this->receivePriority = $receivePriority;
         $this->apiParas["receivePriority"] = $receivePriority;
	}

	public function getReceivePriority(){
	  return $this->receivePriority;
	}

                        	                   			private $sellerRtwType;
    	                        
	public function setSellerRtwType($sellerRtwType){
		$this->sellerRtwType = $sellerRtwType;
         $this->apiParas["sellerRtwType"] = $sellerRtwType;
	}

	public function getSellerRtwType(){
	  return $this->sellerRtwType;
	}

                        	                   			private $sellerRtwTypeName;
    	                        
	public function setSellerRtwTypeName($sellerRtwTypeName){
		$this->sellerRtwTypeName = $sellerRtwTypeName;
         $this->apiParas["sellerRtwTypeName"] = $sellerRtwTypeName;
	}

	public function getSellerRtwTypeName(){
	  return $this->sellerRtwTypeName;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $planQty;
                              public function setPlanQty($planQty ){
                 $this->planQty=$planQty;
                 $this->apiParas["planQty"] = $planQty;
              }

              public function getPlanQty(){
              	return $this->planQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsLevel;
                              public function setGoodsLevel($goodsLevel ){
                 $this->goodsLevel=$goodsLevel;
                 $this->apiParas["goodsLevel"] = $goodsLevel;
              }

              public function getGoodsLevel(){
              	return $this->goodsLevel;
              }
                                                                                                                                                                                                                                                                                                                                              private $productionDate;
                              public function setProductionDate($productionDate ){
                 $this->productionDate=$productionDate;
                 $this->apiParas["productionDate"] = $productionDate;
              }

              public function getProductionDate(){
              	return $this->productionDate;
              }
                                                                                                                                                                                                                                                                                                                                              private $packageBatchNo;
                              public function setPackageBatchNo($packageBatchNo ){
                 $this->packageBatchNo=$packageBatchNo;
                 $this->apiParas["packageBatchNo"] = $packageBatchNo;
              }

              public function getPackageBatchNo(){
              	return $this->packageBatchNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $eclpOutOrderNo;
                              public function setEclpOutOrderNo($eclpOutOrderNo ){
                 $this->eclpOutOrderNo=$eclpOutOrderNo;
                 $this->apiParas["eclpOutOrderNo"] = $eclpOutOrderNo;
              }

              public function getEclpOutOrderNo(){
              	return $this->eclpOutOrderNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $sellerOutOrderNo;
                              public function setSellerOutOrderNo($sellerOutOrderNo ){
                 $this->sellerOutOrderNo=$sellerOutOrderNo;
                 $this->apiParas["sellerOutOrderNo"] = $sellerOutOrderNo;
              }

              public function getSellerOutOrderNo(){
              	return $this->sellerOutOrderNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $unitPrice;
                              public function setUnitPrice($unitPrice ){
                 $this->unitPrice=$unitPrice;
                 $this->apiParas["unitPrice"] = $unitPrice;
              }

              public function getUnitPrice(){
              	return $this->unitPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $money;
                              public function setMoney($money ){
                 $this->money=$money;
                 $this->apiParas["money"] = $money;
              }

              public function getMoney(){
              	return $this->money;
              }
                                                                                                                                                                                                                                                                                                                                              private $mediumPackage;
                              public function setMediumPackage($mediumPackage ){
                 $this->mediumPackage=$mediumPackage;
                 $this->apiParas["mediumPackage"] = $mediumPackage;
              }

              public function getMediumPackage(){
              	return $this->mediumPackage;
              }
                                                                                                                                                                                                                                                                                                                                              private $bigPackage;
                              public function setBigPackage($bigPackage ){
                 $this->bigPackage=$bigPackage;
                 $this->apiParas["bigPackage"] = $bigPackage;
              }

              public function getBigPackage(){
              	return $this->bigPackage;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                                                                                                                                                                                                                              private $batAttrListJson;
                              public function setBatAttrListJson($batAttrListJson ){
                 $this->batAttrListJson=$batAttrListJson;
                 $this->apiParas["batAttrListJson"] = $batAttrListJson;
              }

              public function getBatAttrListJson(){
              	return $this->batAttrListJson;
              }
                                                                                                                                        	}





        
 

