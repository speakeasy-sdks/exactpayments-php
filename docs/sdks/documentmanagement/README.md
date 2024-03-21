# DocumentManagement


### Available Operations

* [createDocumentRequest](#createdocumentrequest) - Request Document
* [deleteDocumentById](#deletedocumentbyid) - Delete Document
* [deleteDocumentRequestById](#deletedocumentrequestbyid) - Delete Document Request
* [getDocumentById](#getdocumentbyid) - Download Document
* [getDocuments](#getdocuments) - List Uploaded Documents
* [getDownloadAllDocuments](#getdownloadalldocuments) - Download All Documents
* [getListDocumentRequests](#getlistdocumentrequests) - List Document Requests
* [getRetrieveDocument](#getretrievedocument) - Retrieve Document
* [getRetrieveDocumentRequest](#getretrievedocumentrequest) - Retrieve Document Request
* [listDocumentRequestByToken](#listdocumentrequestbytoken) - List Document Requests by Token
* [putUpdateDocumentTypeById](#putupdatedocumenttypebyid) - Update Document Type
* [updateDocumentRequest](#updatedocumentrequest) - Update Document Request
* [uploadDocument](#uploaddocument) - Upload Document
* [uploadDocumentByToken](#uploaddocumentbytoken) - Upload Document using Token

## createDocumentRequest

Create a Document Request asking the Organization or Account for additional verification.

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
        $request = new Operations\CreateDocumentRequestRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->requestBody = new Operations\CreateDocumentRequestRequestBody();
    $request->requestBody->body = 'Company: ACME Corp
    Hi Jon Doe
    Your application status has been updated to the following: Pended. Our Underwriting team has requested additional documentation to process your approval.
    Please upload the following documents for reviewing by clicking on the link below.
    Upload Documents
    Once we received & review the additional documentation, we will have you up and processing your electronic payment in no time.
    Stay-tuned for the next update!';
    $request->requestBody->onboardingIsDeleted = false;
    $request->requestBody->subject = 'Application Status Update Pending Documentation';
    $request->requestBody->type = Operations\Type::OnboardingDocumentRequest;;

    $response = $sdk->documentManagement->createDocumentRequest($request);

    if ($response->onboardingDocumentRequestCreate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequest](../../Models/Operations/CreateDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestResponse](../../Models/Operations/CreateDocumentRequestResponse.md)**


## deleteDocumentById

Delete an uploaded document associated with a specific document ID.

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
        $request = new Operations\DeleteDocumentByIdRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentId = '<value>';;

    $response = $sdk->documentManagement->deleteDocumentById($request);

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
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentByIdRequest](../../Models/Operations/DeleteDocumentByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentByIdResponse](../../Models/Operations/DeleteDocumentByIdResponse.md)**


## deleteDocumentRequestById

Delete a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

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
        $request = new Operations\DeleteDocumentRequestByIdRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentRequestId = '<value>';;

    $response = $sdk->documentManagement->deleteDocumentRequestById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentRequestByIdRequest](../../Models/Operations/DeleteDocumentRequestByIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentRequestByIdResponse](../../Models/Operations/DeleteDocumentRequestByIdResponse.md)**


## getDocumentById

Download a specific Document for the given Organization, Onboarding Application, and Document identifiers.

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
        $request = new Operations\GetDocumentByIdRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentId = '<value>';
    $request->isDeleted = false;;

    $response = $sdk->documentManagement->getDocumentById($request);

    if ($response->bytes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentByIdRequest](../../Models/Operations/GetDocumentByIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentByIdResponse](../../Models/Operations/GetDocumentByIdResponse.md)**


## getDocuments

Retrieve a list of Documents for the given Organization and Onboarding Application identifiers.

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
        $request = new Operations\GetDocumentsRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';;

    $response = $sdk->documentManagement->getDocuments($request);

    if ($response->documents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentsRequest](../../Models/Operations/GetDocumentsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentsResponse](../../Models/Operations/GetDocumentsResponse.md)**


## getDownloadAllDocuments

Download all Documents for the given Organization and Onboarding Application identifiers.

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
        $request = new Operations\GetDownloadAllDocumentsRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->isDeleted = false;;

    $response = $sdk->documentManagement->getDownloadAllDocuments($request);

    if ($response->bytes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetDownloadAllDocumentsRequest](../../Models/Operations/GetDownloadAllDocumentsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDownloadAllDocumentsResponse](../../Models/Operations/GetDownloadAllDocumentsResponse.md)**


## getListDocumentRequests

Retrieve a list of Document Requests for the given Organization and Onboarding Application identifiers.

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
        $request = new Operations\GetListDocumentRequestsRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';;

    $response = $sdk->documentManagement->getListDocumentRequests($request);

    if ($response->onboardingDocumentRequestsResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetListDocumentRequestsRequest](../../Models/Operations/GetListDocumentRequestsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetListDocumentRequestsResponse](../../Models/Operations/GetListDocumentRequestsResponse.md)**


## getRetrieveDocument

Retrieve a specific uploaded Document for the given Organization and Onboarding Application identifiers.

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
        $request = new Operations\GetRetrieveDocumentRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentId = '<value>';;

    $response = $sdk->documentManagement->getRetrieveDocument($request);

    if ($response->document !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequest](../../Models/Operations/GetRetrieveDocumentRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentResponse](../../Models/Operations/GetRetrieveDocumentResponse.md)**


## getRetrieveDocumentRequest

Retrieve a specific Document Request for the given Organization and Onboarding Application identifiers.

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
        $request = new Operations\GetRetrieveDocumentRequestRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentRequestId = '<value>';;

    $response = $sdk->documentManagement->getRetrieveDocumentRequest($request);

    if ($response->onboardingDocumentRequestResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequestRequest](../../Models/Operations/GetRetrieveDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequestResponse](../../Models/Operations/GetRetrieveDocumentRequestResponse.md)**


## listDocumentRequestByToken

List the Document Requests associated with the Token found in the Upload Document link URL sent via the Document Request email using [Request Document](/operations/createDocumentRequest) API endpoint.

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
        $request = new Operations\ListDocumentRequestByTokenRequest();
    $request->documentRequestToken = '<value>';;

    $response = $sdk->documentManagement->listDocumentRequestByToken($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\ListDocumentRequestByTokenRequest](../../Models/Operations/ListDocumentRequestByTokenRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListDocumentRequestByTokenResponse](../../Models/Operations/ListDocumentRequestByTokenResponse.md)**


## putUpdateDocumentTypeById

Update the `type` of a specific Document for the given Organization, Onboarding Application, and Document identifiers.

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
        $request = new Operations\PutUpdateDocumentTypeByIdRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentId = '<value>';
    $request->requestBody = new Operations\PutUpdateDocumentTypeByIdRequestBody();
    $request->requestBody->type = Operations\PutUpdateDocumentTypeByIdType::DriversLicense;;

    $response = $sdk->documentManagement->putUpdateDocumentTypeById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdRequest](../../Models/Operations/PutUpdateDocumentTypeByIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdResponse](../../Models/Operations/PutUpdateDocumentTypeByIdResponse.md)**


## updateDocumentRequest

Update a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

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
        $request = new Operations\UpdateDocumentRequestRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->documentRequestId = '<value>';
    $request->onboardingDocumentRequestUpdate = new Shared\OnboardingDocumentRequestUpdate();
    $request->onboardingDocumentRequestUpdate->body = 'Company: ACME Corp
    Hi Jon Doe
    Your application status has been updated to the following: Pended. Our Underwriting team has requested additional documentation to process your approval.
    Please upload the following documents for reviewing by clicking on the link below.
    Upload Documents
    Once we received & review the additional documentation, we will have you up and processing your electronic payment in no time.
    Stay-tuned for the next update!';
    $request->onboardingDocumentRequestUpdate->subject = 'Application Status Update Pending Documentation';
    $request->onboardingDocumentRequestUpdate->type = Shared\OnboardingDocumentRequestUpdateType::OnboardingDocumentRequest;;

    $response = $sdk->documentManagement->updateDocumentRequest($request);

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
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\UpdateDocumentRequestRequest](../../Models/Operations/UpdateDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UpdateDocumentRequestResponse](../../Models/Operations/UpdateDocumentRequestResponse.md)**


## uploadDocument

Upload a Document for an Onboarding Application for the given Organization and Onboarding identifiers.

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
        $request = new Operations\UploadDocumentRequest();
    $request->organizationId = '<value>';
    $request->onboardingId = '<value>';
    $request->onboardingDocumentUploadRequest = new Shared\OnboardingDocumentUploadRequest();
    $request->onboardingDocumentUploadRequest->documentRequest = '64c446af29cef96ce25bc519';
    $request->onboardingDocumentUploadRequest->files = new Shared\Files();
    $request->onboardingDocumentUploadRequest->files->content = '0xaAFa6d8bD5';
    $request->onboardingDocumentUploadRequest->files->fileName = 'electronic_hempstead_fresh.mpga';
    $request->onboardingDocumentUploadRequest->name = 'Business document';
    $request->onboardingDocumentUploadRequest->onboardingIsDeleted = 'true';
    $request->onboardingDocumentUploadRequest->principal = '64ca7b2e4ab69839f78db609';
    $request->onboardingDocumentUploadRequest->type = Shared\DocumentUploadType::DriversLicense;;

    $response = $sdk->documentManagement->uploadDocument($request);

    if ($response->uploadDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentRequest](../../Models/Operations/UploadDocumentRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentResponse](../../Models/Operations/UploadDocumentResponse.md)**


## uploadDocumentByToken

Upload a Document for an Onboarding Application using the Token value returned in [Create Onboarding](/operations/createOnboarding) response.

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
        $request = new Operations\UploadDocumentByTokenRequest();
    $request->token = '<value>';
    $request->onboardingDocumentUploadTokenRequest = new Shared\OnboardingDocumentUploadTokenRequest();
    $request->onboardingDocumentUploadTokenRequest->files = new Shared\OnboardingDocumentUploadTokenRequestFiles();
    $request->onboardingDocumentUploadTokenRequest->files->content = '0xf4c59F3a5c';
    $request->onboardingDocumentUploadTokenRequest->files->fileName = 'while_rss.wav';
    $request->onboardingDocumentUploadTokenRequest->name = 'Business document';
    $request->onboardingDocumentUploadTokenRequest->principal = '64ca7b2e4ab69839f78db609';
    $request->onboardingDocumentUploadTokenRequest->type = Shared\DocumentUploadType::DriversLicense;;

    $response = $sdk->documentManagement->uploadDocumentByToken($request);

    if ($response->uploadDocumentResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentByTokenRequest](../../Models/Operations/UploadDocumentByTokenRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentByTokenResponse](../../Models/Operations/UploadDocumentByTokenResponse.md)**

