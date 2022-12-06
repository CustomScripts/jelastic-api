# OpenAPI\Client\AccountServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**billingAccountRestGetaccountPost()**](AccountServiceApi.md#billingAccountRestGetaccountPost) | **POST** /billing/account/rest/getaccount |  |
| [**billingAccountRestGetextendedaccountbillinghistorybyperiodPost()**](AccountServiceApi.md#billingAccountRestGetextendedaccountbillinghistorybyperiodPost) | **POST** /billing/account/rest/getextendedaccountbillinghistorybyperiod |  |
| [**billingAccountRestGetquotasPost()**](AccountServiceApi.md#billingAccountRestGetquotasPost) | **POST** /billing/account/rest/getquotas |  |
| [**usersAccountRestGetuserinfoPost()**](AccountServiceApi.md#usersAccountRestGetuserinfoPost) | **POST** /users/account/rest/getuserinfo |  |
| [**usersAccountRestRecoverpasswordPost()**](AccountServiceApi.md#usersAccountRestRecoverpasswordPost) | **POST** /users/account/rest/recoverpassword |  |


## `billingAccountRestGetaccountPost()`

```php
billingAccountRestGetaccountPost(): \OpenAPI\Client\Model\ComHivextApiServerBillingResponseAccountResponse
```



Gets account by session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->billingAccountRestGetaccountPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->billingAccountRestGetaccountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerBillingResponseAccountResponse**](../Model/ComHivextApiServerBillingResponseAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `billingAccountRestGetextendedaccountbillinghistorybyperiodPost()`

```php
billingAccountRestGetextendedaccountbillinghistorybyperiodPost($endtime, $starttime, $targetAppid): \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseObjectResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$endtime = 'endtime_example'; // string
$starttime = 'starttime_example'; // string
$targetAppid = 'targetAppid_example'; // string

try {
    $result = $apiInstance->billingAccountRestGetextendedaccountbillinghistorybyperiodPost($endtime, $starttime, $targetAppid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->billingAccountRestGetextendedaccountbillinghistorybyperiodPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **endtime** | **string**|  | |
| **starttime** | **string**|  | |
| **targetAppid** | **string**|  | [optional] |

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

## `billingAccountRestGetquotasPost()`

```php
billingAccountRestGetquotasPost($quotasnames): \OpenAPI\Client\Model\ComHivextApiServerBillingResponseArrayResponse
```



Gets list of quotas for account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$quotasnames = 'quotasnames_example'; // string

try {
    $result = $apiInstance->billingAccountRestGetquotasPost($quotasnames);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->billingAccountRestGetquotasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quotasnames** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerBillingResponseArrayResponse**](../Model/ComHivextApiServerBillingResponseArrayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAccountRestGetuserinfoPost()`

```php
usersAccountRestGetuserinfoPost(): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponse
```



Gets information about the user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->usersAccountRestGetuserinfoPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->usersAccountRestGetuserinfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponse**](../Model/ComHivextApiServerUsersResponseAuthenticationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAccountRestRecoverpasswordPost()`

```php
usersAccountRestRecoverpasswordPost($email, $lang): \OpenAPI\Client\Model\ComHivextApiResponse
```



Sends an email with the link to reset the account password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string
$lang = 'lang_example'; // string

try {
    $result = $apiInstance->usersAccountRestRecoverpasswordPost($email, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->usersAccountRestRecoverpasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**|  | |
| **lang** | **string**|  | [optional] |

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
