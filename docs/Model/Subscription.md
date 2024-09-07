# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**plan_id** | **int** |  |
**plan_name** | **string** |  |
**subscriber_id** | **string** |  |
**vendor_id** | **string** |  |
**status** | [**\OpenAPI\Client\Model\Status**](Status.md) |  |
**suspended_by** | **string** |  | [optional]
**resources** | [**\OpenAPI\Client\Model\UsedResource[]**](UsedResource.md) | A list of used resources. |
**allowances** | [**\OpenAPI\Client\Model\Allowance[]**](Allowance.md) |  |
**selections** | [**\OpenAPI\Client\Model\Selection[]**](Selection.md) |  |
**dedicated_servers** | [**\OpenAPI\Client\Model\SubscriptionDedicatedServersInfo**](SubscriptionDedicatedServersInfo.md) |  | [optional]
**plan_type** | [**\OpenAPI\Client\Model\PlanType**](PlanType.md) |  |
**allowed_php_versions** | [**\OpenAPI\Client\Model\PhpVersion[]**](PhpVersion.md) |  |
**default_php_version** | [**\OpenAPI\Client\Model\PhpVersion**](PhpVersion.md) |  |
**redis_allowed** | **bool** |  |
**server_groups** | [**\OpenAPI\Client\Model\ServerGroup[]**](ServerGroup.md) | If this field is present, the customer is allowed to chose from the server groups listed here when creating a website. | [optional]
**preinstall_wordpress_theme** | **string** | :&gt; When WordPress is installed on a website under this plan, the chosen theme will be preinstalled. | [optional]
**friendly_name** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
