# Webhooks


### Available Operations

* [accountDeleteWebhook](#accountdeletewebhook) - Delete Webhook
* [accountDisableWebhook](#accountdisablewebhook) - Disable Webhook
* [accountEnableWebhook](#accountenablewebhook) - Enable Webhook
* [accountGetListWebhooks](#accountgetlistwebhooks) - List Webhooks
* [accountGetRetrieveWebhook](#accountgetretrievewebhook) - Retrieve Webhook
* [accountPostCreateWebhook](#accountpostcreatewebhook) - Create Webhook
* [accountUpdateWebhook](#accountupdatewebhook) - Update Webhook
* [deleteOrganizationOrganizationIdWebhookWebhookId](#deleteorganizationorganizationidwebhookwebhookid) - Delete Webhook
* [getOrganizationOrganizationIdWebhook](#getorganizationorganizationidwebhook) - List Webhooks
* [getOrganizationOrganizationIdWebhookWebhookId](#getorganizationorganizationidwebhookwebhookid) - Retrieve Webhook
* [postOrganizationOrganizationIdWebhook](#postorganizationorganizationidwebhook) - Create Webhook
* [putOrganizationOrganizationIdWebhookWebhookId](#putorganizationorganizationidwebhookwebhookid) - Update Webhook
* [putOrganizationOrganizationIdWebhookWebhookIdDisable](#putorganizationorganizationidwebhookwebhookiddisable) - Disable Webhook
* [putOrganizationOrganizationIdWebhookWebhookIdEnable](#putorganizationorganizationidwebhookwebhookidenable) - Enable Webhook

## accountDeleteWebhook

Delete a webhook and its associated properties.

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
    $request = new Operations\AccountDeleteWebhookRequest();
    $request->accountId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->accountDeleteWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookRequest](../../models/operations/AccountDeleteWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookResponse](../../models/operations/AccountDeleteWebhookResponse.md)**


## accountDisableWebhook

Disable a webhook notification.

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
    $request = new Operations\AccountDisableWebhookRequest();
    $request->accountId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->accountDisableWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookRequest](../../models/operations/AccountDisableWebhookRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookResponse](../../models/operations/AccountDisableWebhookResponse.md)**


## accountEnableWebhook

Enable a webhook notification to be sent to requestor

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
    $request = new Operations\AccountEnableWebhookRequest();
    $request->accountId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->accountEnableWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookRequest](../../models/operations/AccountEnableWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookResponse](../../models/operations/AccountEnableWebhookResponse.md)**


## accountGetListWebhooks

Retrieve a list of webhooks created under an organization.

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
    $request = new Operations\AccountGetListWebhooksRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->accountId = 'string';

    $response = $sdk->webhooks->accountGetListWebhooks($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksRequest](../../models/operations/AccountGetListWebhooksRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksResponse](../../models/operations/AccountGetListWebhooksResponse.md)**


## accountGetRetrieveWebhook

Retrieve the details associated with an existing webhook.

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
    $request = new Operations\AccountGetRetrieveWebhookRequest();
    $request->accountId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->accountGetRetrieveWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookRequest](../../models/operations/AccountGetRetrieveWebhookRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookResponse](../../models/operations/AccountGetRetrieveWebhookResponse.md)**


## accountPostCreateWebhook

Create a new webhook and associate a callback URL.

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
    $request = new Operations\AccountPostCreateWebhookRequest();
    $request->webhookRequest = new Shared\WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = Shared\WebhookEventField::PaymentMethodEnsure;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->accountId = 'string';

    $response = $sdk->webhooks->accountPostCreateWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookRequest](../../models/operations/AccountPostCreateWebhookRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookResponse](../../models/operations/AccountPostCreateWebhookResponse.md)**


## accountUpdateWebhook

Update the properties of an existing webhook.

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
    $request = new Operations\AccountUpdateWebhookRequest();
    $request->updatableWebhookRequest = new Shared\UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = Shared\WebhookEventField::PaymentMethodUnlinkFromCustomer;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->accountId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->accountUpdateWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookRequest](../../models/operations/AccountUpdateWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookResponse](../../models/operations/AccountUpdateWebhookResponse.md)**


## deleteOrganizationOrganizationIdWebhookWebhookId

Delete a webhook and its associated properties.

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
    $request = new Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->deleteOrganizationOrganizationIdWebhookWebhookId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/DeleteOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                            | The request object to use for the request.                                                                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/DeleteOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## getOrganizationOrganizationIdWebhook

Retrieve a list of webhooks created under an organization.

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
    $request = new Operations\GetOrganizationOrganizationIdWebhookRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->organizationId = 'string';

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhook($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookRequest](../../models/operations/GetOrganizationOrganizationIdWebhookRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookResponse](../../models/operations/GetOrganizationOrganizationIdWebhookResponse.md)**


## getOrganizationOrganizationIdWebhookWebhookId

Retrieve the details associated with an existing webhook.

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
    $request = new Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhookWebhookId($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/GetOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/GetOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## postOrganizationOrganizationIdWebhook

Create a new webhook and associate a callback URL.

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
    $request = new Operations\PostOrganizationOrganizationIdWebhookRequest();
    $request->webhookRequest = new Shared\WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = Shared\WebhookEventField::CustomerCreate;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->organizationId = 'string';

    $response = $sdk->webhooks->postOrganizationOrganizationIdWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookRequest](../../models/operations/PostOrganizationOrganizationIdWebhookRequest.md) | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookResponse](../../models/operations/PostOrganizationOrganizationIdWebhookResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookId

Update the properties of an existing webhook.

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
    $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->updatableWebhookRequest = new Shared\UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = Shared\WebhookEventField::ReportCreate;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->organizationId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookId($request);

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
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdDisable

Disable a webhook notification.

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
    $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest();
    $request->organizationId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdDisable($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest.md) | :heavy_check_mark:                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdEnable

Enable a webhook notification to be sent to requestor

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
    $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest();
    $request->organizationId = 'string';
    $request->webhookId = 'string';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdEnable($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                           | Type                                                                                                                                                                                                | Required                                                                                                                                                                                            | Description                                                                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest.md) | :heavy_check_mark:                                                                                                                                                                                  | The request object to use for the request.                                                                                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse.md)**

