# AdminTools
(*adminTools*)

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetListNotesRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetListNotesRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->onboardingId = 'pixel';
    $request->organizationId = 'Southeast';

    $response = $sdk->adminTools->getListNotes($request);

    if ($response->onboardingNotes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesRequest](../../models/operations/GetListNotesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetListNotesResponse](../../models/operations/GetListNotesResponse.md)**


## postCreateNotes

Create a Note for a specific Onboarding Application for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequestBodyInput;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PostCreateNotesRequest();
    $request->requestBody = new PostCreateNotesRequestBodyInput();
    $request->requestBody->note = 'Some more documents are needed to verify the account\'s eligibility. Jen Will contact the merchant to collect further details by 2nd Aug.';
    $request->requestBody->onboardingIsDeleted = false;
    $request->onboardingId = 'fuchsia';
    $request->organizationId = 'Toys hacking';

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
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesRequest](../../models/operations/PostCreateNotesRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PostCreateNotesResponse](../../models/operations/PostCreateNotesResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRecheck

Manually request all verifications in an underwriting workflow to be performed outside of the initial onboarding process.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest();
    $request->onboardingId = 'Organized matrices';
    $request->organizationId = 'Bike synergize';

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
| `$request`                                                                                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckRequest.md) | :heavy_check_mark:                                                                                                                                                                                                | The request object to use for the request.                                                                                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRecheckResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule

Manually request an underwriting workflow verification to be performed outside of the initial onboarding workflow.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRetryRuleRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest();
    $request->onboardingRetryRuleRequest = new OnboardingRetryRuleRequest();
    $request->onboardingRetryRuleRequest->ruleName = 'Latin';
    $request->onboardingId = 'pfft';
    $request->organizationId = 'empty';

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
| `$request`                                                                                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleRequest.md) | :heavy_check_mark:                                                                                                                                                                                                    | The request object to use for the request.                                                                                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdRetryRuleResponse.md)**


## putOrganizationOrganizationIdOnboardingOnboardingIdStatus

Manually update the merchant onboarding application status after being automatically determined by the decision engine.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatus;
use \TheLogicStudio\ExactPayments\Models\Shared\UpdateOnboardingStatusRequestStatusChangeReason;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest();
    $request->updateOnboardingStatusRequest = new UpdateOnboardingStatusRequest();
    $request->updateOnboardingStatusRequest->isDeleted = 'Optimization Web';
    $request->updateOnboardingStatusRequest->status = UpdateOnboardingStatusRequestStatus::Withdrawn;
    $request->updateOnboardingStatusRequest->statusChangeReason = UpdateOnboardingStatusRequestStatusChangeReason::FailedToVerifyIdentity;
    $request->updateOnboardingStatusRequest->statusChangeReasonNote = 'South Bicycle';
    $request->onboardingId = 'Card Electric';
    $request->organizationId = 'functionalities Diesel close';

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
| `$request`                                                                                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusRequest.md) | :heavy_check_mark:                                                                                                                                                                                              | The request object to use for the request.                                                                                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse](../../models/operations/PutOrganizationOrganizationIdOnboardingOnboardingIdStatusResponse.md)**

