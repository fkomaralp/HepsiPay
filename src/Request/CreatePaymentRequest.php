<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request;
use Fkomaralp\HepsiPay\StringBuilder;
use Fkomaralp\HepsiPay\HashGenerator;

class CreatePaymentRequest extends Request
{
    const DEFAULT_INSTALLMENT = 1;

    private $transactionTime;
    private $transactionId;
    private $signature;
    private $description;
    private $amount;
    private $currency;
    private $installment;
    private $customer;
    private $card;
    private $merchantCardId;
    private $shippingaddress;
    private $invoiceaddress;
    private $basketitems;
    private $extras;

    public function __construct()
    {
        $this->setInstallment(CreatePaymentRequest::DEFAULT_INSTALLMENT);
    }
    
    public function getTransactionTime()
    {
        if(empty($this->transactionTime)) 
        {
            $this->setTransactionTime();
        }
        return $this->transactionTime;
    }

    public function setTransactionTime($transactionTime = null)
    {
        $this->transactionTime = $transactionTime ? $transactionTime : time();
    }
    
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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
    
    public function getInstallment()
    {
        return $this->installment;
    }

    public function setInstallment($installment)
    {
        $this->installment = $installment;
    }
    
    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }
    
    public function getCard()
    {
        return $this->card;
    }

    public function setCard($card)
    {
        $this->card = $card;
    }
    
    public function getMerchantCardId()
    {
        return $this->merchantCardId;
    }

    public function setMerchantCardId($merchantCardId)
    {
        $this->merchantCardId = $merchantCardId;
    }
    
    public function getShippingAddress()
    {
        return $this->shippingaddress;
    }

    public function setShippingAddress($shippingaddress)
    {
        $this->shippingaddress = $shippingaddress;
    }
    
    public function getInvoiceAddress()
    {
        return $this->invoiceaddress;
    }

    public function setInvoiceAddress($invoiceaddress)
    {
        $this->invoiceaddress = $invoiceaddress;
    }
    
    public function getBasketItems()
    {
        return $this->basketitems;
    }

    public function setBasketItems($basketitems)
    {
        $this->basketitems = $basketitems;
    }
    
    public function getExtras()
    {
        return $this->extras;
    }

    public function setExtras($extras)
    {
        $this->extras = $extras;
    }
    
    public function getSignature()
    {
        if(empty($this->signature)) 
        {
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
                ->add("transactionTime", $this->getTransactionTime())
                ->add("transactionId", $this->getTransactionId())
                ->add("description", $this->getDescription())
                ->add("amount", $this->getAmount())
                ->add("currency", $this->getCurrency())
                ->add("installment", $this->getInstallment())
                ->add("signature", $this->getSignature())
                ->add("card", $this->getCard())
                ->add("MerchantCardId", $this->getMerchantCardId())
                ->add("customer", $this->getCustomer())
                ->add("shippingaddress", $this->getShippingAddress())
                ->add("invoiceaddress", $this->getInvoiceAddress())
                ->addArray("basketitems", $this->getBasketItems())
                ->addArray("extras", $this->getExtras())
                ->getObject();
    }
    
    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->appendSuper(parent::toHashRequestString())
                ->append("transactionId", $this->getTransactionId())
                ->append("transactionTime", $this->getTransactionTime())
                ->append("amount", $this->getAmount())
                ->append("currency", $this->getCurrency())
                ->append("installment", $this->getInstallment())
                ->getRequestString();
    }
}