<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\HepsipayResource;

class AuthResource extends HepsipayResource
{
    private $error;
    private $accessToken;
    private $tokenType;
    private $expiresIn;
    private $expiresOn;

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
    
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }
    
    public function getTokenType()
    {
        return $this->tokenType;
    }

    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
        return $this;
    }
    
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
    
    public function getExpiresOn()
    {
        return $this->expiresOn;
    }

    public function setExpiresOn($expiresOn)
    {
        $this->expiresOn = $expiresOn;
        return $this;
    }
}