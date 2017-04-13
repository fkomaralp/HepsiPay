<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\RegisterCard;

class RegisterCardMapper extends RegisterCardResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new RegisterCardMapper($rawResponse);
    }

    public function mapRegisterCardFrom(RegisterCard $RegisterCard, $jsonObject)
    {
        parent::mapRegisterCardResourceFrom($RegisterCard, $jsonObject);
        return $RegisterCard;
    }

    public function mapRegisterCard(RegisterCard $RegisterCard)
    {
        return $this->mapRegisterCardFrom($RegisterCard, $this->jsonObject);
    }
}