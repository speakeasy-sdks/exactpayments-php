# AdminTools


### Available Operations

* [getListNotes](#getlistnotes) - List Notes
* [postCreateNotes](#postcreatenotes) - Add Note
* [putOrganizationOrganizationIdOnboardingOnboardingIdRecheck](#putorganizationorganizationidonboardingonboardingidrecheck) - Process Workflow
* [putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule](#putorganizationorganizationidonboardingonboardingidretryrule) - Process Verification
* [putOrganizationOrganizationIdOnboardingOnboardingIdStatus](#putorganizationorganizationidonboardingonboardingidstatus) - Update Onboarding Status

## getListNotes

Retrieve a list of Notes for the given Organization and Onboarding identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetListNotesRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->adminTools->getListNotes($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesRequest](../../Models/Operations/GetListNotesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesResponse](../../Models/Operations/GetListNotesResponse.md)**


## postCreateNotes

Create a Note for a specific Onboarding Application for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PostCreateNotesRequest();
    $request->requestBody = new Operations\PostCreateNotesRequestBody();
    $request->requestBody->note = 'Some more documents are needed to verify the account\'s eligibility. Jen Will contact the merchant to collect further details by 2nd Aug.';
    $request->requestBody->onboardingIsDeleted = false;
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->adminTools->postCreateNotes($request);

    if ($response->onboardingNote !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequest](../../Models/Operations/PostCreateNotesRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesResponse](../../Models/Operations/PostCreateNotesResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRecheck

Manually request all verifications in an underwriting workflow to be performed outside of the initial onboarding process.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest();
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdRecheck($request);

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
| `$request`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest.md) | :heavy_check_mark:                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule

Manually request an underwriting workflow verification to be performed outside of the initial onboarding workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest();
    $request->onboardingRetryRuleRequest = new Shared\OnboardingRetryRuleRequest();
    $request->onboardingRetryRuleRequest->ruleName = 'string';
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                                             | Type                                                                                                                                                                                                                  | Required                                                                                                                                                                                                              | Description                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest.md) | :heavy_check_mark:                                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdStatus

Manually update the merchant onboarding application status after being automatically determined by the decision engine.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest();
    $request->updateOnboardingStatusRequest = new Shared\UpdateOnboardingStatusRequest();
    $request->updateOnboardingStatusRequest->isDeleted = 'string';
    $request->updateOnboardingStatusRequest->status = Shared\UpdateOnboardingStatusRequestStatus::Approved;
    $request->updateOnboardingStatusRequest->statusChangeReason = Shared\UpdateOnboardingStatusRequestStatusChangeReason::GeneralRiskConcern;
    $request->updateOnboardingStatusRequest->statusChangeReasonNote = 'string';
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->adminTools->putOrganizationOrganizationIdOnboardingOnboardingIdStatus($request);

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
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse](../../Models/Operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse.md)**

