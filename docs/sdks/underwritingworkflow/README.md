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
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteWorkflowByIdRequest();
    $request->organizationId = 'asperiores';
    $request->workflowId = 'earum';

    $response = $sdk->underwritingWorkflow->deleteWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteWorkflowByIdRequest](../../models/operations/DeleteWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DisableWorkflowByIdRequest();
    $request->organizationId = 'modi';
    $request->workflowId = 'iste';

    $response = $sdk->underwritingWorkflow->disableWorkflowById($request);

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
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\DisableWorkflowByIdRequest](../../models/operations/DisableWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new EnableWorkflowByIdRequest();
    $request->organizationId = 'dolorum';
    $request->workflowId = 'deleniti';

    $response = $sdk->underwritingWorkflow->enableWorkflowById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\EnableWorkflowByIdRequest](../../models/operations/EnableWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->organizationId = 'pariatur';

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflow($request);

    if ($response->underwritingWorkflowResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowRequest](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowRequest.md) | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->organizationId = 'provident';
    $request->workflowId = 'nobis';

    $response = $sdk->underwritingWorkflow->getOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request);

    if ($response->underwritingWorkflowResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                       | Type                                                                                                                                                                                                            | Required                                                                                                                                                                                                        | Description                                                                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../models/operations/GetOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflow;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestCreateWorkflowMetadata;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostOrganizationOrganizationIdOnboardingWorkflowRequest();
    $request->underwritingWorkflowRequestCreateWorkflow = new UnderwritingWorkflowRequestCreateWorkflow();
    $request->underwritingWorkflowRequestCreateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestCreateWorkflow->metadata = new UnderwritingWorkflowRequestCreateWorkflowMetadata();
    $request->underwritingWorkflowRequestCreateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestCreateWorkflow->rules = [
        new PlaidAuthRule(),
    ];
    $request->organizationId = 'delectus';

    $response = $sdk->underwritingWorkflow->postOrganizationOrganizationIdOnboardingWorkflow($request);

    if ($response->postOrganizationOrganizationIdOnboardingWorkflow201ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                     | Type                                                                                                                                                                                          | Required                                                                                                                                                                                      | Description                                                                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\PostOrganizationOrganizationIdOnboardingWorkflowRequest](../../models/operations/PostOrganizationOrganizationIdOnboardingWorkflowRequest.md) | :heavy_check_mark:                                                                                                                                                                            | The request object to use for the request.                                                                                                                                                    |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestUpdateWorkflow;
use \TheLogicStudio\ExactPayments\Models\Shared\UnderwritingWorkflowRequestUpdateWorkflowMetadata;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest();
    $request->underwritingWorkflowRequestUpdateWorkflow = new UnderwritingWorkflowRequestUpdateWorkflow();
    $request->underwritingWorkflowRequestUpdateWorkflow->entryRule = 'Know Your Customer Check';
    $request->underwritingWorkflowRequestUpdateWorkflow->metadata = new UnderwritingWorkflowRequestUpdateWorkflowMetadata();
    $request->underwritingWorkflowRequestUpdateWorkflow->name = 'Main Workflow';
    $request->underwritingWorkflowRequestUpdateWorkflow->rules = [
        new OFACRule(),
    ];
    $request->organizationId = 'quos';
    $request->workflowId = 'aliquid';

    $response = $sdk->underwritingWorkflow->putOrganizationOrganizationIdOnboardingWorkflowWorkflowId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                       | Type                                                                                                                                                                                                            | Required                                                                                                                                                                                                        | Description                                                                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingWorkflowWorkflowIdRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


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
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new SetDefaultWorkflowByIdRequest();
    $request->organizationId = 'dolorem';
    $request->workflowId = 'dolorem';

    $response = $sdk->underwritingWorkflow->setDefaultWorkflowById($request);

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
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdRequest](../../models/operations/SetDefaultWorkflowByIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SetDefaultWorkflowByIdResponse](../../models/operations/SetDefaultWorkflowByIdResponse.md)**

