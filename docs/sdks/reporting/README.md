# Reporting
(*reporting*)

### Available Operations

* [deleteReport](#deletereport) - Delete Report
* [getReport](#getreport) - Download Report
* [getReportDetails](#getreportdetails) - Get Report Details
* [getReports](#getreports) - List Reports

## deleteReport

Deletes an specific Report for the given Report identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteReportRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteReportRequest();
    $request->reportId = 'string';

    $response = $sdk->reporting->deleteReport($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteReportRequest](../../models/operations/DeleteReportRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteReportResponse](../../models/operations/DeleteReportResponse.md)**


## getReport

Download report query results in JSON or CSV format.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportFormat;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetReportRequest();
    $request->format = GetReportFormat::Csv;
    $request->reportId = 'string';
    $request->select = 'string';

    $response = $sdk->reporting->getReport($request);

    if ($response->reportDetailsResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportRequest](../../models/operations/GetReportRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetReportResponse](../../models/operations/GetReportResponse.md)**


## getReportDetails

Retrieves the details of a report query that a user has previously created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetReportDetailsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->reportId = 'string';

    $response = $sdk->reporting->getReportDetails($request);

    if ($response->reportDetailsResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsRequest](../../models/operations/GetReportDetailsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsResponse](../../models/operations/GetReportDetailsResponse.md)**


## getReports

Retrieves a list of report queries that a user has previously created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetReportsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';

    $response = $sdk->reporting->getReports($request);

    if ($response->reportQueryResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportsRequest](../../models/operations/GetReportsRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetReportsResponse](../../models/operations/GetReportsResponse.md)**

