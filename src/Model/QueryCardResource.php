<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\HepsipayResource;

class QueryCardResource extends HepsipayResource
{
    private $merchantCardDtos;
    private $cardCountGrouppedByBank;
    private $pagerState;

    public function getMerchantCardDtos()
    {
        return $this->merchantCardDtos;
    }

    public function setMerchantCardDtos($merchantCardDtos)
    {
        $this->merchantCardDtos = $merchantCardDtos;
        return $this;
    }
    
    public function getCardCountGrouppedByBank()
    {
        return $this->cardCountGrouppedByBank;
    }

    public function setCardCountGrouppedByBank($cardCountGrouppedByBank)
    {
        $this->cardCountGrouppedByBank = $cardCountGrouppedByBank;
        return $this;
    }
    
    public function getPagerState()
    {
        return $this->pagerState;
    }

    public function setPagerState($pagerState)
    {
        $this->pagerState = $pagerState;
        return $this;
    }    
}