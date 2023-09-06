# OnboardingDocumentUploadTokenRequest


## Fields

| Field                                                                                                                                                                                                                                                                             | Type                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `files`                                                                                                                                                                                                                                                                           | [OnboardingDocumentUploadTokenRequestFiles](../../models/shared/OnboardingDocumentUploadTokenRequestFiles.md)                                                                                                                                                                     | :heavy_check_mark:                                                                                                                                                                                                                                                                | The binary data of the Document being uploaded. The following file types are supported `bmp`,`csv`,`doc`,`docx`,`jpg`,`pdf`,`png`,`rtf`,`txt`,`xls` and `xlsx`. An HTTP `500 Internal Server Error` code with a JSON response will be returned when the Document is not uploaded. |                                                                                                                                                                                                                                                                                   |
| `name`                                                                                                                                                                                                                                                                            | *string*                                                                                                                                                                                                                                                                          | :heavy_check_mark:                                                                                                                                                                                                                                                                | The Name of the Document being uploaded.                                                                                                                                                                                                                                          | Business document                                                                                                                                                                                                                                                                 |
| `principal`                                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                | The unique identifier of the Principal you are uploading the Document for. This field is required if you upload the Document to one of the Principals added in the Onboarding Application.                                                                                        | 64ca7b2e4ab69839f78db609                                                                                                                                                                                                                                                          |
| `type`                                                                                                                                                                                                                                                                            | [DocumentUploadType](../../models/shared/DocumentUploadType.md)                                                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                                                                | The Type of the Document being uploaded.                                                                                                                                                                                                                                          | drivers-license                                                                                                                                                                                                                                                                   |