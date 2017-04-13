<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\BaseModel;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\StringBuilder;

class Card extends BaseModel
{
    private $cardHolderName;
    private $cardNumber;
    private $expireYear;
    private $expireMonth;
    private $securityCode;

    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
        return $this;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
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

    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
        return $this;
    }

    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;
        return $this;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("cardHolderName", $this->getCardHolderName())
            ->add("cardNumber", $this->getCardNumber())
            ->add("expireYear", $this->getExpireYear())
            ->add("expireMonth", $this->getExpireMonth())
            ->add("securityCode", $this->getSecurityCode())
            ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
            ->append("cardHolderName", $this->getCardHolderName())
            ->append("cardNumber", $this->getCardNumber())
            ->append("expireYear", $this->getExpireYear())
            ->append("expireMonth", $this->getExpireMonth())
            ->append("securityCode", $this->getSecurityCode())
            ->getRequestString();
    }
}