<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\DeleteCard;

class DeleteCardMapper extends DeleteCardResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new DeleteCardMapper($rawResponse);
    }

    public function mapDeleteCardFrom(DeleteCard $DeleteCard, $jsonObject)
    {
        parent::mapDeleteCardResourceFrom($DeleteCard, $jsonObject);
        return $DeleteCard;
    }

    public function mapDeleteCard(DeleteCard $DeleteCard)
    {
        return $this->mapDeleteCardFrom($DeleteCard, $this->jsonObject);
    }
}