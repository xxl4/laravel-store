<?php

class SpiContext
{
    private $request;
    private $response;

    public function setData($data) {
        $this->response->data = $data;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getParamJson() {
        return $this->request->getSpiParam()->paramJson;
    }

    public function getParamJsonObj() {
        $str = $this->getParamJson();
        return json_decode($str);
    }

    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function setResponse($response)
    {
        $this->response = $response;
    }

    public function wrapError($code, $message) {
        $this->response->code = $code;
        $this->response->message = $message;
    }

    public function wrapSuccess() {
        $this->response->code = 0;
    }
}