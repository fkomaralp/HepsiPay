<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\Auth;

class AuthMapper extends AuthResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new AuthMapper($rawResponse);
    }

    public function mapAuthFrom(Auth $Auth, $jsonObject)
    {
        parent::mapAuthResourceFrom($Auth, $jsonObject);
        return $Auth;
    }

    public function mapAuth(Auth $Auth)
    {
        return $this->mapAuthFrom($Auth, $this->jsonObject);
    }
}