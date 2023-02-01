<?php
class EclpCoGenerateBdWayBillFileRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.generateBdWayBillFile";
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
                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $newWBType;
    	                        
	public function setNewWBType($newWBType){
		$this->newWBType = $newWBType;
         $this->apiParas["newWBType"] = $newWBType;
	}

	public function getNewWBType(){
	  return $this->newWBType;
	}

                        	                   			private $no;
    	                        
	public function setNo($no){
		$this->no = $no;
         $this->apiParas["no"] = $no;
	}

	public function getNo(){
	  return $this->no;
	}

                        	}





        
 

