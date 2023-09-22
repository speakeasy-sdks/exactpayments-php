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
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequestBodyInput;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequestBodyType;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new CreateDocumentRequestRequest();
    $request->requestBody = new CreateDocumentRequestRequestBodyInput();
    $request->requestBody->body = 'Company: ACME Corp
    Hi Jon Doe
    Your application status has been updated to the following: Pended. Our Underwriting team has requested additional documentation to process your approval.
    Please upload the following documents for reviewing by clicking on the link below.
    Upload Documents
    Once we received & review the additional documentation, we will have you up and processing your electronic payment in no time.
    Stay-tuned for the next update!';
    $request->requestBody->onboardingIsDeleted = false;
    $request->requestBody->subject = 'Application Status Update Pending Documentation';
    $request->requestBody->type = CreateDocumentRequestRequestBodyType::OnboardingDocumentRequest;
    $request->onboardingId = 'modi';
    $request->organizationId = 'praesentium';

    $response = $sdk->documentManagement->createDocumentRequest($request);

    if ($response->onboardingDocumentRequestCreate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestRequest](../../models/operations/CreateDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateDocumentRequestResponse](../../models/operations/CreateDocumentRequestResponse.md)**


## deleteDocumentById

Delete an uploaded document associated with a specific document ID.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteDocumentByIdRequest();
    $request->documentId = 'rem';
    $request->onboardingId = 'voluptates';
    $request->organizationId = 'quasi';

    $response = $sdk->documentManagement->deleteDocumentById($request);

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
| `$request`                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentByIdRequest](../../models/operations/DeleteDocumentByIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentByIdResponse](../../models/operations/DeleteDocumentByIdResponse.md)**


## deleteDocumentRequestById

Delete a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentRequestByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new DeleteDocumentRequestByIdRequest();
    $request->documentRequestId = 'repudiandae';
    $request->onboardingId = 'sint';
    $request->organizationId = 'veritatis';

    $response = $sdk->documentManagement->deleteDocumentRequestById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentRequestByIdRequest](../../models/operations/DeleteDocumentRequestByIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteDocumentRequestByIdResponse](../../models/operations/DeleteDocumentRequestByIdResponse.md)**


## getDocumentById

Download a specific Document for the given Organization, Onboarding Application, and Document identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetDocumentByIdRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetDocumentByIdRequest();
    $request->documentId = 'itaque';
    $request->isDeleted = false;
    $request->onboardingId = 'incidunt';
    $request->organizationId = 'enim';

    $response = $sdk->documentManagement->getDocumentById($request);

    if ($response->getDocumentById200ApplicationZipBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentByIdRequest](../../models/operations/GetDocumentByIdRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentByIdResponse](../../models/operations/GetDocumentByIdResponse.md)**


## getDocuments

Retrieve a list of Documents for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetDocumentsRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetDocumentsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->onboardingId = 'consequatur';
    $request->organizationId = 'est';

    $response = $sdk->documentManagement->getDocuments($request);

    if ($response->documents !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentsRequest](../../models/operations/GetDocumentsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDocumentsResponse](../../models/operations/GetDocumentsResponse.md)**


## getDownloadAllDocuments

Download all Documents for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetDownloadAllDocumentsRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetDownloadAllDocumentsRequest();
    $request->isDeleted = false;
    $request->onboardingId = 'quibusdam';
    $request->organizationId = 'explicabo';

    $response = $sdk->documentManagement->getDownloadAllDocuments($request);

    if ($response->getDownloadAllDocuments200ApplicationZipBinaryString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetDownloadAllDocumentsRequest](../../models/operations/GetDownloadAllDocumentsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetDownloadAllDocumentsResponse](../../models/operations/GetDownloadAllDocumentsResponse.md)**


## getListDocumentRequests

Retrieve a list of Document Requests for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetListDocumentRequestsRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetListDocumentRequestsRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->onboardingId = 'deserunt';
    $request->organizationId = 'distinctio';

    $response = $sdk->documentManagement->getListDocumentRequests($request);

    if ($response->onboardingDocumentRequestsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\GetListDocumentRequestsRequest](../../models/operations/GetListDocumentRequestsRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetListDocumentRequestsResponse](../../models/operations/GetListDocumentRequestsResponse.md)**


## getRetrieveDocument

Retrieve a specific uploaded Document for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetRetrieveDocumentRequest();
    $request->documentId = 'quibusdam';
    $request->onboardingId = 'labore';
    $request->organizationId = 'modi';

    $response = $sdk->documentManagement->getRetrieveDocument($request);

    if ($response->document !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequest](../../models/operations/GetRetrieveDocumentRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentResponse](../../models/operations/GetRetrieveDocumentResponse.md)**


## getRetrieveDocumentRequest

Retrieve a specific Document Request for the given Organization and Onboarding Application identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequestRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new GetRetrieveDocumentRequestRequest();
    $request->documentRequestId = 'qui';
    $request->onboardingId = 'aliquid';
    $request->organizationId = 'cupiditate';

    $response = $sdk->documentManagement->getRetrieveDocumentRequest($request);

    if ($response->onboardingDocumentRequestResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequestRequest](../../models/operations/GetRetrieveDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\GetRetrieveDocumentRequestResponse](../../models/operations/GetRetrieveDocumentRequestResponse.md)**


## listDocumentRequestByToken

List the Document Requests associated with the Token found in the Upload Document link URL sent via the Document Request email using [Request Document](/operations/createDocumentRequest) API endpoint.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\ListDocumentRequestByTokenRequest;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new ListDocumentRequestByTokenRequest();
    $request->documentRequestToken = 'quos';

    $response = $sdk->documentManagement->listDocumentRequestByToken($request);

    if ($response->listDocumentRequestByToken200ApplicationJSONObjects !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\TheLogicStudio\ExactPayments\Models\Operations\ListDocumentRequestByTokenRequest](../../models/operations/ListDocumentRequestByTokenRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListDocumentRequestByTokenResponse](../../models/operations/ListDocumentRequestByTokenResponse.md)**


## putUpdateDocumentTypeById

Update the `type` of a specific Document for the given Organization, Onboarding Application, and Document identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdRequest;
use \TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdRequestBody;
use \TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdRequestBodyType;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new PutUpdateDocumentTypeByIdRequest();
    $request->requestBody = new PutUpdateDocumentTypeByIdRequestBody();
    $request->requestBody->type = PutUpdateDocumentTypeByIdRequestBodyType::DriversLicense;
    $request->documentId = 'perferendis';
    $request->onboardingId = 'magni';
    $request->organizationId = 'assumenda';

    $response = $sdk->documentManagement->putUpdateDocumentTypeById($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdRequest](../../models/operations/PutUpdateDocumentTypeByIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\PutUpdateDocumentTypeByIdResponse](../../models/operations/PutUpdateDocumentTypeByIdResponse.md)**


## updateDocumentRequest

Update a Document Request for an Onboarding Application for the given Organization, Onboarding, and Document Request identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\UpdateDocumentRequestRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentRequestUpdate;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentRequestUpdateType;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new UpdateDocumentRequestRequest();
    $request->onboardingDocumentRequestUpdate = new OnboardingDocumentRequestUpdate();
    $request->onboardingDocumentRequestUpdate->body = 'Company: ACME Corp
    Hi Jon Doe
    Your application status has been updated to the following: Pended. Our Underwriting team has requested additional documentation to process your approval.
    Please upload the following documents for reviewing by clicking on the link below.
    Upload Documents
    Once we received & review the additional documentation, we will have you up and processing your electronic payment in no time.
    Stay-tuned for the next update!';
    $request->onboardingDocumentRequestUpdate->subject = 'Application Status Update Pending Documentation';
    $request->onboardingDocumentRequestUpdate->type = OnboardingDocumentRequestUpdateType::OnboardingDocumentRequest;
    $request->documentRequestId = 'ipsam';
    $request->onboardingId = 'alias';
    $request->organizationId = 'fugit';

    $response = $sdk->documentManagement->updateDocumentRequest($request);

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
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\UpdateDocumentRequestRequest](../../models/operations/UpdateDocumentRequestRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UpdateDocumentRequestResponse](../../models/operations/UpdateDocumentRequestResponse.md)**


## uploadDocument

Upload a Document for an Onboarding Application for the given Organization and Onboarding identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentUploadRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentUploadRequestFiles;
use \TheLogicStudio\ExactPayments\Models\Shared\DocumentUploadType;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new UploadDocumentRequest();
    $request->onboardingDocumentUploadRequest = new OnboardingDocumentUploadRequest();
    $request->onboardingDocumentUploadRequest->documentRequest = '64c446af29cef96ce25bc519';
    $request->onboardingDocumentUploadRequest->files = new OnboardingDocumentUploadRequestFiles();
    $request->onboardingDocumentUploadRequest->files->content = 'dolorum';
    $request->onboardingDocumentUploadRequest->files->files = 'excepturi';
    $request->onboardingDocumentUploadRequest->name = 'Business document';
    $request->onboardingDocumentUploadRequest->onboardingIsDeleted = 'true';
    $request->onboardingDocumentUploadRequest->principal = '64ca7b2e4ab69839f78db609';
    $request->onboardingDocumentUploadRequest->type = DocumentUploadType::DriversLicense;
    $request->onboardingId = 'tempora';
    $request->organizationId = 'facilis';

    $response = $sdk->documentManagement->uploadDocument($request);

    if ($response->uploadDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentRequest](../../models/operations/UploadDocumentRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentResponse](../../models/operations/UploadDocumentResponse.md)**


## uploadDocumentByToken

Upload a Document for an Onboarding Application using the Token value returned in [Create Onboarding](/operations/createOnboarding) response.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentByTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentUploadTokenRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentUploadTokenRequestFiles;
use \TheLogicStudio\ExactPayments\Models\Shared\DocumentUploadType;

$sdk = ExactPayments::builder()
    ->build();

try {
    $request = new UploadDocumentByTokenRequest();
    $request->onboardingDocumentUploadTokenRequest = new OnboardingDocumentUploadTokenRequest();
    $request->onboardingDocumentUploadTokenRequest->files = new OnboardingDocumentUploadTokenRequestFiles();
    $request->onboardingDocumentUploadTokenRequest->files->content = 'tempore';
    $request->onboardingDocumentUploadTokenRequest->files->files = 'labore';
    $request->onboardingDocumentUploadTokenRequest->name = 'Business document';
    $request->onboardingDocumentUploadTokenRequest->principal = '64ca7b2e4ab69839f78db609';
    $request->onboardingDocumentUploadTokenRequest->type = DocumentUploadType::DriversLicense;
    $request->token = 'delectus';

    $response = $sdk->documentManagement->uploadDocumentByToken($request);

    if ($response->uploadDocumentResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentByTokenRequest](../../models/operations/UploadDocumentByTokenRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\UploadDocumentByTokenResponse](../../models/operations/UploadDocumentByTokenResponse.md)**

