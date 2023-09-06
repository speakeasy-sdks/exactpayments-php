# CapturePaymentResponse


## Fields

| Field                                                                                                             | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                     | *string*                                                                                                          | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `payment`                                                                                                         | *mixed*                                                                                                           | :heavy_minus_sign:                                                                                                | Payment Created                                                                                                   |
| `statusCode`                                                                                                      | *int*                                                                                                             | :heavy_check_mark:                                                                                                | N/A                                                                                                               |
| `rawResponse`                                                                                                     | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)      | :heavy_minus_sign:                                                                                                | N/A                                                                                                               |
| `capturePayment400ApplicationJSONObject`                                                                          | [?CapturePayment400ApplicationJSON](../../models/operations/CapturePayment400ApplicationJSON.md)                  | :heavy_minus_sign:                                                                                                | **Bad Request**\<br/>When there are errors in the payload.<br/>                                                   |
| `capturePayment403ApplicationJSONObject`                                                                          | [?CapturePayment403ApplicationJSON](../../models/operations/CapturePayment403ApplicationJSON.md)                  | :heavy_minus_sign:                                                                                                | **Access Denied**\<br/>Credentials supplied do not grant access to the requested resource.<br/>                   |
| `capturePayment404ApplicationJSONObject`                                                                          | [?CapturePayment404ApplicationJSON](../../models/operations/CapturePayment404ApplicationJSON.md)                  | :heavy_minus_sign:                                                                                                | **Not Found**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- When there are no Accounts/Orders/Payment found.<br/> |
| `capturePayment500ApplicationJSONObject`                                                                          | [?CapturePayment500ApplicationJSON](../../models/operations/CapturePayment500ApplicationJSON.md)                  | :heavy_minus_sign:                                                                                                | **Internal Server Error**<br/>                                                                                    |
| `capturePayment503ApplicationJSONObject`                                                                          | [?CapturePayment503ApplicationJSON](../../models/operations/CapturePayment503ApplicationJSON.md)                  | :heavy_minus_sign:                                                                                                | **Service Unavailable**<br/>                                                                                      |