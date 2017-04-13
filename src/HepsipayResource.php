<?php

namespace Fkomaralp\HepsiPay;

class HepsipayResource extends ApiResource
{
    private $success;
    private $messageCode;
    private $message;
    private $userMessage;
    
    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
    public function getMessageCode()
    {
        return $this->messageCode;
    }

    public function setMessageCode($messageCode)
    {
        $this->messageCode = $messageCode;
    }
    
    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
    
    public function getUserMessage()
    {
        return $this->userMessage;
    }

    public function setUserMessage($userMessage)
    {
        $this->userMessage = $userMessage;
    }
    
    protected static function getHttpHeaders(Request $request)
    {
        $checkForOptions = self::checkForOptions($request->getOptions());
        
        $header = array(
            "Accept: application/json",
            "Content-Type: application/json"
        );
        
        return $header;
    }
    
    protected static function getBasicAuthorizationHttpHeaders(Request $request)
    {        
        $header = self::getHttpHeaders($request);
        
        array_push($header, "Authorization: " . sprintf("Basic %s", base64_encode($request->getOptions()->getApiKey() . ':' . $request->getOptions()->getSecretKey())));        
        return $header;
    }
    
    protected static function getBearerAuthorizationHttpHeaders(Request $request, \Hepsipay\Model\Auth $auth)
    {
        $header = self::getHttpHeaders($request);
        
        array_push($header, "Authorization: " . sprintf("Bearer %s", $auth->getAccessToken()));        
        return $header;
    }
    
    protected static function checkForOptions(Options $options)
    {
        $apiKey = $options->getApiKey();
        $secretKey = $options->getSecretKey();
        
        try 
        {
            if(empty($apiKey) or $apiKey == "API_KEY") 
            {
                throw new \Exception('Lütfen API anahtarınızı giriniz!');
            }
            
            if(empty($secretKey) or $secretKey == "SECRET_KEY") 
            {
                throw new \Exception('Lütfen SecretKey bilgisini giriniz!');
            }
        } catch (\Exception $e) 
        {
            exit("Bir hata meydana geldi: " .$e->getMessage(). "\n");
        }        
    }
}