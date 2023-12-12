# Payments


## Overview

Authorize payments and capture funds.

### Available Operations

* [accountCapturePayment](#accountcapturepayment) - Capture an existing authorization for a given Account
* [accountGetPayment](#accountgetpayment) - Get details of a specific Payment for a given Account
* [accountGetPayments](#accountgetpayments) - Get Payments for a given Account
* [accountPostPayment](#accountpostpayment) - Create Payment for a given Account
* [accountRefundPayment](#accountrefundpayment) - Refund a specific Payment for a given Account
* [accountVoidPayment](#accountvoidpayment) - Void a specific Payment for a given Account
* [capturePayment](#capturepayment) - Capture an existing authorization
* [getPayment](#getpayment) - Get details of a specific Payment
* [getPayments](#getpayments) - Get Payments
* [postPayment](#postpayment) - Create Payment
* [refundPayment](#refundpayment) - Refund a specific payment
* [voidPayment](#voidpayment) - Void a specific Payment

## accountCapturePayment

API for an Organization to capture an existing authorization for a merchant (accountId). Note that ACH transactions are not able to be captured as they do not support pre-authorization.

Please note that the Organization(partner) needs to authenticate using the partner or org token.

Capture completes the transaction so that it can be funded. Captures can be for less, same or more than the original authorization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountCapturePaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::Three;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->accountId = 'string';
    $request->paymentId = 'string';;

    $response = $sdk->payments->accountCapturePayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentRequest](../../Models/Operations/AccountCapturePaymentRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountCapturePaymentResponse](../../Models/Operations/AccountCapturePaymentResponse.md)**


## accountGetPayment

API for an Organization to retrieve the details of a specific Payment for a specific merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountGetPaymentRequest();
    $request->accountId = 'string';
    $request->paymentId = 'string';;

    $response = $sdk->payments->accountGetPayment($request);

    if ($response->twoHundredApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentRequest](../../Models/Operations/AccountGetPaymentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentResponse](../../Models/Operations/AccountGetPaymentResponse.md)**


## accountGetPayments

API for an Organization to fetch a list of Payments for a specific merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountGetPaymentsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->accountId = 'string';;

    $response = $sdk->payments->accountGetPayments($request);

    if ($response->twoHundredApplicationJsonAnies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsRequest](../../Models/Operations/AccountGetPaymentsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsResponse](../../Models/Operations/AccountGetPaymentsResponse.md)**


## accountPostPayment

API for an Organization to create a Payment on behalf of a merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or organization token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountPostPaymentRequest();
    $request->newPayment = new Shared\NewPayment();
    $request->newPayment->amount = 10;
    $request->newPayment->capture = true;
    $request->newPayment->customer = new Shared\NewPaymentCustomer();
    $request->newPayment->customer->address = new Shared\NewPaymentAddress();
    $request->newPayment->customer->address->city = 'Ontario';
    $request->newPayment->customer->address->countryCode = 'USA';
    $request->newPayment->customer->address->line1 = 'Fairfield Ranch';
    $request->newPayment->customer->address->line2 = 'Wycliffe';
    $request->newPayment->customer->address->postalCode = '91710';
    $request->newPayment->customer->address->state = 'CA';
    $request->newPayment->customer->email = 'john@acmecorp.com';
    $request->newPayment->customer->name = 'John Doe';
    $request->newPayment->customer->phone = '8886178190';
    $request->newPayment->customer->phoneType = Shared\NewPaymentPhoneType::H;
    $request->newPayment->language = Shared\Language::Es;
    $request->newPayment->level3 = new Shared\NewPaymentLevel3();
    $request->newPayment->level3->altTaxAmount = 4;
    $request->newPayment->level3->altTaxId = 'ref123';
    $request->newPayment->level3->discountAmount = 2;
    $request->newPayment->level3->dutyAmount = 2;
    $request->newPayment->level3->freightAmount = 4;
    $request->newPayment->level3->lineItems = [
        new Shared\LineItems(),
    ];
    $request->newPayment->level3->shipFromZip = '901601';
    $request->newPayment->level3->shipTo = new Shared\NewPaymentShipTo();
    $request->newPayment->level3->shipTo->address = new Shared\NewPaymentSchemasAddress();
    $request->newPayment->level3->shipTo->address->city = 'Ontario';
    $request->newPayment->level3->shipTo->address->countryCode = 'USA';
    $request->newPayment->level3->shipTo->address->line1 = 'Fairfield Ranch';
    $request->newPayment->level3->shipTo->address->line2 = 'wycliffe';
    $request->newPayment->level3->shipTo->address->postalCode = '91710';
    $request->newPayment->level3->shipTo->address->state = 'CA';
    $request->newPayment->level3->shipTo->customerNumber = 'cust123';
    $request->newPayment->level3->shipTo->email = 'john@example.com';
    $request->newPayment->level3->shipTo->name = 'John Doe';
    $request->newPayment->level3->shipTo->phone = '8886178190';
    $request->newPayment->level3->shipTo->phoneType = Shared\NewPaymentSchemasPhoneType::N;
    $request->newPayment->level3->taxAmount = 10;
    $request->newPayment->level3->taxRate = 5;
    $request->newPayment->options = new Shared\Options();
    $request->newPayment->options->customerIp = '198.168.71.51';
    $request->newPayment->options->ecommerceFlag = Shared\NewPaymentEcommerceFlag::One;
    $request->newPayment->options->generateReceipt = true;
    $request->newPayment->options->installmentNumber = '12';
    $request->newPayment->options->thirdPartyId = 'partyid123';
    $request->newPayment->paymentMethod = 'string';
    $request->newPayment->reference = new Shared\NewPaymentReference();
    $request->newPayment->reference->correlationId = 'abc123';
    $request->newPayment->reference->customerRef = 'ref123';
    $request->newPayment->reference->referenceNo = 'ref12345';
    $request->newPayment->softDescriptor = new Shared\NewPaymentSoftDescriptor();
    $request->newPayment->softDescriptor->authTypeIndicator = 'F';
    $request->newPayment->softDescriptor->city = 'Ontario';
    $request->newPayment->softDescriptor->countryCode = 'USA';
    $request->newPayment->softDescriptor->dbaName = 'name';
    $request->newPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->newPayment->softDescriptor->mcc = '5699';
    $request->newPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->newPayment->softDescriptor->mvvMaid = '5679';
    $request->newPayment->softDescriptor->phone = '8886178190';
    $request->newPayment->softDescriptor->postalCode = '91710';
    $request->newPayment->softDescriptor->state = 'CA';
    $request->newPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->newPayment->softDescriptor->submerchantId = 'xyz123';
    $request->newPayment->softDescriptor->taxId = 'abc123';
    $request->newPayment->storedCredentials = new Shared\StoredCredentials();
    $request->newPayment->storedCredentials->indicator = '123';
    $request->newPayment->storedCredentials->initiation = 'abc123';
    $request->newPayment->storedCredentials->originalAmount = 123;
    $request->newPayment->storedCredentials->paymentId = 'id123';
    $request->newPayment->storedCredentials->protectbuyIndicator = 'xyz';
    $request->newPayment->storedCredentials->schedule = 'abc123';
    $request->newPayment->surchargeAmount = 3;
    $request->newPayment->taxAmount = 5;
    $request->newPayment->threeDSecure = new Shared\ThreeDSecure();
    $request->newPayment->threeDSecure->cavv = 'cavv123';
    $request->newPayment->threeDSecure->directoryServerTransactionId = 'trans123';
    $request->newPayment->threeDSecure->programProtocol = Shared\ProgramProtocol::Two;
    $request->newPayment->threeDSecure->xid = 'id123';
    $request->accountId = 'string';;

    $response = $sdk->payments->accountPostPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentRequest](../../Models/Operations/AccountPostPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostPaymentResponse](../../Models/Operations/AccountPostPaymentResponse.md)**


## accountRefundPayment

API for an Organization to refund a specific Payment for a merchant (accountId). Note that ACH transactions are not refundable.

Please note that the Organization(partner) needs to authenticate using the partner or org token.

Refunds typically happen after a batch closes and refunds a partial or whole amount of the transaction.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountRefundPaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::R;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->accountId = 'string';
    $request->paymentId = 'string';;

    $response = $sdk->payments->accountRefundPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPaymentRequest](../../Models/Operations/AccountRefundPaymentRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountRefundPaymentResponse](../../Models/Operations/AccountRefundPaymentResponse.md)**


## accountVoidPayment

API for an Organization to void a specific Payment for a merchant (accountId).

Please note that the Organization(partner) needs to authenticate using the partner or org token.

Note that ACH transactions are not voidable. Voids typically happen before a batch closes and removes the transaction from the batch.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountVoidPaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::Seven;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->accountId = 'string';
    $request->paymentId = 'string';;

    $response = $sdk->payments->accountVoidPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentRequest](../../Models/Operations/AccountVoidPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentResponse](../../Models/Operations/AccountVoidPaymentResponse.md)**


## capturePayment

API for a merchant to capture an existing authorization. Note that ACH transactions are not able to be captured as they do not support pre-authorization.

Capture completes the transaction so that it can be funded. Captures can be for less, same or more than the original authorization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CapturePaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::One;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->paymentId = 'string';;

    $response = $sdk->payments->capturePayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\CapturePaymentRequest](../../Models/Operations/CapturePaymentRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CapturePaymentResponse](../../Models/Operations/CapturePaymentResponse.md)**


## getPayment

API for a merchant to retrieve the details of a specific Payment.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentRequest();
    $request->paymentId = 'string';;

    $response = $sdk->payments->getPayment($request);

    if ($response->twoHundredApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentRequest](../../Models/Operations/GetPaymentRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentResponse](../../Models/Operations/GetPaymentResponse.md)**


## getPayments

API for a merchant to fetch a list of Payments.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';;

    $response = $sdk->payments->getPayments($request);

    if ($response->twoHundredApplicationJsonAnies !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsRequest](../../Models/Operations/GetPaymentsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetPaymentsResponse](../../Models/Operations/GetPaymentsResponse.md)**


## postPayment

API for a merchant to create a Payment.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Shared\NewPayment();
    $request->amount = 10;
    $request->capture = true;
    $request->customer = new Shared\NewPaymentCustomer();
    $request->customer->address = new Shared\NewPaymentAddress();
    $request->customer->address->city = 'Ontario';
    $request->customer->address->countryCode = 'USA';
    $request->customer->address->line1 = 'Fairfield Ranch';
    $request->customer->address->line2 = 'Wycliffe';
    $request->customer->address->postalCode = '91710';
    $request->customer->address->state = 'CA';
    $request->customer->email = 'john@acmecorp.com';
    $request->customer->name = 'John Doe';
    $request->customer->phone = '8886178190';
    $request->customer->phoneType = Shared\NewPaymentPhoneType::W;
    $request->language = Shared\Language::En;
    $request->level3 = new Shared\NewPaymentLevel3();
    $request->level3->altTaxAmount = 4;
    $request->level3->altTaxId = 'ref123';
    $request->level3->discountAmount = 2;
    $request->level3->dutyAmount = 2;
    $request->level3->freightAmount = 4;
    $request->level3->lineItems = [
        new Shared\LineItems(),
    ];
    $request->level3->shipFromZip = '901601';
    $request->level3->shipTo = new Shared\NewPaymentShipTo();
    $request->level3->shipTo->address = new Shared\NewPaymentSchemasAddress();
    $request->level3->shipTo->address->city = 'Ontario';
    $request->level3->shipTo->address->countryCode = 'USA';
    $request->level3->shipTo->address->line1 = 'Fairfield Ranch';
    $request->level3->shipTo->address->line2 = 'wycliffe';
    $request->level3->shipTo->address->postalCode = '91710';
    $request->level3->shipTo->address->state = 'CA';
    $request->level3->shipTo->customerNumber = 'cust123';
    $request->level3->shipTo->email = 'john@example.com';
    $request->level3->shipTo->name = 'John Doe';
    $request->level3->shipTo->phone = '8886178190';
    $request->level3->shipTo->phoneType = Shared\NewPaymentSchemasPhoneType::W;
    $request->level3->taxAmount = 10;
    $request->level3->taxRate = 5;
    $request->options = new Shared\Options();
    $request->options->customerIp = '198.168.71.51';
    $request->options->ecommerceFlag = Shared\NewPaymentEcommerceFlag::X;
    $request->options->generateReceipt = true;
    $request->options->installmentNumber = '12';
    $request->options->thirdPartyId = 'partyid123';
    $request->paymentMethod = 'string';
    $request->reference = new Shared\NewPaymentReference();
    $request->reference->correlationId = 'abc123';
    $request->reference->customerRef = 'ref123';
    $request->reference->referenceNo = 'ref12345';
    $request->softDescriptor = new Shared\NewPaymentSoftDescriptor();
    $request->softDescriptor->authTypeIndicator = 'F';
    $request->softDescriptor->city = 'Ontario';
    $request->softDescriptor->countryCode = 'USA';
    $request->softDescriptor->dbaName = 'name';
    $request->softDescriptor->email = 'john@acmecorp.com';
    $request->softDescriptor->mcc = '5699';
    $request->softDescriptor->merchantContactInfo = '8886178190';
    $request->softDescriptor->mvvMaid = '5679';
    $request->softDescriptor->phone = '8886178190';
    $request->softDescriptor->postalCode = '91710';
    $request->softDescriptor->state = 'CA';
    $request->softDescriptor->street = 'Fairfield Ranch';
    $request->softDescriptor->submerchantId = 'xyz123';
    $request->softDescriptor->taxId = 'abc123';
    $request->storedCredentials = new Shared\StoredCredentials();
    $request->storedCredentials->indicator = '123';
    $request->storedCredentials->initiation = 'abc123';
    $request->storedCredentials->originalAmount = 123;
    $request->storedCredentials->paymentId = 'id123';
    $request->storedCredentials->protectbuyIndicator = 'xyz';
    $request->storedCredentials->schedule = 'abc123';
    $request->surchargeAmount = 3;
    $request->taxAmount = 5;
    $request->threeDSecure = new Shared\ThreeDSecure();
    $request->threeDSecure->cavv = 'cavv123';
    $request->threeDSecure->directoryServerTransactionId = 'trans123';
    $request->threeDSecure->programProtocol = Shared\ProgramProtocol::One;
    $request->threeDSecure->xid = 'id123';;

    $response = $sdk->payments->postPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\TheLogicStudio\ExactPayments\Models\Shared\NewPayment](../../Models/Shared/NewPayment.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostPaymentResponse](../../Models/Operations/PostPaymentResponse.md)**


## refundPayment

API for a merchant to refund a specific payment. Note that ACH transactions are not refundable. Refunds typically happen after a batch closes and refunds a partial or whole amount of the transaction.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RefundPaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::Three;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->paymentId = 'string';;

    $response = $sdk->payments->refundPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\RefundPaymentRequest](../../Models/Operations/RefundPaymentRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\RefundPaymentResponse](../../Models/Operations/RefundPaymentResponse.md)**


## voidPayment

API for a merchant to void a specific Payment. Note that ACH transactions are not voidable. Voids typically happen before a batch closes and removes the transaction from the batch.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\VoidPaymentRequest();
    $request->referencedPayment = new Shared\ReferencedPayment();
    $request->referencedPayment->amount = 100;
    $request->referencedPayment->authorization = 'ET3516';
    $request->referencedPayment->options = new Shared\ReferencedPaymentOptions();
    $request->referencedPayment->options->customerIp = '138.84.54.82';
    $request->referencedPayment->options->ecommerceFlag = Shared\ReferencedPaymentEcommerceFlag::Eight;
    $request->referencedPayment->options->generateReceipt = true;
    $request->referencedPayment->options->installmentNumber = '12';
    $request->referencedPayment->options->thirdPartyId = 'partyid123';
    $request->referencedPayment->reference = new Shared\ReferencedPaymentReference();
    $request->referencedPayment->reference->correlationId = 'abc123';
    $request->referencedPayment->reference->customerRef = 'ref123';
    $request->referencedPayment->reference->referenceNo = 'ref12345';
    $request->referencedPayment->softDescriptor = new Shared\ReferencedPaymentSoftDescriptor();
    $request->referencedPayment->softDescriptor->authTypeIndicator = 'F';
    $request->referencedPayment->softDescriptor->city = 'Ontario';
    $request->referencedPayment->softDescriptor->countryCode = 'USA';
    $request->referencedPayment->softDescriptor->dbaName = 'name';
    $request->referencedPayment->softDescriptor->email = 'john@acmecorp.com';
    $request->referencedPayment->softDescriptor->mcc = 'mcc';
    $request->referencedPayment->softDescriptor->merchantContactInfo = '8886178190';
    $request->referencedPayment->softDescriptor->mvvMaid = '5679';
    $request->referencedPayment->softDescriptor->phone = '8886178190';
    $request->referencedPayment->softDescriptor->postalCode = '91710';
    $request->referencedPayment->softDescriptor->state = 'CA';
    $request->referencedPayment->softDescriptor->street = 'Fairfield Ranch';
    $request->referencedPayment->softDescriptor->submerchantId = 'xyz123';
    $request->referencedPayment->softDescriptor->taxId = 'abc123';
    $request->paymentId = 'string';;

    $response = $sdk->payments->voidPayment($request);

    if ($response->twoHundredAndOneApplicationJsonPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\VoidPaymentRequest](../../Models/Operations/VoidPaymentRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\VoidPaymentResponse](../../Models/Operations/VoidPaymentResponse.md)**

