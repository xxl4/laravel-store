<?php
class FactoryPurchaseQueryVPRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.factory.purchase.queryVP";
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
                                                        		                                    	                   			private $factoryId;
    	                        
	public function setFactoryId($factoryId){
		$this->factoryId = $factoryId;
         $this->apiParas["factoryId"] = $factoryId;
	}

	public function getFactoryId(){
	  return $this->factoryId;
	}

                        	                        	                        	                   			private $personalKey;
    	                        
	public function setPersonalKey($personalKey){
		$this->personalKey = $personalKey;
         $this->apiParas["personalKey"] = $personalKey;
	}

	public function getPersonalKey(){
	  return $this->personalKey;
	}

                        	                   			private $ptId;
    	                        
	public function setPtId($ptId){
		$this->ptId = $ptId;
         $this->apiParas["ptId"] = $ptId;
	}

	public function getPtId(){
	  return $this->ptId;
	}

                                                                        		                                    	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $vendorName;
    	                        
	public function setVendorName($vendorName){
		$this->vendorName = $vendorName;
         $this->apiParas["vendorName"] = $vendorName;
	}

	public function getVendorName(){
	  return $this->vendorName;
	}

                        	                   			private $vendorNameAbbr;
    	                        
	public function setVendorNameAbbr($vendorNameAbbr){
		$this->vendorNameAbbr = $vendorNameAbbr;
         $this->apiParas["vendorNameAbbr"] = $vendorNameAbbr;
	}

	public function getVendorNameAbbr(){
	  return $this->vendorNameAbbr;
	}

                        	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $categoryId;
    	                        
	public function setCategoryId($categoryId){
		$this->categoryId = $categoryId;
         $this->apiParas["categoryId"] = $categoryId;
	}

	public function getCategoryId(){
	  return $this->categoryId;
	}

                        	                   			private $parentCategoryId;
    	                        
	public function setParentCategoryId($parentCategoryId){
		$this->parentCategoryId = $parentCategoryId;
         $this->apiParas["parentCategoryId"] = $parentCategoryId;
	}

	public function getParentCategoryId(){
	  return $this->parentCategoryId;
	}

                        	                   			private $rootCategoryId;
    	                        
	public function setRootCategoryId($rootCategoryId){
		$this->rootCategoryId = $rootCategoryId;
         $this->apiParas["rootCategoryId"] = $rootCategoryId;
	}

	public function getRootCategoryId(){
	  return $this->rootCategoryId;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $skuName;
    	                        
	public function setSkuName($skuName){
		$this->skuName = $skuName;
         $this->apiParas["skuName"] = $skuName;
	}

	public function getSkuName(){
	  return $this->skuName;
	}

                        	                   			private $purchaseMan;
    	                        
	public function setPurchaseMan($purchaseMan){
		$this->purchaseMan = $purchaseMan;
         $this->apiParas["purchaseMan"] = $purchaseMan;
	}

	public function getPurchaseMan(){
	  return $this->purchaseMan;
	}

                        	                   			private $skuType;
    	                        
	public function setSkuType($skuType){
		$this->skuType = $skuType;
         $this->apiParas["skuType"] = $skuType;
	}

	public function getSkuType(){
	  return $this->skuType;
	}

                        	                   			private $available;
    	                        
	public function setAvailable($available){
		$this->available = $available;
         $this->apiParas["available"] = $available;
	}

	public function getAvailable(){
	  return $this->available;
	}

                        	                   			private $createdStart;
    	                        
	public function setCreatedStart($createdStart){
		$this->createdStart = $createdStart;
         $this->apiParas["createdStart"] = $createdStart;
	}

	public function getCreatedStart(){
	  return $this->createdStart;
	}

                        	                   			private $createdEnd;
    	                        
	public function setCreatedEnd($createdEnd){
		$this->createdEnd = $createdEnd;
         $this->apiParas["createdEnd"] = $createdEnd;
	}

	public function getCreatedEnd(){
	  return $this->createdEnd;
	}

                        	                   			private $stockInVendor;
    	                        
	public function setStockInVendor($stockInVendor){
		$this->stockInVendor = $stockInVendor;
         $this->apiParas["stockInVendor"] = $stockInVendor;
	}

	public function getStockInVendor(){
	  return $this->stockInVendor;
	}

                        	                   			private $modifiedStart;
    	                        
	public function setModifiedStart($modifiedStart){
		$this->modifiedStart = $modifiedStart;
         $this->apiParas["modifiedStart"] = $modifiedStart;
	}

	public function getModifiedStart(){
	  return $this->modifiedStart;
	}

                        	                   			private $modifiedEnd;
    	                        
	public function setModifiedEnd($modifiedEnd){
		$this->modifiedEnd = $modifiedEnd;
         $this->apiParas["modifiedEnd"] = $modifiedEnd;
	}

	public function getModifiedEnd(){
	  return $this->modifiedEnd;
	}

                        	                   			private $pageIndex;
    	                        
	public function setPageIndex($pageIndex){
		$this->pageIndex = $pageIndex;
         $this->apiParas["pageIndex"] = $pageIndex;
	}

	public function getPageIndex(){
	  return $this->pageIndex;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                            }





        
 

