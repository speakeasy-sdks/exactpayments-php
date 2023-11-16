# GetOrdersResponse


## Fields

| Field                                                                                                                                                  | Type                                                                                                                                                   | Required                                                                                                                                               | Description                                                                                                                                            |
| ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `fourHundredAndThreeApplicationJsonObject`                                                                                                             | [?\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersResponseBody](../../Models/Operations/GetOrdersResponseBody.md)                             | :heavy_minus_sign:                                                                                                                                     | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                                                        |
| `fiveHundredApplicationJsonObject`                                                                                                                     | [?\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersOrdersResponseBody](../../Models/Operations/GetOrdersOrdersResponseBody.md)                 | :heavy_minus_sign:                                                                                                                                     | **Internal Server Error**<br/>                                                                                                                         |
| `fiveHundredAndThreeApplicationJsonObject`                                                                                                             | [?\TheLogicStudio\ExactPayments\Models\Operations\GetOrdersOrdersResponseResponseBody](../../Models/Operations/GetOrdersOrdersResponseResponseBody.md) | :heavy_minus_sign:                                                                                                                                     | **Service Unavailable**<br/>                                                                                                                           |
| `contentType`                                                                                                                                          | *string*                                                                                                                                               | :heavy_check_mark:                                                                                                                                     | HTTP response content type for this operation                                                                                                          |
| `statusCode`                                                                                                                                           | *int*                                                                                                                                                  | :heavy_check_mark:                                                                                                                                     | HTTP response status code for this operation                                                                                                           |
| `rawResponse`                                                                                                                                          | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                           | :heavy_check_mark:                                                                                                                                     | Raw HTTP response; suitable for custom response parsing                                                                                                |
| `orderSearch`                                                                                                                                          | [?\TheLogicStudio\ExactPayments\Models\Shared\OrderSearch](../../Models/Shared/OrderSearch.md)                                                         | :heavy_minus_sign:                                                                                                                                     | Details of an existing orders.                                                                                                                         |