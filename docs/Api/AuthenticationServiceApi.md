# OpenAPI\Client\AuthenticationServiceApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**usersAuthenticationRestCreatetokenPost()**](AuthenticationServiceApi.md#usersAuthenticationRestCreatetokenPost) | **POST** /users/authentication/rest/createtoken |  |
| [**usersAuthenticationRestDeletetokensPost()**](AuthenticationServiceApi.md#usersAuthenticationRestDeletetokensPost) | **POST** /users/authentication/rest/deletetokens |  |
| [**usersAuthenticationRestEdittokenPost()**](AuthenticationServiceApi.md#usersAuthenticationRestEdittokenPost) | **POST** /users/authentication/rest/edittoken |  |
| [**usersAuthenticationRestGetpolicymethodsPost()**](AuthenticationServiceApi.md#usersAuthenticationRestGetpolicymethodsPost) | **POST** /users/authentication/rest/getpolicymethods |  |
| [**usersAuthenticationRestGetsessionsPost()**](AuthenticationServiceApi.md#usersAuthenticationRestGetsessionsPost) | **POST** /users/authentication/rest/getsessions |  |
| [**usersAuthenticationRestGettokenapilistPost()**](AuthenticationServiceApi.md#usersAuthenticationRestGettokenapilistPost) | **POST** /users/authentication/rest/gettokenapilist |  |
| [**usersAuthenticationRestGettokensPost()**](AuthenticationServiceApi.md#usersAuthenticationRestGettokensPost) | **POST** /users/authentication/rest/gettokens |  |
| [**usersAuthenticationRestGettokentemplatesPost()**](AuthenticationServiceApi.md#usersAuthenticationRestGettokentemplatesPost) | **POST** /users/authentication/rest/gettokentemplates |  |
| [**usersAuthenticationRestRegeneratetokenPost()**](AuthenticationServiceApi.md#usersAuthenticationRestRegeneratetokenPost) | **POST** /users/authentication/rest/regeneratetoken |  |
| [**usersAuthenticationRestSigninPost()**](AuthenticationServiceApi.md#usersAuthenticationRestSigninPost) | **POST** /users/authentication/rest/signin |  |
| [**usersAuthenticationRestSignoutPost()**](AuthenticationServiceApi.md#usersAuthenticationRestSignoutPost) | **POST** /users/authentication/rest/signout |  |
| [**usersAuthenticationRestSignoutsessionsPost()**](AuthenticationServiceApi.md#usersAuthenticationRestSignoutsessionsPost) | **POST** /users/authentication/rest/signoutsessions |  |


## `usersAuthenticationRestCreatetokenPost()`

```php
usersAuthenticationRestCreatetokenPost($description, $tokenTemplate, $password, $expiresAt, $apiList): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse
```



Creates token, which allows to execute specific API methods, list of these methods can be found by executing GetTokenApiList.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$description = 'description_example'; // string
$tokenTemplate = 'tokenTemplate_example'; // string
$password = 'password_example'; // string
$expiresAt = 'expiresAt_example'; // string
$apiList = 'apiList_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestCreatetokenPost($description, $tokenTemplate, $password, $expiresAt, $apiList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestCreatetokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **description** | **string**|  | |
| **tokenTemplate** | **string**|  | [optional] |
| **password** | **string**|  | [optional] |
| **expiresAt** | **string**|  | [optional] |
| **apiList** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse**](../Model/ComHivextApiServerUsersResponseApiTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestDeletetokensPost()`

```php
usersAuthenticationRestDeletetokensPost($ids, $password): \OpenAPI\Client\Model\ComHivextApiResponse
```



Deletes tokens with given ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string
$password = 'password_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestDeletetokensPost($ids, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestDeletetokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | |
| **password** | **string**|  | [optional] |

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

## `usersAuthenticationRestEdittokenPost()`

```php
usersAuthenticationRestEdittokenPost($id, $tokenTemplate, $password, $description, $expiresAt, $apiList): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse
```



Edits already created token.<br>   Returns:<br> - ApiListItem (String) is a name of the appropriate API method, which can be authenticated with the current token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$tokenTemplate = 'tokenTemplate_example'; // string
$password = 'password_example'; // string
$description = 'description_example'; // string
$expiresAt = 'expiresAt_example'; // string
$apiList = 'apiList_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestEdittokenPost($id, $tokenTemplate, $password, $description, $expiresAt, $apiList);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestEdittokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **tokenTemplate** | **string**|  | [optional] |
| **password** | **string**|  | [optional] |
| **description** | **string**|  | [optional] |
| **expiresAt** | **string**|  | [optional] |
| **apiList** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse**](../Model/ComHivextApiServerUsersResponseApiTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestGetpolicymethodsPost()`

```php
usersAuthenticationRestGetpolicymethodsPost($uniqueName): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uniqueName = 'uniqueName_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestGetpolicymethodsPost($uniqueName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestGetpolicymethodsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uniqueName** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse**](../Model/ComHivextApiServerUsersResponseApiTokenPermissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestGetsessionsPost()`

```php
usersAuthenticationRestGetsessionsPost(): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseSessionsResponse
```



Returns list of sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->usersAuthenticationRestGetsessionsPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestGetsessionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseSessionsResponse**](../Model/ComHivextApiServerUsersResponseSessionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestGettokenapilistPost()`

```php
usersAuthenticationRestGettokenapilistPost($search, $showPrivate): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse
```



Returns list of API methods that can be used with tokens<br>   Returns:<br> - ApiListItem (String) is a name of the appropriate API method, which can be authenticated with the current token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search = 'search_example'; // string
$showPrivate = True; // bool

try {
    $result = $apiInstance->usersAuthenticationRestGettokenapilistPost($search, $showPrivate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestGettokenapilistPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**|  | [optional] |
| **showPrivate** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenPermissionsResponse**](../Model/ComHivextApiServerUsersResponseApiTokenPermissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestGettokensPost()`

```php
usersAuthenticationRestGettokensPost($ids): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokensResponse
```



Returns info about tokens with given ids.<br>   Returns:<br> - ApiListItem (String) is a name of the appropriate API method, which can be authenticated with the current token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestGettokensPost($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestGettokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokensResponse**](../Model/ComHivextApiServerUsersResponseApiTokensResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestGettokentemplatesPost()`

```php
usersAuthenticationRestGettokentemplatesPost(): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenTemplatesResponse
```



Returns list of token templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->usersAuthenticationRestGettokentemplatesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestGettokentemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenTemplatesResponse**](../Model/ComHivextApiServerUsersResponseApiTokenTemplatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestRegeneratetokenPost()`

```php
usersAuthenticationRestRegeneratetokenPost($id, $password): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse
```



Generates new value of token, previous one becomes not valid.<br>   Returns:<br> - ApiListItem (String) is a name of the appropriate API method, which can be authenticated with the current token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int
$password = 'password_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestRegeneratetokenPost($id, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestRegeneratetokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **password** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ComHivextApiServerUsersResponseApiTokenResponse**](../Model/ComHivextApiServerUsersResponseApiTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersAuthenticationRestSigninPost()`

```php
usersAuthenticationRestSigninPost($password, $login): \OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponse
```



Creates a session for performing different actions within user account.   This session is valid until the <b>Signout</b> method is called.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password = 'password_example'; // string
$login = 'login_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestSigninPost($password, $login);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestSigninPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password** | **string**|  | |
| **login** | **string**|  | |

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

## `usersAuthenticationRestSignoutPost()`

```php
usersAuthenticationRestSignoutPost(): \OpenAPI\Client\Model\ComHivextApiResponse
```



Breaks the session created while authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->usersAuthenticationRestSignoutPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestSignoutPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `usersAuthenticationRestSignoutsessionsPost()`

```php
usersAuthenticationRestSignoutsessionsPost($ids): \OpenAPI\Client\Model\ComHivextApiResponse
```



Breaks the sessions by ids.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\AuthenticationServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = 'ids_example'; // string

try {
    $result = $apiInstance->usersAuthenticationRestSignoutsessionsPost($ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationServiceApi->usersAuthenticationRestSignoutsessionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ids** | **string**|  | |

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
