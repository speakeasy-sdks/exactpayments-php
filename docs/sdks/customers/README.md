# Customers
(*customers*)

## Overview

Store customer details.

### Available Operations

* [accountDeleteCustomerCustomerIdPaymentMethodToken](#accountdeletecustomercustomeridpaymentmethodtoken) - Delete Payment Method Associated with Customer by Token for a given Account
* [accountDeleteCustomerId](#accountdeletecustomerid) - Delete Customer by ID for a given Account
* [accountGetCustomer](#accountgetcustomer) - Query customers for a given Account (Partner context)
* [accountGetCustomerId](#accountgetcustomerid) - Get Customer by ID for a given Account
* [accountGetCustomerCustomerIdPaymentMethodToken](#accountgetcustomercustomeridpaymentmethodtoken) - Get Payment Method Associated with Customer by Token for a given Account
* [accountGetCustomerCustomerIdPayments](#accountgetcustomercustomeridpayments) - Get Customer Payments for a given Account
* [accountGetCustomerDefaultPaymentMethod](#accountgetcustomerdefaultpaymentmethod) - Get Default Payment Method Associated to a Customer for a given Account
* [accountGetCustomerIdPaymentMethod](#accountgetcustomeridpaymentmethod) - Query Payment Methods for Customer for a given Account
* [accountGetCustomerTokenPaymentMethod](#accountgetcustomertokenpaymentmethod) - Query Payment Methods for Customer by customer token for a given Account
* [accountPostCustomer](#accountpostcustomer) - Create Customer for a given Account
* [accountPostCustomerIdPaymentMethod](#accountpostcustomeridpaymentmethod) - Attach Payment Method for a Customer (Partner context)
* [accountPutCustomerId](#accountputcustomerid) - Update Customer by ID for a given Account
* [deleteCustomerCustomerIdPaymentMethodToken](#deletecustomercustomeridpaymentmethodtoken) - Delete Payment Method Associated with Customer by Token
* [deleteCustomerId](#deletecustomerid) - Delete Customer by ID
* [getCustomer](#getcustomer) - Query customers for a given Account (Sub-merchant context)
* [getCustomerId](#getcustomerid) - Get Customer by ID
* [getCustomerCustomerIdPaymentMethodToken](#getcustomercustomeridpaymentmethodtoken) - Get Payment Method Associated with Customer by Token
* [getCustomerCustomerIdPayments](#getcustomercustomeridpayments) - Get Customer Payments
* [getCustomerIdPaymentMethod](#getcustomeridpaymentmethod) - Query Payment Methods for Customer
* [getCustomerTokenPaymentMethod](#getcustomertokenpaymentmethod) - Query Payment Methods for Customer by customer token
* [postCustomer](#postcustomer) - Create Customer
* [postCustomerIdPaymentMethod](#postcustomeridpaymentmethod) - Attach Payment Method for a Customer (Sub-merchant context)
* [putCustomerId](#putcustomerid) - Update Customer by ID

## accountDeleteCustomerCustomerIdPaymentMethodToken

In order to unlink a payment method from a customer, the following call can be made.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';
    $request->tokenId = 'string';

    $response = $sdk->customers->accountDeleteCustomerCustomerIdPaymentMethodToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                       | Type                                                                                                                                                                                            | Required                                                                                                                                                                                        | Description                                                                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest](../../models/operations/AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenResponse](../../models/operations/AccountDeleteCustomerCustomerIdPaymentMethodTokenResponse.md)**


## accountDeleteCustomerId

On occasion it is necessary for an API consumer to delete customers. The following call supports this use case.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountDeleteCustomerIdRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountDeleteCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerIdRequest](../../models/operations/AccountDeleteCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerIdResponse](../../models/operations/AccountDeleteCustomerIdResponse.md)**


## accountGetCustomer

This API returns the list of customers under a given merchant. It is meant to be invoked by a Organization(partner) to fetch the list of all customers for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerRequest();
    $request->dollarLimit = 5056.72;
    $request->dollarSkip = 6564.29;
    $request->dollarSort = '-name';
    $request->accountId = 'string';

    $response = $sdk->customers->accountGetCustomer($request);

    if ($response->accountGetCustomer201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerRequest](../../models/operations/AccountGetCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerResponse](../../models/operations/AccountGetCustomerResponse.md)**


## accountGetCustomerId

For fetching singular customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body. It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerIdRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountGetCustomerId($request);

    if ($response->customer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdRequest](../../models/operations/AccountGetCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdResponse](../../models/operations/AccountGetCustomerIdResponse.md)**


## accountGetCustomerCustomerIdPaymentMethodToken

To retrieve a payment method as well as ensure it is associated with a customer. The following call can be used.  It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentMethodTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerCustomerIdPaymentMethodTokenRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';
    $request->tokenId = 'string';

    $response = $sdk->customers->accountGetCustomerCustomerIdPaymentMethodToken($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentMethodTokenRequest](../../models/operations/AccountGetCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentMethodTokenResponse](../../models/operations/AccountGetCustomerCustomerIdPaymentMethodTokenResponse.md)**


## accountGetCustomerCustomerIdPayments

In order to fetch payments performed by a customer, the following endpoint can be called. It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerCustomerIdPaymentsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountGetCustomerCustomerIdPayments($request);

    if ($response->payments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentsRequest](../../models/operations/AccountGetCustomerCustomerIdPaymentsRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentsResponse](../../models/operations/AccountGetCustomerCustomerIdPaymentsResponse.md)**


## accountGetCustomerDefaultPaymentMethod

You can associate multiple Payment Methods to a single Customer; however, only one of those can be used as default. This endpoint will allow you to retrieve the Payment Method marked as default for the specified Customer. It is meant to be invoked by an Organization (Partner) for a given merchant (`accountId`) in the request URI. Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerDefaultPaymentMethodRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerDefaultPaymentMethodRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountGetCustomerDefaultPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerDefaultPaymentMethodRequest](../../models/operations/AccountGetCustomerDefaultPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerDefaultPaymentMethodResponse](../../models/operations/AccountGetCustomerDefaultPaymentMethodResponse.md)**


## accountGetCustomerIdPaymentMethod

To query payment methods associated with a customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.  It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdPaymentMethodRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerIdPaymentMethodRequest();
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountGetCustomerIdPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdPaymentMethodRequest](../../models/operations/AccountGetCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdPaymentMethodResponse](../../models/operations/AccountGetCustomerIdPaymentMethodResponse.md)**


## accountGetCustomerTokenPaymentMethod

This route takes the customer token instead of an id to enable users to list  payment methods associated with a customer when they do not have the customer's id. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerTokenPaymentMethodRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountGetCustomerTokenPaymentMethodRequest();
    $request->accountId = 'string';
    $request->customerToken = 'string';

    $response = $sdk->customers->accountGetCustomerTokenPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerTokenPaymentMethodRequest](../../models/operations/AccountGetCustomerTokenPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerTokenPaymentMethodResponse](../../models/operations/AccountGetCustomerTokenPaymentMethodResponse.md)**


## accountPostCustomer

In order to create a customer API consumers can issue a call to the following endpoint. Note that as mentioned at the start of the document, an account id can be provided in the path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomer;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomerAddresses;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountPostCustomerRequest();
    $request->newCustomer = new NewCustomer();
    $request->newCustomer->addresses = [
        new NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Tobin56@hotmail.com';
    $request->newCustomer->name = 'string';
    $request->newCustomer->phone = '568-455-3660 x283';
    $request->accountId = 'string';

    $response = $sdk->customers->accountPostCustomer($request);

    if ($response->accountPostCustomer200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerRequest](../../models/operations/AccountPostCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerResponse](../../models/operations/AccountPostCustomerResponse.md)**


## accountPostCustomerIdPaymentMethod

This API associates a payment method with a customer. It is meant to be invoked by a partner to associate the payment method for specific customer  under a specific sub-merchant as identified by the {customer Id} and {accountId) parameters in the request URI. Please note that the partner needs to authenticate using the partner or org token when making this API call. Please note that the payment method is represented by a token returned earlier as a response to the POST method of the resource endpoint: /account/{accountId}/payment-method

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountPostCustomerIdPaymentMethodRequest();
    $request->requestBody = new AccountPostCustomerIdPaymentMethodRequestBody();
    $request->requestBody->isDefault = false;
    $request->requestBody->label = 'string';
    $request->requestBody->token = 'string';
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountPostCustomerIdPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodRequest](../../models/operations/AccountPostCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodResponse](../../models/operations/AccountPostCustomerIdPaymentMethodResponse.md)**


## accountPutCustomerId

It is necessary for API consumers to update customer details from time to time. This can be achieved with the following call.
Note that the body can contain a subset of MongoDB update operators for more fine grain control. See https://www.mongodb.com/docs/manual/reference/operator/update/ for reference.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPutCustomerIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomer;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomerAddresses;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new AccountPutCustomerIdRequest();
    $request->newCustomer = new NewCustomer();
    $request->newCustomer->addresses = [
        new NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Rashad26@hotmail.com';
    $request->newCustomer->name = 'string';
    $request->newCustomer->phone = '1-551-733-0450 x71687';
    $request->accountId = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->accountPutCustomerId($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPutCustomerIdRequest](../../models/operations/AccountPutCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPutCustomerIdResponse](../../models/operations/AccountPutCustomerIdResponse.md)**


## deleteCustomerCustomerIdPaymentMethodToken

In order to unlink a payment method from a customer, the following call can be made.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerCustomerIdPaymentMethodTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCustomerCustomerIdPaymentMethodTokenRequest();
    $request->customerId = 'string';
    $request->tokenId = 'string';

    $response = $sdk->customers->deleteCustomerCustomerIdPaymentMethodToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerCustomerIdPaymentMethodTokenRequest](../../models/operations/DeleteCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerCustomerIdPaymentMethodTokenResponse](../../models/operations/DeleteCustomerCustomerIdPaymentMethodTokenResponse.md)**


## deleteCustomerId

On occasion it is necessary for an API consumer to delete customers. The following call supports this use case.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCustomerIdRequest();
    $request->customerId = 'string';

    $response = $sdk->customers->deleteCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerIdRequest](../../models/operations/DeleteCustomerIdRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerIdResponse](../../models/operations/DeleteCustomerIdResponse.md)**


## getCustomer

This API returns the list of customers for a given merchant. It is meant to be invoked by a merchant to fetch the list of their own customers. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerRequest();
    $request->dollarLimit = 1259.75;
    $request->dollarSkip = 6289.72;
    $request->dollarSort = '-name';

    $response = $sdk->customers->getCustomer($request);

    if ($response->getCustomer200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerRequest](../../models/operations/GetCustomerRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerResponse](../../models/operations/GetCustomerResponse.md)**


## getCustomerId

For fetching singular customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerIdRequest();
    $request->customerId = 'string';

    $response = $sdk->customers->getCustomerId($request);

    if ($response->customer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdRequest](../../models/operations/GetCustomerIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdResponse](../../models/operations/GetCustomerIdResponse.md)**


## getCustomerCustomerIdPaymentMethodToken

To retrieve a payment method as well as ensure it is associated with a customer. The following call can be used.  Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodTokenRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerCustomerIdPaymentMethodTokenRequest();
    $request->customerId = 'string';
    $request->tokenId = 'string';

    $response = $sdk->customers->getCustomerCustomerIdPaymentMethodToken($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodTokenRequest](../../models/operations/GetCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodTokenResponse](../../models/operations/GetCustomerCustomerIdPaymentMethodTokenResponse.md)**


## getCustomerCustomerIdPayments

In order to fetch payments performed by a customer, the following endpoint can be called. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerCustomerIdPaymentsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->customerId = 'string';

    $response = $sdk->customers->getCustomerCustomerIdPayments($request);

    if ($response->payments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentsRequest](../../models/operations/GetCustomerCustomerIdPaymentsRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentsResponse](../../models/operations/GetCustomerCustomerIdPaymentsResponse.md)**


## getCustomerIdPaymentMethod

To query payment methods associated with a customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdPaymentMethodRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerIdPaymentMethodRequest();
    $request->customerId = 'string';

    $response = $sdk->customers->getCustomerIdPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdPaymentMethodRequest](../../models/operations/GetCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdPaymentMethodResponse](../../models/operations/GetCustomerIdPaymentMethodResponse.md)**


## getCustomerTokenPaymentMethod

This route takes the customer token instead of an id to enable users to list  payment methods associated with a customer when they do not have the customer's id.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetCustomerTokenPaymentMethodRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCustomerTokenPaymentMethodRequest();
    $request->dollarLimit = 'string';
    $request->dollarSkip = 'string';
    $request->customerToken = 'string';

    $response = $sdk->customers->getCustomerTokenPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerTokenPaymentMethodRequest](../../models/operations/GetCustomerTokenPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerTokenPaymentMethodResponse](../../models/operations/GetCustomerTokenPaymentMethodResponse.md)**


## postCustomer

In order to create a customer API consumers can issue a call to the following endpoint. Note that as mentioned at the start of the document, an account id can be provided in the path.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomer;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomerAddresses;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new NewCustomer();
    $request->addresses = [
        new NewCustomerAddresses(),
    ];
    $request->email = 'Polly.Hamill94@gmail.com';
    $request->name = 'string';
    $request->phone = '712-889-4633';

    $response = $sdk->customers->postCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\TheLogicStudio\ExactPayments\Models\Shared\NewCustomer](../../models/shared/NewCustomer.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerResponse](../../models/operations/PostCustomerResponse.md)**


## postCustomerIdPaymentMethod

This API associates a payment method with a customer. It is meant to be invoked by a sub-merchant to associate the payment method for a specific customer as identified by the {customer Id} parameter in the request URI. Please note that the sub-merchant needs to provide the account authentication token when making this API call. Please note that the payment method in the request is represented by a token returned earlier as a response to the POST method of the resource endpoint: /payment-method

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodRequestBody;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCustomerIdPaymentMethodRequest();
    $request->requestBody = new PostCustomerIdPaymentMethodRequestBody();
    $request->requestBody->isDefault = false;
    $request->requestBody->label = 'string';
    $request->requestBody->token = 'string';
    $request->customerId = 'string';

    $response = $sdk->customers->postCustomerIdPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodRequest](../../models/operations/PostCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodResponse](../../models/operations/PostCustomerIdPaymentMethodResponse.md)**


## putCustomerId

It is necessary for API consumers to update customer details from time to time. This can be achieved with the following call.
Note that the body can contain a subset of MongoDB update operators for more fine grain control. See https://www.mongodb.com/docs/manual/reference/operator/update/ for reference.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutCustomerIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomer;
use \TheLogicStudio\ExactPayments\Models\Shared\NewCustomerAddresses;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCustomerIdRequest();
    $request->newCustomer = new NewCustomer();
    $request->newCustomer->addresses = [
        new NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Major43@hotmail.com';
    $request->newCustomer->name = 'string';
    $request->newCustomer->phone = '(828) 567-3843 x897';
    $request->customerId = 'string';

    $response = $sdk->customers->putCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutCustomerIdRequest](../../models/operations/PutCustomerIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutCustomerIdResponse](../../models/operations/PutCustomerIdResponse.md)**

