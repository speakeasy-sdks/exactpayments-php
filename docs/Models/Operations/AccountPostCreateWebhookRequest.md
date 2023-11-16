# AccountPostCreateWebhookRequest


## Fields

| Field                                                                                               | Type                                                                                                | Required                                                                                            | Description                                                                                         |
| --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| `webhookRequest`                                                                                    | [\TheLogicStudio\ExactPayments\Models\Shared\WebhookRequest](../../Models/Shared/WebhookRequest.md) | :heavy_check_mark:                                                                                  | Fields that compose a webhook definition inside Exact Payments ecosystem.                           |
| `accountId`                                                                                         | *string*                                                                                            | :heavy_check_mark:                                                                                  | The Account identifier. Represents the Merchant that this operation is going to be executed for.    |