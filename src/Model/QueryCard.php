<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Model\Auth;
use Fkomaralp\HepsiPay\Request\QueryCardRequest;
use Fkomaralp\HepsiPay\Request\AuthRequest;
use Fkomaralp\HepsiPay\Model\Mapper\QueryCardMapper;

class QueryCard extends QueryCardResource
{
    public static function create(QueryCardRequest $request)
    {
        $authRequest = new AuthRequest();
        $authRequest->setOptions($request->getOptions());
        $authObject = Auth::create($authRequest);
        
        if($authObject !== false)
        {
            $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlCard('query'), parent::getBearerAuthorizationHttpHeaders($request, $authObject), $request->toJsonString());
            return QueryCardMapper::create($rawResponse)->jsonDecode()->mapQueryCard(new QueryCard());
        }
        
        return false;
    }
}