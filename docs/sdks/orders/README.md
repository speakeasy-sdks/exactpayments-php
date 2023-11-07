# Orders


## Overview

Handle payments from your payment form with Exact.JS

### Available Operations

* [getAccountAccountIdOrdersOrderId](#getaccountaccountidordersorderid) - Get Order Details
* [getOrders](#getorders) - List Orders
* [postAccountAccountIdOrdersOrderIdPay](#postaccountaccountidordersorderidpay) - Pay for Order with Token
* [postAccountAccountIdOrders](#postaccountaccountidorders) - Create Order specifying an account
* [postOrders](#postorders) - Create Order
* [postOrdersOrderIdAccessToken](#postordersorderidaccesstoken) - Create New Access Token
* [putAccountAccountIdOrdersOrderId](#putaccountaccountidordersorderid) - Update Order
* [putOrdersOrderIdReset](#putordersorderidreset) - Reset Payment Attempts

## getAccountAccountIdOrdersOrderId

Retrieve a specific Order for the given Account and Order identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAccountAccountIdOrdersOrderIdRequest();
    $request->accountId = 'string';
    $request->orderId = 'string';

    $response = $sdk->orders->getAccountAccountIdOrdersOrderId($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdRequest](../../models/operations/GetAccountAccountIdOrdersOrderIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdResponse](../../models/operations/GetAccountAccountIdOrdersOrderIdResponse.md)**


## getOrders

List all Orders for API key's account, paginated and optionally restricted to a date range. Date range must be no more than six months.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetOrdersRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->from = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-01T00:00:00.000Z');
    $request->to = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-31T00:00:00.000Z');

    $response = $sdk->orders->getOrders($request);

    if ($response->orderSearch !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersRequest](../../models/operations/GetOrdersRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersResponse](../../models/operations/GetOrdersResponse.md)**


## postAccountAccountIdOrdersOrderIdPay

Pay for Order with Token

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostAccountAccountIdOrdersOrderIdPayRequest();
    $request->requestBody = new Operations\PostAccountAccountIdOrdersOrderIdPayRequestBody();
    $request->requestBody->paymentMethod = new Operations\PaymentMethod();
    $request->requestBody->paymentMethod->token = 'f0db7065-be66-4501-b49b-5eb56e265cb1';
    $request->accountId = 'string';
    $request->orderId = 'string';

    $response = $sdk->orders->postAccountAccountIdOrdersOrderIdPay($request);

    if ($response->twoHundredApplicationJsonObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequest](../../models/operations/PostAccountAccountIdOrdersOrderIdPayRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayResponse](../../models/operations/PostAccountAccountIdOrdersOrderIdPayResponse.md)**


## postAccountAccountIdOrders

Create an Order, needs to specify which account the Order will belong to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostAccountAccountIdOrdersRequest();
    $request->accountId = 'string';
    $request->order = new Shared\Order();
    $request->order->amount = 123;
    $request->order->billing = new Shared\CustomerDetails();
    $request->order->billing->address = new Shared\BillingAddress();
    $request->order->billing->address->city = 'Ontario';
    $request->order->billing->address->countryCode = 'USA';
    $request->order->billing->address->line1 = 'Fairfield Ranch';
    $request->order->billing->address->line2 = 'Address line 2';
    $request->order->billing->address->postalCode = '91710';
    $request->order->billing->address->state = 'CA';
    $request->order->billing->email = 'john@acmecorp.com';
    $request->order->billing->name = 'John Doe';
    $request->order->billing->phone = '5551234567';
    $request->order->billing->phoneType = Shared\PhoneType::H;
    $request->order->capture = true;
    $request->order->description = 'Order description';
    $request->order->level3 = new Shared\Level3();
    $request->order->level3->altTaxAmount = 5;
    $request->order->level3->altTaxId = 'a1b2c3';
    $request->order->level3->discountAmount = 5;
    $request->order->level3->dutyAmount = 5;
    $request->order->level3->freightAmount = 5;
    $request->order->level3->lineItems = [
        new Shared\LineItem(),
    ];
    $request->order->level3->shipFromZip = '91710';
    $request->order->level3->shipTo = new Shared\ShipTo();
    $request->order->level3->shipTo->address = new Shared\BillingAddress();
    $request->order->level3->shipTo->address->city = 'Ontario';
    $request->order->level3->shipTo->address->countryCode = 'USA';
    $request->order->level3->shipTo->address->line1 = 'Fairfield Ranch';
    $request->order->level3->shipTo->address->line2 = 'Address line 2';
    $request->order->level3->shipTo->address->postalCode = '91710';
    $request->order->level3->shipTo->address->state = 'CA';
    $request->order->level3->shipTo->customerNumber = 'customerId123';
    $request->order->level3->shipTo->email = 'john@acmecorp.com';
    $request->order->level3->shipTo->name = 'John Doe';
    $request->order->level3->shipTo->phone = '5551234567';
    $request->order->level3->shipTo->phoneType = Shared\ShipToPhoneType::N;
    $request->order->level3->taxAmount = 5;
    $request->order->level3->taxRate = 0.5;
    $request->order->options = new Shared\OrderOptions();
    $request->order->options->customerIp = '198.51.100.42';
    $request->order->options->ecommerceFlag = Shared\EcommerceFlag::One;
    $request->order->options->orderTrackingNumber = 'trackid123';
    $request->order->reference = new Shared\Reference();
    $request->order->reference->correlationId = 'abc123';
    $request->order->reference->customerRef = 'ref123';
    $request->order->reference->reference3 = 'ref12345';
    $request->order->reference->referenceNo = 'ref1234';
    $request->order->softDescriptor = new Shared\SoftDescriptor();
    $request->order->softDescriptor->authTypeIndicator = 'F';
    $request->order->softDescriptor->city = 'Ontario';
    $request->order->softDescriptor->countryCode = 'USA';
    $request->order->softDescriptor->dbaName = 'john';
    $request->order->softDescriptor->email = 'john@example.com';
    $request->order->softDescriptor->mcc = '5699';
    $request->order->softDescriptor->merchantContactInfo = '8886178190';
    $request->order->softDescriptor->mvvMaid = '5679';
    $request->order->softDescriptor->phone = '8886178190';
    $request->order->softDescriptor->postalCode = '91710';
    $request->order->softDescriptor->state = 'CA';
    $request->order->softDescriptor->street = 'Fairfield Ranch';
    $request->order->softDescriptor->submerchantId = 'xyz123';
    $request->order->softDescriptor->taxId = 'abc123';
    $request->order->surchargeAmount = 123;
    $request->order->taxAmount = 123;

    $response = $sdk->orders->postAccountAccountIdOrders($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersRequest](../../models/operations/PostAccountAccountIdOrdersRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersResponse](../../models/operations/PostAccountAccountIdOrdersResponse.md)**


## postOrders

Create an Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\Order();
    $request->amount = 123;
    $request->billing = new Shared\CustomerDetails();
    $request->billing->address = new Shared\BillingAddress();
    $request->billing->address->city = 'Ontario';
    $request->billing->address->countryCode = 'USA';
    $request->billing->address->line1 = 'Fairfield Ranch';
    $request->billing->address->line2 = 'Address line 2';
    $request->billing->address->postalCode = '91710';
    $request->billing->address->state = 'CA';
    $request->billing->email = 'john@acmecorp.com';
    $request->billing->name = 'John Doe';
    $request->billing->phone = '5551234567';
    $request->billing->phoneType = Shared\PhoneType::N;
    $request->capture = true;
    $request->description = 'Order description';
    $request->level3 = new Shared\Level3();
    $request->level3->altTaxAmount = 5;
    $request->level3->altTaxId = 'a1b2c3';
    $request->level3->discountAmount = 5;
    $request->level3->dutyAmount = 5;
    $request->level3->freightAmount = 5;
    $request->level3->lineItems = [
        new Shared\LineItem(),
    ];
    $request->level3->shipFromZip = '91710';
    $request->level3->shipTo = new Shared\ShipTo();
    $request->level3->shipTo->address = new Shared\BillingAddress();
    $request->level3->shipTo->address->city = 'Ontario';
    $request->level3->shipTo->address->countryCode = 'USA';
    $request->level3->shipTo->address->line1 = 'Fairfield Ranch';
    $request->level3->shipTo->address->line2 = 'Address line 2';
    $request->level3->shipTo->address->postalCode = '91710';
    $request->level3->shipTo->address->state = 'CA';
    $request->level3->shipTo->customerNumber = 'customerId123';
    $request->level3->shipTo->email = 'john@acmecorp.com';
    $request->level3->shipTo->name = 'John Doe';
    $request->level3->shipTo->phone = '5551234567';
    $request->level3->shipTo->phoneType = Shared\ShipToPhoneType::W;
    $request->level3->taxAmount = 5;
    $request->level3->taxRate = 0.5;
    $request->options = new Shared\OrderOptions();
    $request->options->customerIp = '198.51.100.42';
    $request->options->ecommerceFlag = Shared\EcommerceFlag::Eight;
    $request->options->orderTrackingNumber = 'trackid123';
    $request->reference = new Shared\Reference();
    $request->reference->correlationId = 'abc123';
    $request->reference->customerRef = 'ref123';
    $request->reference->reference3 = 'ref12345';
    $request->reference->referenceNo = 'ref1234';
    $request->softDescriptor = new Shared\SoftDescriptor();
    $request->softDescriptor->authTypeIndicator = 'F';
    $request->softDescriptor->city = 'Ontario';
    $request->softDescriptor->countryCode = 'USA';
    $request->softDescriptor->dbaName = 'john';
    $request->softDescriptor->email = 'john@example.com';
    $request->softDescriptor->mcc = '5699';
    $request->softDescriptor->merchantContactInfo = '8886178190';
    $request->softDescriptor->mvvMaid = '5679';
    $request->softDescriptor->phone = '8886178190';
    $request->softDescriptor->postalCode = '91710';
    $request->softDescriptor->state = 'CA';
    $request->softDescriptor->street = 'Fairfield Ranch';
    $request->softDescriptor->submerchantId = 'xyz123';
    $request->softDescriptor->taxId = 'abc123';
    $request->surchargeAmount = 123;
    $request->taxAmount = 123;

    $response = $sdk->orders->postOrders($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\TheLogicStudio\ExactPayments\Models\Shared\Order](../../models/shared/Order.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersResponse](../../models/operations/PostOrdersResponse.md)**


## postOrdersOrderIdAccessToken

Create a new access token for this Order. This will invalidate any existing access tokens.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PostOrdersOrderIdAccessTokenRequest();
    $request->orderId = 'string';

    $response = $sdk->orders->postOrdersOrderIdAccessToken($request);

    if ($response->orderAccessToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenRequest](../../models/operations/PostOrdersOrderIdAccessTokenRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenResponse](../../models/operations/PostOrdersOrderIdAccessTokenResponse.md)**


## putAccountAccountIdOrdersOrderId

Update details of an existing Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PutAccountAccountIdOrdersOrderIdRequest();
    $request->accountId = 'string';
    $request->order = new Shared\Order();
    $request->order->amount = 123;
    $request->order->billing = new Shared\CustomerDetails();
    $request->order->billing->address = new Shared\BillingAddress();
    $request->order->billing->address->city = 'Ontario';
    $request->order->billing->address->countryCode = 'USA';
    $request->order->billing->address->line1 = 'Fairfield Ranch';
    $request->order->billing->address->line2 = 'Address line 2';
    $request->order->billing->address->postalCode = '91710';
    $request->order->billing->address->state = 'CA';
    $request->order->billing->email = 'john@acmecorp.com';
    $request->order->billing->name = 'John Doe';
    $request->order->billing->phone = '5551234567';
    $request->order->billing->phoneType = Shared\PhoneType::D;
    $request->order->capture = true;
    $request->order->description = 'Order description';
    $request->order->level3 = new Shared\Level3();
    $request->order->level3->altTaxAmount = 5;
    $request->order->level3->altTaxId = 'a1b2c3';
    $request->order->level3->discountAmount = 5;
    $request->order->level3->dutyAmount = 5;
    $request->order->level3->freightAmount = 5;
    $request->order->level3->lineItems = [
        new Shared\LineItem(),
    ];
    $request->order->level3->shipFromZip = '91710';
    $request->order->level3->shipTo = new Shared\ShipTo();
    $request->order->level3->shipTo->address = new Shared\BillingAddress();
    $request->order->level3->shipTo->address->city = 'Ontario';
    $request->order->level3->shipTo->address->countryCode = 'USA';
    $request->order->level3->shipTo->address->line1 = 'Fairfield Ranch';
    $request->order->level3->shipTo->address->line2 = 'Address line 2';
    $request->order->level3->shipTo->address->postalCode = '91710';
    $request->order->level3->shipTo->address->state = 'CA';
    $request->order->level3->shipTo->customerNumber = 'customerId123';
    $request->order->level3->shipTo->email = 'john@acmecorp.com';
    $request->order->level3->shipTo->name = 'John Doe';
    $request->order->level3->shipTo->phone = '5551234567';
    $request->order->level3->shipTo->phoneType = Shared\ShipToPhoneType::N;
    $request->order->level3->taxAmount = 5;
    $request->order->level3->taxRate = 0.5;
    $request->order->options = new Shared\OrderOptions();
    $request->order->options->customerIp = '198.51.100.42';
    $request->order->options->ecommerceFlag = Shared\EcommerceFlag::Four;
    $request->order->options->orderTrackingNumber = 'trackid123';
    $request->order->reference = new Shared\Reference();
    $request->order->reference->correlationId = 'abc123';
    $request->order->reference->customerRef = 'ref123';
    $request->order->reference->reference3 = 'ref12345';
    $request->order->reference->referenceNo = 'ref1234';
    $request->order->softDescriptor = new Shared\SoftDescriptor();
    $request->order->softDescriptor->authTypeIndicator = 'F';
    $request->order->softDescriptor->city = 'Ontario';
    $request->order->softDescriptor->countryCode = 'USA';
    $request->order->softDescriptor->dbaName = 'john';
    $request->order->softDescriptor->email = 'john@example.com';
    $request->order->softDescriptor->mcc = '5699';
    $request->order->softDescriptor->merchantContactInfo = '8886178190';
    $request->order->softDescriptor->mvvMaid = '5679';
    $request->order->softDescriptor->phone = '8886178190';
    $request->order->softDescriptor->postalCode = '91710';
    $request->order->softDescriptor->state = 'CA';
    $request->order->softDescriptor->street = 'Fairfield Ranch';
    $request->order->softDescriptor->submerchantId = 'xyz123';
    $request->order->softDescriptor->taxId = 'abc123';
    $request->order->surchargeAmount = 123;
    $request->order->taxAmount = 123;
    $request->orderId = 'string';

    $response = $sdk->orders->putAccountAccountIdOrdersOrderId($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdRequest](../../models/operations/PutAccountAccountIdOrdersOrderIdRequest.md) | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdResponse](../../models/operations/PutAccountAccountIdOrdersOrderIdResponse.md)**


## putOrdersOrderIdReset

Reset failed payment attempts count to zero for this Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PutOrdersOrderIdResetRequest();
    $request->orderId = 'string';

    $response = $sdk->orders->putOrdersOrderIdReset($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetRequest](../../models/operations/PutOrdersOrderIdResetRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetResponse](../../models/operations/PutOrdersOrderIdResetResponse.md)**

