<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\Payment;

class PaymentMapper extends PaymentResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new PaymentMapper($rawResponse);
    }

    public function mapPaymentFrom(Payment $payment, $jsonObject)
    {
        parent::mapPaymentResourceFrom($payment, $jsonObject);
        return $payment;
    }

    public function mapPayment(Payment $payment)
    {
        return $this->mapPaymentFrom($payment, $this->jsonObject);
    }
}