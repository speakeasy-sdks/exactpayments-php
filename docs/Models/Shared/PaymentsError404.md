# PaymentsError404


## Fields

| Field                                                                                                                  | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            | Example                                                                                                                |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `code`                                                                                                                 | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Code of the api error.                                                                                                 | payments-not-found-error                                                                                               |
| `message`                                                                                                              | [?\TheLogicStudio\ExactPayments\Models\Shared\PaymentsError404Message](../../Models/Shared/PaymentsError404Message.md) | :heavy_minus_sign:                                                                                                     | Message explaining the error.                                                                                          | No account found.                                                                                                      |
| `requestId`                                                                                                            | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Request identifier in UUID format.                                                                                     | bcc78633-cd09-4e7d-8f3b-d593fdc1439c                                                                                   |
| `type`                                                                                                                 | *?string*                                                                                                              | :heavy_minus_sign:                                                                                                     | Type of the error.                                                                                                     | resource-not-found-error                                                                                               |