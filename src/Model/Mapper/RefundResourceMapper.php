<?php

namespace Fkomaralp\HepsiPay\Model\Mapper;

use Fkomaralp\HepsiPay\Model\RefundResource;

class RefundResourceMapper extends HepsipayResourceMapper
{
    public static function create($rawResponse = null)
    {
        return new RefundResourceMapper($rawResponse);
    }

    public function mapRefundResourceFrom(RefundResource $resource, $jsonObject)
    {
        parent::mapResourceFrom($resource, $jsonObject);

        if (isset($jsonObject->ApiKey) and !empty($jsonObject->ApiKey)) {
            $resource->setApiKey($jsonObject->ApiKey);
        }
        if (isset($jsonObject->Amount) and !empty($jsonObject->Amount)) {
            $resource->setAmount($jsonObject->Amount);
        }
        if (isset($jsonObject->Currency) and !empty($jsonObject->Currency)) {
            $resource->setCurrency($jsonObject->Currency);
        }
        if (isset($jsonObject->TransactionId) and !empty($jsonObject->TransactionId)) {
            $resource->setTransactionId($jsonObject->TransactionId);
        }
        if (isset($jsonObject->TransactionTime) and !empty($jsonObject->TransactionTime)) {
            $resource->setTransactionTime($jsonObject->TransactionTime);
        }
        if (isset($jsonObject->Signature) and !empty($jsonObject->Signature)) {
            $resource->setSignature($jsonObject->Signature);
        }
        if (isset($jsonObject->Extras) and !empty($jsonObject->Extras)) {
            $resource->setExtras($jsonObject->Extras);
        }
        if (isset($jsonObject->ReferenceTransactionId) and !empty($jsonObject->ReferenceTransactionId)) {
            $resource->setReferenceTransactionId($jsonObject->ReferenceTransactionId);
        }
        if (isset($jsonObject->WaitingApproval) and !empty($jsonObject->WaitingApproval)) {
            $resource->setWaitingApproval($jsonObject->WaitingApproval);
        }
        return $resource;
    }

    public function mapRefundResource(RefundResource $resource)
    {
        return $this->mapRefundResourceFrom($resource, $this->jsonObject);
    }
}