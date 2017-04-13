<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\ThreeDSecurePayment;

class ThreeDSecurePaymentRetrieveMapper extends ThreeDSecurePaymentRetrieveResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new ThreeDSecurePaymentRetrieveMapper($rawResponse);
    }

    public function mapPaymentFrom(ThreeDSecurePayment $payment, $jsonObject)
    {
        parent::mapPaymentResourceFrom($payment, $jsonObject);
        return $payment;
    }

    public function mapPayment(ThreeDSecurePayment $payment)
    {
        return $this->mapPaymentFrom($payment, $this->jsonObject);
    }
}