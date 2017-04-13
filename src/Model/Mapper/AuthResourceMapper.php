<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\AuthResource;

class AuthResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new AuthResourceMapper($rawResponse);
    }

    public function mapAuthResourceFrom(AuthResource $resource, $jsonObject)
    {
        parent::mapResourceFrom($resource, $jsonObject);

        if (isset($jsonObject->error) and !empty($jsonObject->error)) {
            $resource->setError($jsonObject->error);
        }
        if (isset($jsonObject->access_token) and !empty($jsonObject->access_token)) {
            $resource->setAccessToken($jsonObject->access_token);
        }
        if (isset($jsonObject->token_type) and !empty($jsonObject->token_type)) {
            $resource->setTokenType($jsonObject->token_type);
        }
        if (isset($jsonObject->expires_in) and !empty($jsonObject->expires_in)) {
            $resource->setExpiresIn($jsonObject->expires_in);
            $resource->setExpiresOn(time() + $jsonObject->expires_in);
        }
        return $resource;
    }

    public function mapAuthResource(AuthResource $resource)
    {
        return $this->mapAuthResourceFrom($resource, $this->jsonObject);
    }
}