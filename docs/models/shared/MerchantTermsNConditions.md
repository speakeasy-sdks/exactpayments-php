# MerchantTermsNConditions

Whether the Organization or Account has agreed to the Terms and Conditions. This field will be available in response only when the termsNConditions were sent to exact payments when the Onboarding Application was created.


## Fields

| Field                                                                                                                                                                                                                                                         | Type                                                                                                                                                                                                                                                          | Required                                                                                                                                                                                                                                                      | Description                                                                                                                                                                                                                                                   | Example                                                                                                                                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `dwolla`                                                                                                                                                                                                                                                      | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates when the Onboarding Applicant agreed to [Dwolla's terms and conditions](https://www.dwolla.com/legal/platform-agreement/). This field will not be populated if termsNConditions.dwolla field is not sent when submitting the Onboarding Application | 2022-08-08T20:31:38.636Z                                                                                                                                                                                                                                      |
| `dwollaAccepted`                                                                                                                                                                                                                                              | *?bool*                                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates whether the Onboarding Applicant agreed to Exact Payment's terms and conditions or not.                                                                                                                                                             | true                                                                                                                                                                                                                                                          |
| `exactPayments`                                                                                                                                                                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates when the Onboarding Applicant agreed to Exact Payment's terms and conditions. This field will not be populated if Exact termsNConditions.exactPayments field is not sent when submitting the Onboarding Application                                 | 2022-08-08T20:31:38.636Z                                                                                                                                                                                                                                      |
| `exactPaymentsAccepted`                                                                                                                                                                                                                                       | *?bool*                                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates whether the Onboarding Applicant agreed to [Dwolla's terms and conditions](https://www.dwolla.com/legal/platform-agreement/) or not.                                                                                                                | true                                                                                                                                                                                                                                                          |
| `notifications`                                                                                                                                                                                                                                               | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates when the Onboarding Applicant agreed to Exact Payment's notification and communication policies. This field will not be populated if Exact termsNConditions.notifications field is not sent when submitting the Onboarding Application              | 2022-08-08T20:31:38.636Z                                                                                                                                                                                                                                      |
| `notificationsAccepted`                                                                                                                                                                                                                                       | *?bool*                                                                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                                                                            | Indicates whether the Onboarding Applicant agreed to Exact Payment's notification and communication policies or not.                                                                                                                                          | true                                                                                                                                                                                                                                                          |