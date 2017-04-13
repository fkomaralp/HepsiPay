<?php

namespace Fkomaralp\HepsiPay;

interface HttpClientInterface
{
    public function get($url);

    public function post($url, $header, $content);

    public function put($url, $header, $content);

    public function delete($url, $header, $content = null);
}