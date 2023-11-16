# OnboardingDocumentRequestResponse


## Fields

| Field                                                                                                                                                                                                                                                                                                                                                                                                                                                      | Type                                                                                                                                                                                                                                                                                                                                                                                                                                                       | Required                                                                                                                                                                                                                                                                                                                                                                                                                                                   | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                | Example                                                                                                                                                                                                                                                                                                                                                                                                                                                    |
| ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `body`                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The content of the email sent.                                                                                                                                                                                                                                                                                                                                                                                                                             | Company: ACME Corp<br/>Hi Jon Doe<br/>Your application status has been updated to the following: Pended. Our Underwriting team has requested additional documentation to process your approval.<br/>Please upload the following documents for reviewing by clicking on the link below.<br/>Upload Documents<br/>Once we received & review the additional documentation, we will have you up and processing your electronic payment in no time.<br/>Stay-tuned for the next update! |
| `createdAt`                                                                                                                                                                                                                                                                                                                                                                                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The date and time when the Document Request was sent.                                                                                                                                                                                                                                                                                                                                                                                                      | 2021-10-01T22:05:18.262Z                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `id`                                                                                                                                                                                                                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The Document Request identifier.                                                                                                                                                                                                                                                                                                                                                                                                                           | 64c9983041f25a1ae3511d14                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `onboarding`                                                                                                                                                                                                                                                                                                                                                                                                                                               | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The Onboarding Application identifier for which the Document Request was sent.                                                                                                                                                                                                                                                                                                                                                                             | 6154ce01387b94001cd87ada                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `subject`                                                                                                                                                                                                                                                                                                                                                                                                                                                  | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The subject of the email sent.                                                                                                                                                                                                                                                                                                                                                                                                                             | Application Status Update Pending Documentation                                                                                                                                                                                                                                                                                                                                                                                                            |
| `type`                                                                                                                                                                                                                                                                                                                                                                                                                                                     | [?\TheLogicStudio\ExactPayments\Models\Shared\OnboardingDocumentRequestResponseType](../../Models/Shared/OnboardingDocumentRequestResponseType.md)                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The Template used for the Document Request.                                                                                                                                                                                                                                                                                                                                                                                                                | onboarding-document-request                                                                                                                                                                                                                                                                                                                                                                                                                                |
| `updatedAt`                                                                                                                                                                                                                                                                                                                                                                                                                                                | [\DateTime](https://www.php.net/manual/en/class.datetime.php)                                                                                                                                                                                                                                                                                                                                                                                              | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The date and time when the Document Request was last updated.                                                                                                                                                                                                                                                                                                                                                                                              | 2021-10-01T22:05:18.262Z                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| `user`                                                                                                                                                                                                                                                                                                                                                                                                                                                     | *?string*                                                                                                                                                                                                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                                                                                                                                         | The User identifier who created the Document Request.                                                                                                                                                                                                                                                                                                                                                                                                      | 615498b8efd963001c6c9d62                                                                                                                                                                                                                                                                                                                                                                                                                                   |