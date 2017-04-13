<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\HepsipayResource;

class RefundResource extends HepsipayResource
{
    private $apiKey;
    private $transactionId;
    private $transactionTime;
    private $signature;
    private $extras;
    private $amount;
    private $currency;
    private $referenceTransactionId;
    private $waitingApproval;
    
    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }
    
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }
    
    public function getTransactionTime()
    {
        return $this->transactionTime;
    }

    public function setTransactionTime($transactionTime)
    {
        $this->transactionTime = $transactionTime;
        return $this;
    }
    
    public function getSignature()
    {
        return $this->signature;
    }

    public function setSignature($signature)
    {
        $this->signature = $signature;
        return $this;
    }
    
    public function getExtras()
    {
        return $this->extras;
    }

    public function setExtras($extras)
    {
        $this->extras = $extras;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    
    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }
    
    public function getReferenceTransactionId()
    {
        return $this->referenceTransactionId;
    }

    public function setReferenceTransactionId($referenceTransactionId)
    {
        $this->referenceTransactionId = $referenceTransactionId;
        return $this;
    }
    
    public function getWaitingApproval()
    {
        return $this->waitingApproval;
    }

    public function setWaitingApproval($waitingApproval)
    {
        $this->waitingApproval = $waitingApproval;
        return $this;
    }
}