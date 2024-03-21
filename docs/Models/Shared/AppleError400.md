# AppleError400


## Fields

| Field                                                                                      | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `issues`                                                                                   | array<[\TheLogicStudio\ExactPayments\Models\Shared\Issues](../../Models/Shared/Issues.md)> | :heavy_minus_sign:                                                                         | N/A                                                                                        |
| `name`                                                                                     | *?string*                                                                                  | :heavy_minus_sign:                                                                         | The error type. It has a fixed value of `ZodError` for `400 Bad Request`.                  |