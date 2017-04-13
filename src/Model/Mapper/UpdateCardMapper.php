<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\UpdateCard;

class UpdateCardMapper extends UpdateCardResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new UpdateCardMapper($rawResponse);
    }

    public function mapUpdateCardFrom(UpdateCard $UpdateCard, $jsonObject)
    {
        parent::mapUpdateCardResourceFrom($UpdateCard, $jsonObject);
        return $UpdateCard;
    }

    public function mapUpdateCard(UpdateCard $UpdateCard)
    {
        return $this->mapUpdateCardFrom($UpdateCard, $this->jsonObject);
    }
}