# AccountManagement


### Available Operations

* [accountRegisterApplePayDomains](#accountregisterapplepaydomains) - Register Domain for Apple Pay
* [getOrganizationOrganizationIdAccount](#getorganizationorganizationidaccount) - List Accounts
* [getOrganizationOrganizationIdAccountSearch](#getorganizationorganizationidaccountsearch) - Query Accounts
* [getOrganizationOrganizationIdAccountAccountId](#getorganizationorganizationidaccountaccountid) - Retrieve Account by ID
* [listApplePayDomains](#listapplepaydomains) - List Apple Pay Domains
* [putOrganizationOrganizationIdAccountAccountId](#putorganizationorganizationidaccountaccountid) - Update Account by ID

## accountRegisterApplePayDomains

This endpoint allows you to register one or more of your domains for use with Apple Pay &amp; ExactJS.

Please [read our guide](./docs/ExactJS-ApplePay) on the setup steps required before you can use this endpoint.

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
        $request = new Operations\AccountRegisterApplePayDomainsRequest();
    $request->accountId = '<value>';
    $request->applePayDomains = new Shared\ApplePayDomains();
    $request->applePayDomains->domains = [
        '<value>',
    ];;

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest](../../Models/Operations/AccountRegisterApplePayDomainsRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsResponse](../../Models/Operations/AccountRegisterApplePayDomainsResponse.md)**


## getOrganizationOrganizationIdAccount

Retrieve a list of accounts underneath an organization.

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
        $request = new Operations\GetOrganizationOrganizationIdAccountRequest();
    $request->organizationId = '<value>';;

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccount($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest](../../Models/Operations/GetOrganizationOrganizationIdAccountRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountResponse](../../Models/Operations/GetOrganizationOrganizationIdAccountResponse.md)**


## getOrganizationOrganizationIdAccountSearch

Retrieve a segmented list of merchant accounts under a parent organization that meet the filtered criteria requirements.

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
        $request = new Operations\GetOrganizationOrganizationIdAccountSearchRequest();
    $request->organizationId = '<value>';
    $request->q = '<value>';;

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountSearch($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest](../../Models/Operations/GetOrganizationOrganizationIdAccountSearchRequest.md) | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchResponse](../../Models/Operations/GetOrganizationOrganizationIdAccountSearchResponse.md)**


## getOrganizationOrganizationIdAccountAccountId

Retrieve a list of properties associated with a specific merchant account by ID.

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
        $request = new Operations\GetOrganizationOrganizationIdAccountAccountIdRequest();
    $request->organizationId = '<value>';
    $request->accountId = '<value>';;

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountAccountId($request);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest](../../Models/Operations/GetOrganizationOrganizationIdAccountAccountIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdResponse](../../Models/Operations/GetOrganizationOrganizationIdAccountAccountIdResponse.md)**


## listApplePayDomains

This endpoint allows you to retrieve a list of your domains which are registered for Apple Pay &amp; ExactJS.

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
        $request = new Operations\ListApplePayDomainsRequest();
    $request->accountId = '<value>';;

    $response = $sdk->accountManagement->listApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest](../../Models/Operations/ListApplePayDomainsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsResponse](../../Models/Operations/ListApplePayDomainsResponse.md)**


## putOrganizationOrganizationIdAccountAccountId

Update a specific merchant account by ID.

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
        $request = new Operations\PutOrganizationOrganizationIdAccountAccountIdRequest();
    $request->organizationId = '<value>';
    $request->accountId = '<value>';
    $request->accountRequest = new Shared\AccountRequest();
    $request->accountRequest->address = new Shared\Address();
    $request->accountRequest->address->city = 'Ottawa';
    $request->accountRequest->address->country = 'Canada';
    $request->accountRequest->address->line1 = '1st street';
    $request->accountRequest->address->line2 = 'Apartment 1234';
    $request->accountRequest->address->postalCode = 'A1A 1A1';
    $request->accountRequest->address->state = 'Ontario';
    $request->accountRequest->email = 'contact@exactpay.com';
    $request->accountRequest->facebook = 'facebook';
    $request->accountRequest->linkedIn = 'linkedIn';
    $request->accountRequest->name = 'Exact Payments';
    $request->accountRequest->onlinePresence = 'Online presence';
    $request->accountRequest->phone = '1111111111';
    $request->accountRequest->twitter = 'twitter';;

    $response = $sdk->accountManagement->putOrganizationOrganizationIdAccountAccountId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest](../../Models/Operations/PutOrganizationOrganizationIdAccountAccountIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse](../../Models/Operations/PutOrganizationOrganizationIdAccountAccountIdResponse.md)**

