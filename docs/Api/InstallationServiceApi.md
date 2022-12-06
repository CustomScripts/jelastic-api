# OpenAPI\Client\InstallationServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceInstallationRestExecuteactionPost()**](InstallationServiceApi.md#marketplaceInstallationRestExecuteactionPost) | **POST** /marketplace/installation/rest/executeaction |  |
| [**marketplaceInstallationRestGetenvappidPost()**](InstallationServiceApi.md#marketplaceInstallationRestGetenvappidPost) | **POST** /marketplace/installation/rest/getenvappid |  |
| [**marketplaceInstallationRestGetinfoPost()**](InstallationServiceApi.md#marketplaceInstallationRestGetinfoPost) | **POST** /marketplace/installation/rest/getinfo |  |
| [**marketplaceInstallationRestGetlistPost()**](InstallationServiceApi.md#marketplaceInstallationRestGetlistPost) | **POST** /marketplace/installation/rest/getlist |  |
| [**marketplaceInstallationRestGetscriptingappidPost()**](InstallationServiceApi.md#marketplaceInstallationRestGetscriptingappidPost) | **POST** /marketplace/installation/rest/getscriptingappid |  |
| [**marketplaceInstallationRestGetsettingsPost()**](InstallationServiceApi.md#marketplaceInstallationRestGetsettingsPost) | **POST** /marketplace/installation/rest/getsettings |  |
| [**marketplaceInstallationRestUninstallPost()**](InstallationServiceApi.md#marketplaceInstallationRestUninstallPost) | **POST** /marketplace/installation/rest/uninstall |  |


## `marketplaceInstallationRestExecuteactionPost()`

```php
marketplaceInstallationRestExecuteactionPost($appUniqueName, $action, $settingsId, $params, $lang): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse
```



Executes custom action that is available for the installed application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string
$action = 'action_example'; // string
$settingsId = 'settingsId_example'; // string
$params = 'params_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->marketplaceInstallationRestExecuteactionPost($appUniqueName, $action, $settingsId, $params, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestExecuteactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |
| **action** | **string**|  | [optional] |
| **settingsId** | **string**|  | [optional] |
| **params** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |

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

## `marketplaceInstallationRestGetenvappidPost()`

```php
marketplaceInstallationRestGetenvappidPost($appUniqueName): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string

try {
    $result = $apiInstance->marketplaceInstallationRestGetenvappidPost($appUniqueName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestGetenvappidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse**](../Model/ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceInstallationRestGetinfoPost()`

```php
marketplaceInstallationRestGetinfoPost($appUniqueName): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppInfoResponse
```



Returns information about the specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string

try {
    $result = $apiInstance->marketplaceInstallationRestGetinfoPost($appUniqueName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestGetinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |

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

## `marketplaceInstallationRestGetlistPost()`

```php
marketplaceInstallationRestGetlistPost($search): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Returns information about all the installed applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string

try {
    $result = $apiInstance->marketplaceInstallationRestGetlistPost($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestGetlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |

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

## `marketplaceInstallationRestGetscriptingappidPost()`

```php
marketplaceInstallationRestGetscriptingappidPost(): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse
```



Returns a unique identifier of the user's Cloud Scripting application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceInstallationRestGetscriptingappidPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestGetscriptingappidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse**](../Model/ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceInstallationRestGetsettingsPost()`

```php
marketplaceInstallationRestGetsettingsPost($appUniqueName, $settingsId, $lang): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseSettingsResponse
```



Returns application custom settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string
$settingsId = 'settingsId_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->marketplaceInstallationRestGetsettingsPost($appUniqueName, $settingsId, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestGetsettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |
| **settingsId** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseSettingsResponse**](../Model/ComHivextApiServerMarketplaceResponseSettingsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceInstallationRestUninstallPost()`

```php
marketplaceInstallationRestUninstallPost($appUniqueName, $force): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Uninstalls the installed application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\InstallationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string
$force = True; // bool

try {
    $result = $apiInstance->marketplaceInstallationRestUninstallPost($appUniqueName, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InstallationServiceApi->marketplaceInstallationRestUninstallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |
| **force** | **bool**|  | [optional] |

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
