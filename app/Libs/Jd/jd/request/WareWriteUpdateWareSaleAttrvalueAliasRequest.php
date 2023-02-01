<?php
class WareWriteUpdateWareSaleAttrvalueAliasRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.write.updateWareSaleAttrvalueAlias";
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
    private  $wareId;

    public function setWareId($wareId){
        $this->apiParas['wareId'] = $wareId;
    }
    public function getWareId(){
        return $this->apiParas['wareId'];
    }
    private  $props;

    public function setProps($props){
        $this->apiParas['props'] = $props;
    }
    public function getProps(){
        return $this->apiParas['props'];
    }
}

?>