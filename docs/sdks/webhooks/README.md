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

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\AccountDeleteWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->accountDeleteWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookRequest](../../Models/Operations/AccountDeleteWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookResponse](../../Models/Operations/AccountDeleteWebhookResponse.md)**


## accountDisableWebhook

Disable a webhook notification.

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
        $request = new Operations\AccountDisableWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->accountDisableWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookRequest](../../Models/Operations/AccountDisableWebhookRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookResponse](../../Models/Operations/AccountDisableWebhookResponse.md)**


## accountEnableWebhook

Enable a webhook notification to be sent to requestor

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
        $request = new Operations\AccountEnableWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->accountEnableWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookRequest](../../Models/Operations/AccountEnableWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookResponse](../../Models/Operations/AccountEnableWebhookResponse.md)**


## accountGetListWebhooks

Retrieve a list of webhooks created under an organization.

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
        $request = new Operations\AccountGetListWebhooksRequest();
    $request->accountId = '<value>';
    $request->dollarSkip = 10;
    $request->dollarLimit = 10;
    $request->dollarSort = '-name';;

    $response = $sdk->webhooks->accountGetListWebhooks($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksRequest](../../Models/Operations/AccountGetListWebhooksRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksResponse](../../Models/Operations/AccountGetListWebhooksResponse.md)**


## accountGetRetrieveWebhook

Retrieve the details associated with an existing webhook.

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
        $request = new Operations\AccountGetRetrieveWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->accountGetRetrieveWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookRequest](../../Models/Operations/AccountGetRetrieveWebhookRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookResponse](../../Models/Operations/AccountGetRetrieveWebhookResponse.md)**


## accountPostCreateWebhook

Create a new webhook and associate a callback URL.

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
        $request = new Operations\AccountPostCreateWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookRequest = new Shared\WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = Shared\WebhookEventField::PaymentMethodEnsure;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];;

    $response = $sdk->webhooks->accountPostCreateWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookRequest](../../Models/Operations/AccountPostCreateWebhookRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookResponse](../../Models/Operations/AccountPostCreateWebhookResponse.md)**


## accountUpdateWebhook

Update the properties of an existing webhook.

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
        $request = new Operations\AccountUpdateWebhookRequest();
    $request->accountId = '<value>';
    $request->webhookId = '<value>';
    $request->updatableWebhookRequest = new Shared\UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = Shared\WebhookEventField::PaymentMethodUnlinkFromCustomer;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];;

    $response = $sdk->webhooks->accountUpdateWebhook($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookRequest](../../Models/Operations/AccountUpdateWebhookRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookResponse](../../Models/Operations/AccountUpdateWebhookResponse.md)**


## deleteOrganizationOrganizationIdWebhookWebhookId

Delete a webhook and its associated properties.

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
        $request = new Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->deleteOrganizationOrganizationIdWebhookWebhookId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest](../../Models/Operations/DeleteOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                            | The request object to use for the request.                                                                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdResponse](../../Models/Operations/DeleteOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## getOrganizationOrganizationIdWebhook

Retrieve a list of webhooks created under an organization.

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
        $request = new Operations\GetOrganizationOrganizationIdWebhookRequest();
    $request->organizationId = '<value>';
    $request->dollarSkip = 10;
    $request->dollarLimit = 10;
    $request->dollarSort = '-name';;

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhook($request);

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
| `$request`                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookRequest](../../Models/Operations/GetOrganizationOrganizationIdWebhookRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookResponse](../../Models/Operations/GetOrganizationOrganizationIdWebhookResponse.md)**


## getOrganizationOrganizationIdWebhookWebhookId

Retrieve the details associated with an existing webhook.

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
        $request = new Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhookWebhookId($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                               | Type                                                                                                                                                                                    | Required                                                                                                                                                                                | Description                                                                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest](../../Models/Operations/GetOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdResponse](../../Models/Operations/GetOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## postOrganizationOrganizationIdWebhook

Create a new webhook and associate a callback URL.

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
        $request = new Operations\PostOrganizationOrganizationIdWebhookRequest();
    $request->organizationId = '<value>';
    $request->webhookRequest = new Shared\WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = Shared\WebhookEventField::CustomerCreate;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];;

    $response = $sdk->webhooks->postOrganizationOrganizationIdWebhook($request);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookRequest](../../Models/Operations/PostOrganizationOrganizationIdWebhookRequest.md) | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookResponse](../../Models/Operations/PostOrganizationOrganizationIdWebhookResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookId

Update the properties of an existing webhook.

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
        $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = '<value>';
    $request->webhookId = '<value>';
    $request->updatableWebhookRequest = new Shared\UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = Shared\WebhookEventField::ReportCreate;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];;

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookId($request);

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
| `$request`                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdRequest.md) | :heavy_check_mark:                                                                                                                                                                      | The request object to use for the request.                                                                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdResponse](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdDisable

Disable a webhook notification.

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
        $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest();
    $request->organizationId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdDisable($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                             | Type                                                                                                                                                                                                  | Required                                                                                                                                                                                              | Description                                                                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest.md) | :heavy_check_mark:                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdEnable

Enable a webhook notification to be sent to requestor

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
        $request = new Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest();
    $request->organizationId = '<value>';
    $request->webhookId = '<value>';;

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdEnable($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                           | Type                                                                                                                                                                                                | Required                                                                                                                                                                                            | Description                                                                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest.md) | :heavy_check_mark:                                                                                                                                                                                  | The request object to use for the request.                                                                                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse](../../Models/Operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse.md)**

