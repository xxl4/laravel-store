<?php
class B2bPoSdkPoCenterProviderSubmitPoRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.b2b.po.sdk.PoCenterProvider.submitPo";
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
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
    private  $poReq;

    public function setPoReq($poReq){
        $this->apiParas['poReq'] = $poReq;
    }
    public function getPoReq(){
        return $this->apiParas['poReq'];
    }
    private  $cartReq;

    public function setCartReq($cartReq){
        $this->apiParas['cartReq'] = $cartReq;
    }
    public function getCartReq(){
        return $this->apiParas['cartReq'];
    }
}

?>