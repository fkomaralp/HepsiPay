<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\QueryCardResource;

class QueryCardResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new QueryCardResourceMapper($rawResponse);
    }

    public function mapQueryCardResourceFrom(QueryCardResource $resource, $jsonObject)
    {
        parent::mapResourceFrom($resource, $jsonObject);

        if (isset($jsonObject->MerchantCardDtos) and !empty($jsonObject->MerchantCardDtos)) {
            $resource->setMerchantCardDtos($jsonObject->MerchantCardDtos);
        }
        if (isset($jsonObject->CardCountGrouppedByBank) and !empty($jsonObject->CardCountGrouppedByBank)) {
            $resource->setCardCountGrouppedByBank($jsonObject->CardCountGrouppedByBank);
        }
        if (isset($jsonObject->PagerState) and !empty($jsonObject->PagerState)) {
            $resource->setPagerState($jsonObject->PagerState);
        }
        return $resource;
    }

    public function mapQueryCardResource(QueryCardResource $resource)
    {
        return $this->mapQueryCardResourceFrom($resource, $this->jsonObject);
    }
}