# AccountGetPaymentsResponse


## Fields

| Field                                                                                                                                                                              | Type                                                                                                                                                                               | Required                                                                                                                                                                           | Description                                                                                                                                                                        |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `twoHundredApplicationJsonAnies`                                                                                                                                                   | array<*mixed*>                                                                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                 | Example response                                                                                                                                                                   |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsResponseBody](../../Models/Operations/AccountGetPaymentsResponseBody.md)                                       | :heavy_minus_sign:                                                                                                                                                                 | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                                                                                    |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsPaymentsResponseBody](../../Models/Operations/AccountGetPaymentsPaymentsResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                                                 | **Not Found**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- When there are no Accounts/Orders/Payment found.<br/>                                                  |
| `fiveHundredApplicationJsonObject`                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsPaymentsResponseResponseBody](../../Models/Operations/AccountGetPaymentsPaymentsResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                                                 | **Internal Server Error**<br/>                                                                                                                                                     |
| `fiveHundredAndThreeApplicationJsonObject`                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\AccountGetPaymentsPaymentsResponse503ResponseBody](../../Models/Operations/AccountGetPaymentsPaymentsResponse503ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                 | **Service Unavailable**<br/>                                                                                                                                                       |
| `contentType`                                                                                                                                                                      | *string*                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                 | HTTP response content type for this operation                                                                                                                                      |
| `headers`                                                                                                                                                                          | array<string, array<*string*>>                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                 | N/A                                                                                                                                                                                |
| `statusCode`                                                                                                                                                                       | *int*                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                 | HTTP response status code for this operation                                                                                                                                       |
| `rawResponse`                                                                                                                                                                      | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                                       | :heavy_check_mark:                                                                                                                                                                 | Raw HTTP response; suitable for custom response parsing                                                                                                                            |