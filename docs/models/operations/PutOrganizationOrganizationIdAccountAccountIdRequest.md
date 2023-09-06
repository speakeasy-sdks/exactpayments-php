# PutOrganizationOrganizationIdAccountAccountIdRequest


## Fields

| Field                                                                                               | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `accountRequest`                                                                                    | [\TheLogicStudio\ExactPayments\Models\Shared\AccountRequest](../../models/shared/AccountRequest.md) | :heavy_check_mark:                                                                                  | Fields that are required in the request body.                                                       |
| `accountId`                                                                                         | *string*                                                                                            | :heavy_check_mark:                                                                                  | The Account identifier. Represents the Merchant that this operation is going to be executed for.    |
| `organizationId`                                                                                    | *string*                                                                                            | :heavy_check_mark:                                                                                  | The Organization identifier.                                                                        |