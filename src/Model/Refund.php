<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Model\Mapper\RefundMapper;
use Fkomaralp\HepsiPay\Request\CreateRefundRequest;

class Refund extends RefundResource
{
    public static function create(CreateRefundRequest $request)
    {
        $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlRefund(), parent::getHttpHeaders($request), $request->toJsonString());
        return RefundMapper::create($rawResponse)->jsonDecode()->mapRefund(new Refund());
    }
}