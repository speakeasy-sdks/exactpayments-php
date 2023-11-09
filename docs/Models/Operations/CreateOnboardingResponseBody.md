# CreateOnboardingResponseBody

**Not Found**\
\
When you'll get `404 Not Found` response:
- The default Workflow doesn't exist.
- The system token associated to the Workflow doesn't exist.
- The Organization doesn't exist.



## Fields

| Field                                                                                                                          | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    | Example                                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `message`                                                                                                                      | [?\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingMessage](../../Models/Operations/CreateOnboardingMessage.md) | :heavy_minus_sign:                                                                                                             | Error Message.                                                                                                                 | Onboarding Workflow Not Found                                                                                                  |
| `type`                                                                                                                         | [?\TheLogicStudio\ExactPayments\Models\Operations\CreateOnboardingType](../../Models/Operations/CreateOnboardingType.md)       | :heavy_minus_sign:                                                                                                             | Format Type.                                                                                                                   | not-found                                                                                                                      |