# PostOrdersOrderIdAccessTokenResponse


## Fields

| Field                                                                                                                                                                                              | Type                                                                                                                                                                                               | Required                                                                                                                                                                                           | Description                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenResponseBody](../../Models/Operations/PostOrdersOrderIdAccessTokenResponseBody.md)                                   | :heavy_minus_sign:                                                                                                                                                                                 | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                                                                                                    |
| `fourHundredAndFourApplicationJsonObject`                                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenOrdersResponseBody](../../Models/Operations/PostOrdersOrderIdAccessTokenOrdersResponseBody.md)                       | :heavy_minus_sign:                                                                                                                                                                                 | **Not found**\<br/>When there are no accounts/orders/payment found<br/>                                                                                                                            |
| `fiveHundredApplicationJsonObject`                                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenOrdersResponseResponseBody](../../Models/Operations/PostOrdersOrderIdAccessTokenOrdersResponseResponseBody.md)       | :heavy_minus_sign:                                                                                                                                                                                 | **Internal Server Error**<br/>                                                                                                                                                                     |
| `fiveHundredAndThreeApplicationJsonObject`                                                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersOrderIdAccessTokenOrdersResponse503ResponseBody](../../Models/Operations/PostOrdersOrderIdAccessTokenOrdersResponse503ResponseBody.md) | :heavy_minus_sign:                                                                                                                                                                                 | **Service Unavailable**<br/>                                                                                                                                                                       |
| `contentType`                                                                                                                                                                                      | *string*                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                 | HTTP response content type for this operation                                                                                                                                                      |
| `statusCode`                                                                                                                                                                                       | *int*                                                                                                                                                                                              | :heavy_check_mark:                                                                                                                                                                                 | HTTP response status code for this operation                                                                                                                                                       |
| `rawResponse`                                                                                                                                                                                      | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                                                       | :heavy_check_mark:                                                                                                                                                                                 | Raw HTTP response; suitable for custom response parsing                                                                                                                                            |
| `orderAccessToken`                                                                                                                                                                                 | [?\TheLogicStudio\ExactPayments\Models\Shared\OrderAccessToken](../../Models/Shared/OrderAccessToken.md)                                                                                           | :heavy_minus_sign:                                                                                                                                                                                 | New order access token created.                                                                                                                                                                    |