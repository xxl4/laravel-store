<?php
class UeOrderNewSettleReconsiderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.settleReconsider";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                        	                   			private $dealType;
    	                        
	public function setDealType($dealType){
		$this->dealType = $dealType;
         $this->apiParas["dealType"] = $dealType;
	}

	public function getDealType(){
	  return $this->dealType;
	}

                        	                   			private $settleNo;
    	                        
	public function setSettleNo($settleNo){
		$this->settleNo = $settleNo;
         $this->apiParas["settleNo"] = $settleNo;
	}

	public function getSettleNo(){
	  return $this->settleNo;
	}

                        	                   			private $deliverType;
    	                        
	public function setDeliverType($deliverType){
		$this->deliverType = $deliverType;
         $this->apiParas["deliverType"] = $deliverType;
	}

	public function getDeliverType(){
	  return $this->deliverType;
	}

                        	                   			private $beginDate;
    	                        
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $invoiceNo;
    	                        
	public function setInvoiceNo($invoiceNo){
		$this->invoiceNo = $invoiceNo;
         $this->apiParas["invoiceNo"] = $invoiceNo;
	}

	public function getInvoiceNo(){
	  return $this->invoiceNo;
	}

                        	                   			private $dealRemark;
    	                        
	public function setDealRemark($dealRemark){
		$this->dealRemark = $dealRemark;
         $this->apiParas["dealRemark"] = $dealRemark;
	}

	public function getDealRemark(){
	  return $this->dealRemark;
	}

                            }





        
 

