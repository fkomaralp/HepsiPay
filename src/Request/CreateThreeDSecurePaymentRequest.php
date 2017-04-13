<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request\CreatePaymentRequest;
use Fkomaralp\HepsiPay\StringBuilder;
use Hepsipay\HashGenerator;

class CreateThreeDSecurePaymentRequest extends CreatePaymentRequest
{
    private $successUrl;
    private $failUrl;
    
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }
    
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }
    
    public function getFailUrl()
    {
        return $this->failUrl;
    }
    
    public function setFailUrl($failUrl)
    {
        $this->failUrl = $failUrl;
    }

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                ->add("successUrl", $this->getSuccessUrl())
                ->add("failUrl", $this->getFailUrl())
                ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
            ->appendSuper(parent::toHashRequestString())
            ->getRequestString();
    }
}