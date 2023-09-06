# AccountVoidPayment201ApplicationJSONPaymentPaymentMethodDetails2


## Fields

| Field                                                                                                                                                                              | Type                                                                                                                                                                               | Required                                                                                                                                                                           | Description                                                                                                                                                                        | Example                                                                                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `cardBrand`                                                                                                                                                                        | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Card brand of the card, for example, visa, master.                                                                                                                                 | visa                                                                                                                                                                               |
| `cardholder`                                                                                                                                                                       | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Card holder name.                                                                                                                                                                  | John Doe                                                                                                                                                                           |
| `cvdCheck`                                                                                                                                                                         | [?AccountVoidPayment201ApplicationJSONPaymentPaymentMethodDetails2CvdCheck](../../models/operations/AccountVoidPayment201ApplicationJSONPaymentPaymentMethodDetails2CvdCheck.md)   | :heavy_minus_sign:                                                                                                                                                                 | N/A                                                                                                                                                                                |                                                                                                                                                                                    |
| `expiryMonth`                                                                                                                                                                      | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Expiration month for the card.                                                                                                                                                     | 12                                                                                                                                                                                 |
| `expiryYear`                                                                                                                                                                       | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Expiration year for the card.                                                                                                                                                      | 2023                                                                                                                                                                               |
| `last4`                                                                                                                                                                            | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Last 4 digits of the card.                                                                                                                                                         | 3456                                                                                                                                                                               |
| `token`                                                                                                                                                                            | *?string*                                                                                                                                                                          | :heavy_minus_sign:                                                                                                                                                                 | Payment method token for the Payment.                                                                                                                                              | 2f40537f-769c-4f80-b3fb-b5cff67d457d                                                                                                                                               |
| `tokenType`                                                                                                                                                                        | [?AccountVoidPayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType](../../models/operations/AccountVoidPayment201ApplicationJSONPaymentPaymentMethodDetails2TokenType.md) | :heavy_minus_sign:                                                                                                                                                                 | Type of the token.                                                                                                                                                                 |                                                                                                                                                                                    |