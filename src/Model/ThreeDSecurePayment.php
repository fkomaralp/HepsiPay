<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\PostHandler;
use Fkomaralp\HepsiPay\Model\Mapper\ThreeDSecurePaymentMapper;
use Fkomaralp\HepsiPay\Model\Mapper\ThreeDSecurePaymentRetrieveMapper;
use Fkomaralp\HepsiPay\JsonBuilder;
use Fkomaralp\HepsiPay\Request\CreateThreeDSecurePaymentRequest;

class ThreeDSecurePayment extends ThreeDSecurePaymentResource
{
    public static function create(CreateThreeDSecurePaymentRequest $request)
    {
        $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlThreeDSecure(), parent::getHttpHeaders($request), $request->toJsonString());
        return ThreeDSecurePaymentMapper::create($rawResponse)->mapPayment(new ThreeDSecurePayment());
    }

    public static function retrieve()
    {
        $postHandler = new PostHandler();
        
        if($postHandler->hasPost() !== false) 
        {
            $rawResult = JsonBuilder::jsonEncode($postHandler->get());
            $mapper = ThreeDSecurePaymentRetrieveMapper::create($rawResult)->jsonDecode()->mapPayment(new ThreeDSecurePayment());
            return $mapper;
        }
        
        return false;
    }
}