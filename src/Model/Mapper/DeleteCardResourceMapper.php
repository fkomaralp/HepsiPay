<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\DeleteCardResource;

class DeleteCardResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new DeleteCardResourceMapper($rawResponse);
    }

    public function mapDeleteCardResourceFrom(DeleteCardResource $resource, $jsonObject)
    {
        parent::mapResourceFrom($resource, $jsonObject);

        if (isset($jsonObject->MerchantCardDtos) and !empty($jsonObject->MerchantCardDtos)) {
            $resource->setMerchantCardDtos($jsonObject->MerchantCardDtos);
        }
        if (isset($jsonObject->Id) and !empty($jsonObject->Id)) {
            $resource->setId($jsonObject->Id);
        }
        if (isset($jsonObject->MaskedCardNumber) and !empty($jsonObject->MaskedCardNumber)) {
            $resource->setMaskedCardNumber($jsonObject->MaskedCardNumber);
        }
        if (isset($jsonObject->FullName) and !empty($jsonObject->FullName)) {
            $resource->setFullName($jsonObject->FullName);
        }
        if (isset($jsonObject->MerchantUserId) and !empty($jsonObject->MerchantUserId)) {
            $resource->setMerchantUserId($jsonObject->MerchantUserId);
        }
        if (isset($jsonObject->MerchantCardUserId) and !empty($jsonObject->MerchantCardUserId)) {
            $resource->setMerchantCardUserId($jsonObject->MerchantCardUserId);
        }
        if (isset($jsonObject->IsSuccess) and !empty($jsonObject->IsSuccess)) {
            $resource->setIsSuccess($jsonObject->IsSuccess);
        }
        return $resource;
    }

    public function mapDeleteCardResource(DeleteCardResource $resource)
    {
        return $this->mapDeleteCardResourceFrom($resource, $this->jsonObject);
    }
}