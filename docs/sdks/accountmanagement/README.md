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
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\ApplePayDomains;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountRegisterApplePayDomainsRequest();
    $request->applePayDomains = new ApplePayDomains();
    $request->applePayDomains->domains = [
        'corrupti',
    ];
    $request->accountId = 'provident';

    $requestSecurity = new AccountRegisterApplePayDomainsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request, $requestSecurity);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest](../../models/operations/AccountRegisterApplePayDomainsRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsSecurity](../../models/operations/AccountRegisterApplePayDomainsSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsResponse](../../models/operations/AccountRegisterApplePayDomainsResponse.md)**


## getOrganizationOrganizationIdAccount

Retrieve a list of accounts underneath an organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountRequest();
    $request->organizationId = 'distinctio';

    $requestSecurity = new GetOrganizationOrganizationIdAccountSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccount($request, $requestSecurity);

    if ($response->accountResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest](../../models/operations/GetOrganizationOrganizationIdAccountRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSecurity](../../models/operations/GetOrganizationOrganizationIdAccountSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountResponse](../../models/operations/GetOrganizationOrganizationIdAccountResponse.md)**


## getOrganizationOrganizationIdAccountSearch

Retrieve a segmented list of merchant accounts under a parent organization that meet the filtered criteria requirements.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountSearchRequest();
    $request->organizationId = 'quibusdam';
    $request->q = 'unde';

    $requestSecurity = new GetOrganizationOrganizationIdAccountSearchSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountSearch($request, $requestSecurity);

    if ($response->accountResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                           | Type                                                                                                                                                                                | Required                                                                                                                                                                            | Description                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest](../../models/operations/GetOrganizationOrganizationIdAccountSearchRequest.md)   | :heavy_check_mark:                                                                                                                                                                  | The request object to use for the request.                                                                                                                                          |
| `security`                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchSecurity](../../models/operations/GetOrganizationOrganizationIdAccountSearchSecurity.md) | :heavy_check_mark:                                                                                                                                                                  | The security requirements to use for the request.                                                                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchResponse](../../models/operations/GetOrganizationOrganizationIdAccountSearchResponse.md)**


## getOrganizationOrganizationIdAccountAccountId

Retrieve a list of properties associated with a specific merchant account by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountAccountIdRequest();
    $request->accountId = 'nulla';
    $request->organizationId = 'corrupti';

    $requestSecurity = new GetOrganizationOrganizationIdAccountAccountIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountAccountId($request, $requestSecurity);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest](../../models/operations/GetOrganizationOrganizationIdAccountAccountIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |
| `security`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdSecurity](../../models/operations/GetOrganizationOrganizationIdAccountAccountIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                        | The security requirements to use for the request.                                                                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdResponse](../../models/operations/GetOrganizationOrganizationIdAccountAccountIdResponse.md)**


## listApplePayDomains

This endpoint allows you to retrieve a list of your domains which are registered for Apple Pay &amp; ExactJS.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new ListApplePayDomainsRequest();
    $request->accountId = 'illum';

    $requestSecurity = new ListApplePayDomainsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->listApplePayDomains($request, $requestSecurity);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest](../../models/operations/ListApplePayDomainsRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsSecurity](../../models/operations/ListApplePayDomainsSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsResponse](../../models/operations/ListApplePayDomainsResponse.md)**


## putOrganizationOrganizationIdAccountAccountId

Update a specific merchant account by ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\AccountRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\AccountRequestAddress;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdAccountAccountIdRequest();
    $request->accountRequest = new AccountRequest();
    $request->accountRequest->address = new AccountRequestAddress();
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
    $request->accountRequest->twitter = 'twitter';
    $request->accountId = 'vel';
    $request->organizationId = 'error';

    $requestSecurity = new PutOrganizationOrganizationIdAccountAccountIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->accountManagement->putOrganizationOrganizationIdAccountAccountId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest](../../models/operations/PutOrganizationOrganizationIdAccountAccountIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |
| `security`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdSecurity](../../models/operations/PutOrganizationOrganizationIdAccountAccountIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                        | The security requirements to use for the request.                                                                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse](../../models/operations/PutOrganizationOrganizationIdAccountAccountIdResponse.md)**

