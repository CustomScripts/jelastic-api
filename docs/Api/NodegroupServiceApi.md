# OpenAPI\Client\NodegroupServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentNodegroupRestApplydataPost()**](NodegroupServiceApi.md#environmentNodegroupRestApplydataPost) | **POST** /environment/nodegroup/rest/applydata |  |
| [**environmentNodegroupRestGetPost()**](NodegroupServiceApi.md#environmentNodegroupRestGetPost) | **POST** /environment/nodegroup/rest/get |  |
| [**environmentNodegroupRestSetoptionsPost()**](NodegroupServiceApi.md#environmentNodegroupRestSetoptionsPost) | **POST** /environment/nodegroup/rest/setoptions |  |
| [**environmentNodegroupRestSetslbaccessenabledPost()**](NodegroupServiceApi.md#environmentNodegroupRestSetslbaccessenabledPost) | **POST** /environment/nodegroup/rest/setslbaccessenabled |  |


## `environmentNodegroupRestApplydataPost()`

```php
environmentNodegroupRestApplydataPost($data, $envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



Sets node group's data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodegroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentNodegroupRestApplydataPost($data, $envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodegroupServiceApi->environmentNodegroupRestApplydataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |

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

## `environmentNodegroupRestGetPost()`

```php
environmentNodegroupRestGetPost($envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeGroupResponse
```



Gets node group's data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodegroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentNodegroupRestGetPost($envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodegroupServiceApi->environmentNodegroupRestGetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeGroupResponse**](../Model/ComHivextApiServerEnvironmentResponseNodeGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentNodegroupRestSetoptionsPost()`

```php
environmentNodegroupRestSetoptionsPost($envName, $options, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



Sets different options to nodeGroup e.g. number of vCPUs and Memory to VM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodegroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$options = 'options_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentNodegroupRestSetoptionsPost($envName, $options, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodegroupServiceApi->environmentNodegroupRestSetoptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **options** | **string**|  | |
| **nodeGroup** | **string**|  | |

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

## `environmentNodegroupRestSetslbaccessenabledPost()`

```php
environmentNodegroupRestSetslbaccessenabledPost($envName, $nodeGroup, $enabled): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables/disables access to the node group (environment layer) through the Shared Load Balancer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\NodegroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$enabled = True; // bool

try {
    $result = $apiInstance->environmentNodegroupRestSetslbaccessenabledPost($envName, $nodeGroup, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NodegroupServiceApi->environmentNodegroupRestSetslbaccessenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |
| **enabled** | **bool**|  | |

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
