# underwritingWorkflow

### Available Operations

* [deleteWorkflowById](#deleteworkflowbyid) - Delete Workflow
* [disableWorkflowById](#disableworkflowbyid) - Disable Workflow
* [enableWorkflowById](#enableworkflowbyid) - Enable Workflow
* [getOrganizationOrganizationIdOnboardingWorkflow](#getorganizationorganizationidonboardingworkflow) - List Workflows
* [getOrganizationOrganizationIdOnboardingWorkflowWorkflowId](#getorganizationorganizationidonboardingworkflowworkflowid) - Retrieve Workflow
* [postOrganizationOrganizationIdOnboardingWorkflow](#postorganizationorganizationidonboardingworkflow) - Create Workflow
* [putOrganizationOrganizationIdOnboardingWorkflowWorkflowId](#putorganizationorganizationidonboardingworkflowworkflowid) - Update Workflow
* [setDefaultWorkflowById](#setdefaultworkflowbyid) - Set Default Workflow

## deleteWorkflowById

Delete a specific Workflow by Organization and Workflow identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteWorkflowByIdRequest();
    $request->organizationId = 'numquam';
    $request->workflowId = 'veritatis';

    $requestSecurity = new DeleteWorkflowByIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->deleteWorkflowById($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest](../../models/operations/DeleteWorkflowByIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdSecurity](../../models/operations/DeleteWorkflowByIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdResponse](../../models/operations/DeleteWorkflowByIdResponse.md)**


## disableWorkflowById

Disable a specific Workflow by Organization and Workflow identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DisableWorkflowByIdRequest();
    $request->organizationId = 'ipsa';
    $request->workflowId = 'ipsa';

    $requestSecurity = new DisableWorkflowByIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->disableWorkflowById($request, $requestSecurity);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest](../../models/operations/DisableWorkflowByIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdSecurity](../../models/operations/DisableWorkflowByIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdResponse](../../models/operations/DisableWorkflowByIdResponse.md)**


## enableWorkflowById

Enable a specific Workflow by Organization and Workflow identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new EnableWorkflowByIdRequest();
    $request->organizationId = 'iure';
    $request->workflowId = 'odio';

    $requestSecurity = new EnableWorkflowByIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->enableWorkflowById($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest](../../models/operations/EnableWorkflowByIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdSecurity](../../models/operations/EnableWorkflowByIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdResponse](../../models/operations/EnableWorkflowByIdResponse.md)**


## getOrganizationOrganizationIdOnboardingWorkflow

Retrieve a list of active underwriting workflows associated with your organization.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->organizationId = 'quaerat';

    $requestSecurity = new GetOrganizationOrganizationIdOnboardingWorkflowSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflow($request, $requestSecurity);

    if ($response->underwritingWorkflowResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowRequest.md)   | :heavy_check_mark:                                                                                                                                                                            | The request object to use for the request.                                                                                                                                                    |
| `security`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowSecurity](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowSecurity.md) | :heavy_check_mark:                                                                                                                                                                            | The security requirements to use for the request.                                                                                                                                             |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowResponse](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowResponse.md)**


## getOrganizationOrganizationIdOnboardingWorkflowWorkflowId

Retrieve a list of properties associated with a specific workflow ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->organizationId = 'accusamus';
    $request->workflowId = 'quidem';

    $requestSecurity = new GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request, $requestSecurity);

    if ($response->underwritingWorkflowResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                         | Type                                                                                                                                                                                                              | Required                                                                                                                                                                                                          | Description                                                                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                        |
| `security`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse.md)**


## postOrganizationOrganizationIdOnboardingWorkflow

Create a new Underwriting Workflow for the Organization to evaluate Onboarding Applications.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflow;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflowMetadata;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->underwritingWorkflowRequestCreateWorkflow = new UnderwritingWorkflowRequestCreateWorkflow();
    $request->underwritingWorkflowRequestCreateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestCreateWorkflow->metadata = new UnderwritingWorkflowRequestCreateWorkflowMetadata();
    $request->underwritingWorkflowRequestCreateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestCreateWorkflow->rules = [
        new UnderwritingRule3(),
        new UnderwritingRule4(),
        new UnderwritingRule1(),
        new UnderwritingRule4(),
    ];
    $request->organizationId = 'sit';

    $requestSecurity = new PostOrganizationOrganizationIdOnboardingWorkflowSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->postOrganizationOrganizationIdOnboardingWorkflow($request, $requestSecurity);

    if ($response->postOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                       | Type                                                                                                                                                                                            | Required                                                                                                                                                                                        | Description                                                                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest](../../models/operations/PostOrganizationOrganizationIdOnboardingWorkflowRequest.md)   | :heavy_check_mark:                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                      |
| `security`                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowSecurity](../../models/operations/PostOrganizationOrganizationIdOnboardingWorkflowSecurity.md) | :heavy_check_mark:                                                                                                                                                                              | The security requirements to use for the request.                                                                                                                                               |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowResponse](../../models/operations/PostOrganizationOrganizationIdOnboardingWorkflowResponse.md)**


## putOrganizationOrganizationIdOnboardingWorkflowWorkflowId

Update Underwriting Workflow properties for the given Organization and Workflow identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestUpdateWorkflow;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestUpdateWorkflowMetadata;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->underwritingWorkflowRequestUpdateWorkflow = new UnderwritingWorkflowRequestUpdateWorkflow();
    $request->underwritingWorkflowRequestUpdateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestUpdateWorkflow->metadata = new UnderwritingWorkflowRequestUpdateWorkflowMetadata();
    $request->underwritingWorkflowRequestUpdateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestUpdateWorkflow->rules = [
        new UnderwritingRule(),
        new UnderwritingRule5(),
        new UnderwritingRule5(),
        new UnderwritingRule3(),
    ];
    $request->organizationId = 'voluptate';
    $request->workflowId = 'dolorum';

    $requestSecurity = new PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->putOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                         | Type                                                                                                                                                                                                              | Required                                                                                                                                                                                                          | Description                                                                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md)   | :heavy_check_mark:                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                        |
| `security`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity](../../models/operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdSecurity.md) | :heavy_check_mark:                                                                                                                                                                                                | The security requirements to use for the request.                                                                                                                                                                 |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse.md)**


## setDefaultWorkflowById

Set a specific Workflow as the default to process the new Onboarding for the given Organization and Workflow identifiers. The current default Workflow will lose the defaulted assignment.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new SetDefaultWorkflowByIdRequest();
    $request->organizationId = 'deleniti';
    $request->workflowId = 'omnis';

    $requestSecurity = new SetDefaultWorkflowByIdSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->underwritingWorkflow->setDefaultWorkflowById($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest](../../models/operations/SetDefaultWorkflowByIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdSecurity](../../models/operations/SetDefaultWorkflowByIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse](../../models/operations/SetDefaultWorkflowByIdResponse.md)**

