<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\BaseModel;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\StringBuilder;

class BasketItem extends BaseModel
{
    private $description;
    private $productCode;
    private $amount;
    private $vatRatio;
    private $count;
    private $url;
    private $basketItemType;
    private $basketItemId;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    public function getProductCode()
    {
        return $this->productCode;
    }

    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
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
    
    public function getVatRatio()
    {
        return $this->vatRatio;
    }

    public function setVatRatio($vatRatio)
    {
        $this->vatRatio = $vatRatio;
        return $this;
    }
    
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
    
    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    public function getBasketItemType()
    {
        return $this->basketItemType;
    }

    public function setBasketItemType($basketItemType)
    {
        $this->basketItemType = $basketItemType;
        return $this;
    }
    
    public function getBasketItemId()
    {
        return $this->basketItemId;
    }

    public function setBasketItemId($basketItemId)
    {
        $this->basketItemId = $basketItemId;
        return $this;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("description", $this->getDescription())
            ->add("productcode", $this->getProductCode())
            ->add("amount", $this->getAmount())
            ->add("vatRatio", $this->getVatRatio())
            ->add("count", $this->getCount())
            ->add("url", $this->getUrl())
            ->add("basketItemType", $this->getBasketItemType())
            ->add("basketItemId", $this->getBasketItemId())
            ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
            ->append("description", $this->getDescription())
            ->append("productCode", $this->getProductCode())
            ->append("amount", $this->getAmount())
            ->append("vatRatio", $this->getVatRatio())
            ->append("count", $this->getCount())
            ->append("url", $this->getUrl())
            ->append("basketItemType", $this->getBasketItemType())
            ->append("basketItemId", $this->getBasketItemId())
            ->getRequestString();
    }
}