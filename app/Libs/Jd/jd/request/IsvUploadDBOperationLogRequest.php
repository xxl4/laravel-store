<?php
class IsvUploadDBOperationLogRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.uploadDBOperationLog";
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
                                                        		                                    	                   			private $userIp;
    	                                                            
	public function setUserIp($userIp){
		$this->userIp = $userIp;
         $this->apiParas["user_ip"] = $userIp;
	}

	public function getUserIp(){
	  return $this->userIp;
	}

                        	                   			private $appName;
    	                                                            
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["app_name"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $josAppKey;
    	                        
	public function setJosAppKey($josAppKey){
		$this->josAppKey = $josAppKey;
         $this->apiParas["josAppKey"] = $josAppKey;
	}

	public function getJosAppKey(){
	  return $this->josAppKey;
	}

                        	                   			private $deviceId;
    	                                                            
	public function setDeviceId($deviceId){
		$this->deviceId = $deviceId;
         $this->apiParas["device_id"] = $deviceId;
	}

	public function getDeviceId(){
	  return $this->deviceId;
	}

                        	                   			private $userId;
    	                                                            
	public function setUserId($userId){
		$this->userId = $userId;
         $this->apiParas["user_id"] = $userId;
	}

	public function getUserId(){
	  return $this->userId;
	}

                        	                   			private $url;
    	                        
	public function setUrl($url){
		$this->url = $url;
         $this->apiParas["url"] = $url;
	}

	public function getUrl(){
	  return $this->url;
	}

                        	                   			private $db;
    	                        
	public function setDb($db){
		$this->db = $db;
         $this->apiParas["db"] = $db;
	}

	public function getDb(){
	  return $this->db;
	}

                        	                   			private $sql;
    	                        
	public function setSql($sql){
		$this->sql = $sql;
         $this->apiParas["sql"] = $sql;
	}

	public function getSql(){
	  return $this->sql;
	}

                        	                   			private $timeStamp;
    	                                                            
	public function setTimeStamp($timeStamp){
		$this->timeStamp = $timeStamp;
         $this->apiParas["time_stamp"] = $timeStamp;
	}

	public function getTimeStamp(){
	  return $this->timeStamp;
	}

                        	                            }





        
 

