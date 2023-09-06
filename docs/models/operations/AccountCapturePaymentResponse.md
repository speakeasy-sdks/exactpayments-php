# AccountCapturePaymentResponse


## Fields

| Field                                                                                                             | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                     | *string*                                                                                                          | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `payment`                                                                                                         | *mixed*                                                                                                           | :heavy_minus_sign:                                                                                                | Payment Created                                                                                                   |
| `statusCode`                                                                                                      | *int*                                                                                                             | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `rawResponse`                                                                                                     | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)      | :heavy_minus_sign:                                                                                                | N/A                                                                                                               |
| `accountCapturePayment400ApplicationJSONObject`                                                                   | [?AccountCapturePayment400ApplicationJSON](../../models/operations/AccountCapturePayment400ApplicationJSON.md)    | :heavy_minus_sign:                                                                                                | **Bad Request**\<br/>When there are errors in the payload.<br/>                                                   |
| `accountCapturePayment403ApplicationJSONObject`                                                                   | [?AccountCapturePayment403ApplicationJSON](../../models/operations/AccountCapturePayment403ApplicationJSON.md)    | :heavy_minus_sign:                                                                                                | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                   |
| `accountCapturePayment404ApplicationJSONObject`                                                                   | [?AccountCapturePayment404ApplicationJSON](../../models/operations/AccountCapturePayment404ApplicationJSON.md)    | :heavy_minus_sign:                                                                                                | **Not Found**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- When there are no Accounts/Orders/Payment found.<br/> |
| `accountCapturePayment500ApplicationJSONObject`                                                                   | [?AccountCapturePayment500ApplicationJSON](../../models/operations/AccountCapturePayment500ApplicationJSON.md)    | :heavy_minus_sign:                                                                                                | **Internal Server Error**<br/>                                                                                    |
| `accountCapturePayment503ApplicationJSONObject`                                                                   | [?AccountCapturePayment503ApplicationJSON](../../models/operations/AccountCapturePayment503ApplicationJSON.md)    | :heavy_minus_sign:                                                                                                | **Service Unavailable**<br/>                                                                                      |