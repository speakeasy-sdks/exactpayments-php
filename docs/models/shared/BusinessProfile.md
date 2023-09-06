# BusinessProfile


## Fields

| Field                                                                                                                                                                                                            | Type                                                                                                                                                                                                             | Required                                                                                                                                                                                                         | Description                                                                                                                                                                                                      | Example                                                                                                                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `acceptanceMethods`                                                                                                                                                                                              | [AcceptanceMethods](../../models/shared/AcceptanceMethods.md)                                                                                                                                                    | :heavy_check_mark:                                                                                                                                                                                               | The method by which the business accepts the payments. The total value of all the methods can't exceed 100 percent.                                                                                              |                                                                                                                                                                                                                  |
| `currentGateway`                                                                                                                                                                                                 | *?string*                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                               | Current gateway with whom the business is having contract with. This field value is required only when `currentlyAcceptingPayments` field value is `true`.                                                       | International Payments Gateway Services LLC                                                                                                                                                                      |
| `currentProcessor`                                                                                                                                                                                               | *?string*                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                               | Current Processor with whom the business is having contract with. This field value is required only when `currentlyAcceptingPayments` field value is `true`.                                                     | Global Processing Services LLC                                                                                                                                                                                   |
| `currentlyAcceptingPayments`                                                                                                                                                                                     | *bool*                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                               | Whether the business is currently accepting the Payments or not. If `true` then `currentProcessor`, `currentGateway` and `reasonForLeaving` field values are required.                                           | true                                                                                                                                                                                                             |
| `deliveryTimeframe`                                                                                                                                                                                              | [?BusinessProfileDeliveryTimeframe](../../models/shared/BusinessProfileDeliveryTimeframe.md)                                                                                                                     | :heavy_minus_sign:                                                                                                                                                                                               | Delivery time frame that the business has for its products.                                                                                                                                                      | Immediate                                                                                                                                                                                                        |
| `paymentTime`                                                                                                                                                                                                    | [?BusinessProfilePaymentTime](../../models/shared/BusinessProfilePaymentTime.md)                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                               | The time at which the customer makes the payment to the business.                                                                                                                                                | Upon Purchase                                                                                                                                                                                                    |
| `reasonForLeaving`                                                                                                                                                                                               | *?string*                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                               | Reason for leaving current processor/gateway. This field value is required only when `currentlyAcceptingPayments` field value is `true`.                                                                         | Does not meet expectations.                                                                                                                                                                                      |
| `recurringServices`                                                                                                                                                                                              | *bool*                                                                                                                                                                                                           | :heavy_check_mark:                                                                                                                                                                                               | Whether the business provides any recurring services or not. If `true` then `recurringServicesDescription` field value is required.                                                                              | true                                                                                                                                                                                                             |
| `recurringServicesDescription`                                                                                                                                                                                   | *?string*                                                                                                                                                                                                        | :heavy_minus_sign:                                                                                                                                                                                               | The description of the recurring services provided by the business. This field value is required only when `recurringServices` field value is `true`.                                                            | Printer ink refills are fulfilled every month based on customer subscription                                                                                                                                     |
| `refundPolicyDescription`                                                                                                                                                                                        | *string*                                                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                               | Refund policy.                                                                                                                                                                                                   | Returns are accepted within 30 days of purchase when presented with the original receipt and packaging. Refunds will be credited to the Credit Card used while purchasing within five days from the return date. |
| `servicesDescription`                                                                                                                                                                                            | *string*                                                                                                                                                                                                         | :heavy_check_mark:                                                                                                                                                                                               | The description of the Product or services provided by the business.                                                                                                                                             | Computer and accessories                                                                                                                                                                                         |