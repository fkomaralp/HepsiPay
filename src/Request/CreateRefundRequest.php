<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request;
use Fkomaralp\HepsiPay\StringBuilder;
use Fkomaralp\HepsiPay\HashGenerator;

class CreateRefundRequest extends Request
{    
    private $transactionId;
    private $referenceTransactionId;
    private $transactionTime;
    private $amount;
    private $currency;
    private $signature;

    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    
    public function getReferenceTransactionId()
    {
        return $this->referenceTransactionId;
    }

    public function setReferenceTransactionId($referenceTransactionId)
    {
        $this->referenceTransactionId = $referenceTransactionId;
    }
    
    public function getTransactionTime()
    {
        if(empty($this->transactionTime)) {
            $this->setTransactionTime();
        }
        return $this->transactionTime;
    }

    public function setTransactionTime($transactionTime = null)
    {
        $this->transactionTime = $transactionTime ? $transactionTime : time();
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    
    public function getSignature()
    {
        if(empty($this->signature)) {
            $this->setSignature();
        }
        return $this->signature;
    }
    
    public function setSignature($signature = null)
    {
        $this->signature = ($signature ? $signature : (HashGenerator::hashStringSha256($this->toHashRequestString())));
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                ->add("transactionId", $this->getTransactionId())
                ->add("referenceTransactionId", $this->getReferenceTransactionId())
                ->add("transactionTime", $this->getTransactionTime())
                ->add("signature", $this->getSignature())
                ->add("amount", $this->getAmount())
                ->add("currency", $this->getCurrency())
                ->getObject();
    }
    
    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->appendSuper(parent::toHashRequestString())
                ->append("transactionId", $this->getTransactionId())
                ->append("referenceTransactionId", $this->getReferenceTransactionId())
                ->append("transactionTime", $this->getTransactionTime())
                ->append("amount", $this->getAmount())
                ->append("currency", $this->getCurrency())
                ->getRequestString();
    }
}