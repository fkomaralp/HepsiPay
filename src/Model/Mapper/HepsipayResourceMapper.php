<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\HepsipayResource;
use Fkomaralp\HepsiPay\JsonBuilder;

class HepsipayResourceMapper
{
    protected $rawResponse;
    protected $jsonObject;

    public function __construct($rawResponse)
    {
        $this->rawResponse = $rawResponse;
    }

    public static function create($rawResponse = null)
    {
        return new HepsipayResourceMapper($rawResponse);
    }

    public function jsonDecode()
    {
        $this->jsonObject = JsonBuilder::jsonDecode($this->rawResponse);
        return $this;
    }

    public function mapResourceFrom(HepsipayResource $resource, $jsonObject)
    {
        if (isset($jsonObject->Success) and !empty($jsonObject->Success)) 
        {
            $resource->setSuccess($jsonObject->Success);
        }
        if (isset($jsonObject->MessageCode) and !empty($jsonObject->MessageCode)) 
        {
            $resource->setMessageCode($jsonObject->MessageCode);
        }
        if (isset($jsonObject->Message) and !empty($jsonObject->Message)) 
        {
            $resource->setMessage($jsonObject->Message);
        }
        if (isset($jsonObject->UserMessage) and !empty($jsonObject->UserMessage)) 
        {
            $resource->setUserMessage($jsonObject->UserMessage);
        }
        if (isset($this->rawResponse) and !empty($this->rawResponse)) 
        {
            $resource->setRawResponse($this->rawResponse);
        }
        return $resource;
    }

    public function mapResource(HepsipayResource $resource)
    {
        return $this->mapResourceFrom($resource, $this->jsonObject);
    }
}