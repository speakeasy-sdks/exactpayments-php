<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use TheLogicStudio\ExactPayments;
use TheLogicStudio\ExactPayments\Models\Shared;
use TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AccountRegisterApplePayDomainsRequest();
    $request->accountId = '<value>';
    $request->applePayDomains = new Shared\ApplePayDomains();
    $request->applePayDomains->domains = ['<value>'];

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->