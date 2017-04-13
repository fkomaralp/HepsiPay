<?php

namespace Fkomaralp\HepsiPay\Model;

use Fkomaralp\HepsiPay\Model\Auth;
use Fkomaralp\HepsiPay\Request\DeleteCardRequest;
use Fkomaralp\HepsiPay\Request\AuthRequest;
use Fkomaralp\HepsiPay\Model\Mapper\DeleteCardMapper;

class DeleteCard extends DeleteCardResource
{
    public static function create(DeleteCardRequest $request)
    {
        $authRequest = new AuthRequest();
        $authRequest->setOptions($request->getOptions());
        $authObject = Auth::create($authRequest);
        
        if($authObject !== false)
        {
            $rawResponse = parent::httpClient()->delete($request->getOptions()->getUrlCard(), parent::getBearerAuthorizationHttpHeaders($request, $authObject), $request->toJsonString());
            return DeleteCardMapper::create($rawResponse)->jsonDecode()->mapDeleteCard(new DeleteCard());
        }
        
        return false;
    }
}