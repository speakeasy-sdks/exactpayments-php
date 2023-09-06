# UploadDocumentByTokenRequest


## Fields

| Field                                                                                                                                                                               | Type                                                                                                                                                                                | Required                                                                                                                                                                            | Description                                                                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `onboardingDocumentUploadTokenRequest`                                                                                                                                              | [?\TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentUploadTokenRequest](../../models/shared/OnboardingDocumentUploadTokenRequest.md)                                    | :heavy_minus_sign:                                                                                                                                                                  | N/A                                                                                                                                                                                 |
| `token`                                                                                                                                                                             | *string*                                                                                                                                                                            | :heavy_check_mark:                                                                                                                                                                  | The Onboarding Token returned in [Create Onboarding](/operations/createOnboarding) response. This token is valid only for 10 mintues after the Onboarding Application is submitted. |