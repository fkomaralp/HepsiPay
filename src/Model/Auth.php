<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\SessionHandler;
use Fkomaralp\HepsiPay\Model\Mapper\AuthMapper;
use Fkomaralp\HepsiPay\Request\AuthRequest;
use Fkomaralp\HepsiPay\JsonBuilder;

class Auth extends AuthResource
{    
    public static function create(AuthRequest $request)
    {
        $sessionHandler = new SessionHandler();
        
        if(empty($sessionHandler->get('hp_card_bearer'))) 
        {
            $rawResult = JsonBuilder::jsonEncode($sessionHandler->get('hp_card_bearer'));
            $authMapper = AuthMapper::create($rawResult)->jsonDecode()->mapAuth(new Auth());
            
            if($authMapper->getExpiresOn() > time()) 
            {
                return $authMapper;
            }
        }
        
        $rawResponse = parent::httpClient()->post($request->getOptions()->getUrlOAuth(), parent::getBasicAuthorizationHttpHeaders($request), $request->toHashRequestString());
        $authMapper = AuthMapper::create($rawResponse)->jsonDecode()->mapAuth(new Auth());
        
        if($authMapper->getExpiresIn() > 0) 
        {
            $sessionHandler->set('hp_card_bearer', array('access_token' => $authMapper->getAccessToken(), 'token_type' => $authMapper->getTokenType(), 'expires_in' => $authMapper->getExpiresIn()));
        
            return $authMapper;
        }
        
        return false;
    }
}