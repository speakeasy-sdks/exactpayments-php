# APIHealthCheck
(*apiHealthCheck*)

### Available Operations

* [getStatus](#getstatus) - Retrieve Status

## getStatus

A method in which you can check wether or not the Exact Payments service is operational.  Used correctly, this can proactively notify your merchants on the very rare occasion that the Exact Payments service is not operational

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;

$sdk = ExactPayments::builder()
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


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetStatusResponse](../../models/operations/GetStatusResponse.md)**

