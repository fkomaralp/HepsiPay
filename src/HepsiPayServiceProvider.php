<?php

namespace Fkomaralp\HepsiPay;

use Illuminate\Support\ServiceProvider;

class HepsiPayServiceProvider extends ServiceProvider {
    public function register ()
    {
        $this->app->bind("hepsipay", function($app){
            return new HepsiPay;
        });
    }

    public function boot ()
    {
    }
}