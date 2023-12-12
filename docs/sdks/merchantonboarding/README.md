# MerchantOnboarding


### Available Operations

* [createOnboarding](#createonboarding) - Create Onboarding Application
* [deleteOnboardingById](#deleteonboardingbyid) - Delete Onboarding
* [listFilterOptions](#listfilteroptions) - List Filter Options
* [listMerchantCategoryCodes](#listmerchantcategorycodes) - List Merchant Category Codes
* [listOnboardingByOrganization](#listonboardingbyorganization) - List Onboardings by Organization
* [listOnboardings](#listonboardings) - List Onboardings
* [retrieveOnboardingById](#retrieveonboardingbyid) - Retrieve Onboarding
* [searchOnboardingByBusinessName](#searchonboardingbybusinessname) - Search Onboarding by Business Name
* [searchOnboardingByOrganizationIdAndBusinessName](#searchonboardingbyorganizationidandbusinessname) - Search Onboarding by Organization identifier and Business Name

## createOnboarding

Create a new Onboarding Application for the new Account or Sub Organization.

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
        $request = new Operations\CreateOnboardingRequest();
    $request->onboardingRequest = new Shared\OnboardingRequest();
    $request->onboardingRequest->clientIp = '63.45.12.34';
    $request->onboardingRequest->merchant = new Shared\OnboardingMerchant();
    $request->onboardingRequest->merchant->address = new Shared\MerchantAddress();
    $request->onboardingRequest->merchant->address->city = 'PHOENIX';
    $request->onboardingRequest->merchant->address->country = Shared\Country::Usa;
    $request->onboardingRequest->merchant->address->countrySubdivision = 'AZ';
    $request->onboardingRequest->merchant->address->line1 = 'MAIN AVENUE 42';
    $request->onboardingRequest->merchant->address->line2 = '42-59B Building A';
    $request->onboardingRequest->merchant->address->postalCode = '85008';
    $request->onboardingRequest->merchant->anticipatedTransAmounts = new Shared\AnticipatedTransAmounts();
    $request->onboardingRequest->merchant->anticipatedTransAmounts->anticipatedMonthlyVolume = 500000;
    $request->onboardingRequest->merchant->anticipatedTransAmounts->averageTicketSize = 100;
    $request->onboardingRequest->merchant->anticipatedTransAmounts->maxTicketSize = 250;
    $request->onboardingRequest->merchant->bankingDetails = new Shared\BankingDetails();
    $request->onboardingRequest->merchant->bankingDetails->bankName = 'Bank Of America';
    $request->onboardingRequest->merchant->bankingDetails->bankNumber = '12345';
    $request->onboardingRequest->merchant->bankingDetails->ddaNumber = '223334456';
    $request->onboardingRequest->merchant->bankingDetails->plaidAccessToken = 'access-development-8fa36560-e4ce-4a30-9a5c-d5ef629a7010';
    $request->onboardingRequest->merchant->bankingDetails->routingNumber = '124433212';
    $request->onboardingRequest->merchant->businessProfile = new Shared\BusinessProfile();
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods = new Shared\AcceptanceMethods();
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->internet = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->keyed = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->moto = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->swipe = 25;
    $request->onboardingRequest->merchant->businessProfile->currentGateway = 'International Payments Gateway Services LLC';
    $request->onboardingRequest->merchant->businessProfile->currentProcessor = 'Global Processing Services LLC';
    $request->onboardingRequest->merchant->businessProfile->currentlyAcceptingPayments = true;
    $request->onboardingRequest->merchant->businessProfile->deliveryTimeframe = Shared\DeliveryTimeframe::Immediate;
    $request->onboardingRequest->merchant->businessProfile->paymentTime = Shared\PaymentTime::UponPurchase;
    $request->onboardingRequest->merchant->businessProfile->reasonForLeaving = 'Does not meet expectations.';
    $request->onboardingRequest->merchant->businessProfile->recurringServices = true;
    $request->onboardingRequest->merchant->businessProfile->recurringServicesDescription = 'Printer ink refills are fulfilled every month based on customer subscription';
    $request->onboardingRequest->merchant->businessProfile->refundPolicyDescription = 'Returns are accepted within 30 days of purchase when presented with the original receipt and packaging. Refunds will be credited to the Credit Card used while purchasing within five days from the return date.';
    $request->onboardingRequest->merchant->businessProfile->servicesDescription = 'Computer and accessories';
    $request->onboardingRequest->merchant->businessRegistrationNumber = '888596928';
    $request->onboardingRequest->merchant->dbaName = 'Acme Trading';
    $request->onboardingRequest->merchant->email = 'business-contact@acmecorp.com';
    $request->onboardingRequest->merchant->entityType = Shared\OnboardingMerchantEntityType::Llc;
    $request->onboardingRequest->merchant->establishedDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-21T16:24:22.678+00:00');
    $request->onboardingRequest->merchant->facebook = 'www.facebook.com/acmecorp';
    $request->onboardingRequest->merchant->linkedIn = 'www.linkedin.com/in/acmecorp';
    $request->onboardingRequest->merchant->mcc = '1771';
    $request->onboardingRequest->merchant->name = 'Acme Corp';
    $request->onboardingRequest->merchant->numberOfEmployees = 100;
    $request->onboardingRequest->merchant->onlinePresence = 'www.acmecorp.com';
    $request->onboardingRequest->merchant->principal = [
        new Shared\Principal(),
    ];
    $request->onboardingRequest->merchant->telephone = '2255441120';
    $request->onboardingRequest->merchant->termsNConditions = new Shared\OnboardingTermsNConditions();
    $request->onboardingRequest->merchant->termsNConditions->dwolla = true;
    $request->onboardingRequest->merchant->termsNConditions->exactPayments = true;
    $request->onboardingRequest->merchant->termsNConditions->notifications = true;
    $request->onboardingRequest->merchant->twitter = 'www.twitter.com/acmecorp';
    $request->onboardingRequest->type = Shared\OnboardingRequestType::Organization;
    $request->onboardingRequest->workflow = '63efb29650b4bb4b4f6fd5f4';
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->createOnboarding($request);

    if ($response->onboardingCreateResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest](../../Models/Operations/CreateOnboardingRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponse](../../Models/Operations/CreateOnboardingResponse.md)**


## deleteOnboardingById

Delete a specific Onboarding Application for the given Organization and Onboarding Identifiers.

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
        $request = new Operations\DeleteOnboardingByIdRequest();
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->deleteOnboardingById($request);

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest](../../Models/Operations/DeleteOnboardingByIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdResponse](../../Models/Operations/DeleteOnboardingByIdResponse.md)**


## listFilterOptions

Retrieve a list of options that can be used as a filter when retrieving the Onboarding Applications associated to the given Organization Identifier.

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
        $request = new Operations\ListFilterOptionsRequest();
    $request->isDeleted = false;
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->listFilterOptions($request);

    if ($response->filterOnboardings !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest](../../Models/Operations/ListFilterOptionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsResponse](../../Models/Operations/ListFilterOptionsResponse.md)**


## listMerchantCategoryCodes

Retrieve the list of Merchant Category Codes supported by Exact Payments.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared;

$security = new Shared\Security();
$security->apiKey = '<YOUR_API_KEY_HERE>';

$sdk = ExactPayments\ExactPayments::builder()->setSecurity($security)->build();

try {
    $response = $sdk->merchantOnboarding->listMerchantCategoryCodes();

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListMerchantCategoryCodesResponse](../../Models/Operations/ListMerchantCategoryCodesResponse.md)**


## listOnboardingByOrganization

Retrieve the list of Onboarding Applications associated for the given Organization Identifier.

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
        $request = new Operations\ListOnboardingByOrganizationRequest();
    $request->dollarLimit = 10;
    $request->dollarSelect = 'createdAt,status,merchant.name';
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->listOnboardingByOrganization($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest](../../Models/Operations/ListOnboardingByOrganizationRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationResponse](../../Models/Operations/ListOnboardingByOrganizationResponse.md)**


## listOnboardings

Retrieve the list of Onboarding Applications under the session account.

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
        $request = new Operations\ListOnboardingsRequest();
    $request->dollarLimit = 10;
    $request->dollarSelect = 'createdAt,status,merchant.name';
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';;

    $response = $sdk->merchantOnboarding->listOnboardings($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest](../../Models/Operations/ListOnboardingsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsResponse](../../Models/Operations/ListOnboardingsResponse.md)**


## retrieveOnboardingById

Retrieve a specific Onboarding Application for the given Organization and Onboarding identifier.

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
        $request = new Operations\RetrieveOnboardingByIdRequest();
    $request->onboardingId = 'string';
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->retrieveOnboardingById($request);

    if ($response->onboardingWithPrincipalResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest](../../Models/Operations/RetrieveOnboardingByIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdResponse](../../Models/Operations/RetrieveOnboardingByIdResponse.md)**


## searchOnboardingByBusinessName

Retrieve the list of Onboarding Applications submitted under your Organization matching the Business Name provided as a search parameter.

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
        $request = new Operations\SearchOnboardingByBusinessNameRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->businessName = 'ACME';;

    $response = $sdk->merchantOnboarding->searchOnboardingByBusinessName($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest](../../Models/Operations/SearchOnboardingByBusinessNameRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameResponse](../../Models/Operations/SearchOnboardingByBusinessNameResponse.md)**


## searchOnboardingByOrganizationIdAndBusinessName

Retrieve the list of Onboarding Applications matching the Business Name provided as a search parameter for the given Organization identifier.

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
        $request = new Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->businessName = 'ACME';
    $request->organizationId = 'string';;

    $response = $sdk->merchantOnboarding->searchOnboardingByOrganizationIdAndBusinessName($request);

    if ($response->classes !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest](../../Models/Operations/SearchOnboardingByOrganizationIdAndBusinessNameRequest.md) | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameResponse](../../Models/Operations/SearchOnboardingByOrganizationIdAndBusinessNameResponse.md)**

