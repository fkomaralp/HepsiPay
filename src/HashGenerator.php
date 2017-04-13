<?php

namespace Fkomaralp\HepsiPay;

class HashGenerator
{    
    public static function hashStringSha256($hashStr)
    {
        return hash('sha256', $hashStr);
    }
}