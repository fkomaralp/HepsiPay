<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\QueryCard;

class QueryCardMapper extends QueryCardResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new QueryCardMapper($rawResponse);
    }

    public function mapQueryCardFrom(QueryCard $QueryCard, $jsonObject)
    {
        parent::mapQueryCardResourceFrom($QueryCard, $jsonObject);
        return $QueryCard;
    }

    public function mapQueryCard(QueryCard $QueryCard)
    {
        return $this->mapQueryCardFrom($QueryCard, $this->jsonObject);
    }
}