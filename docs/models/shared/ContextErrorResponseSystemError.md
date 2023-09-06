# ContextErrorResponseSystemError

This error object will be returned only in some situations when an Internal Server Error is returned.


## Fields

| Field              | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `message`          | *?string*          | :heavy_minus_sign: | Error Message.     | Cast Error         |
| `type`             | *?string*          | :heavy_minus_sign: | Error code.        | system-error       |