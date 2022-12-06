# OpenAPI\Client\AppServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceAppRestAddappPost()**](AppServiceApi.md#marketplaceAppRestAddappPost) | **POST** /marketplace/app/rest/addapp |  |
| [**marketplaceAppRestDeleteappPost()**](AppServiceApi.md#marketplaceAppRestDeleteappPost) | **POST** /marketplace/app/rest/deleteapp |  |
| [**marketplaceAppRestEditappPost()**](AppServiceApi.md#marketplaceAppRestEditappPost) | **POST** /marketplace/app/rest/editapp |  |
| [**marketplaceAppRestGetaddonlistPost()**](AppServiceApi.md#marketplaceAppRestGetaddonlistPost) | **POST** /marketplace/app/rest/getaddonlist |  |
| [**marketplaceAppRestGetappinfoPost()**](AppServiceApi.md#marketplaceAppRestGetappinfoPost) | **POST** /marketplace/app/rest/getappinfo |  |
| [**marketplaceAppRestGetcategoriesPost()**](AppServiceApi.md#marketplaceAppRestGetcategoriesPost) | **POST** /marketplace/app/rest/getcategories |  |
| [**marketplaceAppRestGetchecksumPost()**](AppServiceApi.md#marketplaceAppRestGetchecksumPost) | **POST** /marketplace/app/rest/getchecksum |  |
| [**marketplaceAppRestGetlistPost()**](AppServiceApi.md#marketplaceAppRestGetlistPost) | **POST** /marketplace/app/rest/getlist |  |
| [**marketplaceAppRestInstallPost()**](AppServiceApi.md#marketplaceAppRestInstallPost) | **POST** /marketplace/app/rest/install |  |
| [**marketplaceAppRestInstalladdonPost()**](AppServiceApi.md#marketplaceAppRestInstalladdonPost) | **POST** /marketplace/app/rest/installaddon |  |


## `marketplaceAppRestAddappPost()`

```php
marketplaceAppRestAddappPost($manifest): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAddAppResponse
```



Adds the user's personal JPS manifest to the marketplace (will be visible for the current user only).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manifest = 'manifest_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestAddappPost($manifest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestAddappPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceAppRestDeleteappPost()`

```php
marketplaceAppRestDeleteappPost($id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Deletes the user's personal JPS manifest from the marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestDeleteappPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestDeleteappPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceAppRestEditappPost()`

```php
marketplaceAppRestEditappPost($manifest, $id): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Edits the user's personal JPS manifest in the marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$manifest = 'manifest_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestEditappPost($manifest, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestEditappPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **manifest** | **string**|  | |
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

## `marketplaceAppRestGetaddonlistPost()`

```php
marketplaceAppRestGetaddonlistPost($search, $envName, $lang, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppsListResponse
```



Returns information about available add-ons (including already installed ones) for the specified environment or node group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string
$envName = 'envName_example'; // string
$lang = 'lang_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestGetaddonlistPost($search, $envName, $lang, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestGetaddonlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |

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

## `marketplaceAppRestGetappinfoPost()`

```php
marketplaceAppRestGetappinfoPost($id, $lang, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppInfoResponse
```



Returns information about the application from the marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$lang = 'lang_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->marketplaceAppRestGetappinfoPost($id, $lang, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestGetappinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **lang** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppInfoResponse**](../Model/ComHivextApiServerMarketplaceResponseAppInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceAppRestGetcategoriesPost()`

```php
marketplaceAppRestGetcategoriesPost(): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Returns information about available application categories in the marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceAppRestGetcategoriesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestGetcategoriesPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceAppRestGetchecksumPost()`

```php
marketplaceAppRestGetchecksumPost(): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseChecksumResponse
```



Returns the current checksum of the marketplace applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceAppRestGetchecksumPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestGetchecksumPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseChecksumResponse**](../Model/ComHivextApiServerMarketplaceResponseChecksumResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceAppRestGetlistPost()`

```php
marketplaceAppRestGetlistPost($search, $lang): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppsListResponse
```



Returns information about applications available in the marketplace for the current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestGetlistPost($search, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestGetlistPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceAppRestInstallPost()`

```php
marketplaceAppRestInstallPost($id, $settings, $envGroups, $nodes, $skipEmail, $envName, $displayName, $overrideNodes, $skipNodeEmails, $region, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse
```



Installs one of the applications available in the marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$settings = 'settings_example'; // string
$envGroups = 'envGroups_example'; // string
$nodes = 'nodes_example'; // string
$skipEmail = True; // bool
$envName = 'envName_example'; // string
$displayName = 'displayName_example'; // string
$overrideNodes = True; // bool
$skipNodeEmails = True; // bool
$region = 'region_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->marketplaceAppRestInstallPost($id, $settings, $envGroups, $nodes, $skipEmail, $envName, $displayName, $overrideNodes, $skipNodeEmails, $region, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestInstallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **settings** | **string**|  | [optional] |
| **envGroups** | **string**|  | [optional] |
| **nodes** | **string**|  | [optional] |
| **skipEmail** | **bool**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **displayName** | **string**|  | [optional] |
| **overrideNodes** | **bool**|  | [optional] |
| **skipNodeEmails** | **bool**|  | [optional] |
| **region** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse**](../Model/ComHivextApiServerMarketplaceResponseInstallResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceAppRestInstalladdonPost()`

```php
marketplaceAppRestInstalladdonPost($id, $settings, $skipEmail, $envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse
```



Installs one of the add-ons available for the existing environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AppServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 'id_example'; // string
$settings = 'settings_example'; // string
$skipEmail = True; // bool
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->marketplaceAppRestInstalladdonPost($id, $settings, $skipEmail, $envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppServiceApi->marketplaceAppRestInstalladdonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **settings** | **string**|  | [optional] |
| **skipEmail** | **bool**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse**](../Model/ComHivextApiServerMarketplaceResponseInstallResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
