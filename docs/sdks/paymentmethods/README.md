# paymentMethods

## Overview

Tokenize payment details and manage those payment methods.

### Available Operations

* [accountDeletePaymentMethod](#accountdeletepaymentmethod) - Delete a Payment Method for a given Account
* [accountGetPaymentMethod](#accountgetpaymentmethod) - Retrieve a Payment Method for a given Account
* [accountPostPaymentMethod](#accountpostpaymentmethod) - Create Payment Method for a given Account
* [accountPostVerifyMicrodeposits](#accountpostverifymicrodeposits) - Verify micro-deposits on an ACH Payment Method for a given Account
* [deletePaymentMethod](#deletepaymentmethod) - Delete a Payment Method
* [getPaymentMethod](#getpaymentmethod) - Retrieve a Payment Method
* [postPaymentMethod](#postpaymentmethod) - Create Payment Method
* [postVerifyMicrodeposits](#postverifymicrodeposits) - Verify micro-deposits on an ACH Payment Method

## accountDeletePaymentMethod

API to allow an Organization to delete a Payment Method for a merchant (accountId).

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountDeletePaymentMethodRequest();
    $request->accountId = 'blanditiis';
    $request->tokenId = 'deleniti';

    $requestSecurity = new AccountDeletePaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->accountDeletePaymentMethod($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodRequest](../../models/operations/AccountDeletePaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodSecurity](../../models/operations/AccountDeletePaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodResponse](../../models/operations/AccountDeletePaymentMethodResponse.md)**


## accountGetPaymentMethod

API to allow an Organization to retrieve a Payment Method of a specific merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountGetPaymentMethodRequest();
    $request->accountId = 'sapiente';
    $request->tokenId = 'amet';

    $requestSecurity = new AccountGetPaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->accountGetPaymentMethod($request, $requestSecurity);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodRequest](../../models/operations/AccountGetPaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodSecurity](../../models/operations/AccountGetPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodResponse](../../models/operations/AccountGetPaymentMethodResponse.md)**


## accountPostPaymentMethod

API to allow an Organization to create a payment token (Payment Method) for a merchant (accountId).

Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.

If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountPostPaymentMethodRequest();
    $request->requestBody = new AchSchema();
    $request->requestBody->ach = new AchSchemaAch();
    $request->requestBody->ach->accountNumber = 'nisi';
    $request->requestBody->ach->bankAccountType = 'vel';
    $request->requestBody->ach->plaidToken = 'natus';
    $request->requestBody->ach->routingNumber = 'omnis';
    $request->requestBody->billingDetails = new AchSchemaBillingDetails();
    $request->requestBody->billingDetails->address = new BillingDetailsAddress();
    $request->requestBody->billingDetails->address->city = 'Aileenport';
    $request->requestBody->billingDetails->address->country = 'French Polynesia';
    $request->requestBody->billingDetails->address->line1 = 'distinctio';
    $request->requestBody->billingDetails->address->line2 = 'id';
    $request->requestBody->billingDetails->address->postalCode = '23674';
    $request->requestBody->billingDetails->address->state = 'vero';
    $request->requestBody->billingDetails->businessName = 'aspernatur';
    $request->requestBody->billingDetails->email = 'Eliane.Bosco@gmail.com';
    $request->requestBody->billingDetails->name = 'Miss Julian Marvin';
    $request->requestBody->billingDetails->phone = '1-442-913-0498 x2857';
    $request->requestBody->type = 'in';
    $request->accountId = 'architecto';

    $requestSecurity = new AccountPostPaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->accountPostPaymentMethod($request, $requestSecurity);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodRequest](../../models/operations/AccountPostPaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodSecurity](../../models/operations/AccountPostPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodResponse](../../models/operations/AccountPostPaymentMethodResponse.md)**


## accountPostVerifyMicrodeposits

API for an Organization to verify micro-deposits on an ACH Payment Method for a merchant (accountId).

Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.

The amounts can then be submitted through this endpoint to complete account verification.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\MicroDepositVerificationRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountPostVerifyMicrodepositsRequest();
    $request->microDepositVerificationRequest = new MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 99569;
    $request->microDepositVerificationRequest->amount2 = 919483;
    $request->accountId = 'ullam';
    $request->paymentToken = 'expedita';

    $requestSecurity = new AccountPostVerifyMicrodepositsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->accountPostVerifyMicrodeposits($request, $requestSecurity);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsRequest](../../models/operations/AccountPostVerifyMicrodepositsRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsSecurity](../../models/operations/AccountPostVerifyMicrodepositsSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsResponse](../../models/operations/AccountPostVerifyMicrodepositsResponse.md)**


## deletePaymentMethod

API to allow a merchant to delete a Payment Method.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeletePaymentMethodRequest();
    $request->tokenId = 'nihil';

    $requestSecurity = new DeletePaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->deletePaymentMethod($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodRequest](../../models/operations/DeletePaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodSecurity](../../models/operations/DeletePaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodResponse](../../models/operations/DeletePaymentMethodResponse.md)**


## getPaymentMethod

API to allow a merchant to retrieve a specific Payment Method.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetPaymentMethodRequest();
    $request->tokenId = 'repellat';

    $requestSecurity = new GetPaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->getPaymentMethod($request, $requestSecurity);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodRequest](../../models/operations/GetPaymentMethodRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodSecurity](../../models/operations/GetPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodResponse](../../models/operations/GetPaymentMethodResponse.md)**


## postPaymentMethod

API to allow a merchant to create a payment token (Payment Method).

Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.

If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostPaymentMethodSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AchSchema();
    $request->ach = new AchSchemaAch();
    $request->ach->accountNumber = 'sed';
    $request->ach->bankAccountType = 'saepe';
    $request->ach->plaidToken = 'pariatur';
    $request->ach->routingNumber = 'accusantium';
    $request->billingDetails = new AchSchemaBillingDetails();
    $request->billingDetails->address = new BillingDetailsAddress();
    $request->billingDetails->address->city = 'New Leviville';
    $request->billingDetails->address->country = 'British Indian Ocean Territory (Chagos Archipelago)';
    $request->billingDetails->address->line1 = 'quo';
    $request->billingDetails->address->line2 = 'illum';
    $request->billingDetails->address->postalCode = '84514-0096';
    $request->billingDetails->address->state = 'ipsam';
    $request->billingDetails->businessName = 'voluptate';
    $request->billingDetails->email = 'Mireya.Beatty97@yahoo.com';
    $request->billingDetails->name = 'Miss Ginger Feeney';
    $request->billingDetails->phone = '771.454.0311 x01742';
    $request->type = 'vero';

    $requestSecurity = new PostPaymentMethodSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->postPaymentMethod($request, $requestSecurity);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [mixed](../../models//.md)                                                                                                        | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentMethodSecurity](../../models/operations/PostPaymentMethodSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentMethodResponse](../../models/operations/PostPaymentMethodResponse.md)**


## postVerifyMicrodeposits

API for a merchant to verify micro-deposits on an ACH Payment Method.

Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.

The amounts can then be submitted through this endpoint to complete account verification.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\MicroDepositVerificationRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostVerifyMicrodepositsRequest();
    $request->microDepositVerificationRequest = new MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 345352;
    $request->microDepositVerificationRequest->amount2 = 944120;
    $request->paymentToken = 'recusandae';

    $requestSecurity = new PostVerifyMicrodepositsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->paymentMethods->postVerifyMicrodeposits($request, $requestSecurity);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsRequest](../../models/operations/PostVerifyMicrodepositsRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsSecurity](../../models/operations/PostVerifyMicrodepositsSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsResponse](../../models/operations/PostVerifyMicrodepositsResponse.md)**

