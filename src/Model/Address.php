<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\BaseModel;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\StringBuilder;

class Address extends BaseModel
{
    private $name;
    private $address;
    private $country;
    private $countryCode;
    private $city;
    private $cityCode;
    private $zipCode;
    private $district;
    private $districtCode;
    private $shippingCompany;
    
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    
    public function getCityCode()
    {
        return $this->cityCode;
    }

    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }
    
    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }
    
    public function getDistrict()
    {
        return $this->district;
    }

    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }
    
    public function getDistrictCode()
    {
        return $this->districtCode;
    }

    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;
        return $this;
    }

    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    public function setShippingCompany($shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;
        return $this;
    }

    public function getJsonObject()
    {
        return JsonBuilder::create()
            ->add("name", $this->getName())
            ->add("address", $this->getAddress())
            ->add("country", $this->getCountry())
            ->add("countryCode", $this->getCountryCode())
            ->add("city", $this->getCity())
            ->add("cityCode", $this->getCityCode())
            ->add("zipCode", $this->getZipCode())
            ->add("district", $this->getDistrict())
            ->add("districtCode", $this->getDistrictCode())
            ->add("shippingCompany", $this->getShippingCompany())
            ->getObject();
    }

    public function toHashRequestString()
    {
        return StringBuilder::create()
            ->append("name", $this->getName())
            ->append("address", $this->getAddress())
            ->append("country", $this->getCountry())
            ->append("countryCode", $this->getCountryCode())
            ->append("city", $this->getCity())
            ->append("cityCode", $this->getCityCode())
            ->append("zipCode", $this->getZipCode())
            ->append("district", $this->getDistrict())
            ->append("districtCode", $this->getDistrictCode())
            ->append("shippingCompany", $this->getShippingCompany())
            ->getRequestString();
    }
}