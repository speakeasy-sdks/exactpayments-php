# GetOrdersResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | N/A                                                                                                          |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | N/A                                                                                                          |
| `getOrders403ApplicationJSONObject`                                                                          | [?GetOrders403ApplicationJSON](../../models/operations/GetOrders403ApplicationJSON.md)                       | :heavy_minus_sign:                                                                                           | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>              |
| `getOrders500ApplicationJSONObject`                                                                          | [?GetOrders500ApplicationJSON](../../models/operations/GetOrders500ApplicationJSON.md)                       | :heavy_minus_sign:                                                                                           | **Internal Server Error**<br/>                                                                               |
| `getOrders503ApplicationJSONObject`                                                                          | [?GetOrders503ApplicationJSON](../../models/operations/GetOrders503ApplicationJSON.md)                       | :heavy_minus_sign:                                                                                           | **Service Unavailable**<br/>                                                                                 |
| `orderSearch`                                                                                                | [?\TheLogicStudio\ExactPayments\Models\Shared\OrderSearch](../../models/shared/OrderSearch.md)               | :heavy_minus_sign:                                                                                           | Details of an existing orders.                                                                               |