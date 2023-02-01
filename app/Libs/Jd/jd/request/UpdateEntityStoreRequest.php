<?php
class UpdateEntityStoreRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.updateEntityStore";
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
                                                        		                                    	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $addCode;
    	                        
	public function setAddCode($addCode){
		$this->addCode = $addCode;
         $this->apiParas["addCode"] = $addCode;
	}

	public function getAddCode(){
	  return $this->addCode;
	}

                        	                   			private $addCodeName;
    	                        
	public function setAddCodeName($addCodeName){
		$this->addCodeName = $addCodeName;
         $this->apiParas["addCodeName"] = $addCodeName;
	}

	public function getAddCodeName(){
	  return $this->addCodeName;
	}

                        	                   			private $addName;
    	                        
	public function setAddName($addName){
		$this->addName = $addName;
         $this->apiParas["addName"] = $addName;
	}

	public function getAddName(){
	  return $this->addName;
	}

                        	                   			private $coordinate;
    	                        
	public function setCoordinate($coordinate){
		$this->coordinate = $coordinate;
         $this->apiParas["coordinate"] = $coordinate;
	}

	public function getCoordinate(){
	  return $this->coordinate;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $groupId;
                              public function setGroupId($groupId ){
                 $this->groupId=$groupId;
                 $this->apiParas["groupId"] = $groupId;
              }

              public function getGroupId(){
              	return $this->groupId;
              }
                                                                                                                                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                        	                   			private $customerId;
    	                        
	public function setCustomerId($customerId){
		$this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId(){
	  return $this->customerId;
	}

                        	                   			private $businessHours;
    	                        
	public function setBusinessHours($businessHours){
		$this->businessHours = $businessHours;
         $this->apiParas["businessHours"] = $businessHours;
	}

	public function getBusinessHours(){
	  return $this->businessHours;
	}

                        	                   			private $categoryName;
    	                        
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $extendJson;
    	                        
	public function setExtendJson($extendJson){
		$this->extendJson = $extendJson;
         $this->apiParas["extendJson"] = $extendJson;
	}

	public function getExtendJson(){
	  return $this->extendJson;
	}

                        	                   			private $imageFile;
    	                        
	public function setImageFile($imageFile){
		$this->imageFile = $imageFile;
         $this->apiParas["imageFile"] = $imageFile;
	}

	public function getImageFile(){
	  return $this->imageFile;
	}

                            }





        
 

