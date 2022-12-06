# OpenAPI\Client\ExportServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentExportRestCreatePost()**](ExportServiceApi.md#environmentExportRestCreatePost) | **POST** /environment/export/rest/create |  |
| [**environmentExportRestDeletePost()**](ExportServiceApi.md#environmentExportRestDeletePost) | **POST** /environment/export/rest/delete |  |
| [**environmentExportRestDeleteexporteddataPost()**](ExportServiceApi.md#environmentExportRestDeleteexporteddataPost) | **POST** /environment/export/rest/deleteexporteddata |  |
| [**environmentExportRestGetlistPost()**](ExportServiceApi.md#environmentExportRestGetlistPost) | **POST** /environment/export/rest/getlist |  |
| [**environmentExportRestGetmanifestPost()**](ExportServiceApi.md#environmentExportRestGetmanifestPost) | **POST** /environment/export/rest/getmanifest |  |


## `environmentExportRestCreatePost()`

```php
environmentExportRestCreatePost($settings): \OpenAPI\Client\Model\ComHivextApiResponse
```



Create

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settings = 'settings_example'; // string

try {
    $result = $apiInstance->environmentExportRestCreatePost($settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportServiceApi->environmentExportRestCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settings** | **string**|  | |

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

## `environmentExportRestDeletePost()`

```php
environmentExportRestDeletePost($envName, $id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Delete

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->environmentExportRestDeletePost($envName, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportServiceApi->environmentExportRestDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse**](../Model/ComHivextApiServerResponseScriptEvalProxyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentExportRestDeleteexporteddataPost()`

```php
environmentExportRestDeleteexporteddataPost($fileName, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



DeleteExportedData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileName = 'fileName_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentExportRestDeleteexporteddataPost($fileName, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportServiceApi->environmentExportRestDeleteexporteddataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fileName** | **string**|  | |
| **envName** | **string**|  | |

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

## `environmentExportRestGetlistPost()`

```php
environmentExportRestGetlistPost($envName): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



GetList

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentExportRestGetlistPost($envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportServiceApi->environmentExportRestGetlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse**](../Model/ComHivextApiServerResponseScriptEvalProxyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentExportRestGetmanifestPost()`

```php
environmentExportRestGetmanifestPost($envName, $id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



GetManifest

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->environmentExportRestGetmanifestPost($envName, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportServiceApi->environmentExportRestGetmanifestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse**](../Model/ComHivextApiServerResponseScriptEvalProxyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
