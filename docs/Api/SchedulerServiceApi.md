# OpenAPI\Client\SchedulerServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**utilsSchedulerRestCreateaccounttaskPost()**](SchedulerServiceApi.md#utilsSchedulerRestCreateaccounttaskPost) | **POST** /utils/scheduler/rest/createaccounttask |  |
| [**utilsSchedulerRestCreateenvtaskPost()**](SchedulerServiceApi.md#utilsSchedulerRestCreateenvtaskPost) | **POST** /utils/scheduler/rest/createenvtask |  |
| [**utilsSchedulerRestDeletetasksPost()**](SchedulerServiceApi.md#utilsSchedulerRestDeletetasksPost) | **POST** /utils/scheduler/rest/deletetasks |  |
| [**utilsSchedulerRestEdittaskPost()**](SchedulerServiceApi.md#utilsSchedulerRestEdittaskPost) | **POST** /utils/scheduler/rest/edittask |  |
| [**utilsSchedulerRestGettasksPost()**](SchedulerServiceApi.md#utilsSchedulerRestGettasksPost) | **POST** /utils/scheduler/rest/gettasks |  |


## `utilsSchedulerRestCreateaccounttaskPost()`

```php
utilsSchedulerRestCreateaccounttaskPost($trigger, $script, $description, $params): \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse
```



Creating task that triggers earlie created script with given rate. <br> Syntax of trigger param : TYPE:VALUE, possible values of TYPE : cron, rate, date, oninit(once after platform start), once_delay. Params for script passed in JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trigger = 'trigger_example'; // string
$script = 'script_example'; // string
$description = 'description_example'; // string
$params = 'params_example'; // string

try {
    $result = $apiInstance->utilsSchedulerRestCreateaccounttaskPost($trigger, $script, $description, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerServiceApi->utilsSchedulerRestCreateaccounttaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trigger** | **string**|  | |
| **script** | **string**|  | |
| **description** | **string**|  | [optional] |
| **params** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse**](../Model/ComHivextApiServerDataResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `utilsSchedulerRestCreateenvtaskPost()`

```php
utilsSchedulerRestCreateenvtaskPost($trigger, $script, $envName, $description, $params): \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse
```



Creating task that triggers earlie created script with given rate. Also it will be deleted when environment with given in params appid/domain will be deleted. <br> Syntax of trigger param : TYPE:VALUE, possible values of TYPE : cron, rate, date, oninit(once after platform start), once_delay. Params for script passed in JSON format.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trigger = 'trigger_example'; // string
$script = 'script_example'; // string
$envName = 'envName_example'; // string
$description = 'description_example'; // string
$params = 'params_example'; // string

try {
    $result = $apiInstance->utilsSchedulerRestCreateenvtaskPost($trigger, $script, $envName, $description, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerServiceApi->utilsSchedulerRestCreateenvtaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trigger** | **string**|  | |
| **script** | **string**|  | |
| **envName** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |
| **params** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse**](../Model/ComHivextApiServerDataResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `utilsSchedulerRestDeletetasksPost()`

```php
utilsSchedulerRestDeletetasksPost($ids): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->utilsSchedulerRestDeletetasksPost($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerServiceApi->utilsSchedulerRestDeletetasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | |

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

## `utilsSchedulerRestEdittaskPost()`

```php
utilsSchedulerRestEdittaskPost($trigger, $id, $script, $description, $params): \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$trigger = 'trigger_example'; // string
$id = 56; // int
$script = 'script_example'; // string
$description = 'description_example'; // string
$params = 'params_example'; // string

try {
    $result = $apiInstance->utilsSchedulerRestEdittaskPost($trigger, $id, $script, $description, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerServiceApi->utilsSchedulerRestEdittaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **trigger** | **string**|  | |
| **id** | **int**|  | |
| **script** | **string**|  | |
| **description** | **string**|  | [optional] |
| **params** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponse**](../Model/ComHivextApiServerDataResponseObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `utilsSchedulerRestGettasksPost()`

```php
utilsSchedulerRestGettasksPost($ids): \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SchedulerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->utilsSchedulerRestGettasksPost($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchedulerServiceApi->utilsSchedulerRestGettasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectsResponse**](../Model/ComHivextApiServerDataResponseObjectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
