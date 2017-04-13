<p align="center"><img src="https://www.hepsipay.com/public/img/theme/logo.png"></p>


## Giriş

Laravel 5 için HepsiPay client entegrasyonu

## Kurulum

Kurulum için :

    composer require fkomaralp/hepsipay

Sonra, `config/app.php` dosyasını aşağıdaki şekilde düzenle:

```php
'providers' => [
    //...

            Fkomaralp\HepsiPay\HepsiPayServiceProvider::class,
],

'aliases' => [
    //...
            'HepsiPay' => Fkomaralp\HepsiPay\HepsiPayFacade::class,
],
```

## Temel Kullanım

```php
<?php

namespace App\Http\Controllers;

use Fkomaralp\HepsiPay\Request\CreateThreeDSecurePaymentRequest;
use Fkomaralp\HepsiPay\Options;

class SatisController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function satisyap()
    {
        $options = new Options();
        $options->setApiKey('API_KEY'); // Hepsipay tarafından size verilmiş olan API anahtarını giriniz
        $options->setSecretKey('SECRET_KEY'); // Hepsipay tarafından size verilmiş olan SecretKey bilgisini giriniz
        $options->setTestMode(true);

        $request = new CreateThreeDSecurePaymentRequest();
        $request->setOptions($options);
        
        //...
        
    }

}
```
