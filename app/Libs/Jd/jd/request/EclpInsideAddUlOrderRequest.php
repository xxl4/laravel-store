<?php
class EclpInsideAddUlOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.inside.addUlOrder";
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
                                                        		                                    	                   			private $outUlNo;
    	                        
	public function setOutUlNo($outUlNo){
		$this->outUlNo = $outUlNo;
         $this->apiParas["outUlNo"] = $outUlNo;
	}

	public function getOutUlNo(){
	  return $this->outUlNo;
	}

                        	                   			private $sellerNo;
    	                        
	public function setSellerNo($sellerNo){
		$this->sellerNo = $sellerNo;
         $this->apiParas["sellerNo"] = $sellerNo;
	}

	public function getSellerNo(){
	  return $this->sellerNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $deliveryMode;
    	                        
	public function setDeliveryMode($deliveryMode){
		$this->deliveryMode = $deliveryMode;
         $this->apiParas["deliveryMode"] = $deliveryMode;
	}

	public function getDeliveryMode(){
	  return $this->deliveryMode;
	}

                        	                   			private $ulType;
    	                        
	public function setUlType($ulType){
		$this->ulType = $ulType;
         $this->apiParas["ulType"] = $ulType;
	}

	public function getUlType(){
	  return $this->ulType;
	}

                        	                   			private $allowReturnDest;
    	                        
	public function setAllowReturnDest($allowReturnDest){
		$this->allowReturnDest = $allowReturnDest;
         $this->apiParas["allowReturnDest"] = $allowReturnDest;
	}

	public function getAllowReturnDest(){
	  return $this->allowReturnDest;
	}

                        	                   			private $allowLackDest;
    	                        
	public function setAllowLackDest($allowLackDest){
		$this->allowLackDest = $allowLackDest;
         $this->apiParas["allowLackDest"] = $allowLackDest;
	}

	public function getAllowLackDest(){
	  return $this->allowLackDest;
	}

                        	                   			private $destMethod;
    	                        
	public function setDestMethod($destMethod){
		$this->destMethod = $destMethod;
         $this->apiParas["destMethod"] = $destMethod;
	}

	public function getDestMethod(){
	  return $this->destMethod;
	}

                        	                   			private $destReason;
    	                        
	public function setDestReason($destReason){
		$this->destReason = $destReason;
         $this->apiParas["destReason"] = $destReason;
	}

	public function getDestReason(){
	  return $this->destReason;
	}

                        	                   			private $destCompNo;
    	                        
	public function setDestCompNo($destCompNo){
		$this->destCompNo = $destCompNo;
         $this->apiParas["destCompNo"] = $destCompNo;
	}

	public function getDestCompNo(){
	  return $this->destCompNo;
	}

                        	                   			private $receiver;
    	                        
	public function setReceiver($receiver){
		$this->receiver = $receiver;
         $this->apiParas["receiver"] = $receiver;
	}

	public function getReceiver(){
	  return $this->receiver;
	}

                        	                   			private $receiverPhone;
    	                        
	public function setReceiverPhone($receiverPhone){
		$this->receiverPhone = $receiverPhone;
         $this->apiParas["receiverPhone"] = $receiverPhone;
	}

	public function getReceiverPhone(){
	  return $this->receiverPhone;
	}

                        	                   			private $email;
    	                        
	public function setEmail($email){
		$this->email = $email;
         $this->apiParas["email"] = $email;
	}

	public function getEmail(){
	  return $this->email;
	}

                        	                   			private $province;
    	                        
	public function setProvince($province){
		$this->province = $province;
         $this->apiParas["province"] = $province;
	}

	public function getProvince(){
	  return $this->province;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $county;
    	                        
	public function setCounty($county){
		$this->county = $county;
         $this->apiParas["county"] = $county;
	}

	public function getCounty(){
	  return $this->county;
	}

                        	                   			private $town;
    	                        
	public function setTown($town){
		$this->town = $town;
         $this->apiParas["town"] = $town;
	}

	public function getTown(){
	  return $this->town;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $backEmail;
    	                        
	public function setBackEmail($backEmail){
		$this->backEmail = $backEmail;
         $this->apiParas["backEmail"] = $backEmail;
	}

	public function getBackEmail(){
	  return $this->backEmail;
	}

                        	                   			private $createUser;
    	                        
	public function setCreateUser($createUser){
		$this->createUser = $createUser;
         $this->apiParas["createUser"] = $createUser;
	}

	public function getCreateUser(){
	  return $this->createUser;
	}

                        	                   			private $createTime;
    	                        
	public function setCreateTime($createTime){
		$this->createTime = $createTime;
         $this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime(){
	  return $this->createTime;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $orderLine;
                              public function setOrderLine($orderLine ){
                 $this->orderLine=$orderLine;
                 $this->apiParas["orderLine"] = $orderLine;
              }

              public function getOrderLine(){
              	return $this->orderLine;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $goodsName;
                              public function setGoodsName($goodsName ){
                 $this->goodsName=$goodsName;
                 $this->apiParas["goodsName"] = $goodsName;
              }

              public function getGoodsName(){
              	return $this->goodsName;
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
                                                                                                                                                                                                                                                                                                                                              private $ulItemBatchRequest;
                              public function setUlItemBatchRequest($ulItemBatchRequest ){
                 $this->ulItemBatchRequest=$ulItemBatchRequest;
                 $this->apiParas["ulItemBatchRequest"] = $ulItemBatchRequest;
              }

              public function getUlItemBatchRequest(){
              	return $this->ulItemBatchRequest;
              }
                                                                                                                                        	}





        
 

