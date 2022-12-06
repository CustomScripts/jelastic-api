# OpenAPI\Client\ConsoleServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceConsoleRestClearlogPost()**](ConsoleServiceApi.md#marketplaceConsoleRestClearlogPost) | **POST** /marketplace/console/rest/clearlog |  |
| [**marketplaceConsoleRestReadlogPost()**](ConsoleServiceApi.md#marketplaceConsoleRestReadlogPost) | **POST** /marketplace/console/rest/readlog |  |
| [**marketplaceConsoleRestWritelogPost()**](ConsoleServiceApi.md#marketplaceConsoleRestWritelogPost) | **POST** /marketplace/console/rest/writelog |  |


## `marketplaceConsoleRestClearlogPost()`

```php
marketplaceConsoleRestClearlogPost(): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Clears all console messages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsoleServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceConsoleRestClearlogPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsoleServiceApi->marketplaceConsoleRestClearlogPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `marketplaceConsoleRestReadlogPost()`

```php
marketplaceConsoleRestReadlogPost(): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseReadLogResponse
```



Reads the last messages in the console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsoleServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceConsoleRestReadlogPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsoleServiceApi->marketplaceConsoleRestReadlogPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseReadLogResponse**](../Model/ComHivextApiServerMarketplaceResponseReadLogResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceConsoleRestWritelogPost()`

```php
marketplaceConsoleRestWritelogPost($message): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Writes a custom message to the console.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ConsoleServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message = 'message_example'; // string

try {
    $result = $apiInstance->marketplaceConsoleRestWritelogPost($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsoleServiceApi->marketplaceConsoleRestWritelogPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message** | **string**|  | |

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
