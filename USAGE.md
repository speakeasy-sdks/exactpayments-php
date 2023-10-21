<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use TheLogicStudio\ExactPayments\ExactPayments;
use TheLogicStudio\ExactPayments\Models\Shared\Security;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->apiHealthCheck->getStatus();

    if ($response->getStatus200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->