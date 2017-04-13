<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Model\Auth;
use Fkomaralp\HepsiPay\Request\RegisterCardRequest;
use Fkomaralp\HepsiPay\Request\AuthRequest;
use Fkomaralp\HepsiPay\Model\Mapper\RegisterCardMapper;

class RegisterCard extends RegisterCardResource
{
    public static function create(RegisterCardRequest $request)
    {
        $authRequest = new AuthRequest();
        $authRequest->setOptions($request->getOptions());
        $authObject = Auth::create($authRequest);
        
        if($authObject !== false)
        {
            $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlCard(), parent::getBearerAuthorizationHttpHeaders($request, $authObject), $request->toJsonString());
            return RegisterCardMapper::create($rawResponse)->jsonDecode()->mapRegisterCard(new RegisterCard());
        }
        
        return false;
    }
}