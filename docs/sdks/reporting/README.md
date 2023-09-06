# reporting

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
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteReportRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteReportSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteReportRequest();
    $request->reportId = 'voluptate';

    $requestSecurity = new DeleteReportSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->reporting->deleteReport($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteReportRequest](../../models/operations/DeleteReportRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteReportSecurity](../../models/operations/DeleteReportSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportFormat;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetReportRequest();
    $request->format = GetReportFormat::Csv;
    $request->reportId = 'reiciendis';
    $request->select = 'amet';

    $requestSecurity = new GetReportSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->reporting->getReport($request, $requestSecurity);

    if ($response->reportDetailsResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportRequest](../../models/operations/GetReportRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportSecurity](../../models/operations/GetReportSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


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
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetReportDetailsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';
    $request->reportId = 'dolorum';

    $requestSecurity = new GetReportDetailsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->reporting->getReportDetails($request, $requestSecurity);

    if ($response->reportDetailsResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsRequest](../../models/operations/GetReportDetailsRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportDetailsSecurity](../../models/operations/GetReportDetailsSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportsRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\GetReportsSecurity;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetReportsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = '-name';

    $requestSecurity = new GetReportsSecurity();
    $requestSecurity->apiKey = '';

    $response = $sdk->reporting->getReports($request, $requestSecurity);

    if ($response->reportQueryResponses !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportsRequest](../../models/operations/GetReportsRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetReportsSecurity](../../models/operations/GetReportsSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetReportsResponse](../../models/operations/GetReportsResponse.md)**

