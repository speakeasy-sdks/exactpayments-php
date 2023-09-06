# GetReportRequest


## Fields

| Field                                                          | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `format`                                                       | [?GetReportFormat](../../models/operations/GetReportFormat.md) | :heavy_minus_sign:                                             | The format of the file that will be downloaded.                |
| `reportId`                                                     | *string*                                                       | :heavy_check_mark:                                             | The ID of the report query                                     |
| `select`                                                       | *?string*                                                      | :heavy_minus_sign:                                             | The fields that will be returned in the report.                |