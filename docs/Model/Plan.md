# # Plan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**name** | **string** |  |
**org_id** | **string** |  |
**resources** | [**\OpenAPI\Client\Model\Resource[]**](Resource.md) |  |
**allowances** | [**\OpenAPI\Client\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\OpenAPI\Client\Model\Selection[]**](Selection.md) |  |
**subscriptions_count** | **int** | The number of subscriptions to this plan. |
**server_group_id** | **string** | Use serverGroupIds instead | [optional]
**server_group_ids** | **string[]** |  | [optional]
**allow_server_group_selection** | **bool** | Whether the customer can select the server group for their websites. | [optional]
**created_at** | **string** |  |
**plan_type** | [**\OpenAPI\Client\Model\PlanType**](PlanType.md) |  |
**cgroup_limits** | [**\OpenAPI\Client\Model\CgroupLimits**](CgroupLimits.md) |  | [optional]
**fs_quota_limit** | [**\OpenAPI\Client\Model\FsQuotaLimit**](FsQuotaLimit.md) |  | [optional]
**allowed_php_versions** | [**\OpenAPI\Client\Model\PhpVersion[]**](PhpVersion.md) |  |
**default_php_version** | [**\OpenAPI\Client\Model\PhpVersion**](PhpVersion.md) |  |
**redis_allowed** | **bool** |  |
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
