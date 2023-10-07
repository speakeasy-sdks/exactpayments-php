# AccountManagement
(*accountManagement*)

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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountRegisterApplePayDomainsRequest();
    $request->requestBody = [
        'Licensed' => 'Northeast',
    ];
    $request->accountId = 'arctic';

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountRegisterApplePayDomainsRequest](../../models/operations/AccountRegisterApplePayDomainsRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountRequest();
    $request->organizationId = 'male blue degree';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccount($request);

    if ($response->accountResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountRequest](../../models/operations/GetOrganizationOrganizationIdAccountRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountSearchRequest();
    $request->organizationId = 'Assimilated South Hybrid';
    $request->q = 'Northeast';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountSearch($request);

    if ($response->accountResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                         | Type                                                                                                                                                                              | Required                                                                                                                                                                          | Description                                                                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountSearchRequest](../../models/operations/GetOrganizationOrganizationIdAccountSearchRequest.md) | :heavy_check_mark:                                                                                                                                                                | The request object to use for the request.                                                                                                                                        |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdAccountAccountIdRequest();
    $request->accountId = 'Wagon channels Bicycle';
    $request->organizationId = 'Electronic Touring Non';

    $response = $sdk->accountManagement->getOrganizationOrganizationIdAccountAccountId($request);

    if ($response->accountResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdAccountAccountIdRequest](../../models/operations/GetOrganizationOrganizationIdAccountAccountIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new ListApplePayDomainsRequest();
    $request->accountId = 'application';

    $response = $sdk->accountManagement->listApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\ListApplePayDomainsRequest](../../models/operations/ListApplePayDomainsRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\AccountRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\AccountRequestAddress;

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
    $request->accountId = 'Lincoln distributed Automated';
    $request->organizationId = 'male sledge willing';

    $response = $sdk->accountManagement->putOrganizationOrganizationIdAccountAccountId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdRequest](../../models/operations/PutOrganizationOrganizationIdAccountAccountIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdAccountAccountIdResponse](../../models/operations/PutOrganizationOrganizationIdAccountAccountIdResponse.md)**

