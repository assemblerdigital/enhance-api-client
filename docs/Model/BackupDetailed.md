# # BackupDetailed

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**website_id** | **string** |  |
**started_at** | **\DateTime** |  |
**finished_at** | **\DateTime** |  | [optional]
**snapshot_dir_name** | **string** |  |
**size** | **int** |  | [optional]
**home_dir_status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**files_size** | **int** |  | [optional]
**mysql_dbs_status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**mysql_dbs** | **string[]** |  | [optional]
**mysql_dbs_size** | **int** |  | [optional]
**emails_status** | [**\OpenAPI\Client\Model\OperationStatus**](OperationStatus.md) |  | [optional]
**emails** | **string[]** | The addresses of the backed up mailboxes. | [optional]
**email_domains** | **string[]** | The domain ids of the backed up mailboxes. | [optional]
**emails_size** | **int** |  | [optional]
**kind** | [**\OpenAPI\Client\Model\BackupKind**](BackupKind.md) |  |
**description** | **string** |  | [optional]
**storage_kind** | [**\OpenAPI\Client\Model\BackupStorageKind**](BackupStorageKind.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
