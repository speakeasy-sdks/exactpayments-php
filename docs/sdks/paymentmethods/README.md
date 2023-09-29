# PaymentMethods
(*paymentMethods*)

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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountDeletePaymentMethodRequest();
    $request->accountId = 'Shilling content Screen';
    $request->tokenId = 'UTF8';

    $response = $sdk->paymentMethods->accountDeletePaymentMethod($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeletePaymentMethodRequest](../../models/operations/AccountDeletePaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountGetPaymentMethodRequest();
    $request->accountId = 'Saint';
    $request->tokenId = 'around restring';

    $response = $sdk->paymentMethods->accountGetPaymentMethod($request);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentMethodRequest](../../models/operations/AccountGetPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountPostPaymentMethodRequest();
    $request->requestBody = new CardSchema();
    $request->requestBody->billingDetails = new CardSchemaBillingDetails();
    $request->requestBody->billingDetails->address = new CardSchemaBillingDetailsAddress();
    $request->requestBody->billingDetails->address->city = 'Fort Joshuahstead';
    $request->requestBody->billingDetails->address->country = 'New Zealand';
    $request->requestBody->billingDetails->address->line1 = 'Chief male stable';
    $request->requestBody->billingDetails->address->line2 = 'Kong Corwin';
    $request->requestBody->billingDetails->address->postalCode = '97537';
    $request->requestBody->billingDetails->address->state = 'Keyboard Southaven inasmuch';
    $request->requestBody->billingDetails->email = 'Aubree_Thompson@yahoo.com';
    $request->requestBody->billingDetails->name = 'ipsa quantifying';
    $request->requestBody->billingDetails->phone = '750-792-4772 x301';
    $request->requestBody->card = new CardSchemaCard();
    $request->requestBody->card->cvc = 'JBOD';
    $request->requestBody->card->cvcIndicator = CardSchemaCardCvcIndicator::Present;
    $request->requestBody->card->expiry = new CardSchemaCardExpiry();
    $request->requestBody->card->expiry->month = 253435;
    $request->requestBody->card->expiry->year = 459026;
    $request->requestBody->card->number = 'female';
    $request->requestBody->card->tokenType = 'reboot';
    $request->requestBody->type = 'repeatedly Virginia iusto';
    $request->accountId = 'Palladium Diesel';

    $response = $sdk->paymentMethods->accountPostPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentMethodRequest](../../models/operations/AccountPostPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\MicroDepositVerificationRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountPostVerifyMicrodepositsRequest();
    $request->microDepositVerificationRequest = new MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 768582;
    $request->microDepositVerificationRequest->amount2 = 195872;
    $request->accountId = 'olive zowie Global';
    $request->paymentToken = 'Ouguiya Kwacha up';

    $response = $sdk->paymentMethods->accountPostVerifyMicrodeposits($request);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostVerifyMicrodepositsRequest](../../models/operations/AccountPostVerifyMicrodepositsRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeletePaymentMethodRequest();
    $request->tokenId = 'Assurance Metal Money';

    $response = $sdk->paymentMethods->deletePaymentMethod($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DeletePaymentMethodRequest](../../models/operations/DeletePaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetPaymentMethodRequest();
    $request->tokenId = 'Accountability Netherlands imprison';

    $response = $sdk->paymentMethods->getPaymentMethod($request);

    if ($response->lookupNPaymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentMethodRequest](../../models/operations/GetPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new CardSchema();
    $request->billingDetails = new CardSchemaBillingDetails();
    $request->billingDetails->address = new CardSchemaBillingDetailsAddress();
    $request->billingDetails->address->city = 'South Brandon';
    $request->billingDetails->address->country = 'India';
    $request->billingDetails->address->line1 = 'microchip Convertible';
    $request->billingDetails->address->line2 = 'morph Pound cattle';
    $request->billingDetails->address->postalCode = '31939-6047';
    $request->billingDetails->address->state = 'orchid analyzer';
    $request->billingDetails->email = 'Bonnie_Frami15@hotmail.com';
    $request->billingDetails->name = 'besides Costa Porsche';
    $request->billingDetails->phone = '526-295-7778 x9611';
    $request->card = new CardSchemaCard();
    $request->card->cvc = '24/365';
    $request->card->cvcIndicator = CardSchemaCardCvcIndicator::Illegible;
    $request->card->expiry = new CardSchemaCardExpiry();
    $request->card->expiry->month = 902661;
    $request->card->expiry->year = 854785;
    $request->card->number = 'Hybrid panel IP';
    $request->card->tokenType = 'Oval female Olathe';
    $request->type = 'purple Horizontal turquoise';

    $response = $sdk->paymentMethods->postPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [mixed](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\MicroDepositVerificationRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostVerifyMicrodepositsRequest();
    $request->microDepositVerificationRequest = new MicroDepositVerificationRequest();
    $request->microDepositVerificationRequest->amount1 = 849170;
    $request->microDepositVerificationRequest->amount2 = 669926;
    $request->paymentToken = 'SSL Folk Account';

    $response = $sdk->paymentMethods->postVerifyMicrodeposits($request);

    if ($response->paymentAchSchema !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsRequest](../../models/operations/PostVerifyMicrodepositsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostVerifyMicrodepositsResponse](../../models/operations/PostVerifyMicrodepositsResponse.md)**

