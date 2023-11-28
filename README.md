# thelogicstudio/exactpayments

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks/exactpayments-php.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks/bolt-php/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>

<!-- Start SDK Installation [installation] -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks/exactpayments-php.git"
        }
    ],
    "require": {
        "thelogicstudio/exactpayments": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use TheLogicStudio\ExactPayments;
use TheLogicStudio\ExactPayments\Models\Shared;
use TheLogicStudio\ExactPayments\Models\Operations;

$security = new Shared\Security();
$security->apiKey = '';

$sdk = ExactPayments\ExactPayments::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\AccountRegisterApplePayDomainsRequest();
    $request->applePayDomains = new Shared\ApplePayDomains();
    $request->applePayDomains->domains = ['string'];
    $request->accountId = 'string';

    $response = $sdk->accountManagement->accountRegisterApplePayDomains($request);

    if ($response->applePayDomains !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [AccountManagement](docs/sdks/accountmanagement/README.md)

* [accountRegisterApplePayDomains](docs/sdks/accountmanagement/README.md#accountregisterapplepaydomains) - Register Domain for Apple Pay
* [getOrganizationOrganizationIdAccount](docs/sdks/accountmanagement/README.md#getorganizationorganizationidaccount) - List Accounts
* [getOrganizationOrganizationIdAccountSearch](docs/sdks/accountmanagement/README.md#getorganizationorganizationidaccountsearch) - Query Accounts
* [getOrganizationOrganizationIdAccountAccountId](docs/sdks/accountmanagement/README.md#getorganizationorganizationidaccountaccountid) - Retrieve Account by ID
* [listApplePayDomains](docs/sdks/accountmanagement/README.md#listapplepaydomains) - List Apple Pay Domains
* [putOrganizationOrganizationIdAccountAccountId](docs/sdks/accountmanagement/README.md#putorganizationorganizationidaccountaccountid) - Update Account by ID

### [Customers](docs/sdks/customers/README.md)

* [accountDeleteCustomerCustomerIdPaymentMethodToken](docs/sdks/customers/README.md#accountdeletecustomercustomeridpaymentmethodtoken) - Delete Payment Method Associated with Customer by Token for a given Account
* [accountDeleteCustomerId](docs/sdks/customers/README.md#accountdeletecustomerid) - Delete Customer by ID for a given Account
* [accountGetCustomer](docs/sdks/customers/README.md#accountgetcustomer) - Query customers for a given Account (Partner context)
* [accountGetCustomerId](docs/sdks/customers/README.md#accountgetcustomerid) - Get Customer by ID for a given Account
* [accountGetCustomerCustomerIdPaymentMethodToken](docs/sdks/customers/README.md#accountgetcustomercustomeridpaymentmethodtoken) - Get Payment Method Associated with Customer by Token for a given Account
* [accountGetCustomerCustomerIdPayments](docs/sdks/customers/README.md#accountgetcustomercustomeridpayments) - Get Customer Payments for a given Account
* [accountGetCustomerDefaultPaymentMethod](docs/sdks/customers/README.md#accountgetcustomerdefaultpaymentmethod) - Get Default Payment Method Associated to a Customer for a given Account
* [accountGetCustomerIdPaymentMethod](docs/sdks/customers/README.md#accountgetcustomeridpaymentmethod) - Query Payment Methods for Customer for a given Account
* [accountGetCustomerTokenPaymentMethod](docs/sdks/customers/README.md#accountgetcustomertokenpaymentmethod) - Query Payment Methods for Customer by customer token for a given Account
* [accountPostCustomer](docs/sdks/customers/README.md#accountpostcustomer) - Create Customer for a given Account
* [accountPostCustomerIdPaymentMethod](docs/sdks/customers/README.md#accountpostcustomeridpaymentmethod) - Attach Payment Method for a Customer (Partner context)
* [accountPutCustomerId](docs/sdks/customers/README.md#accountputcustomerid) - Update Customer by ID for a given Account
* [deleteCustomerCustomerIdPaymentMethodToken](docs/sdks/customers/README.md#deletecustomercustomeridpaymentmethodtoken) - Delete Payment Method Associated with Customer by Token
* [deleteCustomerId](docs/sdks/customers/README.md#deletecustomerid) - Delete Customer by ID
* [getCustomer](docs/sdks/customers/README.md#getcustomer) - Query customers for a given Account (Sub-merchant context)
* [getCustomerId](docs/sdks/customers/README.md#getcustomerid) - Get Customer by ID
* [getCustomerCustomerIdPaymentMethodToken](docs/sdks/customers/README.md#getcustomercustomeridpaymentmethodtoken) - Get Payment Method Associated with Customer by Token
* [getCustomerCustomerIdPayments](docs/sdks/customers/README.md#getcustomercustomeridpayments) - Get Customer Payments
* [getCustomerIdPaymentMethod](docs/sdks/customers/README.md#getcustomeridpaymentmethod) - Query Payment Methods for Customer
* [getCustomerTokenPaymentMethod](docs/sdks/customers/README.md#getcustomertokenpaymentmethod) - Query Payment Methods for Customer by customer token
* [postCustomer](docs/sdks/customers/README.md#postcustomer) - Create Customer
* [postCustomerIdPaymentMethod](docs/sdks/customers/README.md#postcustomeridpaymentmethod) - Attach Payment Method for a Customer (Sub-merchant context)
* [putCustomerId](docs/sdks/customers/README.md#putcustomerid) - Update Customer by ID

### [Orders](docs/sdks/orders/README.md)

* [getAccountAccountIdOrdersOrderId](docs/sdks/orders/README.md#getaccountaccountidordersorderid) - Get Order Details
* [getOrders](docs/sdks/orders/README.md#getorders) - List Orders
* [postAccountAccountIdOrdersOrderIdPay](docs/sdks/orders/README.md#postaccountaccountidordersorderidpay) - Pay for Order with Token
* [postAccountAccountIdOrders](docs/sdks/orders/README.md#postaccountaccountidorders) - Create Order specifying an account
* [postOrders](docs/sdks/orders/README.md#postorders) - Create Order
* [postOrdersOrderIdAccessToken](docs/sdks/orders/README.md#postordersorderidaccesstoken) - Create New Access Token
* [putAccountAccountIdOrdersOrderId](docs/sdks/orders/README.md#putaccountaccountidordersorderid) - Update Order
* [putOrdersOrderIdReset](docs/sdks/orders/README.md#putordersorderidreset) - Reset Payment Attempts

### [PaymentMethods](docs/sdks/paymentmethods/README.md)

* [accountDeletePaymentMethod](docs/sdks/paymentmethods/README.md#accountdeletepaymentmethod) - Delete a Payment Method for a given Account
* [accountGetPaymentMethod](docs/sdks/paymentmethods/README.md#accountgetpaymentmethod) - Retrieve a Payment Method for a given Account
* [accountPostPaymentMethod](docs/sdks/paymentmethods/README.md#accountpostpaymentmethod) - Create Payment Method for a given Account
* [accountPostVerifyMicrodeposits](docs/sdks/paymentmethods/README.md#accountpostverifymicrodeposits) - Verify micro-deposits on an ACH Payment Method for a given Account
* [deletePaymentMethod](docs/sdks/paymentmethods/README.md#deletepaymentmethod) - Delete a Payment Method
* [getPaymentMethod](docs/sdks/paymentmethods/README.md#getpaymentmethod) - Retrieve a Payment Method
* [postPaymentMethod](docs/sdks/paymentmethods/README.md#postpaymentmethod) - Create Payment Method
* [postVerifyMicrodeposits](docs/sdks/paymentmethods/README.md#postverifymicrodeposits) - Verify micro-deposits on an ACH Payment Method

### [Payments](docs/sdks/payments/README.md)

* [accountCapturePayment](docs/sdks/payments/README.md#accountcapturepayment) - Capture an existing authorization for a given Account
* [accountGetPayment](docs/sdks/payments/README.md#accountgetpayment) - Get details of a specific Payment for a given Account
* [accountGetPayments](docs/sdks/payments/README.md#accountgetpayments) - Get Payments for a given Account
* [accountPostPayment](docs/sdks/payments/README.md#accountpostpayment) - Create Payment for a given Account
* [accountRefundPayment](docs/sdks/payments/README.md#accountrefundpayment) - Refund a specific Payment for a given Account
* [accountVoidPayment](docs/sdks/payments/README.md#accountvoidpayment) - Void a specific Payment for a given Account
* [capturePayment](docs/sdks/payments/README.md#capturepayment) - Capture an existing authorization
* [getPayment](docs/sdks/payments/README.md#getpayment) - Get details of a specific Payment
* [getPayments](docs/sdks/payments/README.md#getpayments) - Get Payments
* [postPayment](docs/sdks/payments/README.md#postpayment) - Create Payment
* [refundPayment](docs/sdks/payments/README.md#refundpayment) - Refund a specific payment
* [voidPayment](docs/sdks/payments/README.md#voidpayment) - Void a specific Payment

### [Webhooks](docs/sdks/webhooks/README.md)

* [accountDeleteWebhook](docs/sdks/webhooks/README.md#accountdeletewebhook) - Delete Webhook
* [accountDisableWebhook](docs/sdks/webhooks/README.md#accountdisablewebhook) - Disable Webhook
* [accountEnableWebhook](docs/sdks/webhooks/README.md#accountenablewebhook) - Enable Webhook
* [accountGetListWebhooks](docs/sdks/webhooks/README.md#accountgetlistwebhooks) - List Webhooks
* [accountGetRetrieveWebhook](docs/sdks/webhooks/README.md#accountgetretrievewebhook) - Retrieve Webhook
* [accountPostCreateWebhook](docs/sdks/webhooks/README.md#accountpostcreatewebhook) - Create Webhook
* [accountUpdateWebhook](docs/sdks/webhooks/README.md#accountupdatewebhook) - Update Webhook
* [deleteOrganizationOrganizationIdWebhookWebhookId](docs/sdks/webhooks/README.md#deleteorganizationorganizationidwebhookwebhookid) - Delete Webhook
* [getOrganizationOrganizationIdWebhook](docs/sdks/webhooks/README.md#getorganizationorganizationidwebhook) - List Webhooks
* [getOrganizationOrganizationIdWebhookWebhookId](docs/sdks/webhooks/README.md#getorganizationorganizationidwebhookwebhookid) - Retrieve Webhook
* [postOrganizationOrganizationIdWebhook](docs/sdks/webhooks/README.md#postorganizationorganizationidwebhook) - Create Webhook
* [putOrganizationOrganizationIdWebhookWebhookId](docs/sdks/webhooks/README.md#putorganizationorganizationidwebhookwebhookid) - Update Webhook
* [putOrganizationOrganizationIdWebhookWebhookIdDisable](docs/sdks/webhooks/README.md#putorganizationorganizationidwebhookwebhookiddisable) - Disable Webhook
* [putOrganizationOrganizationIdWebhookWebhookIdEnable](docs/sdks/webhooks/README.md#putorganizationorganizationidwebhookwebhookidenable) - Enable Webhook

### [Authentication](docs/sdks/authentication/README.md)

* [createApplicationToken](docs/sdks/authentication/README.md#createapplicationtoken) - Create Application Token
* [createUserToken](docs/sdks/authentication/README.md#createusertoken) - Create User Token
* [deleteApplicationToken](docs/sdks/authentication/README.md#deleteapplicationtoken) - Delete Application Token
* [queryApplicationToken](docs/sdks/authentication/README.md#queryapplicationtoken) - Query Application Tokens

### [DocumentManagement](docs/sdks/documentmanagement/README.md)

* [createDocumentRequest](docs/sdks/documentmanagement/README.md#createdocumentrequest) - Request Document
* [deleteDocumentById](docs/sdks/documentmanagement/README.md#deletedocumentbyid) - Delete Document
* [deleteDocumentRequestById](docs/sdks/documentmanagement/README.md#deletedocumentrequestbyid) - Delete Document Request
* [getDocumentById](docs/sdks/documentmanagement/README.md#getdocumentbyid) - Download Document
* [getDocuments](docs/sdks/documentmanagement/README.md#getdocuments) - List Uploaded Documents
* [getDownloadAllDocuments](docs/sdks/documentmanagement/README.md#getdownloadalldocuments) - Download All Documents
* [getListDocumentRequests](docs/sdks/documentmanagement/README.md#getlistdocumentrequests) - List Document Requests
* [getRetrieveDocument](docs/sdks/documentmanagement/README.md#getretrievedocument) - Retrieve Document
* [getRetrieveDocumentRequest](docs/sdks/documentmanagement/README.md#getretrievedocumentrequest) - Retrieve Document Request
* [listDocumentRequestByToken](docs/sdks/documentmanagement/README.md#listdocumentrequestbytoken) - List Document Requests by Token
* [putUpdateDocumentTypeById](docs/sdks/documentmanagement/README.md#putupdatedocumenttypebyid) - Update Document Type
* [updateDocumentRequest](docs/sdks/documentmanagement/README.md#updatedocumentrequest) - Update Document Request
* [uploadDocument](docs/sdks/documentmanagement/README.md#uploaddocument) - Upload Document
* [uploadDocumentByToken](docs/sdks/documentmanagement/README.md#uploaddocumentbytoken) - Upload Document using Token

### [MerchantOnboarding](docs/sdks/merchantonboarding/README.md)

* [createOnboarding](docs/sdks/merchantonboarding/README.md#createonboarding) - Create Onboarding Application
* [deleteOnboardingById](docs/sdks/merchantonboarding/README.md#deleteonboardingbyid) - Delete Onboarding
* [listFilterOptions](docs/sdks/merchantonboarding/README.md#listfilteroptions) - List Filter Options
* [listMerchantCategoryCodes](docs/sdks/merchantonboarding/README.md#listmerchantcategorycodes) - List Merchant Category Codes
* [listOnboardingByOrganization](docs/sdks/merchantonboarding/README.md#listonboardingbyorganization) - List Onboardings by Organization
* [listOnboardings](docs/sdks/merchantonboarding/README.md#listonboardings) - List Onboardings
* [retrieveOnboardingById](docs/sdks/merchantonboarding/README.md#retrieveonboardingbyid) - Retrieve Onboarding
* [searchOnboardingByBusinessName](docs/sdks/merchantonboarding/README.md#searchonboardingbybusinessname) - Search Onboarding by Business Name
* [searchOnboardingByOrganizationIdAndBusinessName](docs/sdks/merchantonboarding/README.md#searchonboardingbyorganizationidandbusinessname) - Search Onboarding by Organization identifier and Business Name

### [UnderwritingWorkflow](docs/sdks/underwritingworkflow/README.md)

* [deleteWorkflowById](docs/sdks/underwritingworkflow/README.md#deleteworkflowbyid) - Delete Workflow
* [disableWorkflowById](docs/sdks/underwritingworkflow/README.md#disableworkflowbyid) - Disable Workflow
* [enableWorkflowById](docs/sdks/underwritingworkflow/README.md#enableworkflowbyid) - Enable Workflow
* [getOrganizationOrganizationIdOnboardingWorkflow](docs/sdks/underwritingworkflow/README.md#getorganizationorganizationidonboardingworkflow) - List Workflows
* [getOrganizationOrganizationIdOnboardingWorkflowWorkflowId](docs/sdks/underwritingworkflow/README.md#getorganizationorganizationidonboardingworkflowworkflowid) - Retrieve Workflow
* [postOrganizationOrganizationIdOnboardingWorkflow](docs/sdks/underwritingworkflow/README.md#postorganizationorganizationidonboardingworkflow) - Create Workflow
* [putOrganizationOrganizationIdOnboardingWorkflowWorkflowId](docs/sdks/underwritingworkflow/README.md#putorganizationorganizationidonboardingworkflowworkflowid) - Update Workflow
* [setDefaultWorkflowById](docs/sdks/underwritingworkflow/README.md#setdefaultworkflowbyid) - Set Default Workflow

### [AdminTools](docs/sdks/admintools/README.md)

* [getListNotes](docs/sdks/admintools/README.md#getlistnotes) - List Notes
* [postCreateNotes](docs/sdks/admintools/README.md#postcreatenotes) - Add Note
* [putOrganizationOrganizationIdOnboardingOnboardingIdRecheck](docs/sdks/admintools/README.md#putorganizationorganizationidonboardingonboardingidrecheck) - Process Workflow
* [putOrganizationOrganizationIdOnboardingOnboardingIdRetryRule](docs/sdks/admintools/README.md#putorganizationorganizationidonboardingonboardingidretryrule) - Process Verification
* [putOrganizationOrganizationIdOnboardingOnboardingIdStatus](docs/sdks/admintools/README.md#putorganizationorganizationidonboardingonboardingidstatus) - Update Onboarding Status

### [Reporting](docs/sdks/reporting/README.md)

* [deleteReport](docs/sdks/reporting/README.md#deletereport) - Delete Report
* [getReport](docs/sdks/reporting/README.md#getreport) - Download Report
* [getReportDetails](docs/sdks/reporting/README.md#getreportdetails) - Get Report Details
* [getReports](docs/sdks/reporting/README.md#getreports) - List Reports

### [APIHealthCheck](docs/sdks/apihealthcheck/README.md)

* [getStatus](docs/sdks/apihealthcheck/README.md#getstatus) - Retrieve Status
<!-- End Available Resources and Operations [operations] -->



<!-- Placeholder for Future Speakeasy SDK Sections -->



### Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

### Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
