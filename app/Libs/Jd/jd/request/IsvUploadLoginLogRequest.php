<?php
class IsvUploadLoginLogRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.isv.uploadLoginLog";
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
                                                        		                                    	                   			private $result;
    	                        
	public function setResult($result){
		$this->result = $result;
         $this->apiParas["result"] = $result;
	}

	public function getResult(){
	  return $this->result;
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

                        	                   			private $jdId;
    	                                                            
	public function setJdId($jdId){
		$this->jdId = $jdId;
         $this->apiParas["jd_id"] = $jdId;
	}

	public function getJdId(){
	  return $this->jdId;
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

                        	                   			private $message;
    	                        
	public function setMessage($message){
		$this->message = $message;
         $this->apiParas["message"] = $message;
	}

	public function getMessage(){
	  return $this->message;
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





        
 

