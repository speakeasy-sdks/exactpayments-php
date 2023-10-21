# MerchantOnboarding
(*merchantOnboarding*)

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

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRequest;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingMerchant;
use \TheLogicStudio\ExactPayments\Models\Shared\MerchantAddress;
use \TheLogicStudio\ExactPayments\Models\Shared\MerchantAddressCountry;
use \TheLogicStudio\ExactPayments\Models\Shared\AnticipatedTransAmounts;
use \TheLogicStudio\ExactPayments\Models\Shared\BankingDetails;
use \TheLogicStudio\ExactPayments\Models\Shared\BusinessProfile;
use \TheLogicStudio\ExactPayments\Models\Shared\AcceptanceMethods;
use \TheLogicStudio\ExactPayments\Models\Shared\BusinessProfileDeliveryTimeframe;
use \TheLogicStudio\ExactPayments\Models\Shared\BusinessProfilePaymentTime;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingMerchantEntityType;
use \TheLogicStudio\ExactPayments\Models\Shared\Principal;
use \TheLogicStudio\ExactPayments\Models\Shared\PrincipalAddress;
use \TheLogicStudio\ExactPayments\Models\Shared\PrincipalAddressCountry;
use \TheLogicStudio\ExactPayments\Models\Shared\PrincipalDriversLicenseCountry;
use \TheLogicStudio\ExactPayments\Models\Shared\PrincipalNationality;
use \TheLogicStudio\ExactPayments\Models\Shared\PrincipalSsnCountry;
use \TheLogicStudio\ExactPayments\Models\Shared\TitleValues;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingTermsNConditions;
use \TheLogicStudio\ExactPayments\Models\Shared\OnboardingRequestType;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateOnboardingRequest();
    $request->onboardingRequest = new OnboardingRequest();
    $request->onboardingRequest->clientIp = '63.45.12.34';
    $request->onboardingRequest->merchant = new OnboardingMerchant();
    $request->onboardingRequest->merchant->address = new MerchantAddress();
    $request->onboardingRequest->merchant->address->city = 'PHOENIX';
    $request->onboardingRequest->merchant->address->country = MerchantAddressCountry::Usa;
    $request->onboardingRequest->merchant->address->countrySubdivision = 'AZ';
    $request->onboardingRequest->merchant->address->line1 = 'MAIN AVENUE 42';
    $request->onboardingRequest->merchant->address->line2 = '42-59B Building A';
    $request->onboardingRequest->merchant->address->postalCode = '85008';
    $request->onboardingRequest->merchant->anticipatedTransAmounts = new AnticipatedTransAmounts();
    $request->onboardingRequest->merchant->anticipatedTransAmounts->anticipatedMonthlyVolume = 500000;
    $request->onboardingRequest->merchant->anticipatedTransAmounts->averageTicketSize = 100;
    $request->onboardingRequest->merchant->anticipatedTransAmounts->maxTicketSize = 250;
    $request->onboardingRequest->merchant->bankingDetails = new BankingDetails();
    $request->onboardingRequest->merchant->bankingDetails->bankName = 'Bank Of America';
    $request->onboardingRequest->merchant->bankingDetails->bankNumber = '12345';
    $request->onboardingRequest->merchant->bankingDetails->ddaNumber = '223334456';
    $request->onboardingRequest->merchant->bankingDetails->plaidAccessToken = 'access-development-8fa36560-e4ce-4a30-9a5c-d5ef629a7010';
    $request->onboardingRequest->merchant->bankingDetails->routingNumber = '124433212';
    $request->onboardingRequest->merchant->businessProfile = new BusinessProfile();
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods = new AcceptanceMethods();
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->internet = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->keyed = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->moto = 25;
    $request->onboardingRequest->merchant->businessProfile->acceptanceMethods->swipe = 25;
    $request->onboardingRequest->merchant->businessProfile->currentGateway = 'International Payments Gateway Services LLC';
    $request->onboardingRequest->merchant->businessProfile->currentProcessor = 'Global Processing Services LLC';
    $request->onboardingRequest->merchant->businessProfile->currentlyAcceptingPayments = true;
    $request->onboardingRequest->merchant->businessProfile->deliveryTimeframe = BusinessProfileDeliveryTimeframe::Immediate;
    $request->onboardingRequest->merchant->businessProfile->paymentTime = BusinessProfilePaymentTime::UponPurchase;
    $request->onboardingRequest->merchant->businessProfile->reasonForLeaving = 'Does not meet expectations.';
    $request->onboardingRequest->merchant->businessProfile->recurringServices = true;
    $request->onboardingRequest->merchant->businessProfile->recurringServicesDescription = 'Printer ink refills are fulfilled every month based on customer subscription';
    $request->onboardingRequest->merchant->businessProfile->refundPolicyDescription = 'Returns are accepted within 30 days of purchase when presented with the original receipt and packaging. Refunds will be credited to the Credit Card used while purchasing within five days from the return date.';
    $request->onboardingRequest->merchant->businessProfile->servicesDescription = 'Computer and accessories';
    $request->onboardingRequest->merchant->businessRegistrationNumber = '888596928';
    $request->onboardingRequest->merchant->dbaName = 'Acme Trading';
    $request->onboardingRequest->merchant->email = 'business-contact@acmecorp.com';
    $request->onboardingRequest->merchant->entityType = OnboardingMerchantEntityType::Llc;
    $request->onboardingRequest->merchant->establishedDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-21T16:24:22.678+00:00');
    $request->onboardingRequest->merchant->facebook = 'www.facebook.com/acmecorp';
    $request->onboardingRequest->merchant->linkedIn = 'www.linkedin.com/in/acmecorp';
    $request->onboardingRequest->merchant->mcc = '1771';
    $request->onboardingRequest->merchant->name = 'Acme Corp';
    $request->onboardingRequest->merchant->numberOfEmployees = 100;
    $request->onboardingRequest->merchant->onlinePresence = 'www.acmecorp.com';
    $request->onboardingRequest->merchant->principal = [
        new Principal(),
    ];
    $request->onboardingRequest->merchant->telephone = '2255441120';
    $request->onboardingRequest->merchant->termsNConditions = new OnboardingTermsNConditions();
    $request->onboardingRequest->merchant->termsNConditions->dwolla = true;
    $request->onboardingRequest->merchant->termsNConditions->exactPayments = true;
    $request->onboardingRequest->merchant->termsNConditions->notifications = true;
    $request->onboardingRequest->merchant->twitter = 'www.twitter.com/acmecorp';
    $request->onboardingRequest->type = OnboardingRequestType::Organization;
    $request->onboardingRequest->workflow = '63efb29650b4bb4b4f6fd5f4';
    $request->organizationId = 'string';

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
| `$request`                                                                                                                    | [\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingRequest](../../models/operations/CreateOnboardingRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingResponse](../../models/operations/CreateOnboardingResponse.md)**


## deleteOnboardingById

Delete a specific Onboarding Application for the given Organization and Onboarding Identifiers.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteOnboardingByIdRequest();
    $request->onboardingId = 'string';
    $request->organizationId = 'string';

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
| `$request`                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdRequest](../../models/operations/DeleteOnboardingByIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\DeleteOnboardingByIdResponse](../../models/operations/DeleteOnboardingByIdResponse.md)**


## listFilterOptions

Retrieve a list of options that can be used as a filter when retrieving the Onboarding Applications associated to the given Organization Identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListFilterOptionsRequest();
    $request->isDeleted = false;
    $request->organizationId = 'string';

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
| `$request`                                                                                                                      | [\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsRequest](../../models/operations/ListFilterOptionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListFilterOptionsResponse](../../models/operations/ListFilterOptionsResponse.md)**


## listMerchantCategoryCodes

Retrieve the list of Merchant Category Codes supported by Exact Payments.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $response = $sdk->merchantOnboarding->listMerchantCategoryCodes();

    if ($response->mccs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListMerchantCategoryCodesResponse](../../models/operations/ListMerchantCategoryCodesResponse.md)**


## listOnboardingByOrganization

Retrieve the list of Onboarding Applications associated for the given Organization Identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListOnboardingByOrganizationRequest();
    $request->dollarLimit = 10;
    $request->dollarSelect = 'createdAt,status,merchant.name';
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->organizationId = 'string';

    $response = $sdk->merchantOnboarding->listOnboardingByOrganization($request);

    if ($response->onboardingWithoutPrincipals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationRequest](../../models/operations/ListOnboardingByOrganizationRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingByOrganizationResponse](../../models/operations/ListOnboardingByOrganizationResponse.md)**


## listOnboardings

Retrieve the list of Onboarding Applications under the session account.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListOnboardingsRequest();
    $request->dollarLimit = 10;
    $request->dollarSelect = 'createdAt,status,merchant.name';
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';

    $response = $sdk->merchantOnboarding->listOnboardings($request);

    if ($response->onboardingWithoutPrincipals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsRequest](../../models/operations/ListOnboardingsRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\ListOnboardingsResponse](../../models/operations/ListOnboardingsResponse.md)**


## retrieveOnboardingById

Retrieve a specific Onboarding Application for the given Organization and Onboarding identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RetrieveOnboardingByIdRequest();
    $request->onboardingId = 'string';
    $request->organizationId = 'string';

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
| `$request`                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdRequest](../../models/operations/RetrieveOnboardingByIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\RetrieveOnboardingByIdResponse](../../models/operations/RetrieveOnboardingByIdResponse.md)**


## searchOnboardingByBusinessName

Retrieve the list of Onboarding Applications submitted under your Organization matching the Business Name provided as a search parameter.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new SearchOnboardingByBusinessNameRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->businessName = 'ACME';

    $response = $sdk->merchantOnboarding->searchOnboardingByBusinessName($request);

    if ($response->onboardingWithoutPrincipals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameRequest](../../models/operations/SearchOnboardingByBusinessNameRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByBusinessNameResponse](../../models/operations/SearchOnboardingByBusinessNameResponse.md)**


## searchOnboardingByOrganizationIdAndBusinessName

Retrieve the list of Onboarding Applications matching the Business Name provided as a search parameter for the given Organization identifier.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \TheLogicStudio\ExactPayments\ExactPayments;
use \TheLogicStudio\ExactPayments\Models\Shared\Security;
use \TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest;

$security = new Security();
$security->apiKey = '';

$sdk = ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new SearchOnboardingByOrganizationIdAndBusinessNameRequest();
    $request->dollarLimit = 10;
    $request->dollarSkip = 10;
    $request->dollarSort = 'createdAt:asc';
    $request->businessName = 'ACME';
    $request->organizationId = 'string';

    $response = $sdk->merchantOnboarding->searchOnboardingByOrganizationIdAndBusinessName($request);

    if ($response->onboardingWithoutPrincipals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameRequest](../../models/operations/SearchOnboardingByOrganizationIdAndBusinessNameRequest.md) | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |


### Response

**[?\TheLogicStudio\ExactPayments\Models\Operations\SearchOnboardingByOrganizationIdAndBusinessNameResponse](../../models/operations/SearchOnboardingByOrganizationIdAndBusinessNameResponse.md)**

