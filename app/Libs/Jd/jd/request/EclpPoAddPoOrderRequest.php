<?php
class EclpPoAddPoOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.po.addPoOrder";
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
                                                        		                                    	                   			private $spPoOrderNo;
    	                        
	public function setSpPoOrderNo($spPoOrderNo){
		$this->spPoOrderNo = $spPoOrderNo;
         $this->apiParas["spPoOrderNo"] = $spPoOrderNo;
	}

	public function getSpPoOrderNo(){
	  return $this->spPoOrderNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $referenceOrder;
    	                        
	public function setReferenceOrder($referenceOrder){
		$this->referenceOrder = $referenceOrder;
         $this->apiParas["referenceOrder"] = $referenceOrder;
	}

	public function getReferenceOrder(){
	  return $this->referenceOrder;
	}

                        	                   			private $inboundRemark;
    	                        
	public function setInboundRemark($inboundRemark){
		$this->inboundRemark = $inboundRemark;
         $this->apiParas["inboundRemark"] = $inboundRemark;
	}

	public function getInboundRemark(){
	  return $this->inboundRemark;
	}

                        	                   			private $logicParam;
    	                        
	public function setLogicParam($logicParam){
		$this->logicParam = $logicParam;
         $this->apiParas["logicParam"] = $logicParam;
	}

	public function getLogicParam(){
	  return $this->logicParam;
	}

                        	                   			private $whNo;
    	                        
	public function setWhNo($whNo){
		$this->whNo = $whNo;
         $this->apiParas["whNo"] = $whNo;
	}

	public function getWhNo(){
	  return $this->whNo;
	}

                        	                   			private $supplierNo;
    	                        
	public function setSupplierNo($supplierNo){
		$this->supplierNo = $supplierNo;
         $this->apiParas["supplierNo"] = $supplierNo;
	}

	public function getSupplierNo(){
	  return $this->supplierNo;
	}

                        	                   			private $sellerSaleOrder;
    	                        
	public function setSellerSaleOrder($sellerSaleOrder){
		$this->sellerSaleOrder = $sellerSaleOrder;
         $this->apiParas["sellerSaleOrder"] = $sellerSaleOrder;
	}

	public function getSellerSaleOrder(){
	  return $this->sellerSaleOrder;
	}

                        	                   			private $saleOrder;
    	                        
	public function setSaleOrder($saleOrder){
		$this->saleOrder = $saleOrder;
         $this->apiParas["saleOrder"] = $saleOrder;
	}

	public function getSaleOrder(){
	  return $this->saleOrder;
	}

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $billType;
    	                        
	public function setBillType($billType){
		$this->billType = $billType;
         $this->apiParas["billType"] = $billType;
	}

	public function getBillType(){
	  return $this->billType;
	}

                        	                   			private $acceptUnQcFlag;
    	                        
	public function setAcceptUnQcFlag($acceptUnQcFlag){
		$this->acceptUnQcFlag = $acceptUnQcFlag;
         $this->apiParas["acceptUnQcFlag"] = $acceptUnQcFlag;
	}

	public function getAcceptUnQcFlag(){
	  return $this->acceptUnQcFlag;
	}

                        	                   			private $boxFlag;
    	                        
	public function setBoxFlag($boxFlag){
		$this->boxFlag = $boxFlag;
         $this->apiParas["boxFlag"] = $boxFlag;
	}

	public function getBoxFlag(){
	  return $this->boxFlag;
	}

                        	                   			private $entirePrice;
    	                        
	public function setEntirePrice($entirePrice){
		$this->entirePrice = $entirePrice;
         $this->apiParas["entirePrice"] = $entirePrice;
	}

	public function getEntirePrice(){
	  return $this->entirePrice;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $boxNo;
                              public function setBoxNo($boxNo ){
                 $this->boxNo=$boxNo;
                 $this->apiParas["boxNo"] = $boxNo;
              }

              public function getBoxNo(){
              	return $this->boxNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxGoodsNo;
                              public function setBoxGoodsNo($boxGoodsNo ){
                 $this->boxGoodsNo=$boxGoodsNo;
                 $this->apiParas["boxGoodsNo"] = $boxGoodsNo;
              }

              public function getBoxGoodsNo(){
              	return $this->boxGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxGoodsQty;
                              public function setBoxGoodsQty($boxGoodsQty ){
                 $this->boxGoodsQty=$boxGoodsQty;
                 $this->apiParas["boxGoodsQty"] = $boxGoodsQty;
              }

              public function getBoxGoodsQty(){
              	return $this->boxGoodsQty;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxSerialNo;
                              public function setBoxSerialNo($boxSerialNo ){
                 $this->boxSerialNo=$boxSerialNo;
                 $this->apiParas["boxSerialNo"] = $boxSerialNo;
              }

              public function getBoxSerialNo(){
              	return $this->boxSerialNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $boxIsvGoodsNo;
                              public function setBoxIsvGoodsNo($boxIsvGoodsNo ){
                 $this->boxIsvGoodsNo=$boxIsvGoodsNo;
                 $this->apiParas["boxIsvGoodsNo"] = $boxIsvGoodsNo;
              }

              public function getBoxIsvGoodsNo(){
              	return $this->boxIsvGoodsNo;
              }
                                                                                                                                        	                   			private $poReturnMode;
    	                        
	public function setPoReturnMode($poReturnMode){
		$this->poReturnMode = $poReturnMode;
         $this->apiParas["poReturnMode"] = $poReturnMode;
	}

	public function getPoReturnMode(){
	  return $this->poReturnMode;
	}

                        	                   			private $customsInfo;
    	                        
	public function setCustomsInfo($customsInfo){
		$this->customsInfo = $customsInfo;
         $this->apiParas["customsInfo"] = $customsInfo;
	}

	public function getCustomsInfo(){
	  return $this->customsInfo;
	}

                        	                   			private $poType;
    	                        
	public function setPoType($poType){
		$this->poType = $poType;
         $this->apiParas["poType"] = $poType;
	}

	public function getPoType(){
	  return $this->poType;
	}

                        	                   			private $billOfLading;
    	                        
	public function setBillOfLading($billOfLading){
		$this->billOfLading = $billOfLading;
         $this->apiParas["billOfLading"] = $billOfLading;
	}

	public function getBillOfLading(){
	  return $this->billOfLading;
	}

                        	                   			private $receiveLevel;
    	                        
	public function setReceiveLevel($receiveLevel){
		$this->receiveLevel = $receiveLevel;
         $this->apiParas["receiveLevel"] = $receiveLevel;
	}

	public function getReceiveLevel(){
	  return $this->receiveLevel;
	}

                        	                   			private $multiReceivingFlag;
    	                        
	public function setMultiReceivingFlag($multiReceivingFlag){
		$this->multiReceivingFlag = $multiReceivingFlag;
         $this->apiParas["multiReceivingFlag"] = $multiReceivingFlag;
	}

	public function getMultiReceivingFlag(){
	  return $this->multiReceivingFlag;
	}

                        	                   			private $waybillNo;
    	                        
	public function setWaybillNo($waybillNo){
		$this->waybillNo = $waybillNo;
         $this->apiParas["waybillNo"] = $waybillNo;
	}

	public function getWaybillNo(){
	  return $this->waybillNo;
	}

                        	                   			private $isvOutWarehouse;
    	                        
	public function setIsvOutWarehouse($isvOutWarehouse){
		$this->isvOutWarehouse = $isvOutWarehouse;
         $this->apiParas["isvOutWarehouse"] = $isvOutWarehouse;
	}

	public function getIsvOutWarehouse(){
	  return $this->isvOutWarehouse;
	}

                        	                   			private $bizType;
    	                        
	public function setBizType($bizType){
		$this->bizType = $bizType;
         $this->apiParas["bizType"] = $bizType;
	}

	public function getBizType(){
	  return $this->bizType;
	}

                        	                   			private $waitBoxDetailFlag;
    	                        
	public function setWaitBoxDetailFlag($waitBoxDetailFlag){
		$this->waitBoxDetailFlag = $waitBoxDetailFlag;
         $this->apiParas["waitBoxDetailFlag"] = $waitBoxDetailFlag;
	}

	public function getWaitBoxDetailFlag(){
	  return $this->waitBoxDetailFlag;
	}

                        	                   			private $unitFlag;
    	                        
	public function setUnitFlag($unitFlag){
		$this->unitFlag = $unitFlag;
         $this->apiParas["unitFlag"] = $unitFlag;
	}

	public function getUnitFlag(){
	  return $this->unitFlag;
	}

                        	                   			private $serialDetailMapJson;
    	                        
	public function setSerialDetailMapJson($serialDetailMapJson){
		$this->serialDetailMapJson = $serialDetailMapJson;
         $this->apiParas["serialDetailMapJson"] = $serialDetailMapJson;
	}

	public function getSerialDetailMapJson(){
	  return $this->serialDetailMapJson;
	}

                        	                   			private $serialNoScopeMapJson;
    	                        
	public function setSerialNoScopeMapJson($serialNoScopeMapJson){
		$this->serialNoScopeMapJson = $serialNoScopeMapJson;
         $this->apiParas["serialNoScopeMapJson"] = $serialNoScopeMapJson;
	}

	public function getSerialNoScopeMapJson(){
	  return $this->serialNoScopeMapJson;
	}

                        	                   			private $allowLackFlag;
    	                        
	public function setAllowLackFlag($allowLackFlag){
		$this->allowLackFlag = $allowLackFlag;
         $this->apiParas["allowLackFlag"] = $allowLackFlag;
	}

	public function getAllowLackFlag(){
	  return $this->allowLackFlag;
	}

                        	                   			private $isUpdate;
    	                        
	public function setIsUpdate($isUpdate){
		$this->isUpdate = $isUpdate;
         $this->apiParas["isUpdate"] = $isUpdate;
	}

	public function getIsUpdate(){
	  return $this->isUpdate;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $deptGoodsNo;
                              public function setDeptGoodsNo($deptGoodsNo ){
                 $this->deptGoodsNo=$deptGoodsNo;
                 $this->apiParas["deptGoodsNo"] = $deptGoodsNo;
              }

              public function getDeptGoodsNo(){
              	return $this->deptGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $isvGoodsNo;
                              public function setIsvGoodsNo($isvGoodsNo ){
                 $this->isvGoodsNo=$isvGoodsNo;
                 $this->apiParas["isvGoodsNo"] = $isvGoodsNo;
              }

              public function getIsvGoodsNo(){
              	return $this->isvGoodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $numApplication;
                              public function setNumApplication($numApplication ){
                 $this->numApplication=$numApplication;
                 $this->apiParas["numApplication"] = $numApplication;
              }

              public function getNumApplication(){
              	return $this->numApplication;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsStatus;
                              public function setGoodsStatus($goodsStatus ){
                 $this->goodsStatus=$goodsStatus;
                 $this->apiParas["goodsStatus"] = $goodsStatus;
              }

              public function getGoodsStatus(){
              	return $this->goodsStatus;
              }
                                                                                                                                                                                                                                                                                                                                              private $barCodeType;
                              public function setBarCodeType($barCodeType ){
                 $this->barCodeType=$barCodeType;
                 $this->apiParas["barCodeType"] = $barCodeType;
              }

              public function getBarCodeType(){
              	return $this->barCodeType;
              }
                                                                                                                                                                                                                                                                                                                                              private $sidCheckout;
                              public function setSidCheckout($sidCheckout ){
                 $this->sidCheckout=$sidCheckout;
                 $this->apiParas["sidCheckout"] = $sidCheckout;
              }

              public function getSidCheckout(){
              	return $this->sidCheckout;
              }
                                                                                                                                                                                                                                                                                                                                              private $unitPrice;
                              public function setUnitPrice($unitPrice ){
                 $this->unitPrice=$unitPrice;
                 $this->apiParas["unitPrice"] = $unitPrice;
              }

              public function getUnitPrice(){
              	return $this->unitPrice;
              }
                                                                                                                                                                                                                                                                                                                                              private $totalPrice;
                              public function setTotalPrice($totalPrice ){
                 $this->totalPrice=$totalPrice;
                 $this->apiParas["totalPrice"] = $totalPrice;
              }

              public function getTotalPrice(){
              	return $this->totalPrice;
              }
                                                                                                                                                                                                                                                                                                                       private $qualityCheckRate;
                              public function setQualityCheckRate($qualityCheckRate ){
                 $this->qualityCheckRate=$qualityCheckRate;
                 $this->apiParas["qualityCheckRate"] = $qualityCheckRate;
              }

              public function getQualityCheckRate(){
              	return $this->qualityCheckRate;
              }
                                                                                                                                                                                                                                                                                                                                              private $batAttrListJson;
                              public function setBatAttrListJson($batAttrListJson ){
                 $this->batAttrListJson=$batAttrListJson;
                 $this->apiParas["batAttrListJson"] = $batAttrListJson;
              }

              public function getBatAttrListJson(){
              	return $this->batAttrListJson;
              }
                                                                                                                                                                                                                                                                                                                                              private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                                                                                                                                                                                                                              private $isvLotattrs;
                              public function setIsvLotattrs($isvLotattrs ){
                 $this->isvLotattrs=$isvLotattrs;
                 $this->apiParas["isvLotattrs"] = $isvLotattrs;
              }

              public function getIsvLotattrs(){
              	return $this->isvLotattrs;
              }
                                                                                                                                                                                                                                                                                                                                              private $checkLotattrs;
                              public function setCheckLotattrs($checkLotattrs ){
                 $this->checkLotattrs=$checkLotattrs;
                 $this->apiParas["checkLotattrs"] = $checkLotattrs;
              }

              public function getCheckLotattrs(){
              	return $this->checkLotattrs;
              }
                                                                                                                                        	}





        
 

