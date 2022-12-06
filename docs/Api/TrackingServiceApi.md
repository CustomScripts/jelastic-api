# OpenAPI\Client\TrackingServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentTrackingRestGetactionPost()**](TrackingServiceApi.md#environmentTrackingRestGetactionPost) | **POST** /environment/tracking/rest/getaction |  |
| [**environmentTrackingRestGetcurrentactionsPost()**](TrackingServiceApi.md#environmentTrackingRestGetcurrentactionsPost) | **POST** /environment/tracking/rest/getcurrentactions |  |
| [**environmentTrackingRestGetserverutctimePost()**](TrackingServiceApi.md#environmentTrackingRestGetserverutctimePost) | **POST** /environment/tracking/rest/getserverutctime |  |
| [**environmentTrackingRestGetuidactionsPost()**](TrackingServiceApi.md#environmentTrackingRestGetuidactionsPost) | **POST** /environment/tracking/rest/getuidactions |  |
| [**environmentTrackingRestSearchactionsPost()**](TrackingServiceApi.md#environmentTrackingRestSearchactionsPost) | **POST** /environment/tracking/rest/searchactions |  |


## `environmentTrackingRestGetactionPost()`

```php
environmentTrackingRestGetactionPost($id): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int

try {
    $result = $apiInstance->environmentTrackingRestGetactionPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingServiceApi->environmentTrackingRestGetactionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | [optional] |

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

## `environmentTrackingRestGetcurrentactionsPost()`

```php
environmentTrackingRestGetcurrentactionsPost(): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Returns the list of user’s current tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->environmentTrackingRestGetcurrentactionsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingServiceApi->environmentTrackingRestGetcurrentactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `environmentTrackingRestGetserverutctimePost()`

```php
environmentTrackingRestGetserverutctimePost(): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



Gets UTC time of the server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->environmentTrackingRestGetserverutctimePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingServiceApi->environmentTrackingRestGetserverutctimePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `environmentTrackingRestGetuidactionsPost()`

```php
environmentTrackingRestGetuidactionsPost($count, $endtime, $starttime, $actionTypes): \OpenAPI\Client\Model\ComHivextApiServerDevelopmentResponseInterfacesArrayResponse
```



Gets list of actions performed in the dashboard during some stated period of time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$count = 56; // int
$endtime = 'endtime_example'; // string
$starttime = 'starttime_example'; // string
$actionTypes = 'actionTypes_example'; // string

try {
    $result = $apiInstance->environmentTrackingRestGetuidactionsPost($count, $endtime, $starttime, $actionTypes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingServiceApi->environmentTrackingRestGetuidactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **int**|  | [optional] |
| **endtime** | **string**|  | [optional] |
| **starttime** | **string**|  | [optional] |
| **actionTypes** | **string**|  | [optional] |

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

## `environmentTrackingRestSearchactionsPost()`

```php
environmentTrackingRestSearchactionsPost($search): \OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\TrackingServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = new \OpenAPI\Client\Model\EnvironmentTrackingRestSearchactionsPostRequestSearch(); // \OpenAPI\Client\Model\EnvironmentTrackingRestSearchactionsPostRequestSearch

try {
    $result = $apiInstance->environmentTrackingRestSearchactionsPost($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingServiceApi->environmentTrackingRestSearchactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | [**\OpenAPI\Client\Model\EnvironmentTrackingRestSearchactionsPostRequestSearch**](../Model/EnvironmentTrackingRestSearchactionsPostRequestSearch.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerAdministrationResponsePagedArrayResponse**](../Model/ComHivextApiServerAdministrationResponsePagedArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
