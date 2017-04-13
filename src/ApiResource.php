<?php

namespace Fkomaralp\HepsiPay;

class ApiResource
{
    private static $httpClient;
    private $rawResponse;

    public static function httpClient()
    {
        if (!self::$httpClient) {
            self::$httpClient = DefaultHttpClient::create();
        }
        return self::$httpClient;
    }

    public static function setHttpClient($httpClient)
    {
        self::$httpClient = $httpClient;
    }

    public function getRawResponse()
    {
        return $this->rawResponse;
    }

    public function setRawResponse($rawResponse)
    {
        $this->rawResponse = $rawResponse;
    }
}