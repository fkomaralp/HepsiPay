<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Options;
use Fkomaralp\HepsiPay\Model\Mapper\PaymentMapper;
use Fkomaralp\HepsiPay\Request\CreatePaymentRequest;
use Fkomaralp\HepsiPay\Request\RetrievePaymentRequest;

class Payment extends PaymentResource
{
    public static function create(CreatePaymentRequest $request)
    {
        $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlPay(), parent::getHttpHeaders($request), $request->toJsonString());
        return PaymentMapper::create($rawResponse)->jsonDecode()->mapPayment(new Payment());
    }
}