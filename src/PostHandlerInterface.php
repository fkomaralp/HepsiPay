<?php

namespace Fkomaralp\HepsiPay;

interface PostHandlerInterface
{
    public function set($key, $value);

    public function get($key = null, $default = null);

    public function hasPost($key = null);
}