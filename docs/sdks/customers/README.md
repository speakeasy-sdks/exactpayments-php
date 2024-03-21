# Customers


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

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->customers->accountDeleteCustomerCustomerIdPaymentMethodToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                       | Type                                                                                                                                                                                            | Required                                                                                                                                                                                        | Description                                                                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest](../../Models/Operations/AccountDeleteCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerCustomerIdPaymentMethodTokenResponse](../../Models/Operations/AccountDeleteCustomerCustomerIdPaymentMethodTokenResponse.md)**


## accountDeleteCustomerId

On occasion it is necessary for an API consumer to delete customers. The following call supports this use case.

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
        $request = new Operations\AccountDeleteCustomerIdRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';;

    $response = $sdk->customers->accountDeleteCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerIdRequest](../../Models/Operations/AccountDeleteCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteCustomerIdResponse](../../Models/Operations/AccountDeleteCustomerIdResponse.md)**


## accountGetCustomer

This API returns the list of customers under a given merchant. It is meant to be invoked by a Organization(partner) to fetch the list of all customers for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

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
        $request = new Operations\AccountGetCustomerRequest();
    $request->accountId = '<value>';
    $request->dollarLimit = 5056.72;
    $request->dollarSkip = 6564.29;
    $request->dollarSort = '-name';;

    $response = $sdk->customers->accountGetCustomer($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerRequest](../../Models/Operations/AccountGetCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerResponse](../../Models/Operations/AccountGetCustomerResponse.md)**


## accountGetCustomerId

For fetching singular customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body. It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

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
        $request = new Operations\AccountGetCustomerIdRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';;

    $response = $sdk->customers->accountGetCustomerId($request);

    if ($response->customer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdRequest](../../Models/Operations/AccountGetCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdResponse](../../Models/Operations/AccountGetCustomerIdResponse.md)**


## accountGetCustomerCustomerIdPaymentMethodToken

To retrieve a payment method as well as ensure it is associated with a customer. The following call can be used.  It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

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
        $request = new Operations\AccountGetCustomerCustomerIdPaymentMethodTokenRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->customers->accountGetCustomerCustomerIdPaymentMethodToken($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentMethodTokenRequest](../../Models/Operations/AccountGetCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentMethodTokenResponse](../../Models/Operations/AccountGetCustomerCustomerIdPaymentMethodTokenResponse.md)**


## accountGetCustomerCustomerIdPayments

In order to fetch payments performed by a customer, the following endpoint can be called. It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token.

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
        $request = new Operations\AccountGetCustomerCustomerIdPaymentsRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';
    $request->dollarSort = '-name';
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;;

    $response = $sdk->customers->accountGetCustomerCustomerIdPayments($request);

    if ($response->payments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentsRequest](../../Models/Operations/AccountGetCustomerCustomerIdPaymentsRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerCustomerIdPaymentsResponse](../../Models/Operations/AccountGetCustomerCustomerIdPaymentsResponse.md)**


## accountGetCustomerDefaultPaymentMethod

You can associate multiple Payment Methods to a single Customer; however, only one of those can be used as default. This endpoint will allow you to retrieve the Payment Method marked as default for the specified Customer. It is meant to be invoked by an Organization (Partner) for a given merchant (`accountId`) in the request URI. Please note that the Organization (Partner) needs to authenticate using the Partner or Organization token.

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
        $request = new Operations\AccountGetCustomerDefaultPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';;

    $response = $sdk->customers->accountGetCustomerDefaultPaymentMethod($request);

    if ($response->anies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerDefaultPaymentMethodRequest](../../Models/Operations/AccountGetCustomerDefaultPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerDefaultPaymentMethodResponse](../../Models/Operations/AccountGetCustomerDefaultPaymentMethodResponse.md)**


## accountGetCustomerIdPaymentMethod

To query payment methods associated with a customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.  It is meant to be invoked by a Organization(partner) for a given merchant(accountId) in the request URI.  Please note that the Organization(partner) needs to authenticate using the partner or org token. 

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
        $request = new Operations\AccountGetCustomerIdPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';;

    $response = $sdk->customers->accountGetCustomerIdPaymentMethod($request);

    if ($response->anies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdPaymentMethodRequest](../../Models/Operations/AccountGetCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerIdPaymentMethodResponse](../../Models/Operations/AccountGetCustomerIdPaymentMethodResponse.md)**


## accountGetCustomerTokenPaymentMethod

This route takes the customer token instead of an id to enable users to list  payment methods associated with a customer when they do not have the customer's id. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

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
        $request = new Operations\AccountGetCustomerTokenPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->customerToken = '<value>';;

    $response = $sdk->customers->accountGetCustomerTokenPaymentMethod($request);

    if ($response->anies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerTokenPaymentMethodRequest](../../Models/Operations/AccountGetCustomerTokenPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetCustomerTokenPaymentMethodResponse](../../Models/Operations/AccountGetCustomerTokenPaymentMethodResponse.md)**


## accountPostCustomer

In order to create a customer API consumers can issue a call to the following endpoint. Note that as mentioned at the start of the document, an account id can be provided in the path.

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
        $request = new Operations\AccountPostCustomerRequest();
    $request->accountId = '<value>';
    $request->newCustomer = new Shared\NewCustomer();
    $request->newCustomer->addresses = [
        new Shared\NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Tobin56@hotmail.com';
    $request->newCustomer->name = '<value>';
    $request->newCustomer->phone = '568-455-3660 x283';;

    $response = $sdk->customers->accountPostCustomer($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerRequest](../../Models/Operations/AccountPostCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerResponse](../../Models/Operations/AccountPostCustomerResponse.md)**


## accountPostCustomerIdPaymentMethod

This API associates a payment method with a customer. It is meant to be invoked by a partner to associate the payment method for specific customer  under a specific sub-merchant as identified by the {customer Id} and {accountId) parameters in the request URI. Please note that the partner needs to authenticate using the partner or org token when making this API call. Please note that the payment method is represented by a token returned earlier as a response to the POST method of the resource endpoint: /account/{accountId}/payment-method

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
        $request = new Operations\AccountPostCustomerIdPaymentMethodRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';
    $request->requestBody = new Operations\AccountPostCustomerIdPaymentMethodRequestBody();
    $request->requestBody->isDefault = false;
    $request->requestBody->label = '<value>';
    $request->requestBody->token = '<value>';;

    $response = $sdk->customers->accountPostCustomerIdPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodRequest](../../Models/Operations/AccountPostCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCustomerIdPaymentMethodResponse](../../Models/Operations/AccountPostCustomerIdPaymentMethodResponse.md)**


## accountPutCustomerId

It is necessary for API consumers to update customer details from time to time. This can be achieved with the following call.
Note that the body can contain a subset of MongoDB update operators for more fine grain control. See https://www.mongodb.com/docs/manual/reference/operator/update/ for reference.


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
        $request = new Operations\AccountPutCustomerIdRequest();
    $request->accountId = '<value>';
    $request->customerId = '<value>';
    $request->newCustomer = new Shared\NewCustomer();
    $request->newCustomer->addresses = [
        new Shared\NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Rashad26@hotmail.com';
    $request->newCustomer->name = '<value>';
    $request->newCustomer->phone = '1-551-733-0450 x71687';;

    $response = $sdk->customers->accountPutCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPutCustomerIdRequest](../../Models/Operations/AccountPutCustomerIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPutCustomerIdResponse](../../Models/Operations/AccountPutCustomerIdResponse.md)**


## deleteCustomerCustomerIdPaymentMethodToken

In order to unlink a payment method from a customer, the following call can be made.

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
        $request = new Operations\DeleteCustomerCustomerIdPaymentMethodTokenRequest();
    $request->customerId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->customers->deleteCustomerCustomerIdPaymentMethodToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerCustomerIdPaymentMethodTokenRequest](../../Models/Operations/DeleteCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerCustomerIdPaymentMethodTokenResponse](../../Models/Operations/DeleteCustomerCustomerIdPaymentMethodTokenResponse.md)**


## deleteCustomerId

On occasion it is necessary for an API consumer to delete customers. The following call supports this use case.

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
        $request = new Operations\DeleteCustomerIdRequest();
    $request->customerId = '<value>';;

    $response = $sdk->customers->deleteCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerIdRequest](../../Models/Operations/DeleteCustomerIdRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteCustomerIdResponse](../../Models/Operations/DeleteCustomerIdResponse.md)**


## getCustomer

This API returns the list of customers for a given merchant. It is meant to be invoked by a merchant to fetch the list of their own customers. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

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
        $request = new Operations\GetCustomerRequest();
    $request->dollarLimit = 1259.75;
    $request->dollarSkip = 6289.72;
    $request->dollarSort = '-name';;

    $response = $sdk->customers->getCustomer($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerRequest](../../Models/Operations/GetCustomerRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerResponse](../../Models/Operations/GetCustomerResponse.md)**


## getCustomerId

For fetching singular customer objects API consumers can issue a call to the following endpoint. If the id provided in the path exists it will be returned in the response body. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

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
        $request = new Operations\GetCustomerIdRequest();
    $request->customerId = '<value>';;

    $response = $sdk->customers->getCustomerId($request);

    if ($response->customer !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdRequest](../../Models/Operations/GetCustomerIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdResponse](../../Models/Operations/GetCustomerIdResponse.md)**


## getCustomerCustomerIdPaymentMethodToken

To retrieve a payment method as well as ensure it is associated with a customer. The following call can be used.  Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

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
        $request = new Operations\GetCustomerCustomerIdPaymentMethodTokenRequest();
    $request->customerId = '<value>';
    $request->tokenId = '<value>';;

    $response = $sdk->customers->getCustomerCustomerIdPaymentMethodToken($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                   | Type                                                                                                                                                                        | Required                                                                                                                                                                    | Description                                                                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodTokenRequest](../../Models/Operations/GetCustomerCustomerIdPaymentMethodTokenRequest.md) | :heavy_check_mark:                                                                                                                                                          | The request object to use for the request.                                                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentMethodTokenResponse](../../Models/Operations/GetCustomerCustomerIdPaymentMethodTokenResponse.md)**


## getCustomerCustomerIdPayments

In order to fetch payments performed by a customer, the following endpoint can be called. Please note that there is no need to provide the (accountId) in the request URI, since the merchant needs to provide the account token to limit the scope for their own account

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
        $request = new Operations\GetCustomerCustomerIdPaymentsRequest();
    $request->customerId = '<value>';
    $request->dollarSort = '-name';
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;;

    $response = $sdk->customers->getCustomerCustomerIdPayments($request);

    if ($response->payments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentsRequest](../../Models/Operations/GetCustomerCustomerIdPaymentsRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerCustomerIdPaymentsResponse](../../Models/Operations/GetCustomerCustomerIdPaymentsResponse.md)**


## getCustomerIdPaymentMethod

To query payment methods associated with a customer the following call can be used. Note that because card information is encrypted, query string filtering is not supported. That said $limit and $skip can still be used for pagination.

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
        $request = new Operations\GetCustomerIdPaymentMethodRequest();
    $request->customerId = '<value>';;

    $response = $sdk->customers->getCustomerIdPaymentMethod($request);

    if ($response->anies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdPaymentMethodRequest](../../Models/Operations/GetCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerIdPaymentMethodResponse](../../Models/Operations/GetCustomerIdPaymentMethodResponse.md)**


## getCustomerTokenPaymentMethod

This route takes the customer token instead of an id to enable users to list  payment methods associated with a customer when they do not have the customer's id.

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
        $request = new Operations\GetCustomerTokenPaymentMethodRequest();
    $request->customerToken = '<value>';
    $request->dollarLimit = '<value>';
    $request->dollarSkip = '<value>';;

    $response = $sdk->customers->getCustomerTokenPaymentMethod($request);

    if ($response->paymentMethods !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerTokenPaymentMethodRequest](../../Models/Operations/GetCustomerTokenPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetCustomerTokenPaymentMethodResponse](../../Models/Operations/GetCustomerTokenPaymentMethodResponse.md)**


## postCustomer

In order to create a customer API consumers can issue a call to the following endpoint. Note that as mentioned at the start of the document, an account id can be provided in the path.

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
        $request = new Shared\NewCustomer();
    $request->addresses = [
        new Shared\NewCustomerAddresses(),
    ];
    $request->email = 'Polly.Hamill94@gmail.com';
    $request->name = '<value>';
    $request->phone = '712-889-4633';;

    $response = $sdk->customers->postCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                     | Type                                                                                          | Required                                                                                      | Description                                                                                   |
| --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------- |
| `$request`                                                                                    | [\TheLogicStudio\ExactPayments\Models\Shared\NewCustomer](../../Models/Shared/NewCustomer.md) | :heavy_check_mark:                                                                            | The request object to use for the request.                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerResponse](../../Models/Operations/PostCustomerResponse.md)**


## postCustomerIdPaymentMethod

This API associates a payment method with a customer. It is meant to be invoked by a sub-merchant to associate the payment method for a specific customer as identified by the {customer Id} parameter in the request URI. Please note that the sub-merchant needs to provide the account authentication token when making this API call. Please note that the payment method in the request is represented by a token returned earlier as a response to the POST method of the resource endpoint: /payment-method

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
        $request = new Operations\PostCustomerIdPaymentMethodRequest();
    $request->customerId = '<value>';
    $request->requestBody = new Operations\PostCustomerIdPaymentMethodRequestBody();
    $request->requestBody->isDefault = false;
    $request->requestBody->label = '<value>';
    $request->requestBody->token = '<value>';;

    $response = $sdk->customers->postCustomerIdPaymentMethod($request);

    if ($response->paymentMethod !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodRequest](../../Models/Operations/PostCustomerIdPaymentMethodRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCustomerIdPaymentMethodResponse](../../Models/Operations/PostCustomerIdPaymentMethodResponse.md)**


## putCustomerId

It is necessary for API consumers to update customer details from time to time. This can be achieved with the following call.
Note that the body can contain a subset of MongoDB update operators for more fine grain control. See https://www.mongodb.com/docs/manual/reference/operator/update/ for reference.


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
        $request = new Operations\PutCustomerIdRequest();
    $request->customerId = '<value>';
    $request->newCustomer = new Shared\NewCustomer();
    $request->newCustomer->addresses = [
        new Shared\NewCustomerAddresses(),
    ];
    $request->newCustomer->email = 'Major43@hotmail.com';
    $request->newCustomer->name = '<value>';
    $request->newCustomer->phone = '(828) 567-3843 x897';;

    $response = $sdk->customers->putCustomerId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutCustomerIdRequest](../../Models/Operations/PutCustomerIdRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutCustomerIdResponse](../../Models/Operations/PutCustomerIdResponse.md)**

