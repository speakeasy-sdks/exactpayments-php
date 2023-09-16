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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountDeleteWebhookRequest();
    $request->accountId = 'dolor';
    $request->webhookId = 'qui';

    $requestSecurity = new AccountDeleteWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountDeleteWebhook($request, $requestSecurity);

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
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookRequest](../../models/operations/AccountDeleteWebhookRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookSecurity](../../models/operations/AccountDeleteWebhookSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDeleteWebhookResponse](../../models/operations/AccountDeleteWebhookResponse.md)**


## accountDisableWebhook

Disable a webhook notification.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountDisableWebhookRequest();
    $request->accountId = 'ipsum';
    $request->webhookId = 'hic';

    $requestSecurity = new AccountDisableWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountDisableWebhook($request, $requestSecurity);

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
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookRequest](../../models/operations/AccountDisableWebhookRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookSecurity](../../models/operations/AccountDisableWebhookSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountDisableWebhookResponse](../../models/operations/AccountDisableWebhookResponse.md)**


## accountEnableWebhook

Enable a webhook notification to be sent to requestor

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountEnableWebhookRequest();
    $request->accountId = 'excepturi';
    $request->webhookId = 'cum';

    $requestSecurity = new AccountEnableWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountEnableWebhook($request, $requestSecurity);

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
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookRequest](../../models/operations/AccountEnableWebhookRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookSecurity](../../models/operations/AccountEnableWebhookSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountEnableWebhookResponse](../../models/operations/AccountEnableWebhookResponse.md)**


## accountGetListWebhooks

Retrieve a list of webhooks created under an organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountGetListWebhooksRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->accountId = 'voluptate';

    $requestSecurity = new AccountGetListWebhooksSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountGetListWebhooks($request, $requestSecurity);

    if ($response->webhookResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksRequest](../../models/operations/AccountGetListWebhooksRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksSecurity](../../models/operations/AccountGetListWebhooksSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetListWebhooksResponse](../../models/operations/AccountGetListWebhooksResponse.md)**


## accountGetRetrieveWebhook

Retrieve the details associated with an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountGetRetrieveWebhookRequest();
    $request->accountId = 'dignissimos';
    $request->webhookId = 'reiciendis';

    $requestSecurity = new AccountGetRetrieveWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountGetRetrieveWebhook($request, $requestSecurity);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookRequest](../../models/operations/AccountGetRetrieveWebhookRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookSecurity](../../models/operations/AccountGetRetrieveWebhookSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetRetrieveWebhookResponse](../../models/operations/AccountGetRetrieveWebhookResponse.md)**


## accountPostCreateWebhook

Create a new webhook and associate a callback URL.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookEventField;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountPostCreateWebhookRequest();
    $request->webhookRequest = new WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = WebhookEventField::PaymentSettle;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->accountId = 'dolorum';

    $requestSecurity = new AccountPostCreateWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountPostCreateWebhook($request, $requestSecurity);

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
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookRequest](../../models/operations/AccountPostCreateWebhookRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookSecurity](../../models/operations/AccountPostCreateWebhookSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountPostCreateWebhookResponse](../../models/operations/AccountPostCreateWebhookResponse.md)**


## accountUpdateWebhook

Update the properties of an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdatableWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookEventField;
use \TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new AccountUpdateWebhookRequest();
    $request->updatableWebhookRequest = new UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = WebhookEventField::OrderCreate;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->accountId = 'veritatis';
    $request->webhookId = 'ipsa';

    $requestSecurity = new AccountUpdateWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->accountUpdateWebhook($request, $requestSecurity);

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
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookRequest](../../models/operations/AccountUpdateWebhookRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookSecurity](../../models/operations/AccountUpdateWebhookSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\AccountUpdateWebhookResponse](../../models/operations/AccountUpdateWebhookResponse.md)**


## deleteOrganizationOrganizationIdWebhookWebhookId

Delete a webhook and its associated properties.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = 'ipsa';
    $request->webhookId = 'iure';

    $requestSecurity = new DeleteOrganizationOrganizationIdWebhookWebhookIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->deleteOrganizationOrganizationIdWebhookWebhookId($request, $requestSecurity);

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
| `$request`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/DeleteOrganizationOrganizationIdWebhookWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                      |
| `security`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdSecurity](../../models/operations/DeleteOrganizationOrganizationIdWebhookWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                              | The security requirements to use for the request.                                                                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/DeleteOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## getOrganizationOrganizationIdWebhook

Retrieve a list of webhooks created under an organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdWebhookRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->organizationId = 'odio';

    $requestSecurity = new GetOrganizationOrganizationIdWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhook($request, $requestSecurity);

    if ($response->webhookResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                               | Type                                                                                                                                                                    | Required                                                                                                                                                                | Description                                                                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookRequest](../../models/operations/GetOrganizationOrganizationIdWebhookRequest.md)   | :heavy_check_mark:                                                                                                                                                      | The request object to use for the request.                                                                                                                              |
| `security`                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookSecurity](../../models/operations/GetOrganizationOrganizationIdWebhookSecurity.md) | :heavy_check_mark:                                                                                                                                                      | The security requirements to use for the request.                                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookResponse](../../models/operations/GetOrganizationOrganizationIdWebhookResponse.md)**


## getOrganizationOrganizationIdWebhookWebhookId

Retrieve the details associated with an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->organizationId = 'quaerat';
    $request->webhookId = 'accusamus';

    $requestSecurity = new GetOrganizationOrganizationIdWebhookWebhookIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->getOrganizationOrganizationIdWebhookWebhookId($request, $requestSecurity);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/GetOrganizationOrganizationIdWebhookWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |
| `security`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdSecurity](../../models/operations/GetOrganizationOrganizationIdWebhookWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                        | The security requirements to use for the request.                                                                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/GetOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## postOrganizationOrganizationIdWebhook

Create a new webhook and associate a callback URL.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookEventField;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostOrganizationOrganizationIdWebhookRequest();
    $request->webhookRequest = new WebhookRequest();
    $request->webhookRequest->description = 'Completed reports for this account.';
    $request->webhookRequest->event = WebhookEventField::PaymentMethodQueryForCustomerByCustomerToken;
    $request->webhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->organizationId = 'voluptatibus';

    $requestSecurity = new PostOrganizationOrganizationIdWebhookSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->postOrganizationOrganizationIdWebhook($request, $requestSecurity);

    if ($response->webhookResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                 | Type                                                                                                                                                                      | Required                                                                                                                                                                  | Description                                                                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookRequest](../../models/operations/PostOrganizationOrganizationIdWebhookRequest.md)   | :heavy_check_mark:                                                                                                                                                        | The request object to use for the request.                                                                                                                                |
| `security`                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookSecurity](../../models/operations/PostOrganizationOrganizationIdWebhookSecurity.md) | :heavy_check_mark:                                                                                                                                                        | The security requirements to use for the request.                                                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdWebhookResponse](../../models/operations/PostOrganizationOrganizationIdWebhookResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookId

Update the properties of an existing webhook.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdatableWebhookRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\WebhookEventField;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdWebhookWebhookIdRequest();
    $request->updatableWebhookRequest = new UpdatableWebhookRequest();
    $request->updatableWebhookRequest->description = 'Completed reports for this account.';
    $request->updatableWebhookRequest->event = WebhookEventField::OrderUpdate;
    $request->updatableWebhookRequest->urls = [
        '["https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/success","https://736d1e71-c9ae-409b-81ff-c2c38c68ad4b.mock.pstmn.io/dev/hook/finished"]',
    ];
    $request->organizationId = 'natus';
    $request->webhookId = 'eos';

    $requestSecurity = new PutOrganizationOrganizationIdWebhookWebhookIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookId($request, $requestSecurity);

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
| `$request`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |
| `security`                                                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdSecurity](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                        | The security requirements to use for the request.                                                                                                                                         |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdDisable

Disable a webhook notification.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest();
    $request->organizationId = 'atque';
    $request->webhookId = 'sit';

    $requestSecurity = new PutOrganizationOrganizationIdWebhookWebhookIdDisableSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdDisable($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                               | Type                                                                                                                                                                                                    | Required                                                                                                                                                                                                | Description                                                                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableRequest.md)   | :heavy_check_mark:                                                                                                                                                                                      | The request object to use for the request.                                                                                                                                                              |
| `security`                                                                                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableSecurity](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableSecurity.md) | :heavy_check_mark:                                                                                                                                                                                      | The security requirements to use for the request.                                                                                                                                                       |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdDisableResponse.md)**


## putOrganizationOrganizationIdWebhookWebhookIdEnable

Enable a webhook notification to be sent to requestor

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest();
    $request->organizationId = 'fugiat';
    $request->webhookId = 'ab';

    $requestSecurity = new PutOrganizationOrganizationIdWebhookWebhookIdEnableSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->webhooks->putOrganizationOrganizationIdWebhookWebhookIdEnable($request, $requestSecurity);

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
| `$request`                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableRequest.md)   | :heavy_check_mark:                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                            |
| `security`                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableSecurity](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableSecurity.md) | :heavy_check_mark:                                                                                                                                                                                    | The security requirements to use for the request.                                                                                                                                                     |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse](../../models/operations/PutOrganizationOrganizationIdWebhookWebhookIdEnableResponse.md)**

