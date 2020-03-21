# wapi
WEDOS API PHP Layer

Web projektu: https://github.com/podnik/wapi

Packagist repozitář: https://packagist.org/packages/podnik/wapi

**INSTALACE**

`composer require podnik/wapi`

**PŘÍKLAD**

```php
$wapi = new Wapi;
$wapi->auth("uzivatel","heslo"); // Autentizace
$response = $wapi->domain("domena.cz")->check(); // Vrátí objekt Wapi/Response
echo $response->getResult(); // Vypíše "OK" nebo "Domain is already registered"
```