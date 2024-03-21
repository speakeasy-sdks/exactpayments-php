# UnderwritingWorkflow


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

require 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteWorkflowByIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';;

    $response = $sdk->underwritingWorkflow->deleteWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest](../../Models/Operations/DeleteWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdResponse](../../Models/Operations/DeleteWorkflowByIdResponse.md)**


## disableWorkflowById

Disable a specific Workflow by Organization and Workflow identifiers.

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
        $request = new Operations\DisableWorkflowByIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';;

    $response = $sdk->underwritingWorkflow->disableWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest](../../Models/Operations/DisableWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdResponse](../../Models/Operations/DisableWorkflowByIdResponse.md)**


## enableWorkflowById

Enable a specific Workflow by Organization and Workflow identifiers.

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
        $request = new Operations\EnableWorkflowByIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';;

    $response = $sdk->underwritingWorkflow->enableWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest](../../Models/Operations/EnableWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdResponse](../../Models/Operations/EnableWorkflowByIdResponse.md)**


## getOrganizationOrganizationIdOnboardingWorkflow

Retrieve a list of active underwriting workflows associated with your organization.

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
        $request = new Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->organizationId = '<value>';
    $request->dollarSort = '-name';
    $request->dollarSkip = 10;
    $request->dollarLimit = 10;;

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflow($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest](../../Models/Operations/GetOrganizationOrganizationIdOnboardingWorkflowRequest.md) | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowResponse](../../Models/Operations/GetOrganizationOrganizationIdOnboardingWorkflowResponse.md)**


## getOrganizationOrganizationIdOnboardingWorkflowWorkflowId

Retrieve a list of properties associated with a specific workflow ID.

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
        $request = new Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';;

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request);

    if ($response->underwritingWorkflowResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                       | Type                                                                                                                                                                                                            | Required                                                                                                                                                                                                        | Description                                                                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../Models/Operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse](../../Models/Operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse.md)**


## postOrganizationOrganizationIdOnboardingWorkflow

Create a new Underwriting Workflow for the Organization to evaluate Onboarding Applications.

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
        $request = new Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->organizationId = '<value>';
    $request->underwritingWorkflowRequestCreateWorkflow = new Shared\UnderwritingWorkflowRequestCreateWorkflow();
    $request->underwritingWorkflowRequestCreateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestCreateWorkflow->metadata = new Shared\UnderwritingWorkflowRequestCreateWorkflowMetadata();
    $request->underwritingWorkflowRequestCreateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestCreateWorkflow->rules = [
        '<value>',
    ];;

    $response = $sdk->underwritingWorkflow->postOrganizationOrganizationIdOnboardingWorkflow($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest](../../Models/Operations/PostOrganizationOrganizationIdOnboardingWorkflowRequest.md) | :heavy_check_mark:                                                                                                                                                                            | The request object to use for the request.                                                                                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowResponse](../../Models/Operations/PostOrganizationOrganizationIdOnboardingWorkflowResponse.md)**


## putOrganizationOrganizationIdOnboardingWorkflowWorkflowId

Update Underwriting Workflow properties for the given Organization and Workflow identifiers.

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
        $request = new Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';
    $request->underwritingWorkflowRequestUpdateWorkflow = new Shared\UnderwritingWorkflowRequestUpdateWorkflow();
    $request->underwritingWorkflowRequestUpdateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestUpdateWorkflow->metadata = new Shared\UnderwritingWorkflowRequestUpdateWorkflowMetadata();
    $request->underwritingWorkflowRequestUpdateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestUpdateWorkflow->rules = [
        '<value>',
    ];;

    $response = $sdk->underwritingWorkflow->putOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                       | Type                                                                                                                                                                                                            | Required                                                                                                                                                                                                        | Description                                                                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../Models/Operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse](../../Models/Operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdResponse.md)**


## setDefaultWorkflowById

Set a specific Workflow as the default to process the new Onboarding for the given Organization and Workflow identifiers. The current default Workflow will lose the defaulted assignment.

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
        $request = new Operations\SetDefaultWorkflowByIdRequest();
    $request->organizationId = '<value>';
    $request->workflowId = '<value>';;

    $response = $sdk->underwritingWorkflow->setDefaultWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest](../../Models/Operations/SetDefaultWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse](../../Models/Operations/SetDefaultWorkflowByIdResponse.md)**

