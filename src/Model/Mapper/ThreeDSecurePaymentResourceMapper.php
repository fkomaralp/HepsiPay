<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\ThreeDSecurePaymentResource;

class ThreeDSecurePaymentResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new ThreeDSecurePaymentResourceMapper($rawResponse);
    }

    public function mapPaymentResourceFrom(ThreeDSecurePaymentResource $threeDSecurepaymentResource)
    {
        $threeDSecurepaymentResource->setHtmlCodes($this->rawResponse);
        
        return $threeDSecurepaymentResource;
    }

    public function mapPaymentResource(ThreeDSecurePaymentResource $threeDSecurepaymentResource)
    {
        return $this->mapPaymentResourceFrom($threeDSecurepaymentResource, $this->jsonObject);
    }
}