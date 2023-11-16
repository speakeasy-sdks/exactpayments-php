# CreateUserTokenResponse


## Fields

| Field                                                                                                                                                                                                                                                                      | Type                                                                                                                                                                                                                                                                       | Required                                                                                                                                                                                                                                                                   | Description                                                                                                                                                                                                                                                                |
| -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `badRequestZodError`                                                                                                                                                                                                                                                       | [?\TheLogicStudio\ExactPayments\Models\Shared\BadRequestZodError](../../Models/Shared/BadRequestZodError.md)                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Bad Request**\<br/>\<br/>The request body contains a malformed request or is incomplete.<br/>                                                                                                                                                                            |
| `contentType`                                                                                                                                                                                                                                                              | *string*                                                                                                                                                                                                                                                                   | :heavy_check_mark:                                                                                                                                                                                                                                                         | HTTP response content type for this operation                                                                                                                                                                                                                              |
| `forbidden`                                                                                                                                                                                                                                                                | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Forbidden**\<br/>\<br/>When you'll get `403 Forbidden` response:<br/>- The User's password expired.<br/>                                                                                                                                                                 |
| `internalServerError`                                                                                                                                                                                                                                                      | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Internal Server Error**<br/>                                                                                                                                                                                                                                             |
| `locked`                                                                                                                                                                                                                                                                   | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Locked**\<br/>\<br/>When you'll get `423 Locked` response:<br/>- User Credentials are locked due to more than five consecutive failed login attempts.<br/>- A Manager User has locked the User.                                                                          |
| `notFound`                                                                                                                                                                                                                                                                 | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Not Found**\<br/>\<br/>When you'll get `404 Not Found` response:<br/>- The provided Application doesn't exist.<br/>- User Credential doesn't exist.<br/>- The User Role doesn't exist.<br/>- The User's Organization or Account doesn't exist.<br/>- The User Invitation has not been accepted yet.<br/> |
| `statusCode`                                                                                                                                                                                                                                                               | *int*                                                                                                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                                                                                         | HTTP response status code for this operation                                                                                                                                                                                                                               |
| `rawResponse`                                                                                                                                                                                                                                                              | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)                                                                                                                                                               | :heavy_check_mark:                                                                                                                                                                                                                                                         | Raw HTTP response; suitable for custom response parsing                                                                                                                                                                                                                    |
| `serviceUnavailable`                                                                                                                                                                                                                                                       | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Service Unavailable**<br/>                                                                                                                                                                                                                                               |
| `unauthorized`                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                  | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Unauthorized**\<br/>\<br/>When you'll get `401 Unauthorized` response:<br/>- The Organization or Account the User belongs to is disabled.<br/>- Invalid User Credentials are supplied.<br/>                                                                              |
| `userToken`                                                                                                                                                                                                                                                                | [?\TheLogicStudio\ExactPayments\Models\Shared\UserToken](../../Models/Shared/UserToken.md)                                                                                                                                                                                 | :heavy_minus_sign:                                                                                                                                                                                                                                                         | **Created**<br/>                                                                                                                                                                                                                                                           |