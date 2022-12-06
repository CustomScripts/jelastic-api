# OpenAPI\Client\FavoriteServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceFavoriteRestAddPost()**](FavoriteServiceApi.md#marketplaceFavoriteRestAddPost) | **POST** /marketplace/favorite/rest/add |  |
| [**marketplaceFavoriteRestAddmanifestPost()**](FavoriteServiceApi.md#marketplaceFavoriteRestAddmanifestPost) | **POST** /marketplace/favorite/rest/addmanifest |  |
| [**marketplaceFavoriteRestDeletePost()**](FavoriteServiceApi.md#marketplaceFavoriteRestDeletePost) | **POST** /marketplace/favorite/rest/delete |  |
| [**marketplaceFavoriteRestGetlistPost()**](FavoriteServiceApi.md#marketplaceFavoriteRestGetlistPost) | **POST** /marketplace/favorite/rest/getlist |  |


## `marketplaceFavoriteRestAddPost()`

```php
marketplaceFavoriteRestAddPost($id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Adds an application to the user's personal favorite category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FavoriteServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->marketplaceFavoriteRestAddPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteServiceApi->marketplaceFavoriteRestAddPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `marketplaceFavoriteRestAddmanifestPost()`

```php
marketplaceFavoriteRestAddmanifestPost($manifest): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAddAppResponse
```



Adds a custom manifest to the user's personal favorite category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FavoriteServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manifest = 'manifest_example'; // string

try {
    $result = $apiInstance->marketplaceFavoriteRestAddmanifestPost($manifest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteServiceApi->marketplaceFavoriteRestAddmanifestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manifest** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAddAppResponse**](../Model/ComHivextApiServerMarketplaceResponseAddAppResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceFavoriteRestDeletePost()`

```php
marketplaceFavoriteRestDeletePost($id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Removes an application from the user's personal favorite list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FavoriteServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->marketplaceFavoriteRestDeletePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteServiceApi->marketplaceFavoriteRestDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `marketplaceFavoriteRestGetlistPost()`

```php
marketplaceFavoriteRestGetlistPost($search, $lang): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppsListResponse
```



Returns a list of the user's personal favorite applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FavoriteServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->marketplaceFavoriteRestGetlistPost($search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoriteServiceApi->marketplaceFavoriteRestGetlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppsListResponse**](../Model/ComHivextApiServerMarketplaceResponseAppsListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
