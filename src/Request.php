<?php

namespace Fkomaralp\HepsiPay;

class Request extends BaseModel
{
    private $options;
    
    public function getOptions()
    {
        return $this->options;
    }

    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }
    
    public function getJsonObject()
    {
        return JsonBuilder::create()
                ->add("version", $this->options->getVersion())
                ->add("apikey", $this->options->getApiKey())
                ->getObject();
    }
    
    public function toHashRequestString()
    {
        return StringBuilder::create()
                ->append("secret_key", $this->options->getSecretKey())
                ->getRequestString();
    }
}