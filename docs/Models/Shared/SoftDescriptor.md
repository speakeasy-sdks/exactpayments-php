# SoftDescriptor

Override business information which would normally appear on a customer's statement, making it easier for customers to identify transactions.


## Fields

| Field                                                                                                                                                                                                                                                                                             | Type                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `authTypeIndicator`                                                                                                                                                                                                                                                                               | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | F = Final Amount (amount is not expected to change for settlement). P = Pre-Authorization / Estimated Amount (amount may change between auth and settlement). Elavon only                                                                                                                         | F                                                                                                                                                                                                                                                                                                 |
| `city`                                                                                                                                                                                                                                                                                            | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | City name of the customer.                                                                                                                                                                                                                                                                        | Ontario                                                                                                                                                                                                                                                                                           |
| `countryCode`                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | 3-character alphabetical country code according to ISO 3166-1, eg: USA, CAN etc.                                                                                                                                                                                                                  | USA                                                                                                                                                                                                                                                                                               |
| `dbaName`                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Name of the Customer.                                                                                                                                                                                                                                                                             | john                                                                                                                                                                                                                                                                                              |
| `email`                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Email of the customer.                                                                                                                                                                                                                                                                            | john@example.com                                                                                                                                                                                                                                                                                  |
| `mcc`                                                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Merchant category code (MCCs) is four-digit numbers that describe a business's primary business activities. Please refer to the endpoint [Merchant Category Codes](https://dev.exactpay.dev/api#/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments. | 5699                                                                                                                                                                                                                                                                                              |
| `merchantContactInfo`                                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Phone number of the merchant.                                                                                                                                                                                                                                                                     | 8886178190                                                                                                                                                                                                                                                                                        |
| `mvvMaid`                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Merchant Verification Value.                                                                                                                                                                                                                                                                      | 5679                                                                                                                                                                                                                                                                                              |
| `phone`                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Phone number of the customer.                                                                                                                                                                                                                                                                     | 8886178190                                                                                                                                                                                                                                                                                        |
| `postalCode`                                                                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | The postal code where the customer is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.                                                                                           | 91710                                                                                                                                                                                                                                                                                             |
| `state`                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | State name of the customer.                                                                                                                                                                                                                                                                       | CA                                                                                                                                                                                                                                                                                                |
| `street`                                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Street name of the customer.                                                                                                                                                                                                                                                                      | Fairfield Ranch                                                                                                                                                                                                                                                                                   |
| `submerchantId`                                                                                                                                                                                                                                                                                   | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Identification number of the submerchant.                                                                                                                                                                                                                                                         | xyz123                                                                                                                                                                                                                                                                                            |
| `taxId`                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | The Tax Identifier of the merchant. Elavon only.                                                                                                                                                                                                                                                  | abc123                                                                                                                                                                                                                                                                                            |