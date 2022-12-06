# OpenAPI\Client\DeploymentServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentDeploymentRestAddbuildprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestAddbuildprojectPost) | **POST** /environment/deployment/rest/addbuildproject |  |
| [**environmentDeploymentRestAddrepoPost()**](DeploymentServiceApi.md#environmentDeploymentRestAddrepoPost) | **POST** /environment/deployment/rest/addrepo |  |
| [**environmentDeploymentRestBuilddeployprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestBuilddeployprojectPost) | **POST** /environment/deployment/rest/builddeployproject |  |
| [**environmentDeploymentRestBuildprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestBuildprojectPost) | **POST** /environment/deployment/rest/buildproject |  |
| [**environmentDeploymentRestDeployPost()**](DeploymentServiceApi.md#environmentDeploymentRestDeployPost) | **POST** /environment/deployment/rest/deploy |  |
| [**environmentDeploymentRestDeployarchivePost()**](DeploymentServiceApi.md#environmentDeploymentRestDeployarchivePost) | **POST** /environment/deployment/rest/deployarchive |  |
| [**environmentDeploymentRestDeployprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestDeployprojectPost) | **POST** /environment/deployment/rest/deployproject |  |
| [**environmentDeploymentRestEditbuildprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestEditbuildprojectPost) | **POST** /environment/deployment/rest/editbuildproject |  |
| [**environmentDeploymentRestEditprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestEditprojectPost) | **POST** /environment/deployment/rest/editproject |  |
| [**environmentDeploymentRestEditrepoPost()**](DeploymentServiceApi.md#environmentDeploymentRestEditrepoPost) | **POST** /environment/deployment/rest/editrepo |  |
| [**environmentDeploymentRestGetbuildprojectinfoPost()**](DeploymentServiceApi.md#environmentDeploymentRestGetbuildprojectinfoPost) | **POST** /environment/deployment/rest/getbuildprojectinfo |  |
| [**environmentDeploymentRestGetbuildprojectsPost()**](DeploymentServiceApi.md#environmentDeploymentRestGetbuildprojectsPost) | **POST** /environment/deployment/rest/getbuildprojects |  |
| [**environmentDeploymentRestGetdeploymentsPost()**](DeploymentServiceApi.md#environmentDeploymentRestGetdeploymentsPost) | **POST** /environment/deployment/rest/getdeployments |  |
| [**environmentDeploymentRestGethooksPost()**](DeploymentServiceApi.md#environmentDeploymentRestGethooksPost) | **POST** /environment/deployment/rest/gethooks |  |
| [**environmentDeploymentRestGetprojectinfoPost()**](DeploymentServiceApi.md#environmentDeploymentRestGetprojectinfoPost) | **POST** /environment/deployment/rest/getprojectinfo |  |
| [**environmentDeploymentRestGetreposPost()**](DeploymentServiceApi.md#environmentDeploymentRestGetreposPost) | **POST** /environment/deployment/rest/getrepos |  |
| [**environmentDeploymentRestRemovebuildprojectPost()**](DeploymentServiceApi.md#environmentDeploymentRestRemovebuildprojectPost) | **POST** /environment/deployment/rest/removebuildproject |  |
| [**environmentDeploymentRestRemoverepoPost()**](DeploymentServiceApi.md#environmentDeploymentRestRemoverepoPost) | **POST** /environment/deployment/rest/removerepo |  |
| [**environmentDeploymentRestRenamecontextPost()**](DeploymentServiceApi.md#environmentDeploymentRestRenamecontextPost) | **POST** /environment/deployment/rest/renamecontext |  |
| [**environmentDeploymentRestUndeployPost()**](DeploymentServiceApi.md#environmentDeploymentRestUndeployPost) | **POST** /environment/deployment/rest/undeploy |  |
| [**environmentDeploymentRestUpdatePost()**](DeploymentServiceApi.md#environmentDeploymentRestUpdatePost) | **POST** /environment/deployment/rest/update |  |


## `environmentDeploymentRestAddbuildprojectPost()`

```php
environmentDeploymentRestAddbuildprojectPost($envName, $repo, $name, $nodeId, $settings, $hooks, $deployment): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse
```



Adds Java project from the Deployment Manager storage to Maven build node without its actual deployment (subsequently, the <i>BuildDeployProject</i>, <i>BuildProjectEntity</i> or <i>DeployProject</i> could be called)<br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$repo = 'repo_example'; // string
$name = 'name_example'; // string
$nodeId = 56; // int
$settings = new \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings
$hooks = 'hooks_example'; // string
$deployment = new \OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment

try {
    $result = $apiInstance->environmentDeploymentRestAddbuildprojectPost($envName, $repo, $name, $nodeId, $settings, $hooks, $deployment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestAddbuildprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **repo** | **string**|  | |
| **name** | **string**|  | |
| **nodeId** | **int**|  | |
| **settings** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings**](../Model/EnvironmentDeploymentRestEditprojectPostRequestSettings.md)|  | [optional] |
| **hooks** | **string**|  | [optional] |
| **deployment** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment**](../Model/EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestAddrepoPost()`

```php
environmentDeploymentRestAddrepoPost($name, $url, $password, $keyId, $description, $type, $login, $branch): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Adds project from the remote VCS repository to the Deployment Manager storage (i.e. saves the appropriate link and authentication credentials/SSH key for its acсess) to allow its subsequent deployment with the <i>Deploy</i> method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string
$url = 'url_example'; // string
$password = 'password_example'; // string
$keyId = 56; // int
$description = 'description_example'; // string
$type = 'type_example'; // string
$login = 'login_example'; // string
$branch = 'branch_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestAddrepoPost($name, $url, $password, $keyId, $description, $type, $login, $branch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestAddrepoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **url** | **string**|  | |
| **password** | **string**|  | [optional] |
| **keyId** | **int**|  | [optional] |
| **description** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |

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

## `environmentDeploymentRestBuilddeployprojectPost()`

```php
environmentDeploymentRestBuilddeployprojectPost($envName, $project, $nodeId, $delay, $skipUpdate): \OpenAPI\Client\Model\ComHivextApiResponse
```



Builds and deploys a project, that has been previously added to the corresponding Maven build node with the AddBuildProject method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int
$delay = 56; // int
$skipUpdate = True; // bool

try {
    $result = $apiInstance->environmentDeploymentRestBuilddeployprojectPost($envName, $project, $nodeId, $delay, $skipUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestBuilddeployprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |
| **delay** | **int**|  | [optional] |
| **skipUpdate** | **bool**|  | [optional] |

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

## `environmentDeploymentRestBuildprojectPost()`

```php
environmentDeploymentRestBuildprojectPost($envName, $project, $nodeId, $skipUpload, $skipUpdate): \OpenAPI\Client\Model\ComHivextApiResponse
```



Builds a project, that has been previously added to the Maven build node with the <i>AddBuildProject</i> method

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int
$skipUpload = True; // bool
$skipUpdate = True; // bool

try {
    $result = $apiInstance->environmentDeploymentRestBuildprojectPost($envName, $project, $nodeId, $skipUpload, $skipUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestBuildprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |
| **skipUpload** | **bool**|  | [optional] |
| **skipUpdate** | **bool**|  | [optional] |

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

## `environmentDeploymentRestDeployPost()`

```php
environmentDeploymentRestDeployPost($envName, $repo, $context, $settings, $delay, $buildNodeId, $nodeGroup, $hooks): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deploys a VCS project, that has been previously added to the Deployment Manager storage with the <i>AddRepo</i> method, into the defined node group (<i>cp</i> or <i>extra</i> user-named environment layer)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$repo = 'repo_example'; // string
$context = 'context_example'; // string
$settings = new \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings
$delay = 56; // int
$buildNodeId = 56; // int
$nodeGroup = 'nodeGroup_example'; // string
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestDeployPost($envName, $repo, $context, $settings, $delay, $buildNodeId, $nodeGroup, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestDeployPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **repo** | **string**|  | |
| **context** | **string**|  | |
| **settings** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings**](../Model/EnvironmentDeploymentRestEditprojectPostRequestSettings.md)|  | [optional] |
| **delay** | **int**|  | [optional] |
| **buildNodeId** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
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

## `environmentDeploymentRestDeployarchivePost()`

```php
environmentDeploymentRestDeployarchivePost($fileName, $envName, $fileUrl, $delay, $context, $zdt, $nodeGroup, $hooks): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeSSHResponses
```



Deploys project from the archive that is available within the Deployment Manager storage or by direct URL to the specified node group (<i>cp</i> or <i>extra</i> user-named environment layer)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileName = 'fileName_example'; // string
$envName = 'envName_example'; // string
$fileUrl = 'fileUrl_example'; // string
$delay = 56; // int
$context = 'context_example'; // string
$zdt = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestDeployarchivePost($fileName, $envName, $fileUrl, $delay, $context, $zdt, $nodeGroup, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestDeployarchivePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fileName** | **string**|  | |
| **envName** | **string**|  | |
| **fileUrl** | **string**|  | |
| **delay** | **int**|  | [optional] |
| **context** | **string**|  | [optional] |
| **zdt** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeSSHResponses**](../Model/ComHivextApiServerEnvironmentResponseNodeSSHResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestDeployprojectPost()`

```php
environmentDeploymentRestDeployprojectPost($envName, $project, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deploys the project, that has been already built by the Maven build node, to the destination environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestDeployprojectPost($envName, $project, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestDeployprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |

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

## `environmentDeploymentRestEditbuildprojectPost()`

```php
environmentDeploymentRestEditbuildprojectPost($envName, $project, $nodeId, $settings, $repo, $name, $hooks, $deployment): \OpenAPI\Client\Model\ComHivextApiResponse
```



Applies the required changes to the already added but not compiled Java project within Maven build node and builds it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int
$settings = new \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings
$repo = 'repo_example'; // string
$name = 'name_example'; // string
$hooks = 'hooks_example'; // string
$deployment = new \OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment

try {
    $result = $apiInstance->environmentDeploymentRestEditbuildprojectPost($envName, $project, $nodeId, $settings, $repo, $name, $hooks, $deployment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestEditbuildprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |
| **settings** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings**](../Model/EnvironmentDeploymentRestEditprojectPostRequestSettings.md)|  | [optional] |
| **repo** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |
| **deployment** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment**](../Model/EnvironmentDeploymentRestAddbuildprojectPostRequestDeployment.md)|  | [optional] |

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

## `environmentDeploymentRestEditprojectPost()`

```php
environmentDeploymentRestEditprojectPost($envName, $context, $nodeGroup, $settings, $delay, $newContext, $repo, $hooks): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse
```



Applies the required changes to the previously deployed project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$settings = new \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings(); // \OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings
$delay = 56; // int
$newContext = 'newContext_example'; // string
$repo = 'repo_example'; // string
$hooks = 'hooks_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestEditprojectPost($envName, $context, $nodeGroup, $settings, $delay, $newContext, $repo, $hooks);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestEditprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **nodeGroup** | **string**|  | |
| **settings** | [**\OpenAPI\Client\Model\EnvironmentDeploymentRestEditprojectPostRequestSettings**](../Model/EnvironmentDeploymentRestEditprojectPostRequestSettings.md)|  | [optional] |
| **delay** | **int**|  | [optional] |
| **newContext** | **string**|  | [optional] |
| **repo** | **string**|  | [optional] |
| **hooks** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestEditrepoPost()`

```php
environmentDeploymentRestEditrepoPost($id, $password, $name, $keyId, $description, $type, $login, $branch, $url): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Applies the required changes to a project, available within the Deployment Manager storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$password = 'password_example'; // string
$name = 'name_example'; // string
$keyId = 56; // int
$description = 'description_example'; // string
$type = 'type_example'; // string
$login = 'login_example'; // string
$branch = 'branch_example'; // string
$url = 'url_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestEditrepoPost($id, $password, $name, $keyId, $description, $type, $login, $branch, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestEditrepoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **password** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **keyId** | **int**|  | [optional] |
| **description** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **login** | **string**|  | [optional] |
| **branch** | **string**|  | [optional] |
| **url** | **string**|  | [optional] |

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

## `environmentDeploymentRestGetbuildprojectinfoPost()`

```php
environmentDeploymentRestGetbuildprojectinfoPost($envName, $project, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse
```



Provides detailed information on a project, added to the Maven build node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestGetbuildprojectinfoPost($envName, $project, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGetbuildprojectinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestGetbuildprojectsPost()`

```php
environmentDeploymentRestGetbuildprojectsPost($envName, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponses
```



Provides information on IDs and names of all projects, added to the Maven build node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestGetbuildprojectsPost($envName, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGetbuildprojectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponses**](../Model/ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestGetdeploymentsPost()`

```php
environmentDeploymentRestGetdeploymentsPost($envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Provides information about all projects, deployed within the specified node group (<i>cp</i> or <i>extra</i> user-named environment layer)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestGetdeploymentsPost($envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGetdeploymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |

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

## `environmentDeploymentRestGethooksPost()`

```php
environmentDeploymentRestGethooksPost($envName, $context, $project, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Provides information about the hooks (scripts), that should be executed before/after project deployment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$project = 'project_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestGethooksPost($envName, $context, $project, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGethooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | [optional] |
| **project** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

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

## `environmentDeploymentRestGetprojectinfoPost()`

```php
environmentDeploymentRestGetprojectinfoPost($envName, $context, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse
```



Provides information about a particular VCS project, deployed within the specified node group (<i>cp</i> or <i>extra</i> user-named environment layer)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestGetprojectinfoPost($envName, $context, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGetprojectinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse**](../Model/ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentDeploymentRestGetreposPost()`

```php
environmentDeploymentRestGetreposPost($id): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Provides information about all or particular project, which have been added to the Deployment Manager storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestGetreposPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestGetreposPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |

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

## `environmentDeploymentRestRemovebuildprojectPost()`

```php
environmentDeploymentRestRemovebuildprojectPost($envName, $project, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes project from a Maven build node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$project = 'project_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestRemovebuildprojectPost($envName, $project, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestRemovebuildprojectPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **project** | **string**|  | |
| **nodeId** | **int**|  | |

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

## `environmentDeploymentRestRemoverepoPost()`

```php
environmentDeploymentRestRemoverepoPost($id): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes project from the Deployment Manager’s list of uploaded packages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestRemoverepoPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestRemoverepoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

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

## `environmentDeploymentRestRenamecontextPost()`

```php
environmentDeploymentRestRenamecontextPost($oldContext, $newContext, $envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



Moves the already deployed project to another context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$oldContext = 'oldContext_example'; // string
$newContext = 'newContext_example'; // string
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestRenamecontextPost($oldContext, $newContext, $envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestRenamecontextPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oldContext** | **string**|  | |
| **newContext** | **string**|  | |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |

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

## `environmentDeploymentRestUndeployPost()`

```php
environmentDeploymentRestUndeployPost($envName, $context, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes previously deployed project from the specified context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$context = 'context_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentDeploymentRestUndeployPost($envName, $context, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestUndeployPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **context** | **string**|  | |
| **nodeGroup** | **string**|  | |

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

## `environmentDeploymentRestUpdatePost()`

```php
environmentDeploymentRestUpdatePost($envName, $delay, $context, $project, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseVcsUpdateResponse
```



Updates project from VCS repository

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\DeploymentServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$delay = 56; // int
$context = 'context_example'; // string
$project = 'project_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentDeploymentRestUpdatePost($envName, $delay, $context, $project, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentServiceApi->environmentDeploymentRestUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **delay** | **int**|  | [optional] |
| **context** | **string**|  | [optional] |
| **project** | **string**|  | [optional] |
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
