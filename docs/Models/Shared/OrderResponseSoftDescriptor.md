# OrderResponseSoftDescriptor

Override business information which would normally appear on a customer's statement, making it easier for customers to identify transactions.


## Fields

| Field                                                                                                                                                                                                                                                                                             | Type                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `city`                                                                                                                                                                                                                                                                                            | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | City name of the customer.                                                                                                                                                                                                                                                                        | Chino                                                                                                                                                                                                                                                                                             |
| `countryCode`                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | 3-character alphabetical country code according to ISO 3166-1, eg: USA, CAN etc.                                                                                                                                                                                                                  | USA                                                                                                                                                                                                                                                                                               |
| `dbaName`                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Name of the customer.                                                                                                                                                                                                                                                                             | john                                                                                                                                                                                                                                                                                              |
| `mcc`                                                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Merchant category code (MCCs) is four-digit numbers that describe a business's primary business activities. Please refer to the endpoint [Merchant Category Codes](https://dev.exactpay.dev/api#/operations/listMerchantCategoryCodes) to get the list of acceptable MCC codes by Exact Payments. | 5699                                                                                                                                                                                                                                                                                              |
| `merchantContactInfo`                                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Phone number of the merchant.                                                                                                                                                                                                                                                                     | 8886178190                                                                                                                                                                                                                                                                                        |
| `postalCode`                                                                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | The postal code where the customer is located. Five-digit (example: 33558) or nine-digit (33558-3321) format is acceptable for the USA. Six digit(A0A 0A0) or (A0A0A0) format is acceptable for Canada.                                                                                           | 91710                                                                                                                                                                                                                                                                                             |
| `state`                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | State name of tghe customer.                                                                                                                                                                                                                                                                      | CA                                                                                                                                                                                                                                                                                                |
| `street`                                                                                                                                                                                                                                                                                          | *?string*                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                | Street name of the customer.                                                                                                                                                                                                                                                                      | Fairfield                                                                                                                                                                                                                                                                                         |