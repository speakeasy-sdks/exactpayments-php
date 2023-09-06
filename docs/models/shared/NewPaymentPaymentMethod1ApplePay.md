# NewPaymentPaymentMethod1ApplePay


## Fields

| Field                                                                                                                                                                                                          | Type                                                                                                                                                                                                           | Required                                                                                                                                                                                                       | Description                                                                                                                                                                                                    | Example                                                                                                                                                                                                        |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `cardholder`                                                                                                                                                                                                   | *?string*                                                                                                                                                                                                      | :heavy_minus_sign:                                                                                                                                                                                             | Card holder name.                                                                                                                                                                                              | John Doe                                                                                                                                                                                                       |
| `cryptogram`                                                                                                                                                                                                   | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | The cryptogram returned by Apple Pay. Note: if the response from Apple contains an `eciIndicator` value, you MUST pass this value to us using the `ecommerce_flag` attribute in the `options` request element. | kiwewruhflkjsdfblaseabc                                                                                                                                                                                        |
| `expiryMonth`                                                                                                                                                                                                  | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | Expiration month for the card.                                                                                                                                                                                 | 12                                                                                                                                                                                                             |
| `expiryYear`                                                                                                                                                                                                   | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | Expiration year for the card.                                                                                                                                                                                  | 23                                                                                                                                                                                                             |
| `number`                                                                                                                                                                                                       | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | Card number.                                                                                                                                                                                                   | 4111111111111111                                                                                                                                                                                               |
| `transactionId`                                                                                                                                                                                                | *string*                                                                                                                                                                                                       | :heavy_check_mark:                                                                                                                                                                                             | The transaction ID returned by Apple Pay.                                                                                                                                                                      | ABVD93934123                                                                                                                                                                                                   |