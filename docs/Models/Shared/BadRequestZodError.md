# BadRequestZodError


## Fields

| Field                                                                                          | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `issues`                                                                                       | array<[\TheLogicStudio\ExactPayments\Models\Shared\ZodError](../../Models/Shared/ZodError.md)> | :heavy_minus_sign:                                                                             | List of documented issues that occurred during validation.                                     |
| `name`                                                                                         | *?string*                                                                                      | :heavy_minus_sign:                                                                             | The error type. It has a fixed value of `ZodError` for `400 Bad Request`.                      |