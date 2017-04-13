<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request;
use Fkomaralp\HepsiPay\StringBuilder;
use Fkomaralp\HepsiPay\HashGenerator;

class QueryCardRequest extends Request
{
    private $id;
    private $cardNumber;
    private $maskedCardNumber;
    private $expireMonth;
    private $expireYear;
    private $merchantUserId;
    private $merchantUserCardId;
    private $firstSixCharOfPan;
    private $companyId;
    private $lastFourCharOfPan;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }
    
    public function getMaskedCardNumber()
    {
        return $this->maskedCardNumber;
    }

    public function setMaskedCardNumber($maskedCardNumber)
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }
    
    public function getExpireMonth()
    {
        return $this->expireMonth;
    }

    public function setExpireMonth($expireMonth)
    {
        $this->expireMonth = $expireMonth;
    }
    
    public function getExpireYear()
    {
        return $this->expireYear;
    }

    public function setExpireYear($expireYear)
    {
        $this->expireYear = $expireYear;
    }
    
    public function getMerchantUserId()
    {
        return $this->merchantUserId;
    }

    public function setMerchantUserId($merchantUserId)
    {
        $this->merchantUserId = $merchantUserId;
    }
    
    public function getMerchantUserCardId()
    {
        return $this->merchantUserCardId;
    }

    public function setMerchantUserCardId($merchantUserCardId)
    {
        $this->merchantUserCardId = $merchantUserCardId;
    }
    
    public function getFirstSixCharOfPan()
    {
        return $this->firstSixCharOfPan;
    }

    public function setFirstSixCharOfPan($firstSixCharOfPan)
    {
        $this->firstSixCharOfPan = $firstSixCharOfPan;
    }
    
    public function getCompanyId()
    {
        return $this->companyId;
    }

    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
    }
    
    public function getLastFourCharOfPan()
    {
        return $this->lastFourCharOfPan;
    }

    public function setLastFourCharOfPan($lastFourCharOfPan)
    {
        $this->lastFourCharOfPan = $lastFourCharOfPan;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                ->add("Id", $this->getId())
                ->add("CardNumber", $this->getCardNumber())
                ->add("MaskedCardNumber", $this->getMaskedCardNumber())
                ->add("ExpireMonth", $this->getExpireMonth())
                ->add("ExpireYear", $this->getExpireYear())
                ->add("MerchantUserId", $this->getMerchantUserId())
                ->add("MerchantUserCardId", $this->getMerchantUserCardId())
                ->add("FirstSixCharOfPan", $this->getFirstSixCharOfPan())
                ->add("CompanyId", $this->getCompanyId())
                ->add("LastFourCharOfPan", $this->getLastFourCharOfPan())
                ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->append("Id", $this->getId())
                ->append("CardNumber", $this->getCardNumber())
                ->append("MaskedCardNumber", $this->getMaskedCardNumber())
                ->append("ExpireMonth", $this->getExpireMonth())
                ->append("ExpireYear", $this->getExpireYear())
                ->append("MerchantUserId", $this->getMerchantUserId())
                ->append("MerchantUserCardId", $this->getMerchantUserCardId())
                ->append("FirstSixCharOfPan", $this->getFirstSixCharOfPan())
                ->append("CompanyId", $this->getCompanyId())
                ->append("LastFourCharOfPan", $this->getLastFourCharOfPan())
                ->getRequestString();
    }
}