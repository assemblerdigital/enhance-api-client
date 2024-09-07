# # NewPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**resources** | [**\OpenAPI\Client\Model\Resource[]**](Resource.md) |  |
**allowances** | [**\OpenAPI\Client\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\OpenAPI\Client\Model\Selection[]**](Selection.md) |  |
**server_group_id** | **string** |  | [optional]
**server_group_ids** | **string[]** |  | [optional]
**allow_server_group_selection** | **bool** |  | [optional]
**plan_type** | [**\OpenAPI\Client\Model\PlanType**](PlanType.md) |  | [optional]
**cgroup_limits** | [**\OpenAPI\Client\Model\CgroupLimits**](CgroupLimits.md) |  | [optional]
**fs_quota_limit** | [**\OpenAPI\Client\Model\FsQuotaLimit**](FsQuotaLimit.md) |  | [optional]
**allowed_php_versions** | [**\OpenAPI\Client\Model\PhpVersion[]**](PhpVersion.md) |  | [optional]
**default_php_version** | [**\OpenAPI\Client\Model\PhpVersion**](PhpVersion.md) |  | [optional]
**redis_allowed** | **bool** |  | [optional]
**default_server_group_id** | **string** | If set, servers from this server group are prioritized by placement algorithm. If no server from the default server group is available, servers from other server groups are tried. The defaultServerGroupId will be automatically added to serverGroupIds if they do not contain it or are not provided. | [optional]
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
