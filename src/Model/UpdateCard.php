<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Model\Auth;
use Fkomaralp\HepsiPay\Request\UpdateCardRequest;
use Fkomaralp\HepsiPay\Request\AuthRequest;
use Fkomaralp\HepsiPay\Model\Mapper\UpdateCardMapper;

class UpdateCard extends UpdateCardResource
{
    public static function create(UpdateCardRequest $request)
    {
        $authRequest = new AuthRequest();
        $authRequest->setOptions($request->getOptions());
        $authObject = Auth::create($authRequest);
        
        if($authObject !== false)
        {
            $rawResponse = parent::httpClient()->put($request->getOptions()->getUrlCard(), parent::getBearerAuthorizationHttpHeaders($request, $authObject), $request->toJsonString());
            return UpdateCardMapper::create($rawResponse)->jsonDecode()->mapUpdateCard(new UpdateCard());
        }
        
        return false;
    }
}