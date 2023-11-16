# AccountVoidPaymentResponse


## Fields

| Field                                                                                                                                                                              | Type                                                                                                                                                                               | Required                                                                                                                                                                           | Description                                                                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredAndOneApplicationJsonPayment`                                                                                                                                           | *mixed*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                 | Payment Created                                                                                                                                                                    |
| `fourHundredApplicationJsonObject`                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentResponseBody](../../Models/Operations/AccountVoidPaymentResponseBody.md)                                       | :heavy_minus_sign:                                                                                                                                                                 | **Bad Request**\<br/>When there are errors in the payload.<br/>                                                                                                                    |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentPaymentsResponseBody](../../Models/Operations/AccountVoidPaymentPaymentsResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                                                 | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                                                                                    |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentPaymentsResponseResponseBody](../../Models/Operations/AccountVoidPaymentPaymentsResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                                                 | **Not Found**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- When there are no Accounts/Orders/Payment found.<br/>                                                  |
| `fiveHundredApplicationJsonObject`                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentPaymentsResponse500ResponseBody](../../Models/Operations/AccountVoidPaymentPaymentsResponse500ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                 | **Internal Server Error**<br/>                                                                                                                                                     |
| `fiveHundredAndThreeApplicationJsonObject`                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountVoidPaymentPaymentsResponse503ResponseBody](../../Models/Operations/AccountVoidPaymentPaymentsResponse503ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                 | **Service Unavailable**<br/>                                                                                                                                                       |
| `contentType`                                                                                                                                                                      | *string*                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                 | HTTP response content type for this operation                                                                                                                                      |
| `statusCode`                                                                                                                                                                       | *int*                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                 | HTTP response status code for this operation                                                                                                                                       |
| `rawResponse`                                                                                                                                                                      | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                                       | :heavy_check_mark:                                                                                                                                                                 | Raw HTTP response; suitable for custom response parsing                                                                                                                            |