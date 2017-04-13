<?php

namespace Fkomaralp\HepsiPay;

abstract class BaseModel implements JsonInterface, RequestInterface
{
    public function toJsonString()
    {
        return JsonBuilder::jsonEncode($this->getJsonObject());
    }
}