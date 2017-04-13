<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\Request;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\StringBuilder;

class AuthRequest extends Request
{
    private $grantType = 'password';

    public function getGrantType()
    {
        return $this->grantType;
    }

    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add("grant_type", $this->getGrantType())
                ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->append("grant_type", $this->getGrantType())
                ->getRequestQueryString();
    }
}