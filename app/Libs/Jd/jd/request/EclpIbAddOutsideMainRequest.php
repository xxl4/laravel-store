<?php
class EclpIbAddOutsideMainRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.ib.addOutsideMain";
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
    private  $isvOutsideMainCondition;

    public function setIsvOutsideMainCondition($isvOutsideMainCondition){
        $this->apiParas['isvOutsideMainCondition'] = $isvOutsideMainCondition;
    }
    public function getIsvOutsideMainCondition(){
        return $this->apiParas['isvOutsideMainCondition'];
    }
    private  $paramOutsideGoods;

    public function setParamOutsideGoods($paramOutsideGoods){
        $this->apiParas['paramOutsideGoods'] = $paramOutsideGoods;
    }
    public function getParamOutsideGoods(){
        return $this->apiParas['paramOutsideGoods'];
    }
}

?>