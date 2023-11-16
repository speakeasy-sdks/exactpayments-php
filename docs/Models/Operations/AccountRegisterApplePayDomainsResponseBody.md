# AccountRegisterApplePayDomainsResponseBody

**Bad Request**\
\
The request body contains a malformed request or is incomplete.



## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `issues`                                                                                           | array<[\TheLogicStudio\ExactPayments\Models\Operations\Issues](../../Models/Operations/Issues.md)> | :heavy_minus_sign:                                                                                 | N/A                                                                                                |
| `name`                                                                                             | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | The error type. It has a fixed value of `ZodError` for `400 Bad Request`.                          |