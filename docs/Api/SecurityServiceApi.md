# OpenAPI\Client\SecurityServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentSecurityRestAddrulePost()**](SecurityServiceApi.md#environmentSecurityRestAddrulePost) | **POST** /environment/security/rest/addrule |  |
| [**environmentSecurityRestAddrulesPost()**](SecurityServiceApi.md#environmentSecurityRestAddrulesPost) | **POST** /environment/security/rest/addrules |  |
| [**environmentSecurityRestEditrulePost()**](SecurityServiceApi.md#environmentSecurityRestEditrulePost) | **POST** /environment/security/rest/editrule |  |
| [**environmentSecurityRestGetrulesPost()**](SecurityServiceApi.md#environmentSecurityRestGetrulesPost) | **POST** /environment/security/rest/getrules |  |
| [**environmentSecurityRestRemoverulePost()**](SecurityServiceApi.md#environmentSecurityRestRemoverulePost) | **POST** /environment/security/rest/removerule |  |
| [**environmentSecurityRestRemoverulesPost()**](SecurityServiceApi.md#environmentSecurityRestRemoverulesPost) | **POST** /environment/security/rest/removerules |  |
| [**environmentSecurityRestSetfirewallenabledPost()**](SecurityServiceApi.md#environmentSecurityRestSetfirewallenabledPost) | **POST** /environment/security/rest/setfirewallenabled |  |
| [**environmentSecurityRestSetruleenabledPost()**](SecurityServiceApi.md#environmentSecurityRestSetruleenabledPost) | **POST** /environment/security/rest/setruleenabled |  |
| [**environmentSecurityRestSetrulesPost()**](SecurityServiceApi.md#environmentSecurityRestSetrulesPost) | **POST** /environment/security/rest/setrules |  |


## `environmentSecurityRestAddrulePost()`

```php
environmentSecurityRestAddrulePost($envName, $rule, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Adds a new firewall rule to the nodeGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$rule = new \OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule(); // \OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentSecurityRestAddrulePost($envName, $rule, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestAddrulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **rule** | [**\OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule**](../Model/EnvironmentSecurityRestEditrulePostRequestRule.md)|  | |
| **nodeGroup** | **string**|  | [optional] |

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

## `environmentSecurityRestAddrulesPost()`

```php
environmentSecurityRestAddrulesPost($envName, $rules, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Adds new firewall rules to the nodeGroup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$rules = 'rules_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentSecurityRestAddrulesPost($envName, $rules, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestAddrulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **rules** | **string**|  | |
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

## `environmentSecurityRestEditrulePost()`

```php
environmentSecurityRestEditrulePost($envName, $rule): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Applies required changes to the previously added firewall rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$rule = new \OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule(); // \OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule

try {
    $result = $apiInstance->environmentSecurityRestEditrulePost($envName, $rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestEditrulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **rule** | [**\OpenAPI\Client\Model\EnvironmentSecurityRestEditrulePostRequestRule**](../Model/EnvironmentSecurityRestEditrulePostRequestRule.md)|  | |

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

## `environmentSecurityRestGetrulesPost()`

```php
environmentSecurityRestGetrulesPost($envName, $nodeGroup, $direction): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Provides information about firewall rules for the environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$direction = 'direction_example'; // string

try {
    $result = $apiInstance->environmentSecurityRestGetrulesPost($envName, $nodeGroup, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestGetrulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **direction** | **string**|  | [optional] |

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

## `environmentSecurityRestRemoverulePost()`

```php
environmentSecurityRestRemoverulePost($envName, $id): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes the existing firewall rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$id = 56; // int

try {
    $result = $apiInstance->environmentSecurityRestRemoverulePost($envName, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestRemoverulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
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

## `environmentSecurityRestRemoverulesPost()`

```php
environmentSecurityRestRemoverulesPost($envName, $ids): \OpenAPI\Client\Model\ComHivextApiResponse
```



Removes existing firewall rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$ids = array(new \stdClass); // object[]

try {
    $result = $apiInstance->environmentSecurityRestRemoverulesPost($envName, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestRemoverulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **ids** | [**object[]**](../Model/object.md)|  | |

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

## `environmentSecurityRestSetfirewallenabledPost()`

```php
environmentSecurityRestSetfirewallenabledPost($envName, $enabled): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables or disables a firewall state for the specific environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$enabled = True; // bool

try {
    $result = $apiInstance->environmentSecurityRestSetfirewallenabledPost($envName, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestSetfirewallenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **enabled** | **bool**|  | |

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

## `environmentSecurityRestSetruleenabledPost()`

```php
environmentSecurityRestSetruleenabledPost($envName, $id, $enabled): \OpenAPI\Client\Model\ComHivextApiResponse
```



Enables or disables a specific firewall rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$id = 56; // int
$enabled = True; // bool

try {
    $result = $apiInstance->environmentSecurityRestSetruleenabledPost($envName, $id, $enabled);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestSetruleenabledPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **id** | **int**|  | |
| **enabled** | **bool**|  | |

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

## `environmentSecurityRestSetrulesPost()`

```php
environmentSecurityRestSetrulesPost($envName, $rules, $nodeGroup): \OpenAPI\Client\Model\ComHivextApiResponse
```



Replaces all existing rules with new one

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SecurityServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$rules = 'rules_example'; // string
$nodeGroup = 'nodeGroup_example'; // string

try {
    $result = $apiInstance->environmentSecurityRestSetrulesPost($envName, $rules, $nodeGroup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityServiceApi->environmentSecurityRestSetrulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **rules** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |

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
