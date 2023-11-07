<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use TheLogicStudio\ExactPayments;
use TheLogicStudio\ExactPayments\Models\Shared;
use TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AccountRegisterApplePayDomainsRequest();
    $request->applePayDomains = new Shared\ApplePayDomains();
    $request->applePayDomains->domains = ['string'];
    $request->accountId = 'string';

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->