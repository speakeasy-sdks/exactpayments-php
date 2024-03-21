# Error422


## Fields

| Field                                | Type                                 | Required                             | Description                          | Example                              |
| ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ | ------------------------------------ |
| `code`                               | *?string*                            | :heavy_minus_sign:                   | Code of the custom error.            | payments-validation-error            |
| `message`                            | *?string*                            | :heavy_minus_sign:                   | Message explaining the custom error. | Payments validation error            |
| `requestId`                          | *?string*                            | :heavy_minus_sign:                   | Request identifier in UUID format.   | bcc78633-cd09-4e7d-8f3b-d593fdc1439c |
| `type`                               | *?string*                            | :heavy_minus_sign:                   | It is shows as a custom error.       | invalid-request-error                |