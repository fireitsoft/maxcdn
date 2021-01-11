##composer.json


Installation 

```php
    composer require fireitsoft/maxcdn
```

Set your credential in env file.

## .env
```php
MAXCDN_ALIAS=
MAXCDN_KEY=
MAXCDN_SECRET=
```

Usage:

In your controller ##YourController.php

```php
use FireItSoft\MaxCdn\MaxCdn;
```
 
## Usage
```php
$cdn = new MaxCdn();
$cdn->delete('/zones/pull.json/{zone-id}/cache', [
    'file' => '/test.jpg'
]);
```
