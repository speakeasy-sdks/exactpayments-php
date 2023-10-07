# Orders
(*orders*)

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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetAccountAccountIdOrdersOrderIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetAccountAccountIdOrdersOrderIdRequest();
    $request->accountId = 'Principal Jewelery';
    $request->orderId = 'transmit';

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrdersRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrdersRequest();
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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBody;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostAccountAccountIdOrdersOrderIdPayRequest();
    $request->requestBody = new PostAccountAccountIdOrdersOrderIdPayRequestBody();
    $request->requestBody->paymentMethod = new PostAccountAccountIdOrdersOrderIdPayRequestBodyPaymentMethod();
    $request->requestBody->paymentMethod->token = 'f0db7065-be66-4501-b49b-5eb56e265cb1';
    $request->accountId = 'improvement Northeast';
    $request->orderId = 'how Folk';

    $response = $sdk->orders->postAccountAccountIdOrdersOrderIdPay($request);

    if ($response->postAccountAccountIdOrdersOrderIdPay200ApplicationJSONObject !== null) {
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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostAccountAccountIdOrdersRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostAccountAccountIdOrdersRequest();
    $request->requestBody = [
        'Borders' => 'Saint',
    ];
    $request->accountId = 'District';

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = [
        'Facilitator' => 'Rustic',
    ]

    $response = $sdk->orders->postOrders($request);

    if ($response->orderResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../models//.md)                 | :heavy_check_mark:                         | The request object to use for the request. |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostOrdersOrderIdAccessTokenRequest();
    $request->orderId = 'failing Bicycle';

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutAccountAccountIdOrdersOrderIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutAccountAccountIdOrdersOrderIdRequest();
    $request->requestBody = [
        'so' => 'proactive',
    ];
    $request->accountId = 'holistic SUV';
    $request->orderId = 'olive';

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrdersOrderIdResetRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrdersOrderIdResetRequest();
    $request->orderId = 'Administrator separately Gastonia';

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

