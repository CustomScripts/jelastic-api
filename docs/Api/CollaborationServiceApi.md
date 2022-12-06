# OpenAPI\Client\CollaborationServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersCollaborationRestAcceptcollaborationPost()**](CollaborationServiceApi.md#usersCollaborationRestAcceptcollaborationPost) | **POST** /users/collaboration/rest/acceptcollaboration |  |
| [**usersCollaborationRestActivatememberPost()**](CollaborationServiceApi.md#usersCollaborationRestActivatememberPost) | **POST** /users/collaboration/rest/activatemember |  |
| [**usersCollaborationRestAddpolicyPost()**](CollaborationServiceApi.md#usersCollaborationRestAddpolicyPost) | **POST** /users/collaboration/rest/addpolicy |  |
| [**usersCollaborationRestAddresourcesPost()**](CollaborationServiceApi.md#usersCollaborationRestAddresourcesPost) | **POST** /users/collaboration/rest/addresources |  |
| [**usersCollaborationRestAddrolePost()**](CollaborationServiceApi.md#usersCollaborationRestAddrolePost) | **POST** /users/collaboration/rest/addrole |  |
| [**usersCollaborationRestCheckenvironmentrightsPost()**](CollaborationServiceApi.md#usersCollaborationRestCheckenvironmentrightsPost) | **POST** /users/collaboration/rest/checkenvironmentrights |  |
| [**usersCollaborationRestDeletememberPost()**](CollaborationServiceApi.md#usersCollaborationRestDeletememberPost) | **POST** /users/collaboration/rest/deletemember |  |
| [**usersCollaborationRestDeletepolicyPost()**](CollaborationServiceApi.md#usersCollaborationRestDeletepolicyPost) | **POST** /users/collaboration/rest/deletepolicy |  |
| [**usersCollaborationRestDeleteresourcesPost()**](CollaborationServiceApi.md#usersCollaborationRestDeleteresourcesPost) | **POST** /users/collaboration/rest/deleteresources |  |
| [**usersCollaborationRestDeleterolePost()**](CollaborationServiceApi.md#usersCollaborationRestDeleterolePost) | **POST** /users/collaboration/rest/deleterole |  |
| [**usersCollaborationRestEditcollaborationPost()**](CollaborationServiceApi.md#usersCollaborationRestEditcollaborationPost) | **POST** /users/collaboration/rest/editcollaboration |  |
| [**usersCollaborationRestEditmemberPost()**](CollaborationServiceApi.md#usersCollaborationRestEditmemberPost) | **POST** /users/collaboration/rest/editmember |  |
| [**usersCollaborationRestEditpolicyPost()**](CollaborationServiceApi.md#usersCollaborationRestEditpolicyPost) | **POST** /users/collaboration/rest/editpolicy |  |
| [**usersCollaborationRestEditrolePost()**](CollaborationServiceApi.md#usersCollaborationRestEditrolePost) | **POST** /users/collaboration/rest/editrole |  |
| [**usersCollaborationRestGetcollaborationresourcemethodsPost()**](CollaborationServiceApi.md#usersCollaborationRestGetcollaborationresourcemethodsPost) | **POST** /users/collaboration/rest/getcollaborationresourcemethods |  |
| [**usersCollaborationRestGetcollaborationresourcesPost()**](CollaborationServiceApi.md#usersCollaborationRestGetcollaborationresourcesPost) | **POST** /users/collaboration/rest/getcollaborationresources |  |
| [**usersCollaborationRestGetcollaborationrolemethodsPost()**](CollaborationServiceApi.md#usersCollaborationRestGetcollaborationrolemethodsPost) | **POST** /users/collaboration/rest/getcollaborationrolemethods |  |
| [**usersCollaborationRestGetcollaborationsPost()**](CollaborationServiceApi.md#usersCollaborationRestGetcollaborationsPost) | **POST** /users/collaboration/rest/getcollaborations |  |
| [**usersCollaborationRestGetmemberresourcesPost()**](CollaborationServiceApi.md#usersCollaborationRestGetmemberresourcesPost) | **POST** /users/collaboration/rest/getmemberresources |  |
| [**usersCollaborationRestGetmembersPost()**](CollaborationServiceApi.md#usersCollaborationRestGetmembersPost) | **POST** /users/collaboration/rest/getmembers |  |
| [**usersCollaborationRestGetpoliciesPost()**](CollaborationServiceApi.md#usersCollaborationRestGetpoliciesPost) | **POST** /users/collaboration/rest/getpolicies |  |
| [**usersCollaborationRestGetpolicymethodsPost()**](CollaborationServiceApi.md#usersCollaborationRestGetpolicymethodsPost) | **POST** /users/collaboration/rest/getpolicymethods |  |
| [**usersCollaborationRestGetresourcerolesPost()**](CollaborationServiceApi.md#usersCollaborationRestGetresourcerolesPost) | **POST** /users/collaboration/rest/getresourceroles |  |
| [**usersCollaborationRestGetrolesPost()**](CollaborationServiceApi.md#usersCollaborationRestGetrolesPost) | **POST** /users/collaboration/rest/getroles |  |
| [**usersCollaborationRestInvitememberPost()**](CollaborationServiceApi.md#usersCollaborationRestInvitememberPost) | **POST** /users/collaboration/rest/invitemember |  |
| [**usersCollaborationRestLeavecollaborationPost()**](CollaborationServiceApi.md#usersCollaborationRestLeavecollaborationPost) | **POST** /users/collaboration/rest/leavecollaboration |  |
| [**usersCollaborationRestRejectcollaborationPost()**](CollaborationServiceApi.md#usersCollaborationRestRejectcollaborationPost) | **POST** /users/collaboration/rest/rejectcollaboration |  |
| [**usersCollaborationRestResendmemberinvitationPost()**](CollaborationServiceApi.md#usersCollaborationRestResendmemberinvitationPost) | **POST** /users/collaboration/rest/resendmemberinvitation |  |
| [**usersCollaborationRestSetresourcePost()**](CollaborationServiceApi.md#usersCollaborationRestSetresourcePost) | **POST** /users/collaboration/rest/setresource |  |
| [**usersCollaborationRestSetresourcesPost()**](CollaborationServiceApi.md#usersCollaborationRestSetresourcesPost) | **POST** /users/collaboration/rest/setresources |  |
| [**usersCollaborationRestSuspendmemberPost()**](CollaborationServiceApi.md#usersCollaborationRestSuspendmemberPost) | **POST** /users/collaboration/rest/suspendmember |  |


## `usersCollaborationRestAcceptcollaborationPost()`

```php
usersCollaborationRestAcceptcollaborationPost($id): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestAcceptcollaborationPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestAcceptcollaborationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse**](../Model/ComHivextApiServerUsersResponseCollaborationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestActivatememberPost()`

```php
usersCollaborationRestActivatememberPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestActivatememberPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestActivatememberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestAddpolicyPost()`

```php
usersCollaborationRestAddpolicyPost($methods, $name, $description): \OpenAPI\Client\Model\ComHivextApiServerUsersResponsePolicyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$methods = 'methods_example'; // string
$name = 'name_example'; // string
$description = 'description_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestAddpolicyPost($methods, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestAddpolicyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **methods** | **string**|  | |
| **name** | **string**|  | |
| **description** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponsePolicyResponse**](../Model/ComHivextApiServerUsersResponsePolicyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestAddresourcesPost()`

```php
usersCollaborationRestAddresourcesPost($resources, $collaborationId): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resources = 'resources_example'; // string
$collaborationId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestAddresourcesPost($resources, $collaborationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestAddresourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resources** | **string**|  | |
| **collaborationId** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestAddrolePost()`

```php
usersCollaborationRestAddrolePost($receiveNotification, $name, $policies, $description): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$receiveNotification = True; // bool
$name = 'name_example'; // string
$policies = 'policies_example'; // string
$description = 'description_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestAddrolePost($receiveNotification, $name, $policies, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestAddrolePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **receiveNotification** | **bool**|  | |
| **name** | **string**|  | |
| **policies** | **string**|  | |
| **description** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRoleResponse**](../Model/ComHivextApiServerUsersResponseCollaborationRoleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestCheckenvironmentrightsPost()`

```php
usersCollaborationRestCheckenvironmentrightsPost($serviceMethod, $isAny): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$serviceMethod = 'serviceMethod_example'; // string
$isAny = True; // bool

try {
    $result = $apiInstance->usersCollaborationRestCheckenvironmentrightsPost($serviceMethod, $isAny);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestCheckenvironmentrightsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **serviceMethod** | **string**|  | |
| **isAny** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestDeletememberPost()`

```php
usersCollaborationRestDeletememberPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestDeletememberPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestDeletememberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestDeletepolicyPost()`

```php
usersCollaborationRestDeletepolicyPost($id): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestDeletepolicyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestDeletepolicyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestDeleteresourcesPost()`

```php
usersCollaborationRestDeleteresourcesPost($ids, $collaborationId): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array(new \stdClass); // object[]
$collaborationId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestDeleteresourcesPost($ids, $collaborationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestDeleteresourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | [**object[]**](../Model/object.md)|  | |
| **collaborationId** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestDeleterolePost()`

```php
usersCollaborationRestDeleterolePost($id): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestDeleterolePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestDeleterolePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestEditcollaborationPost()`

```php
usersCollaborationRestEditcollaborationPost($id, $displayName): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$displayName = 'displayName_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestEditcollaborationPost($id, $displayName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestEditcollaborationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **displayName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse**](../Model/ComHivextApiServerUsersResponseCollaborationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestEditmemberPost()`

```php
usersCollaborationRestEditmemberPost($id, $displayName, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$displayName = 'displayName_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestEditmemberPost($id, $displayName, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestEditmemberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **displayName** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse**](../Model/ComHivextApiServerUsersResponseCollaborationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestEditpolicyPost()`

```php
usersCollaborationRestEditpolicyPost($methods, $id, $name, $description): \OpenAPI\Client\Model\ComHivextApiServerUsersResponsePolicyResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$methods = 'methods_example'; // string
$id = 56; // int
$name = 'name_example'; // string
$description = 'description_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestEditpolicyPost($methods, $id, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestEditpolicyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **methods** | **string**|  | |
| **id** | **int**|  | |
| **name** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponsePolicyResponse**](../Model/ComHivextApiServerUsersResponsePolicyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestEditrolePost()`

```php
usersCollaborationRestEditrolePost($policies, $id, $receiveNotification, $name, $description): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRoleResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$policies = 'policies_example'; // string
$id = 56; // int
$receiveNotification = True; // bool
$name = 'name_example'; // string
$description = 'description_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestEditrolePost($policies, $id, $receiveNotification, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestEditrolePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **policies** | **string**|  | |
| **id** | **int**|  | |
| **receiveNotification** | **bool**|  | [optional] |
| **name** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRoleResponse**](../Model/ComHivextApiServerUsersResponseCollaborationRoleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetcollaborationresourcemethodsPost()`

```php
usersCollaborationRestGetcollaborationresourcemethodsPost($resourceId, $resourceType): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseStringArrayResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resourceId = 'resourceId_example'; // string
$resourceType = 'resourceType_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestGetcollaborationresourcemethodsPost($resourceId, $resourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetcollaborationresourcemethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resourceId** | **string**|  | |
| **resourceType** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseStringArrayResponse**](../Model/ComHivextApiServerUsersResponseStringArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetcollaborationresourcesPost()`

```php
usersCollaborationRestGetcollaborationresourcesPost($type, $collaborationId): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$collaborationId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetcollaborationresourcesPost($type, $collaborationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetcollaborationresourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | [optional] |
| **collaborationId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetcollaborationrolemethodsPost()`

```php
usersCollaborationRestGetcollaborationrolemethodsPost($roleId, $collaborationId): \OpenAPI\Client\Model\ComHivextApiServerListResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$roleId = 56; // int
$collaborationId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetcollaborationrolemethodsPost($roleId, $collaborationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetcollaborationrolemethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **roleId** | **int**|  | [optional] |
| **collaborationId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerListResponse**](../Model/ComHivextApiServerListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetcollaborationsPost()`

```php
usersCollaborationRestGetcollaborationsPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetcollaborationsPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetcollaborationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationsResponse**](../Model/ComHivextApiServerUsersResponseCollaborationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetmemberresourcesPost()`

```php
usersCollaborationRestGetmemberresourcesPost($memberId): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$memberId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetmemberresourcesPost($memberId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetmemberresourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **memberId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetmembersPost()`

```php
usersCollaborationRestGetmembersPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetmembersPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetmembersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationsResponse**](../Model/ComHivextApiServerUsersResponseCollaborationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetpoliciesPost()`

```php
usersCollaborationRestGetpoliciesPost($id): \OpenAPI\Client\Model\ComHivextApiServerUsersResponsePoliciesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetpoliciesPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetpoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponsePoliciesResponse**](../Model/ComHivextApiServerUsersResponsePoliciesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetpolicymethodsPost()`

```php
usersCollaborationRestGetpolicymethodsPost($policyId): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$policyId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetpolicymethodsPost($policyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetpolicymethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **policyId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse**](../Model/ComHivextApiServerUsersResponseApiTokenPermissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetresourcerolesPost()`

```php
usersCollaborationRestGetresourcerolesPost($resourceId, $ownerUid, $resourceType): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resourceId = 'resourceId_example'; // string
$ownerUid = 56; // int
$resourceType = 'resourceType_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestGetresourcerolesPost($resourceId, $ownerUid, $resourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetresourcerolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resourceId** | **string**|  | |
| **ownerUid** | **int**|  | [optional] |
| **resourceType** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestGetrolesPost()`

```php
usersCollaborationRestGetrolesPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRolesResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestGetrolesPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestGetrolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationRolesResponse**](../Model/ComHivextApiServerUsersResponseCollaborationRolesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestInvitememberPost()`

```php
usersCollaborationRestInvitememberPost($email, $displayName, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string
$displayName = 'displayName_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestInvitememberPost($email, $displayName, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestInvitememberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **displayName** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResponse**](../Model/ComHivextApiServerUsersResponseCollaborationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestLeavecollaborationPost()`

```php
usersCollaborationRestLeavecollaborationPost($id): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestLeavecollaborationPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestLeavecollaborationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestRejectcollaborationPost()`

```php
usersCollaborationRestRejectcollaborationPost($id): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestRejectcollaborationPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestRejectcollaborationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestResendmemberinvitationPost()`

```php
usersCollaborationRestResendmemberinvitationPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestResendmemberinvitationPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestResendmemberinvitationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestSetresourcePost()`

```php
usersCollaborationRestSetresourcePost($resourceId, $roleIds, $collaborationId, $ownerUid, $resourceType): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resourceId = 'resourceId_example'; // string
$roleIds = 'roleIds_example'; // string
$collaborationId = 56; // int
$ownerUid = 56; // int
$resourceType = 'resourceType_example'; // string

try {
    $result = $apiInstance->usersCollaborationRestSetresourcePost($resourceId, $roleIds, $collaborationId, $ownerUid, $resourceType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestSetresourcePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resourceId** | **string**|  | |
| **roleIds** | **string**|  | |
| **collaborationId** | **int**|  | |
| **ownerUid** | **int**|  | [optional] |
| **resourceType** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponse**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestSetresourcesPost()`

```php
usersCollaborationRestSetresourcesPost($resources, $collaborationId): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resources = 'resources_example'; // string
$collaborationId = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestSetresourcesPost($resources, $collaborationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestSetresourcesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resources** | **string**|  | |
| **collaborationId** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseCollaborationResourceResponses**](../Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersCollaborationRestSuspendmemberPost()`

```php
usersCollaborationRestSuspendmemberPost($id, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CollaborationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$ownerUid = 56; // int

try {
    $result = $apiInstance->usersCollaborationRestSuspendmemberPost($id, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaborationServiceApi->usersCollaborationRestSuspendmemberPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiResponse**](../Model/ComHivextApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
