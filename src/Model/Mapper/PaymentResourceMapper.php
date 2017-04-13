<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\PaymentResource;

class PaymentResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new PaymentResourceMapper($rawResponse);
    }

    public function mapPaymentResourceFrom(PaymentResource $resource, $jsonObject)
    {
        parent::mapResourceFrom($resource, $jsonObject);

        if (isset($jsonObject->ApiKey) and !empty($jsonObject->ApiKey)) 
        {
            $resource->setApiKey($jsonObject->ApiKey);
        }
        if (isset($jsonObject->TransactionId) and !empty($jsonObject->TransactionId)) 
        {
            $resource->setTransactionId($jsonObject->TransactionId);
        }
        if (isset($jsonObject->TransactionTime) and !empty($jsonObject->TransactionTime)) 
        {
            $resource->setTransactionTime($jsonObject->TransactionTime);
        }
        if (isset($jsonObject->Signature) and !empty($jsonObject->Signature)) 
        {
            $resource->setSignature($jsonObject->Signature);
        }
        if (isset($jsonObject->Extras) and !empty($jsonObject->Extras)) 
        {
            $resource->setExtras($jsonObject->Extras);
        }
        if (isset($jsonObject->Amount) and !empty($jsonObject->Amount)) 
        {
            $resource->setAmount($jsonObject->Amount);
        }
        if (isset($jsonObject->Installment) and !empty($jsonObject->Installment)) 
        {
            $resource->setInstallment($jsonObject->Installment);
        }
        if (isset($jsonObject->Currency) and !empty($jsonObject->Currency)) 
        {
            $resource->setCurrency($jsonObject->Currency);
        }
        if (isset($jsonObject->CardId) and !empty($jsonObject->CardId)) 
        {
            $resource->setCardId($jsonObject->CardId);
        }
        return $resource;
    }

    public function mapPaymentResource(PaymentResource $resource)
    {
        return $this->mapPaymentResourceFrom($resource, $this->jsonObject);
    }
}