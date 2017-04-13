<?php

namespace Fkomaralp\HepsiPay;

class Options
{
    private $version = "1.2";
    private $apiKey;
    private $secretKey;
    private $testMode = false;
    
    // Live URLs
    const LIVE_PAYMENT_URL = 'https://api.hepsipay.com/payments/pay';
    const LIVE_THREEDSECURE_URL = 'https://www.hepsipay.com/payment/threedsecure';
    const LIVE_REFUND_URL = 'https://api.hepsipay.com/payments/refund';
    const LIVE_OAUTH_URL = 'https://api.hepsipay.com/oauth/token';
    const LIVE_CARD_URL = 'https://api.hepsipay.com/cards/%s';
    
    // Test URLs
    const TEST_PAYMENT_URL = 'https://apientgr.hepsipay.com/payments/pay';
    const TEST_THREEDSECURE_URL = 'https://entgr.hepsipay.com/payment/threedsecure';
    const TEST_REFUND_URL = 'https://apientgr.hepsipay.com/payments/refund';
    const TEST_OAUTH_URL = 'https://apientgr.hepsipay.com/oauth/token';
    const TEST_CARD_URL = 'https://apientgr.hepsipay.com/cards/%s';
    
    public function __construct($apiKey = null, $secretKey = null, $testMode = false)
    {        
        if($apiKey) 
		{
            $this->setApiKey($apiKey);
        }
        
        if($secretKey) 
		{
            $this->setSecretKey($secretKey);
        }
        
        $this->setTestMode($testMode);
    }
    
    public function getVersion()
    {
        return $this->version;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    public function getTestMode()
    {
        return $this->testMode;
    }

    public function setTestMode($testMode)
    {
        $this->testMode = filter_var($testMode, FILTER_VALIDATE_BOOLEAN);
        return $this;
    }
    
    public function getUrlPay()
    {
        return $this->testMode === true ? self::TEST_PAYMENT_URL : self::LIVE_PAYMENT_URL;
    }
    
    public function getUrlThreeDSecure()
    {
        return $this->testMode === true ? self::TEST_THREEDSECURE_URL : self::LIVE_THREEDSECURE_URL;
    }
    
    public function getUrlRefund()
    {
        return $this->testMode === true ? self::TEST_REFUND_URL : self::LIVE_REFUND_URL;
    }
    
    public function getUrlOAuth()
    {
        return $this->testMode === true ? self::TEST_OAUTH_URL : self::LIVE_OAUTH_URL;
    }
    
    public function getUrlCard($uri = null)
    {
        return sprintf(($this->testMode === true ? self::TEST_CARD_URL : self::LIVE_CARD_URL), $uri);
    }
}