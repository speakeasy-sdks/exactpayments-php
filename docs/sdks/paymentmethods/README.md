# PaymentMethods


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

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountDeletePaymentMethodRequest();
    $request->accountId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->paymentMethods->accountDeletePaymentMethod($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodRequest](../../Models/Operations/AccountDeletePaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodResponse](../../Models/Operations/AccountDeletePaymentMethodResponse.md)**


## accountGetPaymentMethod

API to allow an Organization to retrieve a Payment Method of a specific merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountGetPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->paymentMethods->accountGetPaymentMethod($request);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodRequest](../../Models/Operations/AccountGetPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodResponse](../../Models/Operations/AccountGetPaymentMethodResponse.md)**


## accountPostPaymentMethod

API to allow an Organization to create a payment token (Payment Method) for a merchant (accountId).

Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.

If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountPostPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->requestBody = '<value>';;

    $response = $sdk->paymentMethods->accountPostPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodRequest](../../Models/Operations/AccountPostPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodResponse](../../Models/Operations/AccountPostPaymentMethodResponse.md)**


## accountPostVerifyMicrodeposits

API for an Organization to verify micro-deposits on an ACH Payment Method for a merchant (accountId).

Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.

The amounts can then be submitted through this endpoint to complete account verification.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountPostVerifyMicrodepositsRequest();
    $request->accountId = '<value>';
    $request->paymentToken = '<value>';
    $request->microDepositVerificationRequest = new Shared\MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 768582;
    $request->microDepositVerificationRequest->amount2 = 195872;;

    $response = $sdk->paymentMethods->accountPostVerifyMicrodeposits($request);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsRequest](../../Models/Operations/AccountPostVerifyMicrodepositsRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsResponse](../../Models/Operations/AccountPostVerifyMicrodepositsResponse.md)**


## deletePaymentMethod

API to allow a merchant to delete a Payment Method.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeletePaymentMethodRequest();
    $request->tokenId = '<value>';;

    $response = $sdk->paymentMethods->deletePaymentMethod($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodRequest](../../Models/Operations/DeletePaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodResponse](../../Models/Operations/DeletePaymentMethodResponse.md)**


## getPaymentMethod

API to allow a merchant to retrieve a specific Payment Method.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentMethodRequest();
    $request->tokenId = '<value>';;

    $response = $sdk->paymentMethods->getPaymentMethod($request);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodRequest](../../Models/Operations/GetPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodResponse](../../Models/Operations/GetPaymentMethodResponse.md)**


## postPaymentMethod

API to allow a merchant to create a payment token (Payment Method).

Note that if you are storing card information, the field `card.tokenType` can be set to various values which control where the card data will be stored. `platform` means that Exact Payments will store the card, and this is of no additional charge. `network` means that the card will be stored with a card network provider, and as an added benefit will be updated should the card be renewed or the meta data for the card change. In order to use `network` as the card token type, this feature must be enabled on your account.

If you are storing ACH related account information, then the data will only be stored on the `platform`.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
    '<value>';

    $response = $sdk->paymentMethods->postPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [mixed](../../.md)                         | :heavy_check_mark:                         | The request object to use for the request. |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentMethodResponse](../../Models/Operations/PostPaymentMethodResponse.md)**


## postVerifyMicrodeposits

API for a merchant to verify micro-deposits on an ACH Payment Method.

Before using an ACH Payment Method, the customer must verify ownership of the account. We send two small deposits to the bank account and the account owner will need to confirm the amounts received in their account.

The amounts can then be submitted through this endpoint to complete account verification.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostVerifyMicrodepositsRequest();
    $request->paymentToken = '<value>';
    $request->microDepositVerificationRequest = new Shared\MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 849170;
    $request->microDepositVerificationRequest->amount2 = 669926;;

    $response = $sdk->paymentMethods->postVerifyMicrodeposits($request);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsRequest](../../Models/Operations/PostVerifyMicrodepositsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsResponse](../../Models/Operations/PostVerifyMicrodepositsResponse.md)**

