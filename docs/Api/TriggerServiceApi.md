# OpenAPI\Client\TriggerServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentTriggerRestAddautoscalingtriggerPost()**](TriggerServiceApi.md#environmentTriggerRestAddautoscalingtriggerPost) | **POST** /environment/trigger/rest/addautoscalingtrigger |  |
| [**environmentTriggerRestAddloadalerttriggerPost()**](TriggerServiceApi.md#environmentTriggerRestAddloadalerttriggerPost) | **POST** /environment/trigger/rest/addloadalerttrigger |  |
| [**environmentTriggerRestAddtriggerPost()**](TriggerServiceApi.md#environmentTriggerRestAddtriggerPost) | **POST** /environment/trigger/rest/addtrigger |  |
| [**environmentTriggerRestAutoscalinghistoryPost()**](TriggerServiceApi.md#environmentTriggerRestAutoscalinghistoryPost) | **POST** /environment/trigger/rest/autoscalinghistory |  |
| [**environmentTriggerRestDeleteautoscalingtriggerPost()**](TriggerServiceApi.md#environmentTriggerRestDeleteautoscalingtriggerPost) | **POST** /environment/trigger/rest/deleteautoscalingtrigger |  |
| [**environmentTriggerRestDeleteloadalerttriggerPost()**](TriggerServiceApi.md#environmentTriggerRestDeleteloadalerttriggerPost) | **POST** /environment/trigger/rest/deleteloadalerttrigger |  |
| [**environmentTriggerRestDeletetriggerPost()**](TriggerServiceApi.md#environmentTriggerRestDeletetriggerPost) | **POST** /environment/trigger/rest/deletetrigger |  |
| [**environmentTriggerRestEditautoscalingtriggerPost()**](TriggerServiceApi.md#environmentTriggerRestEditautoscalingtriggerPost) | **POST** /environment/trigger/rest/editautoscalingtrigger |  |
| [**environmentTriggerRestEditloadalerttriggerPost()**](TriggerServiceApi.md#environmentTriggerRestEditloadalerttriggerPost) | **POST** /environment/trigger/rest/editloadalerttrigger |  |
| [**environmentTriggerRestEdittriggerPost()**](TriggerServiceApi.md#environmentTriggerRestEdittriggerPost) | **POST** /environment/trigger/rest/edittrigger |  |
| [**environmentTriggerRestGetautoscalingtriggersPost()**](TriggerServiceApi.md#environmentTriggerRestGetautoscalingtriggersPost) | **POST** /environment/trigger/rest/getautoscalingtriggers |  |
| [**environmentTriggerRestGetloadalerttriggersPost()**](TriggerServiceApi.md#environmentTriggerRestGetloadalerttriggersPost) | **POST** /environment/trigger/rest/getloadalerttriggers |  |
| [**environmentTriggerRestGettriggerlogsPost()**](TriggerServiceApi.md#environmentTriggerRestGettriggerlogsPost) | **POST** /environment/trigger/rest/gettriggerlogs |  |
| [**environmentTriggerRestGettriggersPost()**](TriggerServiceApi.md#environmentTriggerRestGettriggersPost) | **POST** /environment/trigger/rest/gettriggers |  |
| [**environmentTriggerRestLoadalerthistoryPost()**](TriggerServiceApi.md#environmentTriggerRestLoadalerthistoryPost) | **POST** /environment/trigger/rest/loadalerthistory |  |
| [**environmentTriggerRestSetautoscalingtriggerenabledPost()**](TriggerServiceApi.md#environmentTriggerRestSetautoscalingtriggerenabledPost) | **POST** /environment/trigger/rest/setautoscalingtriggerenabled |  |
| [**environmentTriggerRestSetloadalerttriggerenabledPost()**](TriggerServiceApi.md#environmentTriggerRestSetloadalerttriggerenabledPost) | **POST** /environment/trigger/rest/setloadalerttriggerenabled |  |
| [**environmentTriggerRestSettriggerenabledPost()**](TriggerServiceApi.md#environmentTriggerRestSettriggerenabledPost) | **POST** /environment/trigger/rest/settriggerenabled |  |


## `environmentTriggerRestAddautoscalingtriggerPost()`

```php
environmentTriggerRestAddautoscalingtriggerPost($data, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Adds a new auto-scaling trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestAddautoscalingtriggerPost($data, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestAddautoscalingtriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestAddloadalerttriggerPost()`

```php
environmentTriggerRestAddloadalerttriggerPost($data, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Adds a new load alert trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestAddloadalerttriggerPost($data, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestAddloadalerttriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestAddtriggerPost()`

```php
environmentTriggerRestAddtriggerPost($data, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Adds a new trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestAddtriggerPost($data, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestAddtriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestAutoscalinghistoryPost()`

```php
environmentTriggerRestAutoscalinghistoryPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId): \OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse
```



Gets log of auto-scaling trigger's execution.   Returns list of logs for auto-scaling environment's triggers if an identifier of the trigger doesn't specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resultCount = 56; // int
$startRow = 56; // int
$resourceTypes = 'resourceTypes_example'; // string
$triggerId = 56; // int
$nodeGroup = 'nodeGroup_example'; // string
$actionTypes = 'actionTypes_example'; // string
$skipResults = 'skipResults_example'; // string
$envName = 'envName_example'; // string
$orderDirection = 'orderDirection_example'; // string
$startTime = 'startTime_example'; // string
$endTime = 'endTime_example'; // string
$orderField = 'orderField_example'; // string
$triggerLogId = 56; // int

try {
    $result = $apiInstance->environmentTriggerRestAutoscalinghistoryPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestAutoscalinghistoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resultCount** | **int**|  | |
| **startRow** | **int**|  | |
| **resourceTypes** | **string**|  | [optional] |
| **triggerId** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |
| **skipResults** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **orderDirection** | **string**|  | [optional] |
| **startTime** | **string**|  | [optional] |
| **endTime** | **string**|  | [optional] |
| **orderField** | **string**|  | [optional] |
| **triggerLogId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse**](../Model/ComHivextApiServerAdministrationResponsePagedArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestDeleteautoscalingtriggerPost()`

```php
environmentTriggerRestDeleteautoscalingtriggerPost($id, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deletes an existing auto-scaling trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestDeleteautoscalingtriggerPost($id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestDeleteautoscalingtriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentTriggerRestDeleteloadalerttriggerPost()`

```php
environmentTriggerRestDeleteloadalerttriggerPost($id, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deletes an existing load alert trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestDeleteloadalerttriggerPost($id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestDeleteloadalerttriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentTriggerRestDeletetriggerPost()`

```php
environmentTriggerRestDeletetriggerPost($id, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deletes an existing trigger.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestDeletetriggerPost($id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestDeletetriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentTriggerRestEditautoscalingtriggerPost()`

```php
environmentTriggerRestEditautoscalingtriggerPost($data, $id, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Edits an auto-scaling trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestEditautoscalingtriggerPost($data, $id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestEditautoscalingtriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestEditloadalerttriggerPost()`

```php
environmentTriggerRestEditloadalerttriggerPost($data, $id, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Edits a load alert trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestEditloadalerttriggerPost($data, $id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestEditloadalerttriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestEdittriggerPost()`

```php
environmentTriggerRestEdittriggerPost($data, $id, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Edits a trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$data = 'data_example'; // string
$id = 56; // int
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestEdittriggerPost($data, $id, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestEdittriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | **string**|  | |
| **id** | **int**|  | |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse**](../Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestGetautoscalingtriggersPost()`

```php
environmentTriggerRestGetautoscalingtriggersPost($envName, $actionTypes): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Gets a list of auto-scaling triggers for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$actionTypes = 'actionTypes_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestGetautoscalingtriggersPost($envName, $actionTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestGetautoscalingtriggersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |

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

## `environmentTriggerRestGetloadalerttriggersPost()`

```php
environmentTriggerRestGetloadalerttriggersPost($envName, $actionTypes): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Gets a list of auto-scaling triggers for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$actionTypes = 'actionTypes_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestGetloadalerttriggersPost($envName, $actionTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestGetloadalerttriggersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |

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

## `environmentTriggerRestGettriggerlogsPost()`

```php
environmentTriggerRestGettriggerlogsPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId): \OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse
```



Gets log of trigger's execution.   Returns list of logs for all environment's triggers if an identifier of the trigger doesn't specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resultCount = 56; // int
$startRow = 56; // int
$resourceTypes = 'resourceTypes_example'; // string
$triggerId = 56; // int
$nodeGroup = 'nodeGroup_example'; // string
$actionTypes = 'actionTypes_example'; // string
$skipResults = 'skipResults_example'; // string
$envName = 'envName_example'; // string
$orderDirection = 'orderDirection_example'; // string
$startTime = 'startTime_example'; // string
$endTime = 'endTime_example'; // string
$orderField = 'orderField_example'; // string
$triggerLogId = 56; // int

try {
    $result = $apiInstance->environmentTriggerRestGettriggerlogsPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestGettriggerlogsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resultCount** | **int**|  | |
| **startRow** | **int**|  | |
| **resourceTypes** | **string**|  | [optional] |
| **triggerId** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |
| **skipResults** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **orderDirection** | **string**|  | [optional] |
| **startTime** | **string**|  | [optional] |
| **endTime** | **string**|  | [optional] |
| **orderField** | **string**|  | [optional] |
| **triggerLogId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse**](../Model/ComHivextApiServerAdministrationResponsePagedArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestGettriggersPost()`

```php
environmentTriggerRestGettriggersPost($envName, $actionTypes): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Gets a list of triggers for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$actionTypes = 'actionTypes_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestGettriggersPost($envName, $actionTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestGettriggersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |

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

## `environmentTriggerRestLoadalerthistoryPost()`

```php
environmentTriggerRestLoadalerthistoryPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId): \OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse
```



Gets log of load alert trigger's execution.   Returns list of logs for load alert environment's triggers if an identifier of the trigger doesn't specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resultCount = 56; // int
$startRow = 56; // int
$resourceTypes = 'resourceTypes_example'; // string
$triggerId = 56; // int
$nodeGroup = 'nodeGroup_example'; // string
$actionTypes = 'actionTypes_example'; // string
$skipResults = 'skipResults_example'; // string
$envName = 'envName_example'; // string
$orderDirection = 'orderDirection_example'; // string
$startTime = 'startTime_example'; // string
$endTime = 'endTime_example'; // string
$orderField = 'orderField_example'; // string
$triggerLogId = 56; // int

try {
    $result = $apiInstance->environmentTriggerRestLoadalerthistoryPost($resultCount, $startRow, $resourceTypes, $triggerId, $nodeGroup, $actionTypes, $skipResults, $envName, $orderDirection, $startTime, $endTime, $orderField, $triggerLogId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestLoadalerthistoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resultCount** | **int**|  | |
| **startRow** | **int**|  | |
| **resourceTypes** | **string**|  | [optional] |
| **triggerId** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |
| **skipResults** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **orderDirection** | **string**|  | [optional] |
| **startTime** | **string**|  | [optional] |
| **endTime** | **string**|  | [optional] |
| **orderField** | **string**|  | [optional] |
| **triggerLogId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse**](../Model/ComHivextApiServerAdministrationResponsePagedArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentTriggerRestSetautoscalingtriggerenabledPost()`

```php
environmentTriggerRestSetautoscalingtriggerenabledPost($id, $enabled, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables or disables a auto-scaling trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$enabled = True; // bool
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestSetautoscalingtriggerenabledPost($id, $enabled, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestSetautoscalingtriggerenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **enabled** | **bool**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentTriggerRestSetloadalerttriggerenabledPost()`

```php
environmentTriggerRestSetloadalerttriggerenabledPost($id, $enabled, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables or disables a load alert trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$enabled = True; // bool
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestSetloadalerttriggerenabledPost($id, $enabled, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestSetloadalerttriggerenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **enabled** | **bool**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentTriggerRestSettriggerenabledPost()`

```php
environmentTriggerRestSettriggerenabledPost($id, $enabled, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables or disables a trigger for environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TriggerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$enabled = True; // bool
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentTriggerRestSettriggerenabledPost($id, $enabled, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TriggerServiceApi->environmentTriggerRestSettriggerenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **enabled** | **bool**|  | |
| **envName** | **string**|  | [optional] |

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
