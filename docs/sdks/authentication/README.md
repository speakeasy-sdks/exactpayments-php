# Authentication


### Available Operations

* [createApplicationToken](#createapplicationtoken) - Create Application Token
* [createUserToken](#createusertoken) - Create User Token
* [deleteApplicationToken](#deleteapplicationtoken) - Delete Application Token
* [queryApplicationToken](#queryapplicationtoken) - Query Application Tokens

## createApplicationToken

Create a new Application Token for non-human users, like external APIs or User Interfaces to access our API under the session account.

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
    $request = new Operations\CreateApplicationTokenRequest();
    $request->requestBody = new Operations\CreateApplicationTokenRequestBody();
    $request->requestBody->label = 'Transactions Application Token';
    $request->requestBody->mode = Operations\Mode::Live;
    $request->requestBody->permissions = [
        Shared\Permissions::ChargesCreate,
    ];
    $request->applicationId = 'string';

    $response = $sdk->authentication->createApplicationToken($request);

    if ($response->applicationToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenRequest](../../Models/Operations/CreateApplicationTokenRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateApplicationTokenResponse](../../Models/Operations/CreateApplicationTokenResponse.md)**


## createUserToken

Creates a User Token that can be used to authorize calls to other API endpoints in our application.

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
    $request = new Operations\CreateUserTokenRequest();
    $request->requestBody = new Operations\CreateUserTokenRequestBody();
    $request->requestBody->account = '64b04d6d198ce11d0d64ca2a';
    $request->requestBody->accountType = Operations\AccountType::Account;
    $request->requestBody->application = 'admin-pwa';
    $request->requestBody->email = 'jon.doe@acmecorp.com';
    $request->requestBody->mode = Shared\AccountMode::Live;
    $request->requestBody->password = 'E*3q&87uBHc5xiIsiLK0';
    $request->requestBody->user = '64b04d6d198ce11d0d64ca2a';
    $request->xApplicationId = 'admin-pwa';

    $response = $sdk->authentication->createUserToken($request);

    if ($response->userToken !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenRequest](../../Models/Operations/CreateUserTokenRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateUserTokenResponse](../../Models/Operations/CreateUserTokenResponse.md)**


## deleteApplicationToken

Delete a specific Application Token by the given Application Identifier under the session account.

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
    $request = new Operations\DeleteApplicationTokenRequest();
    $request->applicationId = 'string';
    $request->tokenId = 'string';

    $response = $sdk->authentication->deleteApplicationToken($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenRequest](../../Models/Operations/DeleteApplicationTokenRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteApplicationTokenResponse](../../Models/Operations/DeleteApplicationTokenResponse.md)**


## queryApplicationToken

Query Application Tokens for non-human users, like external APIs or User Interfaces to access our API under the session account.

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
    $request = new Operations\QueryApplicationTokenRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->applicationId = 'string';

    $response = $sdk->authentication->queryApplicationToken($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenRequest](../../Models/Operations/QueryApplicationTokenRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\QueryApplicationTokenResponse](../../Models/Operations/QueryApplicationTokenResponse.md)**

