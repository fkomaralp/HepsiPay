<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\HepsipayResource;

class RegisterCardResource extends HepsipayResource
{
    private $id;
    private $expireMonth;
    private $expireYear;
    private $maskedCardNumber;
    private $fullName;
    private $merchantUserId;
    private $merchantCardUserId;
    private $isSuccess;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
        return $this;
    }
    
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
        return $this;
    }
    
    public function getMaskedCardNumber()
    {
        return $this->maskedCardNumber;
    }

    public function setMaskedCardNumber($maskedCardNumber)
    {
        $this->maskedCardNumber = $maskedCardNumber;
        return $this;
    }
    
    public function getFullName()
    {
        return $this->fullName;
    }

    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }
    
    public function getMerchantUserId()
    {
        return $this->merchantUserId;
    }

    public function setMerchantUserId($merchantUserId)
    {
        $this->merchantUserId = $merchantUserId;
        return $this;
    }
    
    public function getMerchantCardUserId()
    {
        return $this->merchantCardUserId;
    }

    public function setMerchantCardUserId($merchantCardUserId)
    {
        $this->merchantCardUserId = $merchantCardUserId;
        return $this;
    }
    
    public function getIsSuccess()
    {
        return $this->isSuccess;
    }

    public function setIsSuccess($isSuccess)
    {
        $this->isSuccess = $isSuccess;
        return $this;
    }
}