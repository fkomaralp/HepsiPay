<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\ThreeDSecurePayment;

class ThreeDSecurePaymentMapper extends ThreeDSecurePaymentResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new ThreeDSecurePaymentMapper($rawResponse);
    }

    public function mapPaymentFrom(ThreeDSecurePayment $payment, $rawResponse)
    {
        parent::mapPaymentResourceFrom($payment, $rawResponse);
        return $payment;
    }

    public function mapPayment(ThreeDSecurePayment $payment)
    {
        return $this->mapPaymentFrom($payment, $this->rawResponse);
    }
}