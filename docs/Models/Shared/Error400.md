# Error400


## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        | Example                                                                                            |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `code`                                                                                             | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | Code of the validation error.                                                                      | validation-error                                                                                   |
| `message`                                                                                          | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | Message explaining the validation error.                                                           | Client request body failed validation                                                              |
| `pathIssues`                                                                                       | array<[\TheLogicStudio\ExactPayments\Models\Shared\PathIssues](../../Models/Shared/PathIssues.md)> | :heavy_minus_sign:                                                                                 | N/A                                                                                                |                                                                                                    |
| `requestId`                                                                                        | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | Request identifier in UUID format.                                                                 | bcc78633-cd09-4e7d-8f3b-d593fdc1439c                                                               |
| `type`                                                                                             | *?string*                                                                                          | :heavy_minus_sign:                                                                                 | Type of the validation error.                                                                      | invalid-request-error                                                                              |