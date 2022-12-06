# OpenAPI\Client\VcsServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentVcsRestCreateprojectPost()**](VcsServiceApi.md#environmentVcsRestCreateprojectPost) | **POST** /environment/vcs/rest/createproject |  |
| [**environmentVcsRestDeleteprojectPost()**](VcsServiceApi.md#environmentVcsRestDeleteprojectPost) | **POST** /environment/vcs/rest/deleteproject |  |
| [**environmentVcsRestEditprojectPost()**](VcsServiceApi.md#environmentVcsRestEditprojectPost) | **POST** /environment/vcs/rest/editproject |  |
| [**environmentVcsRestGetprojectPost()**](VcsServiceApi.md#environmentVcsRestGetprojectPost) | **POST** /environment/vcs/rest/getproject |  |
| [**environmentVcsRestUpdatePost()**](VcsServiceApi.md#environmentVcsRestUpdatePost) | **POST** /environment/vcs/rest/update |  |


## `environmentVcsRestCreateprojectPost()`

```php
environmentVcsRestCreateprojectPost($type, $url, $envName, $context, $keyId, $zdt, $login, $branch, $nodeGroup, $autoupdate, $password, $delay, $autoResolveConflict, $repoHash, $interval, $updateNow, $hooks): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse
```



Creates project based on sources from VCS repository.   You can use either login/password authorization or access via ssh key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VcsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$url = 'url_example'; // string
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$keyId = 56; // int
$zdt = True; // bool
$login = 'login_example'; // string
$branch = 'branch_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$autoupdate = True; // bool
$password = 'password_example'; // string
$delay = 56; // int
$autoResolveConflict = True; // bool
$repoHash = 'repoHash_example'; // string
$interval = 'interval_example'; // string
$updateNow = True; // bool
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentVcsRestCreateprojectPost($type, $url, $envName, $context, $keyId, $zdt, $login, $branch, $nodeGroup, $autoupdate, $password, $delay, $autoResolveConflict, $repoHash, $interval, $updateNow, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsServiceApi->environmentVcsRestCreateprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **url** | **string**|  | |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **keyId** | **int**|  | [optional] |
| **zdt** | **bool**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **autoupdate** | **bool**|  | [optional] |
| **password** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **autoResolveConflict** | **bool**|  | [optional] |
| **repoHash** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **updateNow** | **bool**|  | [optional] |
| **hooks** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse**](../Model/ComHivextApiServerEnvironmentResponseVcsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentVcsRestDeleteprojectPost()`

```php
environmentVcsRestDeleteprojectPost($envName, $context, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse
```



Deletes project from VCS repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VcsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentVcsRestDeleteprojectPost($envName, $context, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsServiceApi->environmentVcsRestDeleteprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse**](../Model/ComHivextApiServerEnvironmentResponseVcsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentVcsRestEditprojectPost()`

```php
environmentVcsRestEditprojectPost($oldcontext, $zdt, $type, $url, $autoupdate, $autoResolveConflict, $envName, $newcontext, $keyId, $login, $branch, $nodeGroup, $password, $delay, $repoHash, $interval, $hooks): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse
```



Edits the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VcsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oldcontext = 'oldcontext_example'; // string
$zdt = True; // bool
$type = 'type_example'; // string
$url = 'url_example'; // string
$autoupdate = True; // bool
$autoResolveConflict = True; // bool
$envName = 'envName_example'; // string
$newcontext = 'newcontext_example'; // string
$keyId = 56; // int
$login = 'login_example'; // string
$branch = 'branch_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$password = 'password_example'; // string
$delay = 56; // int
$repoHash = 'repoHash_example'; // string
$interval = 'interval_example'; // string
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentVcsRestEditprojectPost($oldcontext, $zdt, $type, $url, $autoupdate, $autoResolveConflict, $envName, $newcontext, $keyId, $login, $branch, $nodeGroup, $password, $delay, $repoHash, $interval, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsServiceApi->environmentVcsRestEditprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oldcontext** | **string**|  | |
| **zdt** | **bool**|  | |
| **type** | **string**|  | |
| **url** | **string**|  | |
| **autoupdate** | **bool**|  | |
| **autoResolveConflict** | **bool**|  | |
| **envName** | **string**|  | |
| **newcontext** | **string**|  | |
| **keyId** | **int**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **password** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **repoHash** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse**](../Model/ComHivextApiServerEnvironmentResponseVcsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentVcsRestGetprojectPost()`

```php
environmentVcsRestGetprojectPost($envName, $context, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse
```



Returns information about the project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VcsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentVcsRestGetprojectPost($envName, $context, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsServiceApi->environmentVcsRestGetprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsResponse**](../Model/ComHivextApiServerEnvironmentResponseVcsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentVcsRestUpdatePost()`

```php
environmentVcsRestUpdatePost($envName, $context, $delay, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsUpdateResponse
```



Updates project from VCS repository.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\VcsServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$delay = 56; // int
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentVcsRestUpdatePost($envName, $context, $delay, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VcsServiceApi->environmentVcsRestUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **delay** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsUpdateResponse**](../Model/ComHivextApiServerEnvironmentResponseVcsUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
