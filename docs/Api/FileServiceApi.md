# OpenAPI\Client\FileServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentFileRestAddfavoritePost()**](FileServiceApi.md#environmentFileRestAddfavoritePost) | **POST** /environment/file/rest/addfavorite |  |
| [**environmentFileRestAddmountpointbygroupPost()**](FileServiceApi.md#environmentFileRestAddmountpointbygroupPost) | **POST** /environment/file/rest/addmountpointbygroup |  |
| [**environmentFileRestAddmountpointbyidPost()**](FileServiceApi.md#environmentFileRestAddmountpointbyidPost) | **POST** /environment/file/rest/addmountpointbyid |  |
| [**environmentFileRestAppendPost()**](FileServiceApi.md#environmentFileRestAppendPost) | **POST** /environment/file/rest/append |  |
| [**environmentFileRestCheckcrossmountPost()**](FileServiceApi.md#environmentFileRestCheckcrossmountPost) | **POST** /environment/file/rest/checkcrossmount |  |
| [**environmentFileRestCopyPost()**](FileServiceApi.md#environmentFileRestCopyPost) | **POST** /environment/file/rest/copy |  |
| [**environmentFileRestCreatePost()**](FileServiceApi.md#environmentFileRestCreatePost) | **POST** /environment/file/rest/create |  |
| [**environmentFileRestDeletePost()**](FileServiceApi.md#environmentFileRestDeletePost) | **POST** /environment/file/rest/delete |  |
| [**environmentFileRestGetexportedlistPost()**](FileServiceApi.md#environmentFileRestGetexportedlistPost) | **POST** /environment/file/rest/getexportedlist |  |
| [**environmentFileRestGetfavoritesPost()**](FileServiceApi.md#environmentFileRestGetfavoritesPost) | **POST** /environment/file/rest/getfavorites |  |
| [**environmentFileRestGetlistPost()**](FileServiceApi.md#environmentFileRestGetlistPost) | **POST** /environment/file/rest/getlist |  |
| [**environmentFileRestGetmountpointsPost()**](FileServiceApi.md#environmentFileRestGetmountpointsPost) | **POST** /environment/file/rest/getmountpoints |  |
| [**environmentFileRestReadPost()**](FileServiceApi.md#environmentFileRestReadPost) | **POST** /environment/file/rest/read |  |
| [**environmentFileRestRemoveexportPost()**](FileServiceApi.md#environmentFileRestRemoveexportPost) | **POST** /environment/file/rest/removeexport |  |
| [**environmentFileRestRemovefavoritePost()**](FileServiceApi.md#environmentFileRestRemovefavoritePost) | **POST** /environment/file/rest/removefavorite |  |
| [**environmentFileRestRemovemountpointbygroupPost()**](FileServiceApi.md#environmentFileRestRemovemountpointbygroupPost) | **POST** /environment/file/rest/removemountpointbygroup |  |
| [**environmentFileRestRemovemountpointbyidPost()**](FileServiceApi.md#environmentFileRestRemovemountpointbyidPost) | **POST** /environment/file/rest/removemountpointbyid |  |
| [**environmentFileRestRenamePost()**](FileServiceApi.md#environmentFileRestRenamePost) | **POST** /environment/file/rest/rename |  |
| [**environmentFileRestReplaceinbodyPost()**](FileServiceApi.md#environmentFileRestReplaceinbodyPost) | **POST** /environment/file/rest/replaceinbody |  |
| [**environmentFileRestUnpackbyidPost()**](FileServiceApi.md#environmentFileRestUnpackbyidPost) | **POST** /environment/file/rest/unpackbyid |  |
| [**environmentFileRestUnpackbytypePost()**](FileServiceApi.md#environmentFileRestUnpackbytypePost) | **POST** /environment/file/rest/unpackbytype |  |
| [**environmentFileRestUploadPost()**](FileServiceApi.md#environmentFileRestUploadPost) | **POST** /environment/file/rest/upload |  |
| [**environmentFileRestWritePost()**](FileServiceApi.md#environmentFileRestWritePost) | **POST** /environment/file/rest/write |  |


## `environmentFileRestAddfavoritePost()`

```php
environmentFileRestAddfavoritePost($path, $envName, $filter, $keyword, $nodeGroup, $nodeId, $isDir): \OpenAPI\Client\Model\ComHivextApiResponse
```



Adds favorite by keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$filter = 'filter_example'; // string
$keyword = 'keyword_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int
$isDir = True; // bool

try {
    $result = $apiInstance->environmentFileRestAddfavoritePost($path, $envName, $filter, $keyword, $nodeGroup, $nodeId, $isDir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestAddfavoritePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **filter** | **string**|  | [optional] |
| **keyword** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |
| **isDir** | **bool**|  | [optional] |

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

## `environmentFileRestAddmountpointbygroupPost()`

```php
environmentFileRestAddmountpointbygroupPost($path, $envName, $nodeGroup, $sourcePath, $protocol, $sourceNodeId, $sourceHost, $name, $readOnly, $sourceAddressType): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$sourcePath = 'sourcePath_example'; // string
$protocol = 'protocol_example'; // string
$sourceNodeId = 56; // int
$sourceHost = 'sourceHost_example'; // string
$name = 'name_example'; // string
$readOnly = True; // bool
$sourceAddressType = 'sourceAddressType_example'; // string

try {
    $result = $apiInstance->environmentFileRestAddmountpointbygroupPost($path, $envName, $nodeGroup, $sourcePath, $protocol, $sourceNodeId, $sourceHost, $name, $readOnly, $sourceAddressType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestAddmountpointbygroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | |
| **sourcePath** | **string**|  | |
| **protocol** | **string**|  | [optional] |
| **sourceNodeId** | **int**|  | [optional] |
| **sourceHost** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **readOnly** | **bool**|  | [optional] |
| **sourceAddressType** | **string**|  | [optional] |

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

## `environmentFileRestAddmountpointbyidPost()`

```php
environmentFileRestAddmountpointbyidPost($path, $envName, $nodeId, $sourcePath, $protocol, $sourceNodeId, $sourceHost, $name, $readOnly, $sourceAddressType): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeId = 56; // int
$sourcePath = 'sourcePath_example'; // string
$protocol = 'protocol_example'; // string
$sourceNodeId = 56; // int
$sourceHost = 'sourceHost_example'; // string
$name = 'name_example'; // string
$readOnly = True; // bool
$sourceAddressType = 'sourceAddressType_example'; // string

try {
    $result = $apiInstance->environmentFileRestAddmountpointbyidPost($path, $envName, $nodeId, $sourcePath, $protocol, $sourceNodeId, $sourceHost, $name, $readOnly, $sourceAddressType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestAddmountpointbyidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeId** | **int**|  | |
| **sourcePath** | **string**|  | |
| **protocol** | **string**|  | [optional] |
| **sourceNodeId** | **int**|  | [optional] |
| **sourceHost** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |
| **readOnly** | **bool**|  | [optional] |
| **sourceAddressType** | **string**|  | [optional] |

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

## `environmentFileRestAppendPost()`

```php
environmentFileRestAppendPost($envName, $path, $body, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Writes text to end of the specified within path string file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$path = 'path_example'; // string
$body = 'body_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestAppendPost($envName, $path, $body, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestAppendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **path** | **string**|  | [optional] |
| **body** | **string**|  | [optional] |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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

## `environmentFileRestCheckcrossmountPost()`

```php
environmentFileRestCheckcrossmountPost($envName, $sourceNodeId, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$sourceNodeId = 56; // int
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentFileRestCheckcrossmountPost($envName, $sourceNodeId, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestCheckcrossmountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **sourceNodeId** | **int**|  | |
| **nodeId** | **int**|  | |

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

## `environmentFileRestCopyPost()`

```php
environmentFileRestCopyPost($src, $envName, $dest, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Makes the copy of the file from the source path and puts it to the destination path.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src = 'src_example'; // string
$envName = 'envName_example'; // string
$dest = 'dest_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestCopyPost($src, $envName, $dest, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestCopyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **src** | **string**|  | |
| **envName** | **string**|  | |
| **dest** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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

## `environmentFileRestCreatePost()`

```php
environmentFileRestCreatePost($path, $envName, $nodeType, $masterOnly, $nodeGroup, $nodeid, $isdir): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFilePermissionResponse
```



Creates a new empty file named according to the pathname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int
$isdir = True; // bool

try {
    $result = $apiInstance->environmentFileRestCreatePost($path, $envName, $nodeType, $masterOnly, $nodeGroup, $nodeid, $isdir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |
| **isdir** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFilePermissionResponse**](../Model/ComHivextApiServerEnvironmentResponseFilePermissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentFileRestDeletePost()`

```php
environmentFileRestDeletePost($path, $envName, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeSSHResponses
```



Deletes the file or directory denoted in the pathname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestDeletePost($path, $envName, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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

## `environmentFileRestGetexportedlistPost()`

```php
environmentFileRestGetexportedlistPost($envName, $nodeId, $path): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeId = 56; // int
$path = 'path_example'; // string

try {
    $result = $apiInstance->environmentFileRestGetexportedlistPost($envName, $nodeId, $path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestGetexportedlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeId** | **int**|  | |
| **path** | **string**|  | [optional] |

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

## `environmentFileRestGetfavoritesPost()`

```php
environmentFileRestGetfavoritesPost($envName, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFavoriteListResponse
```



Returns the list of favorites directory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentFileRestGetfavoritesPost($envName, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestGetfavoritesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFavoriteListResponse**](../Model/ComHivextApiServerEnvironmentResponseFavoriteListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentFileRestGetlistPost()`

```php
environmentFileRestGetlistPost($envName, $filter, $path, $nodeType, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFilesListResponse
```



Returns the list of files in the specified directory.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$filter = 'filter_example'; // string
$path = 'path_example'; // string
$nodeType = 'nodeType_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestGetlistPost($envName, $filter, $path, $nodeType, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestGetlistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **filter** | **string**|  | [optional] |
| **path** | **string**|  | [optional] |
| **nodeType** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFilesListResponse**](../Model/ComHivextApiServerEnvironmentResponseFilesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentFileRestGetmountpointsPost()`

```php
environmentFileRestGetmountpointsPost($envName, $nodeId, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeId = 56; // int
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentFileRestGetmountpointsPost($envName, $nodeId, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestGetmountpointsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeId** | **int**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |

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

## `environmentFileRestReadPost()`

```php
environmentFileRestReadPost($path, $envName, $nodeType, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFileReadResponse
```



Returns the body of the file, specified within path string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeType = 'nodeType_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestReadPost($path, $envName, $nodeType, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestReadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseFileReadResponse**](../Model/ComHivextApiServerEnvironmentResponseFileReadResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentFileRestRemoveexportPost()`

```php
environmentFileRestRemoveexportPost($path, $clientPath, $envName, $nodeId, $clientNodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$clientPath = 'clientPath_example'; // string
$envName = 'envName_example'; // string
$nodeId = 56; // int
$clientNodeId = 56; // int

try {
    $result = $apiInstance->environmentFileRestRemoveexportPost($path, $clientPath, $envName, $nodeId, $clientNodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestRemoveexportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **clientPath** | **string**|  | |
| **envName** | **string**|  | |
| **nodeId** | **int**|  | |
| **clientNodeId** | **int**|  | |

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

## `environmentFileRestRemovefavoritePost()`

```php
environmentFileRestRemovefavoritePost($path, $envName, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes favorite by keyword.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentFileRestRemovefavoritePost($path, $envName, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestRemovefavoritePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

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

## `environmentFileRestRemovemountpointbygroupPost()`

```php
environmentFileRestRemovemountpointbygroupPost($path, $envName, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentFileRestRemovemountpointbygroupPost($path, $envName, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestRemovemountpointbygroupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
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

## `environmentFileRestRemovemountpointbyidPost()`

```php
environmentFileRestRemovemountpointbyidPost($path, $envName, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentFileRestRemovemountpointbyidPost($path, $envName, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestRemovemountpointbyidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
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

## `environmentFileRestRenamePost()`

```php
environmentFileRestRenamePost($envName, $oldPath, $newPath, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeSSHResponses
```



Renames the file denoted in the pathname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$oldPath = 'oldPath_example'; // string
$newPath = 'newPath_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestRenamePost($envName, $oldPath, $newPath, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestRenamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **oldPath** | **string**|  | |
| **newPath** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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

## `environmentFileRestReplaceinbodyPost()`

```php
environmentFileRestReplaceinbodyPost($path, $envName, $pattern, $replacement, $nth, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Finds and replaces the pattern in the file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$pattern = 'pattern_example'; // string
$replacement = 'replacement_example'; // string
$nth = 56; // int
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestReplaceinbodyPost($path, $envName, $pattern, $replacement, $nth, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestReplaceinbodyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **pattern** | **string**|  | |
| **replacement** | **string**|  | |
| **nth** | **int**|  | [optional] |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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

## `environmentFileRestUnpackbyidPost()`

```php
environmentFileRestUnpackbyidPost($envName, $destPath, $nodeId, $sourcePath): \OpenAPI\Client\Model\ComHivextApiResponse
```



Unpacks archive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$destPath = 'destPath_example'; // string
$nodeId = 56; // int
$sourcePath = 'sourcePath_example'; // string

try {
    $result = $apiInstance->environmentFileRestUnpackbyidPost($envName, $destPath, $nodeId, $sourcePath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestUnpackbyidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **destPath** | **string**|  | |
| **nodeId** | **int**|  | |
| **sourcePath** | **string**|  | |

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

## `environmentFileRestUnpackbytypePost()`

```php
environmentFileRestUnpackbytypePost($envName, $destPath, $nodeType, $sourcePath): \OpenAPI\Client\Model\ComHivextApiResponse
```



Unpacks archive.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$destPath = 'destPath_example'; // string
$nodeType = 'nodeType_example'; // string
$sourcePath = 'sourcePath_example'; // string

try {
    $result = $apiInstance->environmentFileRestUnpackbytypePost($envName, $destPath, $nodeType, $sourcePath);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestUnpackbytypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **destPath** | **string**|  | |
| **nodeType** | **string**|  | |
| **sourcePath** | **string**|  | |

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

## `environmentFileRestUploadPost()`

```php
environmentFileRestUploadPost($envName, $destPath, $sourcePath, $nodeType, $masterOnly, $nodeGroup, $nodeid, $overwrite): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseNodeSSHResponses
```



Uploads the file specified within path string.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$destPath = 'destPath_example'; // string
$sourcePath = 'sourcePath_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int
$overwrite = True; // bool

try {
    $result = $apiInstance->environmentFileRestUploadPost($envName, $destPath, $sourcePath, $nodeType, $masterOnly, $nodeGroup, $nodeid, $overwrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **destPath** | **string**|  | |
| **sourcePath** | **string**|  | |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |
| **overwrite** | **bool**|  | [optional] |

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

## `environmentFileRestWritePost()`

```php
environmentFileRestWritePost($path, $envName, $isAppendMode, $body, $nodeType, $masterOnly, $nodeGroup, $nodeid): \OpenAPI\Client\Model\ComHivextApiResponse
```



Writes text to the specified within path string file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FileServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = 'path_example'; // string
$envName = 'envName_example'; // string
$isAppendMode = True; // bool
$body = 'body_example'; // string
$nodeType = 'nodeType_example'; // string
$masterOnly = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentFileRestWritePost($path, $envName, $isAppendMode, $body, $nodeType, $masterOnly, $nodeGroup, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileServiceApi->environmentFileRestWritePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **path** | **string**|  | |
| **envName** | **string**|  | |
| **isAppendMode** | **bool**|  | [optional] |
| **body** | **string**|  | [optional] |
| **nodeType** | **string**|  | [optional] |
| **masterOnly** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeid** | **int**|  | [optional] |

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
