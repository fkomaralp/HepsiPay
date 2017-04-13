<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\BaseModel;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\StringBuilder;

class Customer extends BaseModel
{
    private $name;
    private $surName;
    private $email;
    private $ipAddress;
    private $phoneNumber;
    private $code;
    private $tckn;
    private $vatNumber;
    private $memberSince;
    private $birthDate;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSurName()
    {
        return $this->surName;
    }

    public function setSurName($surName)
    {
        $this->surName = $surName;
        return $this;
    }
    
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }
    
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
    
    public function getTckn()
    {
        return $this->tckn;
    }

    public function setTckn($tckn)
    {
        $this->tckn = $tckn;
        return $this;
    }
    
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }
    
    public function getMemberSince()
    {
        return $this->memberSince;
    }

    public function setMemberSince($memberSince)
    {
        $this->memberSince = $memberSince;
        return $this;
    }
    
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("name", $this->getName())
            ->add("surName", $this->getSurName())
            ->add("email", $this->getEmail())
            ->add("phoneNumber", $this->getPhoneNumber())
            ->add("code", $this->getCode())
            ->add("tckn", $this->getTckn())
            ->add("vatNumber", $this->getVatNumber())
            ->add("memberSince", $this->getMemberSince())
            ->add("birthDate", $this->getBirthDate())
            ->add("ipAddress", $this->getIpAddress())
            ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
            ->append("name", $this->getName())
            ->append("surName", $this->getSurName())
            ->append("email", $this->getEmail())
            ->append("phoneNumber", $this->getPhoneNumber())
            ->append("code", $this->getCode())
            ->append("tckn", $this->getTckn())
            ->append("vatNumber", $this->getVatNumber())
            ->append("memberSince", $this->getMemberSince())
            ->append("birthDate", $this->getBirthDate())
            ->append("ipAddress", $this->getIpAddress())
            ->getRequestString();
    }
}