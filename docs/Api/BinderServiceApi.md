# OpenAPI\Client\BinderServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentBinderRestAdddomainsPost()**](BinderServiceApi.md#environmentBinderRestAdddomainsPost) | **POST** /environment/binder/rest/adddomains |  |
| [**environmentBinderRestAddsslcertPost()**](BinderServiceApi.md#environmentBinderRestAddsslcertPost) | **POST** /environment/binder/rest/addsslcert |  |
| [**environmentBinderRestAttachextipPost()**](BinderServiceApi.md#environmentBinderRestAttachextipPost) | **POST** /environment/binder/rest/attachextip |  |
| [**environmentBinderRestBindextdomainPost()**](BinderServiceApi.md#environmentBinderRestBindextdomainPost) | **POST** /environment/binder/rest/bindextdomain |  |
| [**environmentBinderRestBindextdomainsPost()**](BinderServiceApi.md#environmentBinderRestBindextdomainsPost) | **POST** /environment/binder/rest/bindextdomains |  |
| [**environmentBinderRestBindsslPost()**](BinderServiceApi.md#environmentBinderRestBindsslPost) | **POST** /environment/binder/rest/bindssl |  |
| [**environmentBinderRestBindsslcertPost()**](BinderServiceApi.md#environmentBinderRestBindsslcertPost) | **POST** /environment/binder/rest/bindsslcert |  |
| [**environmentBinderRestCheckdomainPost()**](BinderServiceApi.md#environmentBinderRestCheckdomainPost) | **POST** /environment/binder/rest/checkdomain |  |
| [**environmentBinderRestCheckextdomainPost()**](BinderServiceApi.md#environmentBinderRestCheckextdomainPost) | **POST** /environment/binder/rest/checkextdomain |  |
| [**environmentBinderRestDeletesslPost()**](BinderServiceApi.md#environmentBinderRestDeletesslPost) | **POST** /environment/binder/rest/deletessl |  |
| [**environmentBinderRestDetachextipPost()**](BinderServiceApi.md#environmentBinderRestDetachextipPost) | **POST** /environment/binder/rest/detachextip |  |
| [**environmentBinderRestDisablesslPost()**](BinderServiceApi.md#environmentBinderRestDisablesslPost) | **POST** /environment/binder/rest/disablessl |  |
| [**environmentBinderRestEditsslcertPost()**](BinderServiceApi.md#environmentBinderRestEditsslcertPost) | **POST** /environment/binder/rest/editsslcert |  |
| [**environmentBinderRestGetdomainsPost()**](BinderServiceApi.md#environmentBinderRestGetdomainsPost) | **POST** /environment/binder/rest/getdomains |  |
| [**environmentBinderRestGetextdomainsPost()**](BinderServiceApi.md#environmentBinderRestGetextdomainsPost) | **POST** /environment/binder/rest/getextdomains |  |
| [**environmentBinderRestGetsslPost()**](BinderServiceApi.md#environmentBinderRestGetsslPost) | **POST** /environment/binder/rest/getssl |  |
| [**environmentBinderRestGetsslcertsPost()**](BinderServiceApi.md#environmentBinderRestGetsslcertsPost) | **POST** /environment/binder/rest/getsslcerts |  |
| [**environmentBinderRestMoveextipsPost()**](BinderServiceApi.md#environmentBinderRestMoveextipsPost) | **POST** /environment/binder/rest/moveextips |  |
| [**environmentBinderRestRemovedomainsPost()**](BinderServiceApi.md#environmentBinderRestRemovedomainsPost) | **POST** /environment/binder/rest/removedomains |  |
| [**environmentBinderRestRemoveextdomainPost()**](BinderServiceApi.md#environmentBinderRestRemoveextdomainPost) | **POST** /environment/binder/rest/removeextdomain |  |
| [**environmentBinderRestRemovesslPost()**](BinderServiceApi.md#environmentBinderRestRemovesslPost) | **POST** /environment/binder/rest/removessl |  |
| [**environmentBinderRestRemovesslcertsPost()**](BinderServiceApi.md#environmentBinderRestRemovesslcertsPost) | **POST** /environment/binder/rest/removesslcerts |  |
| [**environmentBinderRestSetextipcountPost()**](BinderServiceApi.md#environmentBinderRestSetextipcountPost) | **POST** /environment/binder/rest/setextipcount |  |
| [**environmentBinderRestSwapextdomainsPost()**](BinderServiceApi.md#environmentBinderRestSwapextdomainsPost) | **POST** /environment/binder/rest/swapextdomains |  |
| [**environmentBinderRestSwapextipsPost()**](BinderServiceApi.md#environmentBinderRestSwapextipsPost) | **POST** /environment/binder/rest/swapextips |  |
| [**environmentBinderRestUnbindsslcertPost()**](BinderServiceApi.md#environmentBinderRestUnbindsslcertPost) | **POST** /environment/binder/rest/unbindsslcert |  |


## `environmentBinderRestAdddomainsPost()`

```php
environmentBinderRestAdddomainsPost($envName, $domains, $subdomain, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Assigns additional domains to the target environment. Using the optional nodeGroup or nodeId (has a higher priority if both are specified) parameters, you can set domains for the particular layer or node.<br/>See <a href=\"https://www.virtuozzo.com/application-platform-docs/release-notes-564/#additional-domains-for-environments\">Additional Domains</a>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$domains = 'domains_example'; // string
$subdomain = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestAdddomainsPost($envName, $domains, $subdomain, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestAdddomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **domains** | **string**|  | |
| **subdomain** | **bool**|  | [optional] |
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

## `environmentBinderRestAddsslcertPost()`

```php
environmentBinderRestAddsslcertPost($cert, $key, $interm, $envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponse
```



Create certificate that has to be linked to UID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cert = 'cert_example'; // string
$key = 'key_example'; // string
$interm = 'interm_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestAddsslcertPost($cert, $key, $interm, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestAddsslcertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cert** | **string**|  | |
| **key** | **string**|  | |
| **interm** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponse**](../Model/ComHivextApiServerEnvironmentResponseSSLCertResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestAttachextipPost()`

```php
environmentBinderRestAttachextipPost($envName, $nodeid, $type): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$nodeid = 56; // int
$type = 'type_example'; // string

try {
    $result = $apiInstance->environmentBinderRestAttachextipPost($envName, $nodeid, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestAttachextipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **nodeid** | **int**|  | |
| **type** | **string**|  | [optional] |

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

## `environmentBinderRestBindextdomainPost()`

```php
environmentBinderRestBindextdomainPost($envName, $extdomain, $certId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponse
```



Sets the external domain name for the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$extdomain = 'extdomain_example'; // string
$certId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestBindextdomainPost($envName, $extdomain, $certId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestBindextdomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **extdomain** | **string**|  | |
| **certId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponse**](../Model/ComHivextApiServerEnvironmentResponseExtDomainResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestBindextdomainsPost()`

```php
environmentBinderRestBindextdomainsPost($envName, $extDomains, $certId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponses
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$extDomains = 'extDomains_example'; // string
$certId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestBindextdomainsPost($envName, $extDomains, $certId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestBindextdomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **extDomains** | **string**|  | |
| **certId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponses**](../Model/ComHivextApiServerEnvironmentResponseExtDomainResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestBindsslPost()`

```php
environmentBinderRestBindsslPost($certKey, $envName, $intermediate, $cert): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCustomResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$certKey = 'certKey_example'; // string
$envName = 'envName_example'; // string
$intermediate = 'intermediate_example'; // string
$cert = 'cert_example'; // string

try {
    $result = $apiInstance->environmentBinderRestBindsslPost($certKey, $envName, $intermediate, $cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestBindsslPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **certKey** | **string**|  | |
| **envName** | **string**|  | |
| **intermediate** | **string**|  | |
| **cert** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCustomResponse**](../Model/ComHivextApiServerEnvironmentResponseSSLCustomResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestBindsslcertPost()`

```php
environmentBinderRestBindsslcertPost($envName, $certId, $entryPoint, $extDomains): \OpenAPI\Client\Model\ComHivextApiResponse
```



It binds existing ssl certificate with existing external domains. If entryPoint = ENV, no need to pass extDomains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$certId = 56; // int
$entryPoint = 'entryPoint_example'; // string
$extDomains = 'extDomains_example'; // string

try {
    $result = $apiInstance->environmentBinderRestBindsslcertPost($envName, $certId, $entryPoint, $extDomains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestBindsslcertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **certId** | **int**|  | |
| **entryPoint** | **string**|  | [optional] |
| **extDomains** | **string**|  | [optional] |

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

## `environmentBinderRestCheckdomainPost()`

```php
environmentBinderRestCheckdomainPost($domain, $region): \OpenAPI\Client\Model\ComHivextApiResponse
```



Checks if internal domain name is busy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = 'domain_example'; // string
$region = 'region_example'; // string

try {
    $result = $apiInstance->environmentBinderRestCheckdomainPost($domain, $region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestCheckdomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |
| **region** | **string**|  | [optional] |

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

## `environmentBinderRestCheckextdomainPost()`

```php
environmentBinderRestCheckextdomainPost($extdomain): \OpenAPI\Client\Model\ComHivextApiResponse
```



Checks if external domain name is busy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extdomain = 'extdomain_example'; // string

try {
    $result = $apiInstance->environmentBinderRestCheckextdomainPost($extdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestCheckextdomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extdomain** | **string**|  | |

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

## `environmentBinderRestDeletesslPost()`

```php
environmentBinderRestDeletesslPost($envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestDeletesslPost($envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestDeletesslPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |

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

## `environmentBinderRestDetachextipPost()`

```php
environmentBinderRestDetachextipPost($envName, $ip, $nodeid): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$ip = 'ip_example'; // string
$nodeid = 56; // int

try {
    $result = $apiInstance->environmentBinderRestDetachextipPost($envName, $ip, $nodeid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestDetachextipPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **ip** | **string**|  | |
| **nodeid** | **int**|  | |

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

## `environmentBinderRestDisablesslPost()`

```php
environmentBinderRestDisablesslPost($envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestDisablesslPost($envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestDisablesslPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |

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

## `environmentBinderRestEditsslcertPost()`

```php
environmentBinderRestEditsslcertPost($id, $interm, $envName, $cert, $key): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponse
```



Update certificate that is linked to uid. If interm=\"\" or \"null\" or \"none\", it deletes intermediate certificate in DB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$interm = 'interm_example'; // string
$envName = 'envName_example'; // string
$cert = 'cert_example'; // string
$key = 'key_example'; // string

try {
    $result = $apiInstance->environmentBinderRestEditsslcertPost($id, $interm, $envName, $cert, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestEditsslcertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **interm** | **string**|  | [optional] |
| **envName** | **string**|  | [optional] |
| **cert** | **string**|  | [optional] |
| **key** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponse**](../Model/ComHivextApiServerEnvironmentResponseSSLCertResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestGetdomainsPost()`

```php
environmentBinderRestGetdomainsPost($envName, $inShort, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDomainsResponse
```



Gets lists of all the domains assigned to the target environment. The response can be narrowed by the optional nodeGroup or nodeId (has a higher priority if both are specified) parameters. Set the inShort parameter as false to view domains in the extended form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$inShort = True; // bool
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestGetdomainsPost($envName, $inShort, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestGetdomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **inShort** | **bool**|  | [optional] |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseDomainsResponse**](../Model/ComHivextApiServerEnvironmentResponseDomainsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestGetextdomainsPost()`

```php
environmentBinderRestGetextdomainsPost(): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponses
```



With the platform you have a possibility to set your own external domain name for your URL instead of using your   hoster domain name. Binding can be done in two ways: by adding CNAME record or by setting A Records.   <p>   A CNAME specifies an alias for a canonical name record in a Domain Name System (DNS) database. If you don't have your   own Public IP, your URL is an alias for a single canonical name that is associated with a common platform IP address   in the DNS database. So in this case it's recommended to set your own custom domain by adding CNAME record.   <p>   A Record is an entry in your DNS zone file that maps each domain name to an IP address. When you type   www.mycustomsite.com the browser goes to the nameserver for mycustomsite.com and asks for the A record. This record   must point to an IP address, this will be the IP address of your web server. Setting your own custom external domain   name using A Record is more appropriate if you have your own Public IP address.   <p>   Also you can bind CustomSSL to your custom domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->environmentBinderRestGetextdomainsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestGetextdomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponses**](../Model/ComHivextApiServerEnvironmentResponseExtDomainResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestGetsslPost()`

```php
environmentBinderRestGetsslPost($envName): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCustomResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestGetsslPost($envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestGetsslPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCustomResponse**](../Model/ComHivextApiServerEnvironmentResponseSSLCustomResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestGetsslcertsPost()`

```php
environmentBinderRestGetsslcertsPost($envName, $ids): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponses
```



Get all certificates for current user. If ids is not passed, it will return all certs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->environmentBinderRestGetsslcertsPost($envName, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestGetsslcertsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | [optional] |
| **ids** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSSLCertResponses**](../Model/ComHivextApiServerEnvironmentResponseSSLCertResponses.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestMoveextipsPost()`

```php
environmentBinderRestMoveextipsPost($envName, $sourceNodeId, $targetNodeId, $ips): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse
```



Moves external IP addresses from the source node to the target node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$sourceNodeId = 56; // int
$targetNodeId = 56; // int
$ips = 'ips_example'; // string

try {
    $result = $apiInstance->environmentBinderRestMoveextipsPost($envName, $sourceNodeId, $targetNodeId, $ips);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestMoveextipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **sourceNodeId** | **int**|  | |
| **targetNodeId** | **int**|  | |
| **ips** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse**](../Model/ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestRemovedomainsPost()`

```php
environmentBinderRestRemovedomainsPost($envName, $domains, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiResponse
```



Detaches the listed domains from the whole environment or its particular layer/node (provide  to remove all of the additional domains). Herewith, the default domains are skipped, so only custom ones can be removed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$domains = 'domains_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestRemovedomainsPost($envName, $domains, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestRemovedomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **domains** | **string**|  | |
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

## `environmentBinderRestRemoveextdomainPost()`

```php
environmentBinderRestRemoveextdomainPost($envName, $extdomain): \OpenAPI\Client\Model\ComHivextApiResponse
```



Detaches external domain name from particular environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$extdomain = 'extdomain_example'; // string

try {
    $result = $apiInstance->environmentBinderRestRemoveextdomainPost($envName, $extdomain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestRemoveextdomainPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **extdomain** | **string**|  | |

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

## `environmentBinderRestRemovesslPost()`

```php
environmentBinderRestRemovesslPost($envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestRemovesslPost($envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestRemovesslPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |

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

## `environmentBinderRestRemovesslcertsPost()`

```php
environmentBinderRestRemovesslcertsPost($ids, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Remove certificate by ids parameter. If ids = , it removes all certs for current user. If ids = id1,id2,id3, it removes specified certs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestRemovesslcertsPost($ids, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestRemovesslcertsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | |
| **envName** | **string**|  | [optional] |

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

## `environmentBinderRestSetextipcountPost()`

```php
environmentBinderRestSetextipcountPost($envName, $count, $type, $nodeGroup, $nodeId): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$count = 56; // int
$type = 'type_example'; // string
$nodeGroup = 'nodeGroup_example'; // string
$nodeId = 56; // int

try {
    $result = $apiInstance->environmentBinderRestSetextipcountPost($envName, $count, $type, $nodeGroup, $nodeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestSetextipcountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **count** | **int**|  | |
| **type** | **string**|  | |
| **nodeGroup** | **string**|  | [optional] |
| **nodeId** | **int**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponse**](../Model/ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestSwapextdomainsPost()`

```php
environmentBinderRestSwapextdomainsPost($targetappid, $envName): \OpenAPI\Client\Model\ComHivextApiResponse
```



Swaps the external domain names between two environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$targetappid = 'targetappid_example'; // string
$envName = 'envName_example'; // string

try {
    $result = $apiInstance->environmentBinderRestSwapextdomainsPost($targetappid, $envName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestSwapextdomainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **targetappid** | **string**|  | |
| **envName** | **string**|  | |

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

## `environmentBinderRestSwapextipsPost()`

```php
environmentBinderRestSwapextipsPost($envName, $sourceNodeId, $targetNodeId, $targetIp, $sourceIp): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse
```



It can be used to swap external ip addresses between source node and target node.<br/> And also you can just drag only external ip from source to destination node id.   <p>   <b>Notes:<b/>   <ul>   <li>If you need to swap two specific addresses between nodes with <a href=\"https://www.virtuozzo.com/application-platform-docs/multiple-public-ip/\" target=\"_blank\">multiple IPs</a> on each one, please contact the Support Team for assistance. Support of such cases is currently under development and will be implemented in future releases.</li>   <li>Before applying the swapExtIp API request, please make sure that the source and destination nodes (environments) are running. Kindly get acquainted with the other Notes in the appropriate documentation (<a href=\"https://www.virtuozzo.com/application-platform-docs/cli-ip-swap/\" target=\"_blank\">https://www.virtuozzo.com/application-platform-docs/cli-ip-swap/</a>)</li>   </ul>   <p/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$sourceNodeId = 56; // int
$targetNodeId = 56; // int
$targetIp = 'targetIp_example'; // string
$sourceIp = 'sourceIp_example'; // string

try {
    $result = $apiInstance->environmentBinderRestSwapextipsPost($envName, $sourceNodeId, $targetNodeId, $targetIp, $sourceIp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestSwapextipsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **sourceNodeId** | **int**|  | |
| **targetNodeId** | **int**|  | |
| **targetIp** | **string**|  | [optional] |
| **sourceIp** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse**](../Model/ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentBinderRestUnbindsslcertPost()`

```php
environmentBinderRestUnbindsslcertPost($envName, $extDomains): \OpenAPI\Client\Model\ComHivextApiResponse
```



It unbinds ssl certificate from external domains. If extDomains parameter is not passed, it unbinds certificate from container.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\BinderServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envName = 'envName_example'; // string
$extDomains = 'extDomains_example'; // string

try {
    $result = $apiInstance->environmentBinderRestUnbindsslcertPost($envName, $extDomains);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BinderServiceApi->environmentBinderRestUnbindsslcertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envName** | **string**|  | |
| **extDomains** | **string**|  | [optional] |

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
