# OpenAPI\Client\JpsServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceJpsRestExecuteappactionPost()**](JpsServiceApi.md#marketplaceJpsRestExecuteappactionPost) | **POST** /marketplace/jps/rest/executeappaction |  |
| [**marketplaceJpsRestGetappinfoPost()**](JpsServiceApi.md#marketplaceJpsRestGetappinfoPost) | **POST** /marketplace/jps/rest/getappinfo |  |
| [**marketplaceJpsRestGetappsettingsPost()**](JpsServiceApi.md#marketplaceJpsRestGetappsettingsPost) | **POST** /marketplace/jps/rest/getappsettings |  |
| [**marketplaceJpsRestGetengineversionPost()**](JpsServiceApi.md#marketplaceJpsRestGetengineversionPost) | **POST** /marketplace/jps/rest/getengineversion |  |
| [**marketplaceJpsRestGetscriptingappidPost()**](JpsServiceApi.md#marketplaceJpsRestGetscriptingappidPost) | **POST** /marketplace/jps/rest/getscriptingappid |  |
| [**marketplaceJpsRestInstallPost()**](JpsServiceApi.md#marketplaceJpsRestInstallPost) | **POST** /marketplace/jps/rest/install |  |
| [**marketplaceJpsRestUninstallPost()**](JpsServiceApi.md#marketplaceJpsRestUninstallPost) | **POST** /marketplace/jps/rest/uninstall |  |


## `marketplaceJpsRestExecuteappactionPost()`

```php
marketplaceJpsRestExecuteappactionPost($appUniqueName, $action, $settingsId, $params, $lang): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse
```



Executes custom action that is available for the application installed from the custom JPS manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
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
    $result = $apiInstance->marketplaceJpsRestExecuteappactionPost($appUniqueName, $action, $settingsId, $params, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestExecuteappactionPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceJpsRestGetappinfoPost()`

```php
marketplaceJpsRestGetappinfoPost($jps, $lang, $ownerUid): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseAppInfoResponse
```



Gets information about the custom JPS manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jps = 'jps_example'; // string
$lang = 'lang_example'; // string
$ownerUid = 56; // int

try {
    $result = $apiInstance->marketplaceJpsRestGetappinfoPost($jps, $lang, $ownerUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestGetappinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jps** | **string**|  | [optional] |
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

## `marketplaceJpsRestGetappsettingsPost()`

```php
marketplaceJpsRestGetappsettingsPost($appUniqueName, $settingsId, $lang): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Returns the application settings of the custom JPS manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string
$settingsId = 'settingsId_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->marketplaceJpsRestGetappsettingsPost($appUniqueName, $settingsId, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestGetappsettingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **appUniqueName** | **string**|  | |
| **settingsId** | **string**|  | [optional] |
| **lang** | **string**|  | [optional] |

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

## `marketplaceJpsRestGetengineversionPost()`

```php
marketplaceJpsRestGetengineversionPost(): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetEngineVersionResponse
```



Gets the current version of the Cloud Scripting engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceJpsRestGetengineversionPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestGetengineversionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetEngineVersionResponse**](../Model/ComHivextApiServerMarketplaceResponseGetEngineVersionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceJpsRestGetscriptingappidPost()`

```php
marketplaceJpsRestGetscriptingappidPost(): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse
```



Returns a unique identifier of the user's Cloud Scripting application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->marketplaceJpsRestGetscriptingappidPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestGetscriptingappidPost: ', $e->getMessage(), PHP_EOL;
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

## `marketplaceJpsRestInstallPost()`

```php
marketplaceJpsRestInstallPost($jps, $settings, $envGroups, $logsPath, $envName, $displayName, $skipNodeEmails, $region, $ownerUid, $loggerName, $writeOutputTasks, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerMarketplaceResponseInstallResponse
```



Installs a custom JPS manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$jps = 'jps_example'; // string
$settings = 'settings_example'; // string
$envGroups = 'envGroups_example'; // string
$logsPath = 'logsPath_example'; // string
$envName = 'envName_example'; // string
$displayName = 'displayName_example'; // string
$skipNodeEmails = True; // bool
$region = 'region_example'; // string
$ownerUid = 56; // int
$loggerName = 'loggerName_example'; // string
$writeOutputTasks = True; // bool
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->marketplaceJpsRestInstallPost($jps, $settings, $envGroups, $logsPath, $envName, $displayName, $skipNodeEmails, $region, $ownerUid, $loggerName, $writeOutputTasks, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestInstallPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jps** | **string**|  | |
| **settings** | **string**|  | [optional] |
| **envGroups** | **string**|  | [optional] |
| **logsPath** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **displayName** | **string**|  | [optional] |
| **skipNodeEmails** | **bool**|  | [optional] |
| **region** | **string**|  | [optional] |
| **ownerUid** | **int**|  | [optional] |
| **loggerName** | **string**|  | [optional] |
| **writeOutputTasks** | **bool**|  | [optional] |
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

## `marketplaceJpsRestUninstallPost()`

```php
marketplaceJpsRestUninstallPost($appUniqueName, $force): \OpenAPI\Client\Model\ComHivextApiServerResponseScriptEvalProxyResponse
```



Uninstalls the application installed from the custom JPS manifest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\JpsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$appUniqueName = 'appUniqueName_example'; // string
$force = True; // bool

try {
    $result = $apiInstance->marketplaceJpsRestUninstallPost($appUniqueName, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JpsServiceApi->marketplaceJpsRestUninstallPost: ', $e->getMessage(), PHP_EOL;
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
