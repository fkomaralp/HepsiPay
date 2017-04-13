<?php

namespace Fkomaralp\HepsiPay;

interface SessionHandlerInterface
{
    public function set($key, $value);

    public function get($key = null, $default = null);

    public function hasSession($key = null);
}