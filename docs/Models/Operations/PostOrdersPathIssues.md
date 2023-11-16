# PostOrdersPathIssues


## Fields

| Field                                                                                                                    | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              | Example                                                                                                                  |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `details`                                                                                                                | array<[\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersDetails](../../Models/Operations/PostOrdersDetails.md)> | :heavy_minus_sign:                                                                                                       | N/A                                                                                                                      | String must contain at least 1 character(s)                                                                              |
| `field`                                                                                                                  | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersField](../../Models/Operations/PostOrdersField.md)           | :heavy_minus_sign:                                                                                                       | It shows which field is/are missing.                                                                                     | reference.referenceNo                                                                                                    |
| `type`                                                                                                                   | [?\TheLogicStudio\ExactPayments\Models\Operations\PostOrdersType](../../Models/Operations/PostOrdersType.md)             | :heavy_minus_sign:                                                                                                       | It shows what is expecting.                                                                                              | tooSmall                                                                                                                 |