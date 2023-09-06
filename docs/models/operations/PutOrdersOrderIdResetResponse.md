# PutOrdersOrderIdResetResponse


## Fields

| Field                                                                                                          | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                  | *string*                                                                                                       | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `statusCode`                                                                                                   | *int*                                                                                                          | :heavy_check_mark:                                                                                             | N/A                                                                                                            |
| `rawResponse`                                                                                                  | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)   | :heavy_minus_sign:                                                                                             | N/A                                                                                                            |
| `orderResponse`                                                                                                | [?\TheLogicStudio\ExactPayments\Models\Shared\OrderResponse](../../models/shared/OrderResponse.md)             | :heavy_minus_sign:                                                                                             | Order Updated.                                                                                                 |
| `putOrdersOrderIdReset403ApplicationJSONObject`                                                                | [?PutOrdersOrderIdReset403ApplicationJSON](../../models/operations/PutOrdersOrderIdReset403ApplicationJSON.md) | :heavy_minus_sign:                                                                                             | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                |
| `putOrdersOrderIdReset404ApplicationJSONObject`                                                                | [?PutOrdersOrderIdReset404ApplicationJSON](../../models/operations/PutOrdersOrderIdReset404ApplicationJSON.md) | :heavy_minus_sign:                                                                                             | **Not found**\<br/>When there are no accounts/orders/payment found<br/>                                        |
| `putOrdersOrderIdReset500ApplicationJSONObject`                                                                | [?PutOrdersOrderIdReset500ApplicationJSON](../../models/operations/PutOrdersOrderIdReset500ApplicationJSON.md) | :heavy_minus_sign:                                                                                             | **Internal Server Error**<br/>                                                                                 |
| `putOrdersOrderIdReset503ApplicationJSONObject`                                                                | [?PutOrdersOrderIdReset503ApplicationJSON](../../models/operations/PutOrdersOrderIdReset503ApplicationJSON.md) | :heavy_minus_sign:                                                                                             | **Service Unavailable**<br/>                                                                                   |