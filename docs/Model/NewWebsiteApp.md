# # NewWebsiteApp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app** | [**\OpenAPI\Client\Model\WebsiteAppKind**](WebsiteAppKind.md) |  |
**version** | **string** |  | [optional]
**path** | **string** |  | [optional]
**admin_username** | **string** | This username is going to be the username of the initial WP user with which the user can login to the WP admin. This is equivalent to going to &#x60;wp-admin/install.php&#x60; and performing the install from there. |
**admin_password** | **string** | Complements the admin username. Provide unhashed password. |
**admin_email** | **string** | Sets the admin email address, required by some applications. |
**domain_id** | **string** | Install on a specific domain within this website.  Will default to use the primary domain. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
