<?php

namespace Fkomaralp\HepsiPay\Request;

use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request;
use Fkomaralp\HepsiPay\StringBuilder;
use Fkomaralp\HepsiPay\HashGenerator;

class DeleteCardRequest extends Request
{
    private $id;
    private $merchantUserId;
    private $merchantUserCardId;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function getJsonObject()
    {
        return JsonBuilder::fromJsonObject(parent::getJsonObject())
                ->add("Id", $this->getId())
                ->add("MerchantUserId", $this->getMerchantUserId())
                ->add("MerchantUserCardId", $this->getMerchantUserCardId())
                ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->append("Id", $this->getId())
                ->append("MerchantUserId", $this->getMerchantUserId())
                ->append("MerchantUserCardId", $this->getMerchantUserCardId())
                ->getRequestString();
    }
}