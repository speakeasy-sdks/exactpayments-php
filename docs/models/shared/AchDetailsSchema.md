# AchDetailsSchema

The Customer's provided Bank Account Details.


## Fields

| Field                                                                                                                                     | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               | Example                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `bankAccountType`                                                                                                                         | [?AchDetailsSchemaBankAccountType](../../models/shared/AchDetailsSchemaBankAccountType.md)                                                | :heavy_minus_sign:                                                                                                                        | Indicates the type of bank account that was stored in Exact Payments vault.                                                               | checking                                                                                                                                  |
| `lastFour`                                                                                                                                | *?string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                        | The last 4-digits of the supplied bank account number.                                                                                    | 5679                                                                                                                                      |
| `verified`                                                                                                                                | *?bool*                                                                                                                                   | :heavy_minus_sign:                                                                                                                        | ACH Payment Methods can be verified or unverified, depending on how they were created. This indicates such status for the Payment Method. | true                                                                                                                                      |