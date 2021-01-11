##composer.json


Installation 

```php
    composer require fireitsoft/laravel-maxcdn
```

Set your credential in env file.

## .env
```php
MAXCDN_ALIAS=
MAXCDN_KEY=
MAXCDN_SECRET=
```

Usage:

##YourController.php

```php
use FireItSoft\MaxCDN\MaxCDN;
```
 
## Usage
```php
$cdn = new MaxCDN();
$cdn->delete('/zones/pull.json/{zone-id}/cache', [
    'file' => '/test.jpg'
]);
```
