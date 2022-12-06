# OpenAPI\Client\GroupServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentGroupRestAttachenvPost()**](GroupServiceApi.md#environmentGroupRestAttachenvPost) | **POST** /environment/group/rest/attachenv |  |
| [**environmentGroupRestCreategroupPost()**](GroupServiceApi.md#environmentGroupRestCreategroupPost) | **POST** /environment/group/rest/creategroup |  |
| [**environmentGroupRestDetachenvPost()**](GroupServiceApi.md#environmentGroupRestDetachenvPost) | **POST** /environment/group/rest/detachenv |  |
| [**environmentGroupRestEditgroupPost()**](GroupServiceApi.md#environmentGroupRestEditgroupPost) | **POST** /environment/group/rest/editgroup |  |
| [**environmentGroupRestGetgroupsPost()**](GroupServiceApi.md#environmentGroupRestGetgroupsPost) | **POST** /environment/group/rest/getgroups |  |
| [**environmentGroupRestRemovegroupPost()**](GroupServiceApi.md#environmentGroupRestRemovegroupPost) | **POST** /environment/group/rest/removegroup |  |
| [**environmentGroupRestSetenvPost()**](GroupServiceApi.md#environmentGroupRestSetenvPost) | **POST** /environment/group/rest/setenv |  |
| [**environmentGroupRestSetisolationenabledPost()**](GroupServiceApi.md#environmentGroupRestSetisolationenabledPost) | **POST** /environment/group/rest/setisolationenabled |  |


## `environmentGroupRestAttachenvPost()`

```php
environmentGroupRestAttachenvPost($envGroup, $envName, $targetAppid, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Attach env to group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envGroup = 'envGroup_example'; // string
$envName = 'envName_example'; // string
$targetAppid = 'targetAppid_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestAttachenvPost($envGroup, $envName, $targetAppid, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestAttachenvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envGroup** | **string**|  | |
| **envName** | **string**|  | [optional] |
| **targetAppid** | **string**|  | [optional] |
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

## `environmentGroupRestCreategroupPost()`

```php
environmentGroupRestCreategroupPost($data, $envName, $envGroup, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Create group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = new \OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData(); // \OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData
$envName = 'envName_example'; // string
$envGroup = 'envGroup_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestCreategroupPost($data, $envName, $envGroup, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestCreategroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData**](../Model/EnvironmentGroupRestEditgroupPostRequestData.md)|  | [optional] |
| **envName** | **string**|  | [optional] |
| **envGroup** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse**](../Model/ComHivextApiServerDevelopmentResponseInterfacesArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentGroupRestDetachenvPost()`

```php
environmentGroupRestDetachenvPost($envGroup, $envName, $targetAppid, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Detach env from group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envGroup = 'envGroup_example'; // string
$envName = 'envName_example'; // string
$targetAppid = 'targetAppid_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestDetachenvPost($envGroup, $envName, $targetAppid, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestDetachenvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envGroup** | **string**|  | |
| **envName** | **string**|  | [optional] |
| **targetAppid** | **string**|  | [optional] |
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

## `environmentGroupRestEditgroupPost()`

```php
environmentGroupRestEditgroupPost($srcGroupName, $data, $envName, $dstGroupName, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Edit groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$srcGroupName = 'srcGroupName_example'; // string
$data = new \OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData(); // \OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData
$envName = 'envName_example'; // string
$dstGroupName = 'dstGroupName_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestEditgroupPost($srcGroupName, $data, $envName, $dstGroupName, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestEditgroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **srcGroupName** | **string**|  | |
| **data** | [**\OpenAPI\Client\Model\EnvironmentGroupRestEditgroupPostRequestData**](../Model/EnvironmentGroupRestEditgroupPostRequestData.md)|  | [optional] |
| **envName** | **string**|  | [optional] |
| **dstGroupName** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse**](../Model/ComHivextApiServerDevelopmentResponseInterfacesArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentGroupRestGetgroupsPost()`

```php
environmentGroupRestGetgroupsPost($envName, $targetAppid, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Get group list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$targetAppid = 'targetAppid_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestGetgroupsPost($envName, $targetAppid, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestGetgroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | [optional] |
| **targetAppid** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse**](../Model/ComHivextApiServerDevelopmentResponseInterfacesArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentGroupRestRemovegroupPost()`

```php
environmentGroupRestRemovegroupPost($envGroup, $envName, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Remove groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envGroup = 'envGroup_example'; // string
$envName = 'envName_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestRemovegroupPost($envGroup, $envName, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestRemovegroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envGroup** | **string**|  | |
| **envName** | **string**|  | [optional] |
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

## `environmentGroupRestSetenvPost()`

```php
environmentGroupRestSetenvPost($envGroup, $envName, $targetAppid): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Set env to group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envGroup = 'envGroup_example'; // string
$envName = 'envName_example'; // string
$targetAppid = 'targetAppid_example'; // string

try {
    $result = $apiInstance->environmentGroupRestSetenvPost($envGroup, $envName, $targetAppid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestSetenvPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envGroup** | **string**|  | |
| **envName** | **string**|  | [optional] |
| **targetAppid** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse**](../Model/ComHivextApiServerDevelopmentResponseInterfacesArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentGroupRestSetisolationenabledPost()`

```php
environmentGroupRestSetisolationenabledPost($groupName, $enabled, $envName, $ownerUid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enabled or disable isolation for specified environment group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\GroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupName = 'groupName_example'; // string
$enabled = True; // bool
$envName = 'envName_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->environmentGroupRestSetisolationenabledPost($groupName, $enabled, $envName, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupServiceApi->environmentGroupRestSetisolationenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupName** | **string**|  | |
| **enabled** | **bool**|  | |
| **envName** | **string**|  | [optional] |
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
