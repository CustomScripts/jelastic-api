# customscripts/jelastic-api

lets developers to automate a set of actions required for application lifecycle and extend our platform functionality by combining with other services. Using our API you can programmatically create environments, deploy apps and perform other tasks that could be earlier accomplished only via Jelastic dashboard but not limited to them.

Jelastic API follows REST principles. REST API determines a set of functions which can be requested by a developer, who then receives a response. The interaction is performed via HTTP protocol. The advantage of such method is a wide extension of the HTTP protocol. That's why REST API can be used from almost any programming language.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/customscripts/jelastic-api.git"
    }
  ],
  "require": {
    "customscripts/jelastic-api": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/customscripts/jelastic-api/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountServiceApi* | [**billingAccountRestGetaccountPost**](docs/Api/AccountServiceApi.md#billingaccountrestgetaccountpost) | **POST** /billing/account/rest/getaccount | 
*AccountServiceApi* | [**billingAccountRestGetextendedaccountbillinghistorybyperiodPost**](docs/Api/AccountServiceApi.md#billingaccountrestgetextendedaccountbillinghistorybyperiodpost) | **POST** /billing/account/rest/getextendedaccountbillinghistorybyperiod | 
*AccountServiceApi* | [**billingAccountRestGetquotasPost**](docs/Api/AccountServiceApi.md#billingaccountrestgetquotaspost) | **POST** /billing/account/rest/getquotas | 
*AccountServiceApi* | [**usersAccountRestGetuserinfoPost**](docs/Api/AccountServiceApi.md#usersaccountrestgetuserinfopost) | **POST** /users/account/rest/getuserinfo | 
*AccountServiceApi* | [**usersAccountRestRecoverpasswordPost**](docs/Api/AccountServiceApi.md#usersaccountrestrecoverpasswordpost) | **POST** /users/account/rest/recoverpassword | 
*AppServiceApi* | [**marketplaceAppRestAddappPost**](docs/Api/AppServiceApi.md#marketplaceapprestaddapppost) | **POST** /marketplace/app/rest/addapp | 
*AppServiceApi* | [**marketplaceAppRestDeleteappPost**](docs/Api/AppServiceApi.md#marketplaceapprestdeleteapppost) | **POST** /marketplace/app/rest/deleteapp | 
*AppServiceApi* | [**marketplaceAppRestEditappPost**](docs/Api/AppServiceApi.md#marketplaceappresteditapppost) | **POST** /marketplace/app/rest/editapp | 
*AppServiceApi* | [**marketplaceAppRestGetaddonlistPost**](docs/Api/AppServiceApi.md#marketplaceapprestgetaddonlistpost) | **POST** /marketplace/app/rest/getaddonlist | 
*AppServiceApi* | [**marketplaceAppRestGetappinfoPost**](docs/Api/AppServiceApi.md#marketplaceapprestgetappinfopost) | **POST** /marketplace/app/rest/getappinfo | 
*AppServiceApi* | [**marketplaceAppRestGetcategoriesPost**](docs/Api/AppServiceApi.md#marketplaceapprestgetcategoriespost) | **POST** /marketplace/app/rest/getcategories | 
*AppServiceApi* | [**marketplaceAppRestGetchecksumPost**](docs/Api/AppServiceApi.md#marketplaceapprestgetchecksumpost) | **POST** /marketplace/app/rest/getchecksum | 
*AppServiceApi* | [**marketplaceAppRestGetlistPost**](docs/Api/AppServiceApi.md#marketplaceapprestgetlistpost) | **POST** /marketplace/app/rest/getlist | 
*AppServiceApi* | [**marketplaceAppRestInstallPost**](docs/Api/AppServiceApi.md#marketplaceapprestinstallpost) | **POST** /marketplace/app/rest/install | 
*AppServiceApi* | [**marketplaceAppRestInstalladdonPost**](docs/Api/AppServiceApi.md#marketplaceapprestinstalladdonpost) | **POST** /marketplace/app/rest/installaddon | 
*AuthenticationServiceApi* | [**usersAuthenticationRestCreatetokenPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestcreatetokenpost) | **POST** /users/authentication/rest/createtoken | 
*AuthenticationServiceApi* | [**usersAuthenticationRestDeletetokensPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestdeletetokenspost) | **POST** /users/authentication/rest/deletetokens | 
*AuthenticationServiceApi* | [**usersAuthenticationRestEdittokenPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestedittokenpost) | **POST** /users/authentication/rest/edittoken | 
*AuthenticationServiceApi* | [**usersAuthenticationRestGetpolicymethodsPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestgetpolicymethodspost) | **POST** /users/authentication/rest/getpolicymethods | 
*AuthenticationServiceApi* | [**usersAuthenticationRestGetsessionsPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestgetsessionspost) | **POST** /users/authentication/rest/getsessions | 
*AuthenticationServiceApi* | [**usersAuthenticationRestGettokenapilistPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestgettokenapilistpost) | **POST** /users/authentication/rest/gettokenapilist | 
*AuthenticationServiceApi* | [**usersAuthenticationRestGettokensPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestgettokenspost) | **POST** /users/authentication/rest/gettokens | 
*AuthenticationServiceApi* | [**usersAuthenticationRestGettokentemplatesPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestgettokentemplatespost) | **POST** /users/authentication/rest/gettokentemplates | 
*AuthenticationServiceApi* | [**usersAuthenticationRestRegeneratetokenPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestregeneratetokenpost) | **POST** /users/authentication/rest/regeneratetoken | 
*AuthenticationServiceApi* | [**usersAuthenticationRestSigninPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestsigninpost) | **POST** /users/authentication/rest/signin | 
*AuthenticationServiceApi* | [**usersAuthenticationRestSignoutPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestsignoutpost) | **POST** /users/authentication/rest/signout | 
*AuthenticationServiceApi* | [**usersAuthenticationRestSignoutsessionsPost**](docs/Api/AuthenticationServiceApi.md#usersauthenticationrestsignoutsessionspost) | **POST** /users/authentication/rest/signoutsessions | 
*BinderServiceApi* | [**environmentBinderRestAdddomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestadddomainspost) | **POST** /environment/binder/rest/adddomains | 
*BinderServiceApi* | [**environmentBinderRestAddsslcertPost**](docs/Api/BinderServiceApi.md#environmentbinderrestaddsslcertpost) | **POST** /environment/binder/rest/addsslcert | 
*BinderServiceApi* | [**environmentBinderRestAttachextipPost**](docs/Api/BinderServiceApi.md#environmentbinderrestattachextippost) | **POST** /environment/binder/rest/attachextip | 
*BinderServiceApi* | [**environmentBinderRestBindextdomainPost**](docs/Api/BinderServiceApi.md#environmentbinderrestbindextdomainpost) | **POST** /environment/binder/rest/bindextdomain | 
*BinderServiceApi* | [**environmentBinderRestBindextdomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestbindextdomainspost) | **POST** /environment/binder/rest/bindextdomains | 
*BinderServiceApi* | [**environmentBinderRestBindsslPost**](docs/Api/BinderServiceApi.md#environmentbinderrestbindsslpost) | **POST** /environment/binder/rest/bindssl | 
*BinderServiceApi* | [**environmentBinderRestBindsslcertPost**](docs/Api/BinderServiceApi.md#environmentbinderrestbindsslcertpost) | **POST** /environment/binder/rest/bindsslcert | 
*BinderServiceApi* | [**environmentBinderRestCheckdomainPost**](docs/Api/BinderServiceApi.md#environmentbinderrestcheckdomainpost) | **POST** /environment/binder/rest/checkdomain | 
*BinderServiceApi* | [**environmentBinderRestCheckextdomainPost**](docs/Api/BinderServiceApi.md#environmentbinderrestcheckextdomainpost) | **POST** /environment/binder/rest/checkextdomain | 
*BinderServiceApi* | [**environmentBinderRestDeletesslPost**](docs/Api/BinderServiceApi.md#environmentbinderrestdeletesslpost) | **POST** /environment/binder/rest/deletessl | 
*BinderServiceApi* | [**environmentBinderRestDetachextipPost**](docs/Api/BinderServiceApi.md#environmentbinderrestdetachextippost) | **POST** /environment/binder/rest/detachextip | 
*BinderServiceApi* | [**environmentBinderRestDisablesslPost**](docs/Api/BinderServiceApi.md#environmentbinderrestdisablesslpost) | **POST** /environment/binder/rest/disablessl | 
*BinderServiceApi* | [**environmentBinderRestEditsslcertPost**](docs/Api/BinderServiceApi.md#environmentbinderresteditsslcertpost) | **POST** /environment/binder/rest/editsslcert | 
*BinderServiceApi* | [**environmentBinderRestGetdomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestgetdomainspost) | **POST** /environment/binder/rest/getdomains | 
*BinderServiceApi* | [**environmentBinderRestGetextdomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestgetextdomainspost) | **POST** /environment/binder/rest/getextdomains | 
*BinderServiceApi* | [**environmentBinderRestGetsslPost**](docs/Api/BinderServiceApi.md#environmentbinderrestgetsslpost) | **POST** /environment/binder/rest/getssl | 
*BinderServiceApi* | [**environmentBinderRestGetsslcertsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestgetsslcertspost) | **POST** /environment/binder/rest/getsslcerts | 
*BinderServiceApi* | [**environmentBinderRestMoveextipsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestmoveextipspost) | **POST** /environment/binder/rest/moveextips | 
*BinderServiceApi* | [**environmentBinderRestRemovedomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestremovedomainspost) | **POST** /environment/binder/rest/removedomains | 
*BinderServiceApi* | [**environmentBinderRestRemoveextdomainPost**](docs/Api/BinderServiceApi.md#environmentbinderrestremoveextdomainpost) | **POST** /environment/binder/rest/removeextdomain | 
*BinderServiceApi* | [**environmentBinderRestRemovesslPost**](docs/Api/BinderServiceApi.md#environmentbinderrestremovesslpost) | **POST** /environment/binder/rest/removessl | 
*BinderServiceApi* | [**environmentBinderRestRemovesslcertsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestremovesslcertspost) | **POST** /environment/binder/rest/removesslcerts | 
*BinderServiceApi* | [**environmentBinderRestSetextipcountPost**](docs/Api/BinderServiceApi.md#environmentbinderrestsetextipcountpost) | **POST** /environment/binder/rest/setextipcount | 
*BinderServiceApi* | [**environmentBinderRestSwapextdomainsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestswapextdomainspost) | **POST** /environment/binder/rest/swapextdomains | 
*BinderServiceApi* | [**environmentBinderRestSwapextipsPost**](docs/Api/BinderServiceApi.md#environmentbinderrestswapextipspost) | **POST** /environment/binder/rest/swapextips | 
*BinderServiceApi* | [**environmentBinderRestUnbindsslcertPost**](docs/Api/BinderServiceApi.md#environmentbinderrestunbindsslcertpost) | **POST** /environment/binder/rest/unbindsslcert | 
*BuildServiceApi* | [**environmentBuildRestAddprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildrestaddprojectpost) | **POST** /environment/build/rest/addproject | 
*BuildServiceApi* | [**environmentBuildRestAddprojectwithcredsPost**](docs/Api/BuildServiceApi.md#environmentbuildrestaddprojectwithcredspost) | **POST** /environment/build/rest/addprojectwithcreds | 
*BuildServiceApi* | [**environmentBuildRestAddprojectwithkeyPost**](docs/Api/BuildServiceApi.md#environmentbuildrestaddprojectwithkeypost) | **POST** /environment/build/rest/addprojectwithkey | 
*BuildServiceApi* | [**environmentBuildRestBuilddeployprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildrestbuilddeployprojectpost) | **POST** /environment/build/rest/builddeployproject | 
*BuildServiceApi* | [**environmentBuildRestBuildprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildrestbuildprojectpost) | **POST** /environment/build/rest/buildproject | 
*BuildServiceApi* | [**environmentBuildRestDeployprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildrestdeployprojectpost) | **POST** /environment/build/rest/deployproject | 
*BuildServiceApi* | [**environmentBuildRestEditprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildresteditprojectpost) | **POST** /environment/build/rest/editproject | 
*BuildServiceApi* | [**environmentBuildRestGetprojectinfoPost**](docs/Api/BuildServiceApi.md#environmentbuildrestgetprojectinfopost) | **POST** /environment/build/rest/getprojectinfo | 
*BuildServiceApi* | [**environmentBuildRestGetprojectsPost**](docs/Api/BuildServiceApi.md#environmentbuildrestgetprojectspost) | **POST** /environment/build/rest/getprojects | 
*BuildServiceApi* | [**environmentBuildRestRemoveprojectPost**](docs/Api/BuildServiceApi.md#environmentbuildrestremoveprojectpost) | **POST** /environment/build/rest/removeproject | 
*BuildServiceApi* | [**environmentBuildRestUpdatePost**](docs/Api/BuildServiceApi.md#environmentbuildrestupdatepost) | **POST** /environment/build/rest/update | 
*CollaborationServiceApi* | [**usersCollaborationRestAcceptcollaborationPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestacceptcollaborationpost) | **POST** /users/collaboration/rest/acceptcollaboration | 
*CollaborationServiceApi* | [**usersCollaborationRestActivatememberPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestactivatememberpost) | **POST** /users/collaboration/rest/activatemember | 
*CollaborationServiceApi* | [**usersCollaborationRestAddpolicyPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestaddpolicypost) | **POST** /users/collaboration/rest/addpolicy | 
*CollaborationServiceApi* | [**usersCollaborationRestAddresourcesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestaddresourcespost) | **POST** /users/collaboration/rest/addresources | 
*CollaborationServiceApi* | [**usersCollaborationRestAddrolePost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestaddrolepost) | **POST** /users/collaboration/rest/addrole | 
*CollaborationServiceApi* | [**usersCollaborationRestCheckenvironmentrightsPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestcheckenvironmentrightspost) | **POST** /users/collaboration/rest/checkenvironmentrights | 
*CollaborationServiceApi* | [**usersCollaborationRestDeletememberPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestdeletememberpost) | **POST** /users/collaboration/rest/deletemember | 
*CollaborationServiceApi* | [**usersCollaborationRestDeletepolicyPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestdeletepolicypost) | **POST** /users/collaboration/rest/deletepolicy | 
*CollaborationServiceApi* | [**usersCollaborationRestDeleteresourcesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestdeleteresourcespost) | **POST** /users/collaboration/rest/deleteresources | 
*CollaborationServiceApi* | [**usersCollaborationRestDeleterolePost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestdeleterolepost) | **POST** /users/collaboration/rest/deleterole | 
*CollaborationServiceApi* | [**usersCollaborationRestEditcollaborationPost**](docs/Api/CollaborationServiceApi.md#userscollaborationresteditcollaborationpost) | **POST** /users/collaboration/rest/editcollaboration | 
*CollaborationServiceApi* | [**usersCollaborationRestEditmemberPost**](docs/Api/CollaborationServiceApi.md#userscollaborationresteditmemberpost) | **POST** /users/collaboration/rest/editmember | 
*CollaborationServiceApi* | [**usersCollaborationRestEditpolicyPost**](docs/Api/CollaborationServiceApi.md#userscollaborationresteditpolicypost) | **POST** /users/collaboration/rest/editpolicy | 
*CollaborationServiceApi* | [**usersCollaborationRestEditrolePost**](docs/Api/CollaborationServiceApi.md#userscollaborationresteditrolepost) | **POST** /users/collaboration/rest/editrole | 
*CollaborationServiceApi* | [**usersCollaborationRestGetcollaborationresourcemethodsPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetcollaborationresourcemethodspost) | **POST** /users/collaboration/rest/getcollaborationresourcemethods | 
*CollaborationServiceApi* | [**usersCollaborationRestGetcollaborationresourcesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetcollaborationresourcespost) | **POST** /users/collaboration/rest/getcollaborationresources | 
*CollaborationServiceApi* | [**usersCollaborationRestGetcollaborationrolemethodsPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetcollaborationrolemethodspost) | **POST** /users/collaboration/rest/getcollaborationrolemethods | 
*CollaborationServiceApi* | [**usersCollaborationRestGetcollaborationsPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetcollaborationspost) | **POST** /users/collaboration/rest/getcollaborations | 
*CollaborationServiceApi* | [**usersCollaborationRestGetmemberresourcesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetmemberresourcespost) | **POST** /users/collaboration/rest/getmemberresources | 
*CollaborationServiceApi* | [**usersCollaborationRestGetmembersPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetmemberspost) | **POST** /users/collaboration/rest/getmembers | 
*CollaborationServiceApi* | [**usersCollaborationRestGetpoliciesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetpoliciespost) | **POST** /users/collaboration/rest/getpolicies | 
*CollaborationServiceApi* | [**usersCollaborationRestGetpolicymethodsPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetpolicymethodspost) | **POST** /users/collaboration/rest/getpolicymethods | 
*CollaborationServiceApi* | [**usersCollaborationRestGetresourcerolesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetresourcerolespost) | **POST** /users/collaboration/rest/getresourceroles | 
*CollaborationServiceApi* | [**usersCollaborationRestGetrolesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestgetrolespost) | **POST** /users/collaboration/rest/getroles | 
*CollaborationServiceApi* | [**usersCollaborationRestInvitememberPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestinvitememberpost) | **POST** /users/collaboration/rest/invitemember | 
*CollaborationServiceApi* | [**usersCollaborationRestLeavecollaborationPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestleavecollaborationpost) | **POST** /users/collaboration/rest/leavecollaboration | 
*CollaborationServiceApi* | [**usersCollaborationRestRejectcollaborationPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestrejectcollaborationpost) | **POST** /users/collaboration/rest/rejectcollaboration | 
*CollaborationServiceApi* | [**usersCollaborationRestResendmemberinvitationPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestresendmemberinvitationpost) | **POST** /users/collaboration/rest/resendmemberinvitation | 
*CollaborationServiceApi* | [**usersCollaborationRestSetresourcePost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestsetresourcepost) | **POST** /users/collaboration/rest/setresource | 
*CollaborationServiceApi* | [**usersCollaborationRestSetresourcesPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestsetresourcespost) | **POST** /users/collaboration/rest/setresources | 
*CollaborationServiceApi* | [**usersCollaborationRestSuspendmemberPost**](docs/Api/CollaborationServiceApi.md#userscollaborationrestsuspendmemberpost) | **POST** /users/collaboration/rest/suspendmember | 
*ConsoleServiceApi* | [**marketplaceConsoleRestClearlogPost**](docs/Api/ConsoleServiceApi.md#marketplaceconsolerestclearlogpost) | **POST** /marketplace/console/rest/clearlog | 
*ConsoleServiceApi* | [**marketplaceConsoleRestReadlogPost**](docs/Api/ConsoleServiceApi.md#marketplaceconsolerestreadlogpost) | **POST** /marketplace/console/rest/readlog | 
*ConsoleServiceApi* | [**marketplaceConsoleRestWritelogPost**](docs/Api/ConsoleServiceApi.md#marketplaceconsolerestwritelogpost) | **POST** /marketplace/console/rest/writelog | 
*ControlServiceApi* | [**environmentControlRestAddcontainerenvvarsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddcontainerenvvarspost) | **POST** /environment/control/rest/addcontainerenvvars | 
*ControlServiceApi* | [**environmentControlRestAddcontainervolumePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddcontainervolumepost) | **POST** /environment/control/rest/addcontainervolume | 
*ControlServiceApi* | [**environmentControlRestAddcontainervolumebygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddcontainervolumebygrouppost) | **POST** /environment/control/rest/addcontainervolumebygroup | 
*ControlServiceApi* | [**environmentControlRestAddcontainervolumesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddcontainervolumespost) | **POST** /environment/control/rest/addcontainervolumes | 
*ControlServiceApi* | [**environmentControlRestAddendpointPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddendpointpost) | **POST** /environment/control/rest/addendpoint | 
*ControlServiceApi* | [**environmentControlRestAddenvpropertyPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddenvpropertypost) | **POST** /environment/control/rest/addenvproperty | 
*ControlServiceApi* | [**environmentControlRestAddportredirectPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestaddportredirectpost) | **POST** /environment/control/rest/addportredirect | 
*ControlServiceApi* | [**environmentControlRestApplyenvpropertyPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestapplyenvpropertypost) | **POST** /environment/control/rest/applyenvproperty | 
*ControlServiceApi* | [**environmentControlRestApplynodegroupdataPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestapplynodegroupdatapost) | **POST** /environment/control/rest/applynodegroupdata | 
*ControlServiceApi* | [**environmentControlRestAttachenvgroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestattachenvgrouppost) | **POST** /environment/control/rest/attachenvgroup | 
*ControlServiceApi* | [**environmentControlRestChangetopologyPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestchangetopologypost) | **POST** /environment/control/rest/changetopology | 
*ControlServiceApi* | [**environmentControlRestCheckmigrationpossibilityPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestcheckmigrationpossibilitypost) | **POST** /environment/control/rest/checkmigrationpossibility | 
*ControlServiceApi* | [**environmentControlRestClearlogPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestclearlogpost) | **POST** /environment/control/rest/clearlog | 
*ControlServiceApi* | [**environmentControlRestCloneenvPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestcloneenvpost) | **POST** /environment/control/rest/cloneenv | 
*ControlServiceApi* | [**environmentControlRestCreateenvironmentPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestcreateenvironmentpost) | **POST** /environment/control/rest/createenvironment | 
*ControlServiceApi* | [**environmentControlRestDeleteenvPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestdeleteenvpost) | **POST** /environment/control/rest/deleteenv | 
*ControlServiceApi* | [**environmentControlRestDeployappPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestdeployapppost) | **POST** /environment/control/rest/deployapp | 
*ControlServiceApi* | [**environmentControlRestDetachenvgroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestdetachenvgrouppost) | **POST** /environment/control/rest/detachenvgroup | 
*ControlServiceApi* | [**environmentControlRestEditendpointPost**](docs/Api/ControlServiceApi.md#environmentcontrolresteditendpointpost) | **POST** /environment/control/rest/editendpoint | 
*ControlServiceApi* | [**environmentControlRestEditnodegroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolresteditnodegrouppost) | **POST** /environment/control/rest/editnodegroup | 
*ControlServiceApi* | [**environmentControlRestEditregistrycredentialsPost**](docs/Api/ControlServiceApi.md#environmentcontrolresteditregistrycredentialspost) | **POST** /environment/control/rest/editregistrycredentials | 
*ControlServiceApi* | [**environmentControlRestExeccmdbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestexeccmdbygrouppost) | **POST** /environment/control/rest/execcmdbygroup | 
*ControlServiceApi* | [**environmentControlRestExeccmdbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestexeccmdbyidpost) | **POST** /environment/control/rest/execcmdbyid | 
*ControlServiceApi* | [**environmentControlRestGetallsumstatbyuidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetallsumstatbyuidpost) | **POST** /environment/control/rest/getallsumstatbyuid | 
*ControlServiceApi* | [**environmentControlRestGetbasicenvsinfoPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetbasicenvsinfopost) | **POST** /environment/control/rest/getbasicenvsinfo | 
*ControlServiceApi* | [**environmentControlRestGetcontainerentrypointPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainerentrypointpost) | **POST** /environment/control/rest/getcontainerentrypoint | 
*ControlServiceApi* | [**environmentControlRestGetcontainerenvvarsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainerenvvarspost) | **POST** /environment/control/rest/getcontainerenvvars | 
*ControlServiceApi* | [**environmentControlRestGetcontainerenvvarsbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainerenvvarsbygrouppost) | **POST** /environment/control/rest/getcontainerenvvarsbygroup | 
*ControlServiceApi* | [**environmentControlRestGetcontainermanifestPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainermanifestpost) | **POST** /environment/control/rest/getcontainermanifest | 
*ControlServiceApi* | [**environmentControlRestGetcontainernodetagsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainernodetagspost) | **POST** /environment/control/rest/getcontainernodetags | 
*ControlServiceApi* | [**environmentControlRestGetcontainerruncmdPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainerruncmdpost) | **POST** /environment/control/rest/getcontainerruncmd | 
*ControlServiceApi* | [**environmentControlRestGetcontainerrunconfigPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainerrunconfigpost) | **POST** /environment/control/rest/getcontainerrunconfig | 
*ControlServiceApi* | [**environmentControlRestGetcontainertagsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainertagspost) | **POST** /environment/control/rest/getcontainertags | 
*ControlServiceApi* | [**environmentControlRestGetcontainervolumesbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainervolumesbygrouppost) | **POST** /environment/control/rest/getcontainervolumesbygroup | 
*ControlServiceApi* | [**environmentControlRestGetcontainervolumesbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetcontainervolumesbyidpost) | **POST** /environment/control/rest/getcontainervolumesbyid | 
*ControlServiceApi* | [**environmentControlRestGetendpointsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetendpointspost) | **POST** /environment/control/rest/getendpoints | 
*ControlServiceApi* | [**environmentControlRestGetenvinfoPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetenvinfopost) | **POST** /environment/control/rest/getenvinfo | 
*ControlServiceApi* | [**environmentControlRestGetenvpropertyPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetenvpropertypost) | **POST** /environment/control/rest/getenvproperty | 
*ControlServiceApi* | [**environmentControlRestGetenvsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetenvspost) | **POST** /environment/control/rest/getenvs | 
*ControlServiceApi* | [**environmentControlRestGetlogsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetlogspost) | **POST** /environment/control/rest/getlogs | 
*ControlServiceApi* | [**environmentControlRestGetlogslistPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetlogslistpost) | **POST** /environment/control/rest/getlogslist | 
*ControlServiceApi* | [**environmentControlRestGetnodegroupsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetnodegroupspost) | **POST** /environment/control/rest/getnodegroups | 
*ControlServiceApi* | [**environmentControlRestGetnodetagsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetnodetagspost) | **POST** /environment/control/rest/getnodetags | 
*ControlServiceApi* | [**environmentControlRestGetregionsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetregionspost) | **POST** /environment/control/rest/getregions | 
*ControlServiceApi* | [**environmentControlRestGetregionsinnerPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetregionsinnerpost) | **POST** /environment/control/rest/getregionsinner | 
*ControlServiceApi* | [**environmentControlRestGetregistryinfoPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetregistryinfopost) | **POST** /environment/control/rest/getregistryinfo | 
*ControlServiceApi* | [**environmentControlRestGetsoftwarepackagesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetsoftwarepackagespost) | **POST** /environment/control/rest/getsoftwarepackages | 
*ControlServiceApi* | [**environmentControlRestGetsshaccessinfoPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetsshaccessinfopost) | **POST** /environment/control/rest/getsshaccessinfo | 
*ControlServiceApi* | [**environmentControlRestGetstatsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetstatspost) | **POST** /environment/control/rest/getstats | 
*ControlServiceApi* | [**environmentControlRestGetsumstatPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgetsumstatpost) | **POST** /environment/control/rest/getsumstat | 
*ControlServiceApi* | [**environmentControlRestGettemplatemanifestPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgettemplatemanifestpost) | **POST** /environment/control/rest/gettemplatemanifest | 
*ControlServiceApi* | [**environmentControlRestGettemplatesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestgettemplatespost) | **POST** /environment/control/rest/gettemplates | 
*ControlServiceApi* | [**environmentControlRestMigratePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestmigratepost) | **POST** /environment/control/rest/migrate | 
*ControlServiceApi* | [**environmentControlRestReadlogPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestreadlogpost) | **POST** /environment/control/rest/readlog | 
*ControlServiceApi* | [**environmentControlRestRedeploycontainerbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestredeploycontainerbyidpost) | **POST** /environment/control/rest/redeploycontainerbyid | 
*ControlServiceApi* | [**environmentControlRestRedeploycontainersPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestredeploycontainerspost) | **POST** /environment/control/rest/redeploycontainers | 
*ControlServiceApi* | [**environmentControlRestRedeploycontainersbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestredeploycontainersbygrouppost) | **POST** /environment/control/rest/redeploycontainersbygroup | 
*ControlServiceApi* | [**environmentControlRestRemoveappPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremoveapppost) | **POST** /environment/control/rest/removeapp | 
*ControlServiceApi* | [**environmentControlRestRemovecontainerenvvarsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremovecontainerenvvarspost) | **POST** /environment/control/rest/removecontainerenvvars | 
*ControlServiceApi* | [**environmentControlRestRemovecontainervolumePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremovecontainervolumepost) | **POST** /environment/control/rest/removecontainervolume | 
*ControlServiceApi* | [**environmentControlRestRemovecontainervolumebygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremovecontainervolumebygrouppost) | **POST** /environment/control/rest/removecontainervolumebygroup | 
*ControlServiceApi* | [**environmentControlRestRemovecontainervolumesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremovecontainervolumespost) | **POST** /environment/control/rest/removecontainervolumes | 
*ControlServiceApi* | [**environmentControlRestRemoveendpointPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremoveendpointpost) | **POST** /environment/control/rest/removeendpoint | 
*ControlServiceApi* | [**environmentControlRestRemoveenvpropertyPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremoveenvpropertypost) | **POST** /environment/control/rest/removeenvproperty | 
*ControlServiceApi* | [**environmentControlRestRemovelogPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestremovelogpost) | **POST** /environment/control/rest/removelog | 
*ControlServiceApi* | [**environmentControlRestRenameappPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrenameapppost) | **POST** /environment/control/rest/renameapp | 
*ControlServiceApi* | [**environmentControlRestResetcontainerpasswordbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetcontainerpasswordbyidpost) | **POST** /environment/control/rest/resetcontainerpasswordbyid | 
*ControlServiceApi* | [**environmentControlRestResetcontainerspasswordbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetcontainerspasswordbygrouppost) | **POST** /environment/control/rest/resetcontainerspasswordbygroup | 
*ControlServiceApi* | [**environmentControlRestResetnodepasswordPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetnodepasswordpost) | **POST** /environment/control/rest/resetnodepassword | 
*ControlServiceApi* | [**environmentControlRestResetnodepasswordbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetnodepasswordbyidpost) | **POST** /environment/control/rest/resetnodepasswordbyid | 
*ControlServiceApi* | [**environmentControlRestResetnodepasswordbytypePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetnodepasswordbytypepost) | **POST** /environment/control/rest/resetnodepasswordbytype | 
*ControlServiceApi* | [**environmentControlRestResetservicepasswordPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestresetservicepasswordpost) | **POST** /environment/control/rest/resetservicepassword | 
*ControlServiceApi* | [**environmentControlRestRestartcontainerbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrestartcontainerbyidpost) | **POST** /environment/control/rest/restartcontainerbyid | 
*ControlServiceApi* | [**environmentControlRestRestartnodebyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrestartnodebyidpost) | **POST** /environment/control/rest/restartnodebyid | 
*ControlServiceApi* | [**environmentControlRestRestartnodesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrestartnodespost) | **POST** /environment/control/rest/restartnodes | 
*ControlServiceApi* | [**environmentControlRestRestartservicesPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrestartservicespost) | **POST** /environment/control/rest/restartservices | 
*ControlServiceApi* | [**environmentControlRestRestoredumpPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestrestoredumppost) | **POST** /environment/control/rest/restoredump | 
*ControlServiceApi* | [**environmentControlRestSetcloudletscountbyidPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetcloudletscountbyidpost) | **POST** /environment/control/rest/setcloudletscountbyid | 
*ControlServiceApi* | [**environmentControlRestSetcontainerentrypointPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetcontainerentrypointpost) | **POST** /environment/control/rest/setcontainerentrypoint | 
*ControlServiceApi* | [**environmentControlRestSetcontainerenvvarsPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetcontainerenvvarspost) | **POST** /environment/control/rest/setcontainerenvvars | 
*ControlServiceApi* | [**environmentControlRestSetcontainerenvvarsbygroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetcontainerenvvarsbygrouppost) | **POST** /environment/control/rest/setcontainerenvvarsbygroup | 
*ControlServiceApi* | [**environmentControlRestSetcontainerruncmdPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetcontainerruncmdpost) | **POST** /environment/control/rest/setcontainerruncmd | 
*ControlServiceApi* | [**environmentControlRestSetenvdisplaynamePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetenvdisplaynamepost) | **POST** /environment/control/rest/setenvdisplayname | 
*ControlServiceApi* | [**environmentControlRestSetenvgroupPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetenvgrouppost) | **POST** /environment/control/rest/setenvgroup | 
*ControlServiceApi* | [**environmentControlRestSetnodedisplaynamePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetnodedisplaynamepost) | **POST** /environment/control/rest/setnodedisplayname | 
*ControlServiceApi* | [**environmentControlRestSetnodegroupdisplaynamePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetnodegroupdisplaynamepost) | **POST** /environment/control/rest/setnodegroupdisplayname | 
*ControlServiceApi* | [**environmentControlRestSetslbaccessenabledPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsetslbaccessenabledpost) | **POST** /environment/control/rest/setslbaccessenabled | 
*ControlServiceApi* | [**environmentControlRestSkipmessagePost**](docs/Api/ControlServiceApi.md#environmentcontrolrestskipmessagepost) | **POST** /environment/control/rest/skipmessage | 
*ControlServiceApi* | [**environmentControlRestSleepenvPost**](docs/Api/ControlServiceApi.md#environmentcontrolrestsleepenvpost) | **POST** /environment/control/rest/sleepenv | 
*ControlServiceApi* | [**environmentControlRestStartenvPost**](docs/Api/ControlServiceApi.md#environmentcontrolreststartenvpost) | **POST** /environment/control/rest/startenv | 
*ControlServiceApi* | [**environmentControlRestStopenvPost**](docs/Api/ControlServiceApi.md#environmentcontrolreststopenvpost) | **POST** /environment/control/rest/stopenv | 
*DeploymentServiceApi* | [**environmentDeploymentRestAddbuildprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestaddbuildprojectpost) | **POST** /environment/deployment/rest/addbuildproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestAddrepoPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestaddrepopost) | **POST** /environment/deployment/rest/addrepo | 
*DeploymentServiceApi* | [**environmentDeploymentRestBuilddeployprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestbuilddeployprojectpost) | **POST** /environment/deployment/rest/builddeployproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestBuildprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestbuildprojectpost) | **POST** /environment/deployment/rest/buildproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestDeployPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestdeploypost) | **POST** /environment/deployment/rest/deploy | 
*DeploymentServiceApi* | [**environmentDeploymentRestDeployarchivePost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestdeployarchivepost) | **POST** /environment/deployment/rest/deployarchive | 
*DeploymentServiceApi* | [**environmentDeploymentRestDeployprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestdeployprojectpost) | **POST** /environment/deployment/rest/deployproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestEditbuildprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentresteditbuildprojectpost) | **POST** /environment/deployment/rest/editbuildproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestEditprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentresteditprojectpost) | **POST** /environment/deployment/rest/editproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestEditrepoPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentresteditrepopost) | **POST** /environment/deployment/rest/editrepo | 
*DeploymentServiceApi* | [**environmentDeploymentRestGetbuildprojectinfoPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgetbuildprojectinfopost) | **POST** /environment/deployment/rest/getbuildprojectinfo | 
*DeploymentServiceApi* | [**environmentDeploymentRestGetbuildprojectsPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgetbuildprojectspost) | **POST** /environment/deployment/rest/getbuildprojects | 
*DeploymentServiceApi* | [**environmentDeploymentRestGetdeploymentsPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgetdeploymentspost) | **POST** /environment/deployment/rest/getdeployments | 
*DeploymentServiceApi* | [**environmentDeploymentRestGethooksPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgethookspost) | **POST** /environment/deployment/rest/gethooks | 
*DeploymentServiceApi* | [**environmentDeploymentRestGetprojectinfoPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgetprojectinfopost) | **POST** /environment/deployment/rest/getprojectinfo | 
*DeploymentServiceApi* | [**environmentDeploymentRestGetreposPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestgetrepospost) | **POST** /environment/deployment/rest/getrepos | 
*DeploymentServiceApi* | [**environmentDeploymentRestRemovebuildprojectPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestremovebuildprojectpost) | **POST** /environment/deployment/rest/removebuildproject | 
*DeploymentServiceApi* | [**environmentDeploymentRestRemoverepoPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestremoverepopost) | **POST** /environment/deployment/rest/removerepo | 
*DeploymentServiceApi* | [**environmentDeploymentRestRenamecontextPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestrenamecontextpost) | **POST** /environment/deployment/rest/renamecontext | 
*DeploymentServiceApi* | [**environmentDeploymentRestUndeployPost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestundeploypost) | **POST** /environment/deployment/rest/undeploy | 
*DeploymentServiceApi* | [**environmentDeploymentRestUpdatePost**](docs/Api/DeploymentServiceApi.md#environmentdeploymentrestupdatepost) | **POST** /environment/deployment/rest/update | 
*ExportServiceApi* | [**environmentExportRestCreatePost**](docs/Api/ExportServiceApi.md#environmentexportrestcreatepost) | **POST** /environment/export/rest/create | 
*ExportServiceApi* | [**environmentExportRestDeletePost**](docs/Api/ExportServiceApi.md#environmentexportrestdeletepost) | **POST** /environment/export/rest/delete | 
*ExportServiceApi* | [**environmentExportRestDeleteexporteddataPost**](docs/Api/ExportServiceApi.md#environmentexportrestdeleteexporteddatapost) | **POST** /environment/export/rest/deleteexporteddata | 
*ExportServiceApi* | [**environmentExportRestGetlistPost**](docs/Api/ExportServiceApi.md#environmentexportrestgetlistpost) | **POST** /environment/export/rest/getlist | 
*ExportServiceApi* | [**environmentExportRestGetmanifestPost**](docs/Api/ExportServiceApi.md#environmentexportrestgetmanifestpost) | **POST** /environment/export/rest/getmanifest | 
*FavoriteServiceApi* | [**marketplaceFavoriteRestAddPost**](docs/Api/FavoriteServiceApi.md#marketplacefavoriterestaddpost) | **POST** /marketplace/favorite/rest/add | 
*FavoriteServiceApi* | [**marketplaceFavoriteRestAddmanifestPost**](docs/Api/FavoriteServiceApi.md#marketplacefavoriterestaddmanifestpost) | **POST** /marketplace/favorite/rest/addmanifest | 
*FavoriteServiceApi* | [**marketplaceFavoriteRestDeletePost**](docs/Api/FavoriteServiceApi.md#marketplacefavoriterestdeletepost) | **POST** /marketplace/favorite/rest/delete | 
*FavoriteServiceApi* | [**marketplaceFavoriteRestGetlistPost**](docs/Api/FavoriteServiceApi.md#marketplacefavoriterestgetlistpost) | **POST** /marketplace/favorite/rest/getlist | 
*FileServiceApi* | [**environmentFileRestAddfavoritePost**](docs/Api/FileServiceApi.md#environmentfilerestaddfavoritepost) | **POST** /environment/file/rest/addfavorite | 
*FileServiceApi* | [**environmentFileRestAddmountpointbygroupPost**](docs/Api/FileServiceApi.md#environmentfilerestaddmountpointbygrouppost) | **POST** /environment/file/rest/addmountpointbygroup | 
*FileServiceApi* | [**environmentFileRestAddmountpointbyidPost**](docs/Api/FileServiceApi.md#environmentfilerestaddmountpointbyidpost) | **POST** /environment/file/rest/addmountpointbyid | 
*FileServiceApi* | [**environmentFileRestAppendPost**](docs/Api/FileServiceApi.md#environmentfilerestappendpost) | **POST** /environment/file/rest/append | 
*FileServiceApi* | [**environmentFileRestCheckcrossmountPost**](docs/Api/FileServiceApi.md#environmentfilerestcheckcrossmountpost) | **POST** /environment/file/rest/checkcrossmount | 
*FileServiceApi* | [**environmentFileRestCopyPost**](docs/Api/FileServiceApi.md#environmentfilerestcopypost) | **POST** /environment/file/rest/copy | 
*FileServiceApi* | [**environmentFileRestCreatePost**](docs/Api/FileServiceApi.md#environmentfilerestcreatepost) | **POST** /environment/file/rest/create | 
*FileServiceApi* | [**environmentFileRestDeletePost**](docs/Api/FileServiceApi.md#environmentfilerestdeletepost) | **POST** /environment/file/rest/delete | 
*FileServiceApi* | [**environmentFileRestGetexportedlistPost**](docs/Api/FileServiceApi.md#environmentfilerestgetexportedlistpost) | **POST** /environment/file/rest/getexportedlist | 
*FileServiceApi* | [**environmentFileRestGetfavoritesPost**](docs/Api/FileServiceApi.md#environmentfilerestgetfavoritespost) | **POST** /environment/file/rest/getfavorites | 
*FileServiceApi* | [**environmentFileRestGetlistPost**](docs/Api/FileServiceApi.md#environmentfilerestgetlistpost) | **POST** /environment/file/rest/getlist | 
*FileServiceApi* | [**environmentFileRestGetmountpointsPost**](docs/Api/FileServiceApi.md#environmentfilerestgetmountpointspost) | **POST** /environment/file/rest/getmountpoints | 
*FileServiceApi* | [**environmentFileRestReadPost**](docs/Api/FileServiceApi.md#environmentfilerestreadpost) | **POST** /environment/file/rest/read | 
*FileServiceApi* | [**environmentFileRestRemoveexportPost**](docs/Api/FileServiceApi.md#environmentfilerestremoveexportpost) | **POST** /environment/file/rest/removeexport | 
*FileServiceApi* | [**environmentFileRestRemovefavoritePost**](docs/Api/FileServiceApi.md#environmentfilerestremovefavoritepost) | **POST** /environment/file/rest/removefavorite | 
*FileServiceApi* | [**environmentFileRestRemovemountpointbygroupPost**](docs/Api/FileServiceApi.md#environmentfilerestremovemountpointbygrouppost) | **POST** /environment/file/rest/removemountpointbygroup | 
*FileServiceApi* | [**environmentFileRestRemovemountpointbyidPost**](docs/Api/FileServiceApi.md#environmentfilerestremovemountpointbyidpost) | **POST** /environment/file/rest/removemountpointbyid | 
*FileServiceApi* | [**environmentFileRestRenamePost**](docs/Api/FileServiceApi.md#environmentfilerestrenamepost) | **POST** /environment/file/rest/rename | 
*FileServiceApi* | [**environmentFileRestReplaceinbodyPost**](docs/Api/FileServiceApi.md#environmentfilerestreplaceinbodypost) | **POST** /environment/file/rest/replaceinbody | 
*FileServiceApi* | [**environmentFileRestUnpackbyidPost**](docs/Api/FileServiceApi.md#environmentfilerestunpackbyidpost) | **POST** /environment/file/rest/unpackbyid | 
*FileServiceApi* | [**environmentFileRestUnpackbytypePost**](docs/Api/FileServiceApi.md#environmentfilerestunpackbytypepost) | **POST** /environment/file/rest/unpackbytype | 
*FileServiceApi* | [**environmentFileRestUploadPost**](docs/Api/FileServiceApi.md#environmentfilerestuploadpost) | **POST** /environment/file/rest/upload | 
*FileServiceApi* | [**environmentFileRestWritePost**](docs/Api/FileServiceApi.md#environmentfilerestwritepost) | **POST** /environment/file/rest/write | 
*GroupServiceApi* | [**environmentGroupRestAttachenvPost**](docs/Api/GroupServiceApi.md#environmentgrouprestattachenvpost) | **POST** /environment/group/rest/attachenv | 
*GroupServiceApi* | [**environmentGroupRestCreategroupPost**](docs/Api/GroupServiceApi.md#environmentgrouprestcreategrouppost) | **POST** /environment/group/rest/creategroup | 
*GroupServiceApi* | [**environmentGroupRestDetachenvPost**](docs/Api/GroupServiceApi.md#environmentgrouprestdetachenvpost) | **POST** /environment/group/rest/detachenv | 
*GroupServiceApi* | [**environmentGroupRestEditgroupPost**](docs/Api/GroupServiceApi.md#environmentgroupresteditgrouppost) | **POST** /environment/group/rest/editgroup | 
*GroupServiceApi* | [**environmentGroupRestGetgroupsPost**](docs/Api/GroupServiceApi.md#environmentgrouprestgetgroupspost) | **POST** /environment/group/rest/getgroups | 
*GroupServiceApi* | [**environmentGroupRestRemovegroupPost**](docs/Api/GroupServiceApi.md#environmentgrouprestremovegrouppost) | **POST** /environment/group/rest/removegroup | 
*GroupServiceApi* | [**environmentGroupRestSetenvPost**](docs/Api/GroupServiceApi.md#environmentgrouprestsetenvpost) | **POST** /environment/group/rest/setenv | 
*GroupServiceApi* | [**environmentGroupRestSetisolationenabledPost**](docs/Api/GroupServiceApi.md#environmentgrouprestsetisolationenabledpost) | **POST** /environment/group/rest/setisolationenabled | 
*InstallationServiceApi* | [**marketplaceInstallationRestExecuteactionPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestexecuteactionpost) | **POST** /marketplace/installation/rest/executeaction | 
*InstallationServiceApi* | [**marketplaceInstallationRestGetenvappidPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestgetenvappidpost) | **POST** /marketplace/installation/rest/getenvappid | 
*InstallationServiceApi* | [**marketplaceInstallationRestGetinfoPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestgetinfopost) | **POST** /marketplace/installation/rest/getinfo | 
*InstallationServiceApi* | [**marketplaceInstallationRestGetlistPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestgetlistpost) | **POST** /marketplace/installation/rest/getlist | 
*InstallationServiceApi* | [**marketplaceInstallationRestGetscriptingappidPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestgetscriptingappidpost) | **POST** /marketplace/installation/rest/getscriptingappid | 
*InstallationServiceApi* | [**marketplaceInstallationRestGetsettingsPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestgetsettingspost) | **POST** /marketplace/installation/rest/getsettings | 
*InstallationServiceApi* | [**marketplaceInstallationRestUninstallPost**](docs/Api/InstallationServiceApi.md#marketplaceinstallationrestuninstallpost) | **POST** /marketplace/installation/rest/uninstall | 
*JpsServiceApi* | [**marketplaceJpsRestExecuteappactionPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestexecuteappactionpost) | **POST** /marketplace/jps/rest/executeappaction | 
*JpsServiceApi* | [**marketplaceJpsRestGetappinfoPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestgetappinfopost) | **POST** /marketplace/jps/rest/getappinfo | 
*JpsServiceApi* | [**marketplaceJpsRestGetappsettingsPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestgetappsettingspost) | **POST** /marketplace/jps/rest/getappsettings | 
*JpsServiceApi* | [**marketplaceJpsRestGetengineversionPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestgetengineversionpost) | **POST** /marketplace/jps/rest/getengineversion | 
*JpsServiceApi* | [**marketplaceJpsRestGetscriptingappidPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestgetscriptingappidpost) | **POST** /marketplace/jps/rest/getscriptingappid | 
*JpsServiceApi* | [**marketplaceJpsRestInstallPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestinstallpost) | **POST** /marketplace/jps/rest/install | 
*JpsServiceApi* | [**marketplaceJpsRestUninstallPost**](docs/Api/JpsServiceApi.md#marketplacejpsrestuninstallpost) | **POST** /marketplace/jps/rest/uninstall | 
*NodegroupServiceApi* | [**environmentNodegroupRestApplydataPost**](docs/Api/NodegroupServiceApi.md#environmentnodegrouprestapplydatapost) | **POST** /environment/nodegroup/rest/applydata | 
*NodegroupServiceApi* | [**environmentNodegroupRestGetPost**](docs/Api/NodegroupServiceApi.md#environmentnodegrouprestgetpost) | **POST** /environment/nodegroup/rest/get | 
*NodegroupServiceApi* | [**environmentNodegroupRestSetoptionsPost**](docs/Api/NodegroupServiceApi.md#environmentnodegrouprestsetoptionspost) | **POST** /environment/nodegroup/rest/setoptions | 
*NodegroupServiceApi* | [**environmentNodegroupRestSetslbaccessenabledPost**](docs/Api/NodegroupServiceApi.md#environmentnodegrouprestsetslbaccessenabledpost) | **POST** /environment/nodegroup/rest/setslbaccessenabled | 
*SchedulerServiceApi* | [**utilsSchedulerRestCreateaccounttaskPost**](docs/Api/SchedulerServiceApi.md#utilsschedulerrestcreateaccounttaskpost) | **POST** /utils/scheduler/rest/createaccounttask | 
*SchedulerServiceApi* | [**utilsSchedulerRestCreateenvtaskPost**](docs/Api/SchedulerServiceApi.md#utilsschedulerrestcreateenvtaskpost) | **POST** /utils/scheduler/rest/createenvtask | 
*SchedulerServiceApi* | [**utilsSchedulerRestDeletetasksPost**](docs/Api/SchedulerServiceApi.md#utilsschedulerrestdeletetaskspost) | **POST** /utils/scheduler/rest/deletetasks | 
*SchedulerServiceApi* | [**utilsSchedulerRestEdittaskPost**](docs/Api/SchedulerServiceApi.md#utilsschedulerrestedittaskpost) | **POST** /utils/scheduler/rest/edittask | 
*SchedulerServiceApi* | [**utilsSchedulerRestGettasksPost**](docs/Api/SchedulerServiceApi.md#utilsschedulerrestgettaskspost) | **POST** /utils/scheduler/rest/gettasks | 
*SecurityServiceApi* | [**environmentSecurityRestAddrulePost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestaddrulepost) | **POST** /environment/security/rest/addrule | 
*SecurityServiceApi* | [**environmentSecurityRestAddrulesPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestaddrulespost) | **POST** /environment/security/rest/addrules | 
*SecurityServiceApi* | [**environmentSecurityRestEditrulePost**](docs/Api/SecurityServiceApi.md#environmentsecurityresteditrulepost) | **POST** /environment/security/rest/editrule | 
*SecurityServiceApi* | [**environmentSecurityRestGetrulesPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestgetrulespost) | **POST** /environment/security/rest/getrules | 
*SecurityServiceApi* | [**environmentSecurityRestRemoverulePost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestremoverulepost) | **POST** /environment/security/rest/removerule | 
*SecurityServiceApi* | [**environmentSecurityRestRemoverulesPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestremoverulespost) | **POST** /environment/security/rest/removerules | 
*SecurityServiceApi* | [**environmentSecurityRestSetfirewallenabledPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestsetfirewallenabledpost) | **POST** /environment/security/rest/setfirewallenabled | 
*SecurityServiceApi* | [**environmentSecurityRestSetruleenabledPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestsetruleenabledpost) | **POST** /environment/security/rest/setruleenabled | 
*SecurityServiceApi* | [**environmentSecurityRestSetrulesPost**](docs/Api/SecurityServiceApi.md#environmentsecurityrestsetrulespost) | **POST** /environment/security/rest/setrules | 
*TrackingServiceApi* | [**environmentTrackingRestGetactionPost**](docs/Api/TrackingServiceApi.md#environmenttrackingrestgetactionpost) | **POST** /environment/tracking/rest/getaction | 
*TrackingServiceApi* | [**environmentTrackingRestGetcurrentactionsPost**](docs/Api/TrackingServiceApi.md#environmenttrackingrestgetcurrentactionspost) | **POST** /environment/tracking/rest/getcurrentactions | 
*TrackingServiceApi* | [**environmentTrackingRestGetserverutctimePost**](docs/Api/TrackingServiceApi.md#environmenttrackingrestgetserverutctimepost) | **POST** /environment/tracking/rest/getserverutctime | 
*TrackingServiceApi* | [**environmentTrackingRestGetuidactionsPost**](docs/Api/TrackingServiceApi.md#environmenttrackingrestgetuidactionspost) | **POST** /environment/tracking/rest/getuidactions | 
*TrackingServiceApi* | [**environmentTrackingRestSearchactionsPost**](docs/Api/TrackingServiceApi.md#environmenttrackingrestsearchactionspost) | **POST** /environment/tracking/rest/searchactions | 
*TriggerServiceApi* | [**environmentTriggerRestAddautoscalingtriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestaddautoscalingtriggerpost) | **POST** /environment/trigger/rest/addautoscalingtrigger | 
*TriggerServiceApi* | [**environmentTriggerRestAddloadalerttriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestaddloadalerttriggerpost) | **POST** /environment/trigger/rest/addloadalerttrigger | 
*TriggerServiceApi* | [**environmentTriggerRestAddtriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestaddtriggerpost) | **POST** /environment/trigger/rest/addtrigger | 
*TriggerServiceApi* | [**environmentTriggerRestAutoscalinghistoryPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestautoscalinghistorypost) | **POST** /environment/trigger/rest/autoscalinghistory | 
*TriggerServiceApi* | [**environmentTriggerRestDeleteautoscalingtriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestdeleteautoscalingtriggerpost) | **POST** /environment/trigger/rest/deleteautoscalingtrigger | 
*TriggerServiceApi* | [**environmentTriggerRestDeleteloadalerttriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestdeleteloadalerttriggerpost) | **POST** /environment/trigger/rest/deleteloadalerttrigger | 
*TriggerServiceApi* | [**environmentTriggerRestDeletetriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestdeletetriggerpost) | **POST** /environment/trigger/rest/deletetrigger | 
*TriggerServiceApi* | [**environmentTriggerRestEditautoscalingtriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerresteditautoscalingtriggerpost) | **POST** /environment/trigger/rest/editautoscalingtrigger | 
*TriggerServiceApi* | [**environmentTriggerRestEditloadalerttriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerresteditloadalerttriggerpost) | **POST** /environment/trigger/rest/editloadalerttrigger | 
*TriggerServiceApi* | [**environmentTriggerRestEdittriggerPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestedittriggerpost) | **POST** /environment/trigger/rest/edittrigger | 
*TriggerServiceApi* | [**environmentTriggerRestGetautoscalingtriggersPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestgetautoscalingtriggerspost) | **POST** /environment/trigger/rest/getautoscalingtriggers | 
*TriggerServiceApi* | [**environmentTriggerRestGetloadalerttriggersPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestgetloadalerttriggerspost) | **POST** /environment/trigger/rest/getloadalerttriggers | 
*TriggerServiceApi* | [**environmentTriggerRestGettriggerlogsPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestgettriggerlogspost) | **POST** /environment/trigger/rest/gettriggerlogs | 
*TriggerServiceApi* | [**environmentTriggerRestGettriggersPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestgettriggerspost) | **POST** /environment/trigger/rest/gettriggers | 
*TriggerServiceApi* | [**environmentTriggerRestLoadalerthistoryPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestloadalerthistorypost) | **POST** /environment/trigger/rest/loadalerthistory | 
*TriggerServiceApi* | [**environmentTriggerRestSetautoscalingtriggerenabledPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestsetautoscalingtriggerenabledpost) | **POST** /environment/trigger/rest/setautoscalingtriggerenabled | 
*TriggerServiceApi* | [**environmentTriggerRestSetloadalerttriggerenabledPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestsetloadalerttriggerenabledpost) | **POST** /environment/trigger/rest/setloadalerttriggerenabled | 
*TriggerServiceApi* | [**environmentTriggerRestSettriggerenabledPost**](docs/Api/TriggerServiceApi.md#environmenttriggerrestsettriggerenabledpost) | **POST** /environment/trigger/rest/settriggerenabled | 
*VcsServiceApi* | [**environmentVcsRestCreateprojectPost**](docs/Api/VcsServiceApi.md#environmentvcsrestcreateprojectpost) | **POST** /environment/vcs/rest/createproject | 
*VcsServiceApi* | [**environmentVcsRestDeleteprojectPost**](docs/Api/VcsServiceApi.md#environmentvcsrestdeleteprojectpost) | **POST** /environment/vcs/rest/deleteproject | 
*VcsServiceApi* | [**environmentVcsRestEditprojectPost**](docs/Api/VcsServiceApi.md#environmentvcsresteditprojectpost) | **POST** /environment/vcs/rest/editproject | 
*VcsServiceApi* | [**environmentVcsRestGetprojectPost**](docs/Api/VcsServiceApi.md#environmentvcsrestgetprojectpost) | **POST** /environment/vcs/rest/getproject | 
*VcsServiceApi* | [**environmentVcsRestUpdatePost**](docs/Api/VcsServiceApi.md#environmentvcsrestupdatepost) | **POST** /environment/vcs/rest/update | 

## Models

- [AuthConfig](docs/Model/AuthConfig.md)
- [CollaborationRole](docs/Model/CollaborationRole.md)
- [CollaborationRoleOwner](docs/Model/CollaborationRoleOwner.md)
- [ComHivextApiDevelopmentResponseScriptEvalResponse](docs/Model/ComHivextApiDevelopmentResponseScriptEvalResponse.md)
- [ComHivextApiResponse](docs/Model/ComHivextApiResponse.md)
- [ComHivextApiServerAdministrationResponsePagedArrayResponse](docs/Model/ComHivextApiServerAdministrationResponsePagedArrayResponse.md)
- [ComHivextApiServerBillingResponseAccountResponse](docs/Model/ComHivextApiServerBillingResponseAccountResponse.md)
- [ComHivextApiServerBillingResponseArrayResponse](docs/Model/ComHivextApiServerBillingResponseArrayResponse.md)
- [ComHivextApiServerDataResponseObjectResponse](docs/Model/ComHivextApiServerDataResponseObjectResponse.md)
- [ComHivextApiServerDataResponseObjectResponseFields](docs/Model/ComHivextApiServerDataResponseObjectResponseFields.md)
- [ComHivextApiServerDataResponseObjectResponseObject](docs/Model/ComHivextApiServerDataResponseObjectResponseObject.md)
- [ComHivextApiServerDataResponseObjectsCountResponse](docs/Model/ComHivextApiServerDataResponseObjectsCountResponse.md)
- [ComHivextApiServerDataResponseObjectsResponse](docs/Model/ComHivextApiServerDataResponseObjectsResponse.md)
- [ComHivextApiServerDevelopmentResponseInterfacesArrayResponse](docs/Model/ComHivextApiServerDevelopmentResponseInterfacesArrayResponse.md)
- [ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponse](docs/Model/ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponse.md)
- [ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponseIpAddresses](docs/Model/ComHivextApiServerEnvironmentResponseArrayExtIPAddressResponseIpAddresses.md)
- [ComHivextApiServerEnvironmentResponseBuildProjectResponse](docs/Model/ComHivextApiServerEnvironmentResponseBuildProjectResponse.md)
- [ComHivextApiServerEnvironmentResponseBuildProjectResponses](docs/Model/ComHivextApiServerEnvironmentResponseBuildProjectResponses.md)
- [ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse](docs/Model/ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponse.md)
- [ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponses](docs/Model/ComHivextApiServerEnvironmentResponseDeploymentBuildProjectResponses.md)
- [ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse](docs/Model/ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse.md)
- [ComHivextApiServerEnvironmentResponseDomainsResponse](docs/Model/ComHivextApiServerEnvironmentResponseDomainsResponse.md)
- [ComHivextApiServerEnvironmentResponseDomainsResponseNodeGroupsDomains](docs/Model/ComHivextApiServerEnvironmentResponseDomainsResponseNodeGroupsDomains.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponse](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponse.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnv](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnv.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvAttributesJson](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvAttributesJson.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvDomain](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvDomain.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvEngine](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvEngine.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvHardwareNodeGroup](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvHardwareNodeGroup.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvWinDomain](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseEnvWinDomain.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseNodesData](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseNodesData.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseNodesInternalDomains](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponseNodesInternalDomains.md)
- [ComHivextApiServerEnvironmentResponseEnvironmentInfoResponses](docs/Model/ComHivextApiServerEnvironmentResponseEnvironmentInfoResponses.md)
- [ComHivextApiServerEnvironmentResponseExecResponse](docs/Model/ComHivextApiServerEnvironmentResponseExecResponse.md)
- [ComHivextApiServerEnvironmentResponseExtDomainResponse](docs/Model/ComHivextApiServerEnvironmentResponseExtDomainResponse.md)
- [ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomain](docs/Model/ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomain.md)
- [ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomainSslCert](docs/Model/ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomainSslCert.md)
- [ComHivextApiServerEnvironmentResponseExtDomainResponses](docs/Model/ComHivextApiServerEnvironmentResponseExtDomainResponses.md)
- [ComHivextApiServerEnvironmentResponseFavoriteListResponse](docs/Model/ComHivextApiServerEnvironmentResponseFavoriteListResponse.md)
- [ComHivextApiServerEnvironmentResponseFilePermissionResponse](docs/Model/ComHivextApiServerEnvironmentResponseFilePermissionResponse.md)
- [ComHivextApiServerEnvironmentResponseFileReadResponse](docs/Model/ComHivextApiServerEnvironmentResponseFileReadResponse.md)
- [ComHivextApiServerEnvironmentResponseFilesListResponse](docs/Model/ComHivextApiServerEnvironmentResponseFilesListResponse.md)
- [ComHivextApiServerEnvironmentResponseFilesListResponseKeywords](docs/Model/ComHivextApiServerEnvironmentResponseFilesListResponseKeywords.md)
- [ComHivextApiServerEnvironmentResponseLogReadResponse](docs/Model/ComHivextApiServerEnvironmentResponseLogReadResponse.md)
- [ComHivextApiServerEnvironmentResponseLogsListResponse](docs/Model/ComHivextApiServerEnvironmentResponseLogsListResponse.md)
- [ComHivextApiServerEnvironmentResponseLogsListResponseRotatedLogs](docs/Model/ComHivextApiServerEnvironmentResponseLogsListResponseRotatedLogs.md)
- [ComHivextApiServerEnvironmentResponseNodeGroupResponse](docs/Model/ComHivextApiServerEnvironmentResponseNodeGroupResponse.md)
- [ComHivextApiServerEnvironmentResponseNodeSSHResponse](docs/Model/ComHivextApiServerEnvironmentResponseNodeSSHResponse.md)
- [ComHivextApiServerEnvironmentResponseNodeSSHResponses](docs/Model/ComHivextApiServerEnvironmentResponseNodeSSHResponses.md)
- [ComHivextApiServerEnvironmentResponseObjectResponse](docs/Model/ComHivextApiServerEnvironmentResponseObjectResponse.md)
- [ComHivextApiServerEnvironmentResponseRegistryInfoResponse](docs/Model/ComHivextApiServerEnvironmentResponseRegistryInfoResponse.md)
- [ComHivextApiServerEnvironmentResponseSSLCertResponse](docs/Model/ComHivextApiServerEnvironmentResponseSSLCertResponse.md)
- [ComHivextApiServerEnvironmentResponseSSLCertResponses](docs/Model/ComHivextApiServerEnvironmentResponseSSLCertResponses.md)
- [ComHivextApiServerEnvironmentResponseSSLCustomResponse](docs/Model/ComHivextApiServerEnvironmentResponseSSLCustomResponse.md)
- [ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom](docs/Model/ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodeResponse](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodeResponse.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNode](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNode.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodeHn](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodeHn.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodeHnVsVersion](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodeHnVsVersion.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodePrimaryIpv4](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodeResponseSoftNodePrimaryIpv4.md)
- [ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse](docs/Model/ComHivextApiServerEnvironmentResponseSoftwareNodesListResponse.md)
- [ComHivextApiServerEnvironmentResponseTagsArrayResponse](docs/Model/ComHivextApiServerEnvironmentResponseTagsArrayResponse.md)
- [ComHivextApiServerEnvironmentResponseTemplateArrayResponse](docs/Model/ComHivextApiServerEnvironmentResponseTemplateArrayResponse.md)
- [ComHivextApiServerEnvironmentResponseVcsResponse](docs/Model/ComHivextApiServerEnvironmentResponseVcsResponse.md)
- [ComHivextApiServerEnvironmentResponseVcsUpdateResponse](docs/Model/ComHivextApiServerEnvironmentResponseVcsUpdateResponse.md)
- [ComHivextApiServerListResponse](docs/Model/ComHivextApiServerListResponse.md)
- [ComHivextApiServerMarketplaceResponseAddAppResponse](docs/Model/ComHivextApiServerMarketplaceResponseAddAppResponse.md)
- [ComHivextApiServerMarketplaceResponseAppInfoResponse](docs/Model/ComHivextApiServerMarketplaceResponseAppInfoResponse.md)
- [ComHivextApiServerMarketplaceResponseAppsListResponse](docs/Model/ComHivextApiServerMarketplaceResponseAppsListResponse.md)
- [ComHivextApiServerMarketplaceResponseAppsListResponseApps](docs/Model/ComHivextApiServerMarketplaceResponseAppsListResponseApps.md)
- [ComHivextApiServerMarketplaceResponseChecksumResponse](docs/Model/ComHivextApiServerMarketplaceResponseChecksumResponse.md)
- [ComHivextApiServerMarketplaceResponseGetEngineVersionResponse](docs/Model/ComHivextApiServerMarketplaceResponseGetEngineVersionResponse.md)
- [ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse](docs/Model/ComHivextApiServerMarketplaceResponseGetScriptingAppidResponse.md)
- [ComHivextApiServerMarketplaceResponseInstallResponse](docs/Model/ComHivextApiServerMarketplaceResponseInstallResponse.md)
- [ComHivextApiServerMarketplaceResponseReadLogResponse](docs/Model/ComHivextApiServerMarketplaceResponseReadLogResponse.md)
- [ComHivextApiServerMarketplaceResponseSettingsResponse](docs/Model/ComHivextApiServerMarketplaceResponseSettingsResponse.md)
- [ComHivextApiServerResponseScriptEvalProxyResponse](docs/Model/ComHivextApiServerResponseScriptEvalProxyResponse.md)
- [ComHivextApiServerStatisticResponseEnvironmentStatisticResponse](docs/Model/ComHivextApiServerStatisticResponseEnvironmentStatisticResponse.md)
- [ComHivextApiServerStatisticResponseEnvironmentsStatisticResponse](docs/Model/ComHivextApiServerStatisticResponseEnvironmentsStatisticResponse.md)
- [ComHivextApiServerUsersResponseApiTokenPermissionsResponse](docs/Model/ComHivextApiServerUsersResponseApiTokenPermissionsResponse.md)
- [ComHivextApiServerUsersResponseApiTokenResponse](docs/Model/ComHivextApiServerUsersResponseApiTokenResponse.md)
- [ComHivextApiServerUsersResponseApiTokenResponseToken](docs/Model/ComHivextApiServerUsersResponseApiTokenResponseToken.md)
- [ComHivextApiServerUsersResponseApiTokenResponseTokenTokenTemplate](docs/Model/ComHivextApiServerUsersResponseApiTokenResponseTokenTokenTemplate.md)
- [ComHivextApiServerUsersResponseApiTokenTemplatesResponse](docs/Model/ComHivextApiServerUsersResponseApiTokenTemplatesResponse.md)
- [ComHivextApiServerUsersResponseApiTokensResponse](docs/Model/ComHivextApiServerUsersResponseApiTokensResponse.md)
- [ComHivextApiServerUsersResponseAuthenticationResponse](docs/Model/ComHivextApiServerUsersResponseAuthenticationResponse.md)
- [ComHivextApiServerUsersResponseAuthenticationResponseRequiredAuthCheck](docs/Model/ComHivextApiServerUsersResponseAuthenticationResponseRequiredAuthCheck.md)
- [ComHivextApiServerUsersResponseCollaborationResourceResponse](docs/Model/ComHivextApiServerUsersResponseCollaborationResourceResponse.md)
- [ComHivextApiServerUsersResponseCollaborationResourceResponses](docs/Model/ComHivextApiServerUsersResponseCollaborationResourceResponses.md)
- [ComHivextApiServerUsersResponseCollaborationResponse](docs/Model/ComHivextApiServerUsersResponseCollaborationResponse.md)
- [ComHivextApiServerUsersResponseCollaborationResponseCollaboration](docs/Model/ComHivextApiServerUsersResponseCollaborationResponseCollaboration.md)
- [ComHivextApiServerUsersResponseCollaborationResponseCollaborationMember](docs/Model/ComHivextApiServerUsersResponseCollaborationResponseCollaborationMember.md)
- [ComHivextApiServerUsersResponseCollaborationRoleResponse](docs/Model/ComHivextApiServerUsersResponseCollaborationRoleResponse.md)
- [ComHivextApiServerUsersResponseCollaborationRoleResponseRole](docs/Model/ComHivextApiServerUsersResponseCollaborationRoleResponseRole.md)
- [ComHivextApiServerUsersResponseCollaborationRolesResponse](docs/Model/ComHivextApiServerUsersResponseCollaborationRolesResponse.md)
- [ComHivextApiServerUsersResponseCollaborationsResponse](docs/Model/ComHivextApiServerUsersResponseCollaborationsResponse.md)
- [ComHivextApiServerUsersResponsePoliciesResponse](docs/Model/ComHivextApiServerUsersResponsePoliciesResponse.md)
- [ComHivextApiServerUsersResponsePolicyResponse](docs/Model/ComHivextApiServerUsersResponsePolicyResponse.md)
- [ComHivextApiServerUsersResponsePolicyResponsePolicy](docs/Model/ComHivextApiServerUsersResponsePolicyResponsePolicy.md)
- [ComHivextApiServerUsersResponseSessionsResponse](docs/Model/ComHivextApiServerUsersResponseSessionsResponse.md)
- [ComHivextApiServerUsersResponseStringArrayResponse](docs/Model/ComHivextApiServerUsersResponseStringArrayResponse.md)
- [Credential](docs/Model/Credential.md)
- [Currency](docs/Model/Currency.md)
- [Engine](docs/Model/Engine.md)
- [EnvironmentControlRestCreateenvironmentPostRequestNodesDocker](docs/Model/EnvironmentControlRestCreateenvironmentPostRequestNodesDocker.md)
- [EnvironmentControlRestEditnodegroupPostRequestNodeGroup](docs/Model/EnvironmentControlRestEditnodegroupPostRequestNodeGroup.md)
- [ExtIpAddress](docs/Model/ExtIpAddress.md)
- [Group](docs/Model/Group.md)
- [GroupReseller](docs/Model/GroupReseller.md)
- [HardwareNodeGroup](docs/Model/HardwareNodeGroup.md)
- [HostGroupEndpoint](docs/Model/HostGroupEndpoint.md)
- [HostGroupEndpointHostGroup](docs/Model/HostGroupEndpointHostGroup.md)
- [Label](docs/Model/Label.md)
- [LabelHardwareNode](docs/Model/LabelHardwareNode.md)
- [LabelHardwareNodeSshCredential](docs/Model/LabelHardwareNodeSshCredential.md)
- [LabelHardwareNodeVzLicense](docs/Model/LabelHardwareNodeVzLicense.md)
- [PcsCluster](docs/Model/PcsCluster.md)
- [Quota](docs/Model/Quota.md)
- [QuotaValue](docs/Model/QuotaValue.md)
- [QuotaValueQuota](docs/Model/QuotaValueQuota.md)
- [Region](docs/Model/Region.md)
- [RegionReseller](docs/Model/RegionReseller.md)
- [RemouteFile](docs/Model/RemouteFile.md)
- [Resource](docs/Model/Resource.md)
- [SoftNodeGroup](docs/Model/SoftNodeGroup.md)
- [TariffGridItem](docs/Model/TariffGridItem.md)
- [TariffPlan](docs/Model/TariffPlan.md)
- [TariffPlanCurrency](docs/Model/TariffPlanCurrency.md)
- [TariffPlanResource](docs/Model/TariffPlanResource.md)
- [TariffPlanStrategyData](docs/Model/TariffPlanStrategyData.md)
- [Tier](docs/Model/Tier.md)
- [User](docs/Model/User.md)
- [VSVersions](docs/Model/VSVersions.md)

## Authorization

### AppidAuth

- **Type**: API key
- **API key parameter name**: appid
- **Location**: URL query string



### ChecksumAuth

- **Type**: API key
- **API key parameter name**: checksum
- **Location**: URL query string



### SessionAuth

- **Type**: API key
- **API key parameter name**: session
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `8.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
