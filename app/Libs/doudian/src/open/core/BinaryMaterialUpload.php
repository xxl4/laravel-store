<?php

class BinaryMaterialUpload
{

    private $httpClient;
    public function __construct() {
        $this->httpClient = HttpClient::getInstance();
    }
    public function UploadFile($uploadParams, $accessToken) {

        $requestAuthParam = new BinaryMaterialUploadAddressAuthParam();
        $requestAuthParam->file_extension = $uploadParams->file_extension;
        $requestAuthParam->upload_num = 1;

        $requestAuthRequest = new BinaryMaterialUploadAddressAuthRequest();
        $requestAuthRequest->setParam($requestAuthParam);

        $response = $requestAuthRequest->execute($accessToken);

        if ($response->code != 10000) {
            echo $response->message;
            return "";
        }

        $authQuery = $response->data->auth_query;
        $getUploadAddrReq = new HttpRequest();
        $getUploadAddrReq->url = $authQuery;

        $uploadAddrResp = $this->httpClient->get($getUploadAddrReq);

        if ($uploadAddrResp->statusCode != 200) {
            echo $uploadAddrResp->statusCode;
            echo $uploadAddrResp->body;
            return "";
        }


        $uploadAddrJson = json_decode($uploadAddrResp->body, false);

        $uploadAddrResult = $uploadAddrJson->Result;

        $storeInfo = $uploadAddrResult->UploadAddress->StoreInfos[0];

        $UploadHost = $uploadAddrJson->Result->UploadAddress->UploadHosts[0];



        $checksumInt = crc32(self::toStr($uploadParams->file_content));

        $checksum = dechex($checksumInt);
        echo $checksum;

        $headerArrays = array("Host:".$UploadHost, "Authorization:".$storeInfo->Auth, "Content-CRC32:".$checksum);

        $uploadFileReq = new HttpRequest();
        $uploadFileReq->url = "http://".$UploadHost."/".$storeInfo->StoreUri;
        $uploadFileReq->body = self::toStr($uploadParams->file_content);
        $uploadFileReq->header = $headerArrays;
        $uploadFileReq->connectTimeout = 12000;
        $uploadFileReq->readTimeout = 12000;

        $result = $this->httpClient->put($uploadFileReq);

        if ($result->statusCode != 200) {
            echo $result->statusCode;
            echo $result->body;
            return "";
        }

        $resultJson = json_decode($result->body, false);

        if ($resultJson->success != 0) {
            echo $resultJson->error;
            return "";
        }

        return $storeInfo->StoreUri;

    }

    public static function toStr($bytes) {
        $str = '';
        foreach($bytes as $ch) {
            $str .= chr($ch);
        }

        return $str;
    }
}