<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\Refund;

class RefundMapper extends RefundResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new RefundMapper($rawResponse);
    }

    public function mapRefundFrom(Refund $refund, $jsonObject)
    {
        parent::mapRefundResourceFrom($refund, $jsonObject);
        return $refund;
    }

    public function mapRefund(Refund $refund)
    {
        return $this->mapRefundFrom($refund, $this->jsonObject);
    }
}