# OpenAPI\Client\BuildServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentBuildRestAddprojectPost()**](BuildServiceApi.md#environmentBuildRestAddprojectPost) | **POST** /environment/build/rest/addproject |  |
| [**environmentBuildRestAddprojectwithcredsPost()**](BuildServiceApi.md#environmentBuildRestAddprojectwithcredsPost) | **POST** /environment/build/rest/addprojectwithcreds |  |
| [**environmentBuildRestAddprojectwithkeyPost()**](BuildServiceApi.md#environmentBuildRestAddprojectwithkeyPost) | **POST** /environment/build/rest/addprojectwithkey |  |
| [**environmentBuildRestBuilddeployprojectPost()**](BuildServiceApi.md#environmentBuildRestBuilddeployprojectPost) | **POST** /environment/build/rest/builddeployproject |  |
| [**environmentBuildRestBuildprojectPost()**](BuildServiceApi.md#environmentBuildRestBuildprojectPost) | **POST** /environment/build/rest/buildproject |  |
| [**environmentBuildRestDeployprojectPost()**](BuildServiceApi.md#environmentBuildRestDeployprojectPost) | **POST** /environment/build/rest/deployproject |  |
| [**environmentBuildRestEditprojectPost()**](BuildServiceApi.md#environmentBuildRestEditprojectPost) | **POST** /environment/build/rest/editproject |  |
| [**environmentBuildRestGetprojectinfoPost()**](BuildServiceApi.md#environmentBuildRestGetprojectinfoPost) | **POST** /environment/build/rest/getprojectinfo |  |
| [**environmentBuildRestGetprojectsPost()**](BuildServiceApi.md#environmentBuildRestGetprojectsPost) | **POST** /environment/build/rest/getprojects |  |
| [**environmentBuildRestRemoveprojectPost()**](BuildServiceApi.md#environmentBuildRestRemoveprojectPost) | **POST** /environment/build/rest/removeproject |  |
| [**environmentBuildRestUpdatePost()**](BuildServiceApi.md#environmentBuildRestUpdatePost) | **POST** /environment/build/rest/update |  |


## `environmentBuildRestAddprojectPost()`

```php
environmentBuildRestAddprojectPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $targetNodeGroup, $deployNow, $keyId, $login, $branch, $isSequential, $password, $delay, $context, $repoHash, $interval, $workDir, $hooks, $targetEnv): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse
```



Adds the project from VCS to the environment. <br/>   Currently only username/password authentication is supported.<br/>   In case your environment contains more than one application server node, you need to call this method for each of them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoUpdate = True; // bool
$type = 'type_example'; // string
$path = 'path_example'; // string
$autoResolveConflict = True; // bool
$envName = 'envName_example'; // string
$name = 'name_example'; // string
$nodeId = 56; // int
$targetNodeGroup = 'targetNodeGroup_example'; // string
$deployNow = True; // bool
$keyId = 56; // int
$login = 'login_example'; // string
$branch = 'branch_example'; // string
$isSequential = True; // bool
$password = 'password_example'; // string
$delay = 56; // int
$context = 'context_example'; // string
$repoHash = 'repoHash_example'; // string
$interval = 'interval_example'; // string
$workDir = 'workDir_example'; // string
$hooks = 'hooks_example'; // string
$targetEnv = 'targetEnv_example'; // string

try {
    $result = $apiInstance->environmentBuildRestAddprojectPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $targetNodeGroup, $deployNow, $keyId, $login, $branch, $isSequential, $password, $delay, $context, $repoHash, $interval, $workDir, $hooks, $targetEnv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestAddprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoUpdate** | **bool**|  | |
| **type** | **string**|  | |
| **path** | **string**|  | |
| **autoResolveConflict** | **bool**|  | |
| **envName** | **string**|  | |
| **name** | **string**|  | |
| **nodeId** | **int**|  | |
| **targetNodeGroup** | **string**|  | [optional] |
| **deployNow** | **bool**|  | [optional] |
| **keyId** | **int**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **isSequential** | **bool**|  | [optional] |
| **password** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **context** | **string**|  | [optional] |
| **repoHash** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **workDir** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |
| **targetEnv** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBuildRestAddprojectwithcredsPost()`

```php
environmentBuildRestAddprojectwithcredsPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $deployNow, $login, $branch, $password, $delay, $context, $interval, $workDir, $hooks, $targetEnv): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse
```



Adds the project from VCS to the environment. <br/>   Authentication via login and password is used.<br/>   In case your environment contains more than one application server node, you need to call this method for each of them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoUpdate = True; // bool
$type = 'type_example'; // string
$path = 'path_example'; // string
$autoResolveConflict = True; // bool
$envName = 'envName_example'; // string
$name = 'name_example'; // string
$nodeId = 56; // int
$deployNow = True; // bool
$login = 'login_example'; // string
$branch = 'branch_example'; // string
$password = 'password_example'; // string
$delay = 56; // int
$context = 'context_example'; // string
$interval = 'interval_example'; // string
$workDir = 'workDir_example'; // string
$hooks = 'hooks_example'; // string
$targetEnv = 'targetEnv_example'; // string

try {
    $result = $apiInstance->environmentBuildRestAddprojectwithcredsPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $deployNow, $login, $branch, $password, $delay, $context, $interval, $workDir, $hooks, $targetEnv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestAddprojectwithcredsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoUpdate** | **bool**|  | |
| **type** | **string**|  | |
| **path** | **string**|  | |
| **autoResolveConflict** | **bool**|  | |
| **envName** | **string**|  | |
| **name** | **string**|  | |
| **nodeId** | **int**|  | |
| **deployNow** | **bool**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **password** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **context** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **workDir** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |
| **targetEnv** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBuildRestAddprojectwithkeyPost()`

```php
environmentBuildRestAddprojectwithkeyPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $deployNow, $keyId, $branch, $delay, $context, $interval, $workDir, $hooks, $targetEnv): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse
```



Adds the project from VCS to the environment. <br/>   Authentication via ssh key is used.<br/>   In case your environment contains more than one application server node, you need to call this method for each of them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoUpdate = True; // bool
$type = 'type_example'; // string
$path = 'path_example'; // string
$autoResolveConflict = True; // bool
$envName = 'envName_example'; // string
$name = 'name_example'; // string
$nodeId = 56; // int
$deployNow = True; // bool
$keyId = 56; // int
$branch = 'branch_example'; // string
$delay = 56; // int
$context = 'context_example'; // string
$interval = 'interval_example'; // string
$workDir = 'workDir_example'; // string
$hooks = 'hooks_example'; // string
$targetEnv = 'targetEnv_example'; // string

try {
    $result = $apiInstance->environmentBuildRestAddprojectwithkeyPost($autoUpdate, $type, $path, $autoResolveConflict, $envName, $name, $nodeId, $deployNow, $keyId, $branch, $delay, $context, $interval, $workDir, $hooks, $targetEnv);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestAddprojectwithkeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoUpdate** | **bool**|  | |
| **type** | **string**|  | |
| **path** | **string**|  | |
| **autoResolveConflict** | **bool**|  | |
| **envName** | **string**|  | |
| **name** | **string**|  | |
| **nodeId** | **int**|  | |
| **deployNow** | **bool**|  | [optional] |
| **keyId** | **int**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **context** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **workDir** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |
| **targetEnv** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBuildRestBuilddeployprojectPost()`

```php
environmentBuildRestBuilddeployprojectPost($envName, $nodeid, $projectid, $delay, $update, $isSequential): \OpenAPI\Client\Model\ComHivextApiResponse
```



Builds the project from VCS and deploys it to the needed environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$projectid = 56; // int
$delay = 56; // int
$update = True; // bool
$isSequential = True; // bool

try {
    $result = $apiInstance->environmentBuildRestBuilddeployprojectPost($envName, $nodeid, $projectid, $delay, $update, $isSequential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestBuilddeployprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectid** | **int**|  | |
| **delay** | **int**|  | [optional] |
| **update** | **bool**|  | [optional] |
| **isSequential** | **bool**|  | [optional] |

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

## `environmentBuildRestBuildprojectPost()`

```php
environmentBuildRestBuildprojectPost($envName, $nodeid, $projectid, $async, $skipPublish, $update): \OpenAPI\Client\Model\ComHivextApiResponse
```



Builds the project and adds it to the list of packages in the platform Deployment Manager.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$projectid = 56; // int
$async = True; // bool
$skipPublish = True; // bool
$update = True; // bool

try {
    $result = $apiInstance->environmentBuildRestBuildprojectPost($envName, $nodeid, $projectid, $async, $skipPublish, $update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestBuildprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectid** | **int**|  | |
| **async** | **bool**|  | [optional] |
| **skipPublish** | **bool**|  | [optional] |
| **update** | **bool**|  | [optional] |

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

## `environmentBuildRestDeployprojectPost()`

```php
environmentBuildRestDeployprojectPost($envName, $nodeid, $projectid, $delay, $isSequential): \OpenAPI\Client\Model\ComHivextApiResponse
```



Builds the project from VCS and deploys it to the needed environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$projectid = 56; // int
$delay = 56; // int
$isSequential = True; // bool

try {
    $result = $apiInstance->environmentBuildRestDeployprojectPost($envName, $nodeid, $projectid, $delay, $isSequential);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestDeployprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectid** | **int**|  | |
| **delay** | **int**|  | [optional] |
| **isSequential** | **bool**|  | [optional] |

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

## `environmentBuildRestEditprojectPost()`

```php
environmentBuildRestEditprojectPost($type, $path, $envName, $name, $nodeid, $projectid, $targetNodeGroup, $keyId, $login, $env, $branch, $autoupdate, $password, $delay, $autoResolveConflict, $context, $repoHash, $interval, $workDir, $hooks): \OpenAPI\Client\Model\ComHivextApiResponse
```



Applies required changes to the project from VCS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$name = 'name_example'; // string
$nodeid = 56; // int
$projectid = 56; // int
$targetNodeGroup = 'targetNodeGroup_example'; // string
$keyId = 56; // int
$login = 'login_example'; // string
$env = 'env_example'; // string
$branch = 'branch_example'; // string
$autoupdate = True; // bool
$password = 'password_example'; // string
$delay = 56; // int
$autoResolveConflict = True; // bool
$context = 'context_example'; // string
$repoHash = 'repoHash_example'; // string
$interval = 'interval_example'; // string
$workDir = 'workDir_example'; // string
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentBuildRestEditprojectPost($type, $path, $envName, $name, $nodeid, $projectid, $targetNodeGroup, $keyId, $login, $env, $branch, $autoupdate, $password, $delay, $autoResolveConflict, $context, $repoHash, $interval, $workDir, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestEditprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**|  | |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **name** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectid** | **int**|  | |
| **targetNodeGroup** | **string**|  | [optional] |
| **keyId** | **int**|  | [optional] |
| **login** | **string**|  | [optional] |
| **env** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **autoupdate** | **bool**|  | [optional] |
| **password** | **string**|  | [optional] |
| **delay** | **int**|  | [optional] |
| **autoResolveConflict** | **bool**|  | [optional] |
| **context** | **string**|  | [optional] |
| **repoHash** | **string**|  | [optional] |
| **interval** | **string**|  | [optional] |
| **workDir** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |

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

## `environmentBuildRestGetprojectinfoPost()`

```php
environmentBuildRestGetprojectinfoPost($envName, $nodeid, $projectName, $projectid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse
```



Gets information about build configuration of the VCS project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$projectName = 'projectName_example'; // string
$projectid = 56; // int

try {
    $result = $apiInstance->environmentBuildRestGetprojectinfoPost($envName, $nodeid, $projectName, $projectid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestGetprojectinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectName** | **string**|  | [optional] |
| **projectid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBuildRestGetprojectsPost()`

```php
environmentBuildRestGetprojectsPost($envName, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponses
```



Gets information build projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentBuildRestGetprojectsPost($envName, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestGetprojectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseBuildProjectResponses**](../Model/ComHivextApiServerEnvironmentResponseBuildProjectResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBuildRestRemoveprojectPost()`

```php
environmentBuildRestRemoveprojectPost($envName, $nodeid, $projectid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deletes the project that is configured to be deployed from VCS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$projectid = 56; // int

try {
    $result = $apiInstance->environmentBuildRestRemoveprojectPost($envName, $nodeid, $projectid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestRemoveprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **projectid** | **int**|  | |

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

## `environmentBuildRestUpdatePost()`

```php
environmentBuildRestUpdatePost($envName, $nodeId, $context, $projectId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Update build projects from repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BuildServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeId = 56; // int
$context = 'context_example'; // string
$projectId = 56; // int

try {
    $result = $apiInstance->environmentBuildRestUpdatePost($envName, $nodeId, $context, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildServiceApi->environmentBuildRestUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeId** | **int**|  | |
| **context** | **string**|  | [optional] |
| **projectId** | **int**|  | [optional] |

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
