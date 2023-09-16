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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetAccountAccountIdOrdersOrderIdRequest();
    $request->accountId = 'officia';
    $request->orderId = 'dolor';

    $requestSecurity = new GetAccountAccountIdOrdersOrderIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->getAccountAccountIdOrdersOrderId($request, $requestSecurity);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdRequest](../../models/operations/GetAccountAccountIdOrdersOrderIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdSecurity](../../models/operations/GetAccountAccountIdOrdersOrderIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdResponse](../../models/operations/GetAccountAccountIdOrdersOrderIdResponse.md)**


## getOrders

List all Orders for API key's account, paginated and optionally restricted to a date range. Date range must be no more than six months.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrdersRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrdersSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrdersRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->from = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-01T00:00:00.000Z');
    $request->to = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-31T00:00:00.000Z');

    $requestSecurity = new GetOrdersSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->getOrders($request, $requestSecurity);

    if ($response->orderSearch !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersRequest](../../models/operations/GetOrdersRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersSecurity](../../models/operations/GetOrdersSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersResponse](../../models/operations/GetOrdersResponse.md)**


## postAccountAccountIdOrdersOrderIdPay

Pay for Order with Token

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBody;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPaySecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostAccountAccountIdOrdersOrderIdPayRequest();
    $request->requestBody = new PostAccountAccountIdOrdersOrderIdPayRequestBody();
    $request->requestBody->paymentMethod = new PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod();
    $request->requestBody->paymentMethod->token = 'f0db7065-be66-4501-b49b-5eb56e265cb1';
    $request->accountId = 'debitis';
    $request->orderId = 'a';

    $requestSecurity = new PostAccountAccountIdOrdersOrderIdPaySecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->postAccountAccountIdOrdersOrderIdPay($request, $requestSecurity);

    if ($response->postAccountAccountIdOrdersOrderIdPay200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequest](../../models/operations/PostAccountAccountIdOrdersOrderIdPayRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPaySecurity](../../models/operations/PostAccountAccountIdOrdersOrderIdPaySecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayResponse](../../models/operations/PostAccountAccountIdOrdersOrderIdPayResponse.md)**


## postAccountAccountIdOrders

Create an Order, needs to specify which account the Order will belong to.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\Order;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetails;
use \TheLogicStudio\ExactPayments\Models\Shared\BillingAddress;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetailsPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\Level3;
use \TheLogicStudio\ExactPayments\Models\Shared\LineItem;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipTo;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipToPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptions;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptionsEcommerceFlag;
use \TheLogicStudio\ExactPayments\Models\Shared\Reference;
use \TheLogicStudio\ExactPayments\Models\Shared\SoftDescriptor;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostAccountAccountIdOrdersRequest();
    $request->accountId = 'dolorum';
    $request->order = new Order();
    $request->order->amount = 123;
    $request->order->billing = new CustomerDetails();
    $request->order->billing->address = new BillingAddress();
    $request->order->billing->address->city = 'Ontario';
    $request->order->billing->address->countryCode = 'USA';
    $request->order->billing->address->line1 = 'Fairfield Ranch';
    $request->order->billing->address->line2 = 'Address line 2';
    $request->order->billing->address->postalCode = '91710';
    $request->order->billing->address->state = 'CA';
    $request->order->billing->email = 'john@acmecorp.com';
    $request->order->billing->name = 'John Doe';
    $request->order->billing->phone = '5551234567';
    $request->order->billing->phoneType = CustomerDetailsPhoneType::W;
    $request->order->capture = true;
    $request->order->description = 'Order description';
    $request->order->level3 = new Level3();
    $request->order->level3->altTaxAmount = 5;
    $request->order->level3->altTaxId = 'a1b2c3';
    $request->order->level3->discountAmount = 5;
    $request->order->level3->dutyAmount = 5;
    $request->order->level3->freightAmount = 5;
    $request->order->level3->lineItems = [
        new LineItem(),
    ];
    $request->order->level3->shipFromZip = '91710';
    $request->order->level3->shipTo = new ShipTo();
    $request->order->level3->shipTo->address = new BillingAddress();
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
    $request->order->level3->shipTo->phoneType = ShipToPhoneType::W;
    $request->order->level3->taxAmount = 5;
    $request->order->level3->taxRate = 0.5;
    $request->order->options = new OrderOptions();
    $request->order->options->customerIp = '198.51.100.42';
    $request->order->options->ecommerceFlag = OrderOptionsEcommerceFlag::I;
    $request->order->options->orderTrackingNumber = 'trackid123';
    $request->order->reference = new Reference();
    $request->order->reference->correlationId = 'abc123';
    $request->order->reference->customerRef = 'ref123';
    $request->order->reference->reference3 = 'ref12345';
    $request->order->reference->referenceNo = 'ref1234';
    $request->order->softDescriptor = new SoftDescriptor();
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

    $requestSecurity = new PostAccountAccountIdOrdersSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->postAccountAccountIdOrders($request, $requestSecurity);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersRequest](../../models/operations/PostAccountAccountIdOrdersRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersSecurity](../../models/operations/PostAccountAccountIdOrdersSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersResponse](../../models/operations/PostAccountAccountIdOrdersResponse.md)**


## postOrders

Create an Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Order;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetails;
use \TheLogicStudio\ExactPayments\Models\Shared\BillingAddress;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetailsPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\Level3;
use \TheLogicStudio\ExactPayments\Models\Shared\LineItem;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipTo;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipToPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptions;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptionsEcommerceFlag;
use \TheLogicStudio\ExactPayments\Models\Shared\Reference;
use \TheLogicStudio\ExactPayments\Models\Shared\SoftDescriptor;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrdersSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new Order();
    $request->amount = 123;
    $request->billing = new CustomerDetails();
    $request->billing->address = new BillingAddress();
    $request->billing->address->city = 'Ontario';
    $request->billing->address->countryCode = 'USA';
    $request->billing->address->line1 = 'Fairfield Ranch';
    $request->billing->address->line2 = 'Address line 2';
    $request->billing->address->postalCode = '91710';
    $request->billing->address->state = 'CA';
    $request->billing->email = 'john@acmecorp.com';
    $request->billing->name = 'John Doe';
    $request->billing->phone = '5551234567';
    $request->billing->phoneType = CustomerDetailsPhoneType::D;
    $request->capture = true;
    $request->description = 'Order description';
    $request->level3 = new Level3();
    $request->level3->altTaxAmount = 5;
    $request->level3->altTaxId = 'a1b2c3';
    $request->level3->discountAmount = 5;
    $request->level3->dutyAmount = 5;
    $request->level3->freightAmount = 5;
    $request->level3->lineItems = [
        new LineItem(),
    ];
    $request->level3->shipFromZip = '91710';
    $request->level3->shipTo = new ShipTo();
    $request->level3->shipTo->address = new BillingAddress();
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
    $request->level3->shipTo->phoneType = ShipToPhoneType::N;
    $request->level3->taxAmount = 5;
    $request->level3->taxRate = 0.5;
    $request->options = new OrderOptions();
    $request->options->customerIp = '198.51.100.42';
    $request->options->ecommerceFlag = OrderOptionsEcommerceFlag::Two;
    $request->options->orderTrackingNumber = 'trackid123';
    $request->reference = new Reference();
    $request->reference->correlationId = 'abc123';
    $request->reference->customerRef = 'ref123';
    $request->reference->reference3 = 'ref12345';
    $request->reference->referenceNo = 'ref1234';
    $request->softDescriptor = new SoftDescriptor();
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

    $requestSecurity = new PostOrdersSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->postOrders($request, $requestSecurity);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Shared\Order](../../models/shared/Order.md)                                   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersSecurity](../../models/operations/PostOrdersSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersResponse](../../models/operations/PostOrdersResponse.md)**


## postOrdersOrderIdAccessToken

Create a new access token for this Order. This will invalidate any existing access tokens.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostOrdersOrderIdAccessTokenRequest();
    $request->orderId = 'magnam';

    $requestSecurity = new PostOrdersOrderIdAccessTokenSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->postOrdersOrderIdAccessToken($request, $requestSecurity);

    if ($response->orderAccessToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenRequest](../../models/operations/PostOrdersOrderIdAccessTokenRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenSecurity](../../models/operations/PostOrdersOrderIdAccessTokenSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenResponse](../../models/operations/PostOrdersOrderIdAccessTokenResponse.md)**


## putAccountAccountIdOrdersOrderId

Update details of an existing Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\Order;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetails;
use \TheLogicStudio\ExactPayments\Models\Shared\BillingAddress;
use \TheLogicStudio\ExactPayments\Models\Shared\CustomerDetailsPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\Level3;
use \TheLogicStudio\ExactPayments\Models\Shared\LineItem;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipTo;
use \TheLogicStudio\ExactPayments\Models\Shared\ShipToPhoneType;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptions;
use \TheLogicStudio\ExactPayments\Models\Shared\OrderOptionsEcommerceFlag;
use \TheLogicStudio\ExactPayments\Models\Shared\Reference;
use \TheLogicStudio\ExactPayments\Models\Shared\SoftDescriptor;
use \TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutAccountAccountIdOrdersOrderIdRequest();
    $request->accountId = 'cumque';
    $request->order = new Order();
    $request->order->amount = 123;
    $request->order->billing = new CustomerDetails();
    $request->order->billing->address = new BillingAddress();
    $request->order->billing->address->city = 'Ontario';
    $request->order->billing->address->countryCode = 'USA';
    $request->order->billing->address->line1 = 'Fairfield Ranch';
    $request->order->billing->address->line2 = 'Address line 2';
    $request->order->billing->address->postalCode = '91710';
    $request->order->billing->address->state = 'CA';
    $request->order->billing->email = 'john@acmecorp.com';
    $request->order->billing->name = 'John Doe';
    $request->order->billing->phone = '5551234567';
    $request->order->billing->phoneType = CustomerDetailsPhoneType::D;
    $request->order->capture = true;
    $request->order->description = 'Order description';
    $request->order->level3 = new Level3();
    $request->order->level3->altTaxAmount = 5;
    $request->order->level3->altTaxId = 'a1b2c3';
    $request->order->level3->discountAmount = 5;
    $request->order->level3->dutyAmount = 5;
    $request->order->level3->freightAmount = 5;
    $request->order->level3->lineItems = [
        new LineItem(),
    ];
    $request->order->level3->shipFromZip = '91710';
    $request->order->level3->shipTo = new ShipTo();
    $request->order->level3->shipTo->address = new BillingAddress();
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
    $request->order->level3->shipTo->phoneType = ShipToPhoneType::W;
    $request->order->level3->taxAmount = 5;
    $request->order->level3->taxRate = 0.5;
    $request->order->options = new OrderOptions();
    $request->order->options->customerIp = '198.51.100.42';
    $request->order->options->ecommerceFlag = OrderOptionsEcommerceFlag::Five;
    $request->order->options->orderTrackingNumber = 'trackid123';
    $request->order->reference = new Reference();
    $request->order->reference->correlationId = 'abc123';
    $request->order->reference->customerRef = 'ref123';
    $request->order->reference->reference3 = 'ref12345';
    $request->order->reference->referenceNo = 'ref1234';
    $request->order->softDescriptor = new SoftDescriptor();
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
    $request->orderId = 'laborum';

    $requestSecurity = new PutAccountAccountIdOrdersOrderIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->putAccountAccountIdOrdersOrderId($request, $requestSecurity);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdRequest](../../models/operations/PutAccountAccountIdOrdersOrderIdRequest.md)   | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |
| `security`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdSecurity](../../models/operations/PutAccountAccountIdOrdersOrderIdSecurity.md) | :heavy_check_mark:                                                                                                                                              | The security requirements to use for the request.                                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdResponse](../../models/operations/PutAccountAccountIdOrdersOrderIdResponse.md)**


## putOrdersOrderIdReset

Reset failed payment attempts count to zero for this Order.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrdersOrderIdResetRequest();
    $request->orderId = 'accusamus';

    $requestSecurity = new PutOrdersOrderIdResetSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->orders->putOrdersOrderIdReset($request, $requestSecurity);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetRequest](../../models/operations/PutOrdersOrderIdResetRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetSecurity](../../models/operations/PutOrdersOrderIdResetSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetResponse](../../models/operations/PutOrdersOrderIdResetResponse.md)**

