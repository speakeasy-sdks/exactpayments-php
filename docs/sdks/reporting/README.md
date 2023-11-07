# Reporting


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

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\DeleteReportRequest();
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

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetReportRequest();
    $request->format = Operations\Format::Csv;
    $request->reportId = 'string';
    $request->select = 'string';

    $response = $sdk->reporting->getReport($request);

    if ($response->anies !== null) {
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

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetReportDetailsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->reportId = 'string';

    $response = $sdk->reporting->getReportDetails($request);

    if ($response->anies !== null) {
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

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;
use \TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetReportsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';

    $response = $sdk->reporting->getReports($request);

    if ($response->classes !== null) {
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

