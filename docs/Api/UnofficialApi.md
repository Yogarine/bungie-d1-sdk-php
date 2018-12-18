# Bungie\D1\UnofficialApi

All URIs are relative to *https://bungie.net/d1/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**equipItem**](UnofficialApi.md#equipItem) | **POST** /Destiny/EquipItem/ | 
[**equipItems**](UnofficialApi.md#equipItems) | **POST** /Destiny/EquipItems/ | 
[**getAccount**](UnofficialApi.md#getAccount) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/ | 
[**getAccountSummary**](UnofficialApi.md#getAccountSummary) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Summary/ | 
[**getActivityBlob**](UnofficialApi.md#getActivityBlob) | **GET** /Destiny/Stats/ActivityBlob/{param1}/ | 
[**getActivityHistory**](UnofficialApi.md#getActivityHistory) | **GET** /Destiny/Stats/ActivityHistory/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getAdvisorsForAccount**](UnofficialApi.md#getAdvisorsForAccount) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Advisors/ | 
[**getAdvisorsForCharacter**](UnofficialApi.md#getAdvisorsForCharacter) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Advisors/ | 
[**getAdvisorsForCharacterV2**](UnofficialApi.md#getAdvisorsForCharacterV2) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Advisors/V2/ | 
[**getAdvisorsForCurrentCharacter**](UnofficialApi.md#getAdvisorsForCurrentCharacter) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Advisors/ | 
[**getAllItemsSummary**](UnofficialApi.md#getAllItemsSummary) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Items/ | 
[**getAllVendorsForCurrentCharacter**](UnofficialApi.md#getAllVendorsForCurrentCharacter) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendors/ | 
[**getBondAdvisors**](UnofficialApi.md#getBondAdvisors) | **GET** /Destiny/{membershipType}/MyAccount/Advisors/Bonds/ | 
[**getCharacter**](UnofficialApi.md#getCharacter) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Complete/ | 
[**getCharacterActivities**](UnofficialApi.md#getCharacterActivities) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Activities/ | 
[**getCharacterInventory**](UnofficialApi.md#getCharacterInventory) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Inventory/ | 
[**getCharacterInventorySummary**](UnofficialApi.md#getCharacterInventorySummary) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Inventory/Summary/ | 
[**getCharacterProgression**](UnofficialApi.md#getCharacterProgression) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Progression/ | 
[**getCharacterSummary**](UnofficialApi.md#getCharacterSummary) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/ | 
[**getClanLeaderboards**](UnofficialApi.md#getClanLeaderboards) | **GET** /Destiny/Stats/ClanLeaderboards/{clanId}/ | 
[**getDestinyAggregateActivityStats**](UnofficialApi.md#getDestinyAggregateActivityStats) | **GET** /Destiny/Stats/AggregateActivityStats/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getDestinyExplorerItems**](UnofficialApi.md#getDestinyExplorerItems) | **GET** /Destiny/Explorer/Items/ | 
[**getDestinyExplorerTalentNodeSteps**](UnofficialApi.md#getDestinyExplorerTalentNodeSteps) | **GET** /Destiny/Explorer/TalentNodeSteps/ | 
[**getDestinyLiveTileContentItems**](UnofficialApi.md#getDestinyLiveTileContentItems) | **GET** /Destiny/LiveTiles/ | 
[**getDestinyManifest**](UnofficialApi.md#getDestinyManifest) | **GET** /Destiny/Manifest/ | 
[**getDestinySingleDefinition**](UnofficialApi.md#getDestinySingleDefinition) | **GET** /Destiny/Manifest/{definitionType}/{definitionId}/ | 
[**getExcellenceBadges**](UnofficialApi.md#getExcellenceBadges) | **GET** /Destiny/Stats/GetExcellenceBadges/{membershipType}/{destinyMembershipId}/ | 
[**getGrimoireByMembership**](UnofficialApi.md#getGrimoireByMembership) | **GET** /Destiny/Vanguard/Grimoire/{membershipType}/{destinyMembershipId}/ | 
[**getGrimoireDefinition**](UnofficialApi.md#getGrimoireDefinition) | **GET** /Destiny/Vanguard/Grimoire/Definition/ | 
[**getHistoricalStats**](UnofficialApi.md#getHistoricalStats) | **GET** /Destiny/Stats/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getHistoricalStatsDefinition**](UnofficialApi.md#getHistoricalStatsDefinition) | **GET** /Destiny/Stats/Definition/ | 
[**getHistoricalStatsForAccount**](UnofficialApi.md#getHistoricalStatsForAccount) | **GET** /Destiny/Stats/Account/{membershipType}/{destinyMembershipId}/ | 
[**getItemDetail**](UnofficialApi.md#getItemDetail) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Inventory/{itemInstanceId}/ | 
[**getItemReferenceDetail**](UnofficialApi.md#getItemReferenceDetail) | **GET** /Destiny/{param1}/Account/{param2}/Character/{param3}/ItemReference/{param4}/ | 
[**getLeaderboards**](UnofficialApi.md#getLeaderboards) | **GET** /Destiny/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/ | 
[**getLeaderboardsForCharacter**](UnofficialApi.md#getLeaderboardsForCharacter) | **GET** /Destiny/Stats/Leaderboards/{param1}/{param2}/{param3}/ | 
[**getLeaderboardsForPsn**](UnofficialApi.md#getLeaderboardsForPsn) | **GET** /Destiny/Stats/LeaderboardsForPsn/ | 
[**getMembershipIdByDisplayName**](UnofficialApi.md#getMembershipIdByDisplayName) | **GET** /Destiny/{membershipType}/Stats/GetMembershipIdByDisplayName/{displayName}/ | 
[**getMyGrimoire**](UnofficialApi.md#getMyGrimoire) | **GET** /Destiny/Vanguard/Grimoire/{membershipType}/ | 
[**getPostGameCarnageReport**](UnofficialApi.md#getPostGameCarnageReport) | **GET** /Destiny/Stats/PostGameCarnageReport/{activityInstanceId}/ | 
[**getPublicAdvisors**](UnofficialApi.md#getPublicAdvisors) | **GET** /Destiny/Advisors/ | 
[**getPublicAdvisorsV2**](UnofficialApi.md#getPublicAdvisorsV2) | **GET** /Destiny/Advisors/V2/ | 
[**getPublicVendor**](UnofficialApi.md#getPublicVendor) | **GET** /Destiny/Vendors/{vendorHash}/ | 
[**getPublicVendorWithMetadata**](UnofficialApi.md#getPublicVendorWithMetadata) | **GET** /Destiny/Vendors/{vendorHash}/Metadata/ | 
[**getPublicXurVendor**](UnofficialApi.md#getPublicXurVendor) | **GET** /Destiny/Advisors/Xur/ | 
[**getRecordBookCompletionStatus**](UnofficialApi.md#getRecordBookCompletionStatus) | **GET** /Destiny/{membershipType}/MyAccount/RecordBooks/{recordBookHash}/Completion/ | 
[**getSpecialEventAdvisors**](UnofficialApi.md#getSpecialEventAdvisors) | **GET** /Destiny/Events/ | 
[**getTriumphs**](UnofficialApi.md#getTriumphs) | **GET** /Destiny/{membershipType}/Account/{destinyMembershipId}/Triumphs/ | 
[**getUniqueWeaponHistory**](UnofficialApi.md#getUniqueWeaponHistory) | **GET** /Destiny/Stats/UniqueWeapons/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getVault**](UnofficialApi.md#getVault) | **GET** /Destiny/{membershipType}/MyAccount/Vault/ | 
[**getVaultSummary**](UnofficialApi.md#getVaultSummary) | **GET** /Destiny/{membershipType}/MyAccount/Vault/Summary/ | 
[**getVendorForCurrentCharacter**](UnofficialApi.md#getVendorForCurrentCharacter) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendor/{vendorHash}/ | 
[**getVendorForCurrentCharacterWithMetadata**](UnofficialApi.md#getVendorForCurrentCharacterWithMetadata) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendor/{vendorHash}/Metadata/ | 
[**getVendorItemDetailForCurrentCharacter**](UnofficialApi.md#getVendorItemDetailForCurrentCharacter) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendor/{vendorHash}/Item/{vendorItemId}/ | 
[**getVendorItemDetailForCurrentCharacterWithMetadata**](UnofficialApi.md#getVendorItemDetailForCurrentCharacterWithMetadata) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendor/{vendorHash}/Item/{vendorItemId}/Metadata/ | 
[**getVendorSummariesForCurrentCharacter**](UnofficialApi.md#getVendorSummariesForCurrentCharacter) | **GET** /Destiny/{membershipType}/MyAccount/Character/{characterId}/Vendors/Summaries/ | 
[**searchDestinyPlayer**](UnofficialApi.md#searchDestinyPlayer) | **GET** /Destiny/SearchDestinyPlayer/{membershipType}/{displayName}/ | 
[**setItemLockState**](UnofficialApi.md#setItemLockState) | **POST** /Destiny/SetLockState/ | 
[**setQuestTrackedState**](UnofficialApi.md#setQuestTrackedState) | **POST** /Destiny/SetQuestTrackedState/ | 
[**transferItem**](UnofficialApi.md#transferItem) | **POST** /Destiny/TransferItem/ | 


# **equipItem**
> \Bungie\D1\Model\InlineResponse20036 equipItem($inlineObject1)



Equips an item from a character's inventory. The endpoint will fail if the character is logged in and doing an activity.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject1 = new InlineObject1(); // \Bungie\D1\Model\inline_object_1 | 

try {
    $result = $apiInstance->equipItem($inlineObject1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->equipItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject1** | [**\Bungie\D1\Model\inline_object_1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **equipItems**
> \Bungie\D1\Model\InlineResponse20037 equipItems($inlineObject2)



Equips multiple items from a character's inventory and returns the updated inventory and character information. The endpoint will fail if the character is logged in and doing an activity.  **Note:** This is an [experimental endpoint](https://www.bungie.net/en/Clan/Post/39966/187691777/1) that was accidentally left in. While it should work as intended, it may return [incorrect response data and has a higher bandwidth](https://www.bungie.net/en/Clan/Post/39966/196303703/0/0) than simply making multiple [[EquipItem]] requests.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject2 = new InlineObject2(); // \Bungie\D1\Model\inline_object_2 | 

try {
    $result = $apiInstance->equipItems($inlineObject2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->equipItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject2** | [**\Bungie\D1\Model\inline_object_2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Bungie\D1\Model\InlineResponse2007 getAccount($membershipType, $destinyMembershipId, $definitions)



Returns Destiny account information for the supplied membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAccount($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountSummary**
> \Bungie\D1\Model\InlineResponse2008 getAccountSummary($membershipType, $destinyMembershipId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAccountSummary($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAccountSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityBlob**
> \Bungie\D1\Model\InlineResponse20050 getActivityBlob($param1)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$param1 = 'param1_example'; // string | 

try {
    $result = $apiInstance->getActivityBlob($param1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getActivityBlob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param1** | **string**|  |

### Return type

[**\Bungie\D1\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityHistory**
> \Bungie\D1\Model\InlineResponse20043 getActivityHistory($membershipType, $destinyMembershipId, $characterId, $mode, $count, $page, $definitions)



Returns recent activity history for a given character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$mode = new \Bungie\D1\Model\Destiny\ActivityModeType(); // \Bungie\D1\Model\Destiny\ActivityModeType | Game mode to return. Required.
$count = 56; // int | The number of results to return.
$page = 56; // int | The current page to return. Starts at 1.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getActivityHistory($membershipType, $destinyMembershipId, $characterId, $mode, $count, $page, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getActivityHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **mode** | [**\Bungie\D1\Model\Destiny\ActivityModeType**](../Model/.md)| Game mode to return. Required. | [optional]
 **count** | **int**| The number of results to return. | [optional]
 **page** | **int**| The current page to return. Starts at 1. | [optional]
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvisorsForAccount**
> \Bungie\D1\Model\InlineResponse2001 getAdvisorsForAccount($membershipType, $destinyMembershipId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAdvisorsForAccount($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAdvisorsForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvisorsForCharacter**
> \Bungie\D1\Model\InlineResponse20028 getAdvisorsForCharacter($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns advisor information about a given character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAdvisorsForCharacter($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAdvisorsForCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvisorsForCharacterV2**
> \Bungie\D1\Model\InlineResponse2002 getAdvisorsForCharacterV2($membershipType, $destinyMembershipId, $characterId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAdvisorsForCharacterV2($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAdvisorsForCharacterV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdvisorsForCurrentCharacter**
> \Bungie\D1\Model\InlineResponse20027 getAdvisorsForCurrentCharacter($membershipType, $characterId, $definitions)



Returns advisor information about a given character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAdvisorsForCurrentCharacter($membershipType, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAdvisorsForCurrentCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllItemsSummary**
> \Bungie\D1\Model\InlineResponse2006 getAllItemsSummary($membershipType, $destinyMembershipId, $definitions)



Returns all items for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAllItemsSummary($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAllItemsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllVendorsForCurrentCharacter**
> \Bungie\D1\Model\InlineResponse20020 getAllVendorsForCurrentCharacter($membershipType, $characterId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getAllVendorsForCurrentCharacter($membershipType, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getAllVendorsForCurrentCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBondAdvisors**
> \Bungie\D1\Model\InlineResponse20031 getBondAdvisors($membershipType, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getBondAdvisors($membershipType, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getBondAdvisors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacter**
> \Bungie\D1\Model\InlineResponse20012 getCharacter($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns Destiny character information with a given characterId. This endpoint is an extended version of [[GetCharacterSummary]].

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacter($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacterActivities**
> \Bungie\D1\Model\InlineResponse20016 getCharacterActivities($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns activity progress for a given character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacterActivities($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacterActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacterInventory**
> \Bungie\D1\Model\InlineResponse20013 getCharacterInventory($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns the inventory of a Destiny character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacterInventory($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacterInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacterInventorySummary**
> \Bungie\D1\Model\InlineResponse20014 getCharacterInventorySummary($membershipType, $destinyMembershipId, $characterId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacterInventorySummary($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacterInventorySummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacterProgression**
> \Bungie\D1\Model\InlineResponse20017 getCharacterProgression($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns progression information for a given Destiny character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacterProgression($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacterProgression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacterSummary**
> \Bungie\D1\Model\InlineResponse20011 getCharacterSummary($membershipType, $destinyMembershipId, $characterId, $definitions)



Returns Destiny character information for the given characterId.<br/>To get a more detailed overview, see the private endpoint [[GetDestinyAccountCharacterComplete]].

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getCharacterSummary($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getCharacterSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanLeaderboards**
> \Bungie\D1\Model\InlineResponse20046 getClanLeaderboards($clanId, $modes, $statid, $maxtop)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clanId = 56; // int | A valid clan ID.
$modes = array(new \Bungie\D1\Model\Destiny\ActivityModeType()); // \Bungie\D1\Model\Destiny\ActivityModeType[] | Game modes to return. Comma separated.
$statid = 'statid_example'; // string | 
$maxtop = 'maxtop_example'; // string | 

try {
    $result = $apiInstance->getClanLeaderboards($clanId, $modes, $statid, $maxtop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getClanLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clanId** | **int**| A valid clan ID. |
 **modes** | [**\Bungie\D1\Model\Destiny\ActivityModeType[]**](../Model/\Bungie\D1\Model\Destiny\ActivityModeType.md)| Game modes to return. Comma separated. | [optional]
 **statid** | **string**|  | [optional]
 **maxtop** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyAggregateActivityStats**
> \Bungie\D1\Model\InlineResponse20051 getDestinyAggregateActivityStats($membershipType, $destinyMembershipId, $characterId, $definitions)



Gets all activities the character has participated in together with aggregate statistics for those activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getDestinyAggregateActivityStats($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinyAggregateActivityStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyExplorerItems**
> \Bungie\D1\Model\InlineResponse20057 getDestinyExplorerItems($count, $name, $order, $rarity, $damageTypes, $definitions, $rarity2, $step, $categories, $weaponPerformance, $impactEffects, $guardianAttributes, $lightAbilities, $damageTypes2, $matchrandomsteps, $definitions2, $sourcecat, $sourcehash)



Advanced InventoryItem search.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 56; // int | The number of results to return. Default is 10.
$name = 'name_example'; // string | Filter by name.
$order = new \Bungie\D1\Model\Destiny\ExplorerOrderBy(); // \Bungie\D1\Model\Destiny\ExplorerOrderBy | Order results.
$rarity = new \Bungie\D1\Model\TierType(); // \Bungie\D1\Model\TierType | Filter by item rarity.
$damageTypes = array(new \Bungie\D1\Model\DamageType()); // \Bungie\D1\Model\DamageType[] | Filter by damage type.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$rarity2 = 'rarity_example'; // string | 
$step = 'step_example'; // string | 
$categories = 'categories_example'; // string | 
$weaponPerformance = 'weaponPerformance_example'; // string | 
$impactEffects = 'impactEffects_example'; // string | 
$guardianAttributes = 'guardianAttributes_example'; // string | 
$lightAbilities = 'lightAbilities_example'; // string | 
$damageTypes2 = 'damageTypes_example'; // string | 
$matchrandomsteps = 'matchrandomsteps_example'; // string | 
$definitions2 = 'definitions_example'; // string | 
$sourcecat = 'sourcecat_example'; // string | 
$sourcehash = 'sourcehash_example'; // string | 

try {
    $result = $apiInstance->getDestinyExplorerItems($count, $name, $order, $rarity, $damageTypes, $definitions, $rarity2, $step, $categories, $weaponPerformance, $impactEffects, $guardianAttributes, $lightAbilities, $damageTypes2, $matchrandomsteps, $definitions2, $sourcecat, $sourcehash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinyExplorerItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **count** | **int**| The number of results to return. Default is 10. | [optional]
 **name** | **string**| Filter by name. | [optional]
 **order** | [**\Bungie\D1\Model\Destiny\ExplorerOrderBy**](../Model/.md)| Order results. | [optional]
 **rarity** | [**\Bungie\D1\Model\TierType**](../Model/.md)| Filter by item rarity. | [optional]
 **damageTypes** | [**\Bungie\D1\Model\DamageType[]**](../Model/\Bungie\D1\Model\DamageType.md)| Filter by damage type. | [optional]
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **rarity2** | **string**|  | [optional]
 **step** | **string**|  | [optional]
 **categories** | **string**|  | [optional]
 **weaponPerformance** | **string**|  | [optional]
 **impactEffects** | **string**|  | [optional]
 **guardianAttributes** | **string**|  | [optional]
 **lightAbilities** | **string**|  | [optional]
 **damageTypes2** | **string**|  | [optional]
 **matchrandomsteps** | **string**|  | [optional]
 **definitions2** | **string**|  | [optional]
 **sourcecat** | **string**|  | [optional]
 **sourcehash** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyExplorerTalentNodeSteps**
> \Bungie\D1\Model\InlineResponse20058 getDestinyExplorerTalentNodeSteps($page, $count, $name, $damageTypes, $definitions, $impactEffects, $guardianAttributes, $lightAbilities, $damageTypes2, $definitions2)



Advanced search for TalentNodes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The current page to return. Starts at 1.
$count = 56; // int | The number of results per page. Default is 10.
$name = 'name_example'; // string | Filter by name.
$damageTypes = array(new \Bungie\D1\Model\DamageType()); // \Bungie\D1\Model\DamageType[] | Filter by damage type.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$impactEffects = 'impactEffects_example'; // string | 
$guardianAttributes = 'guardianAttributes_example'; // string | 
$lightAbilities = 'lightAbilities_example'; // string | 
$damageTypes2 = 'damageTypes_example'; // string | 
$definitions2 = 'definitions_example'; // string | 

try {
    $result = $apiInstance->getDestinyExplorerTalentNodeSteps($page, $count, $name, $damageTypes, $definitions, $impactEffects, $guardianAttributes, $lightAbilities, $damageTypes2, $definitions2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinyExplorerTalentNodeSteps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The current page to return. Starts at 1. | [optional]
 **count** | **int**| The number of results per page. Default is 10. | [optional]
 **name** | **string**| Filter by name. | [optional]
 **damageTypes** | [**\Bungie\D1\Model\DamageType[]**](../Model/\Bungie\D1\Model\DamageType.md)| Filter by damage type. | [optional]
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **impactEffects** | **string**|  | [optional]
 **guardianAttributes** | **string**|  | [optional]
 **lightAbilities** | **string**|  | [optional]
 **damageTypes2** | **string**|  | [optional]
 **definitions2** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyLiveTileContentItems**
> \Bungie\D1\Model\InlineResponse20030 getDestinyLiveTileContentItems()



Returns a list of \"tiles\" used on the Bungie.net website.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDestinyLiveTileContentItems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinyLiveTileContentItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\D1\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyManifest**
> getDestinyManifest()



Returns the current version of the Destiny 1 mobile manifest as a json object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getDestinyManifest();
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinyManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinySingleDefinition**
> \Bungie\D1\Model\InlineResponse2003 getDestinySingleDefinition($definitionType, $definitionId, $definitions, $version)



Returns a single definition from the manifest as json object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$definitionType = new \Bungie\D1\Model\Destiny\DefinitionType(); // \Bungie\D1\Model\Destiny\DefinitionType | 
$definitionId = 56; // int | 
$definitions = True; // bool | Include definitions in the response. Use while testing.
$version = 'version_example'; // string | 

try {
    $result = $apiInstance->getDestinySingleDefinition($definitionType, $definitionId, $definitions, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getDestinySingleDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **definitionType** | [**\Bungie\D1\Model\Destiny\DefinitionType**](../Model/.md)|  |
 **definitionId** | **int**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **version** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExcellenceBadges**
> \Bungie\D1\Model\InlineResponse20053 getExcellenceBadges($membershipType, $destinyMembershipId, $definitions)



Returns Destiny excellence badges for a given account. No longer in use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getExcellenceBadges($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getExcellenceBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGrimoireByMembership**
> \Bungie\D1\Model\InlineResponse20055 getGrimoireByMembership($membershipType, $destinyMembershipId, $definitions, $flavour, $single)



Returns the Grimoire for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$flavour = 'flavour_example'; // string | Indicates flavour stats should be included with player card data. More testing needed.
$single = 56; // int | Return data for a single cardId.

try {
    $result = $apiInstance->getGrimoireByMembership($membershipType, $destinyMembershipId, $definitions, $flavour, $single);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getGrimoireByMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **flavour** | **string**| Indicates flavour stats should be included with player card data. More testing needed. | [optional]
 **single** | **int**| Return data for a single cardId. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGrimoireDefinition**
> \Bungie\D1\Model\InlineResponse20056 getGrimoireDefinition()



Returns Grimoire definitions. This is the equivalent pulling the [[GrimoireDefinition]] from the [[Manifest]].

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getGrimoireDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getGrimoireDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\D1\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStats**
> \Bungie\D1\Model\InlineResponse20041 getHistoricalStats($membershipType, $destinyMembershipId, $characterId, $periodType, $modes, $groups, $monthstart, $monthend, $daystart, $dayend)



Returns historical stat information about a given Destiny character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$periodType = new \Bungie\D1\Model\Destiny\PeriodType(); // \Bungie\D1\Model\Destiny\PeriodType | Indicates a specific period type to return.
$modes = array(new \Bungie\D1\Model\Destiny\ActivityModeType()); // \Bungie\D1\Model\Destiny\ActivityModeType[] | Game modes to return. Comma separated.
$groups = array(new \Bungie\D1\Model\Destiny\StatsGroupType()); // \Bungie\D1\Model\Destiny\StatsGroupType[] | Group of stats to include, otherwise only general stats are returned. Comma separated.
$monthstart = 'monthstart_example'; // string | First month to return when monthly stats are requested. Use the format YYYY-MM.
$monthend = 'monthend_example'; // string | Last month to return when monthly stats are requested. Use the format YYYY-MM.
$daystart = 'daystart_example'; // string | First day to return when daily stats are requested. Use the format YYYY-MM-DD.
$dayend = 'dayend_example'; // string | Last day to return when daily stats are requested. Use the format YYYY-MM-DD.

try {
    $result = $apiInstance->getHistoricalStats($membershipType, $destinyMembershipId, $characterId, $periodType, $modes, $groups, $monthstart, $monthend, $daystart, $dayend);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getHistoricalStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **periodType** | [**\Bungie\D1\Model\Destiny\PeriodType**](../Model/.md)| Indicates a specific period type to return. | [optional]
 **modes** | [**\Bungie\D1\Model\Destiny\ActivityModeType[]**](../Model/\Bungie\D1\Model\Destiny\ActivityModeType.md)| Game modes to return. Comma separated. | [optional]
 **groups** | [**\Bungie\D1\Model\Destiny\StatsGroupType[]**](../Model/\Bungie\D1\Model\Destiny\StatsGroupType.md)| Group of stats to include, otherwise only general stats are returned. Comma separated. | [optional]
 **monthstart** | **string**| First month to return when monthly stats are requested. Use the format YYYY-MM. | [optional]
 **monthend** | **string**| Last month to return when monthly stats are requested. Use the format YYYY-MM. | [optional]
 **daystart** | **string**| First day to return when daily stats are requested. Use the format YYYY-MM-DD. | [optional]
 **dayend** | **string**| Last day to return when daily stats are requested. Use the format YYYY-MM-DD. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStatsDefinition**
> \Bungie\D1\Model\InlineResponse20040 getHistoricalStatsDefinition()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHistoricalStatsDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getHistoricalStatsDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\D1\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStatsForAccount**
> \Bungie\D1\Model\InlineResponse20042 getHistoricalStatsForAccount($membershipType, $destinyMembershipId, $groups)



Gets aggregate historical stats organized around each character for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$groups = 'groups_example'; // string | 

try {
    $result = $apiInstance->getHistoricalStatsForAccount($membershipType, $destinyMembershipId, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getHistoricalStatsForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **groups** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemDetail**
> \Bungie\D1\Model\InlineResponse20015 getItemDetail($membershipType, $destinyMembershipId, $characterId, $itemInstanceId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$itemInstanceId = 'itemInstanceId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getItemDetail($membershipType, $destinyMembershipId, $characterId, $itemInstanceId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getItemDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **itemInstanceId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemReferenceDetail**
> \Bungie\D1\Model\InlineResponse2005 getItemReferenceDetail($param1, $param2, $param3, $param4, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$param1 = 'param1_example'; // string | 
$param2 = 'param2_example'; // string | 
$param3 = 'param3_example'; // string | 
$param4 = 'param4_example'; // string | 
$definitions = 'definitions_example'; // string | 

try {
    $result = $apiInstance->getItemReferenceDetail($param1, $param2, $param3, $param4, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getItemReferenceDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param1** | **string**|  |
 **param2** | **string**|  |
 **param3** | **string**|  |
 **param4** | **string**|  |
 **definitions** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboards**
> \Bungie\D1\Model\InlineResponse20045 getLeaderboards($membershipType, $destinyMembershipId, $modes, $statid, $maxtop)



Returns leaderboard stats compared against friends. Note you may need to re-authenticate with PSN/Xbox in order to see full rankings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$modes = array(new \Bungie\D1\Model\Destiny\ActivityModeType()); // \Bungie\D1\Model\Destiny\ActivityModeType[] | Game modes to return. Comma separated.
$statid = 'statid_example'; // string | 
$maxtop = 'maxtop_example'; // string | 

try {
    $result = $apiInstance->getLeaderboards($membershipType, $destinyMembershipId, $modes, $statid, $maxtop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **modes** | [**\Bungie\D1\Model\Destiny\ActivityModeType[]**](../Model/\Bungie\D1\Model\Destiny\ActivityModeType.md)| Game modes to return. Comma separated. | [optional]
 **statid** | **string**|  | [optional]
 **maxtop** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardsForCharacter**
> \Bungie\D1\Model\InlineResponse20048 getLeaderboardsForCharacter($param1, $param2, $param3, $modes, $statid, $maxtop)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$param1 = 'param1_example'; // string | 
$param2 = 'param2_example'; // string | 
$param3 = 'param3_example'; // string | 
$modes = 'modes_example'; // string | 
$statid = 'statid_example'; // string | 
$maxtop = 'maxtop_example'; // string | 

try {
    $result = $apiInstance->getLeaderboardsForCharacter($param1, $param2, $param3, $modes, $statid, $maxtop);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **param1** | **string**|  |
 **param2** | **string**|  |
 **param3** | **string**|  |
 **modes** | **string**|  | [optional]
 **statid** | **string**|  | [optional]
 **maxtop** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardsForPsn**
> \Bungie\D1\Model\InlineResponse20047 getLeaderboardsForPsn($modes, $code)



Returns leaderboard stats compared against PSN friends. Note, you may need re-authenticate with PSN in order to see full rankings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modes = array(new \Bungie\D1\Model\Destiny\ActivityModeType()); // \Bungie\D1\Model\Destiny\ActivityModeType[] | Game modes to return. Comma separated.
$code = 'code_example'; // string | 

try {
    $result = $apiInstance->getLeaderboardsForPsn($modes, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getLeaderboardsForPsn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modes** | [**\Bungie\D1\Model\Destiny\ActivityModeType[]**](../Model/\Bungie\D1\Model\Destiny\ActivityModeType.md)| Game modes to return. Comma separated. | [optional]
 **code** | **string**|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipIdByDisplayName**
> \Bungie\D1\Model\InlineResponse20052 getMembershipIdByDisplayName($membershipType, $displayName, $ignorecase)



Returns the numerical id of a player based on their display name, zero if not found.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$displayName = 'displayName_example'; // string | A valid PSN Id or Gamertag display name.
$ignorecase = True; // bool | Default is false when not specified. True to cause a caseless search to be used.

try {
    $result = $apiInstance->getMembershipIdByDisplayName($membershipType, $displayName, $ignorecase);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getMembershipIdByDisplayName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **displayName** | **string**| A valid PSN Id or Gamertag display name. |
 **ignorecase** | **bool**| Default is false when not specified. True to cause a caseless search to be used. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyGrimoire**
> \Bungie\D1\Model\InlineResponse20054 getMyGrimoire($membershipType, $definitions, $flavour, $single)



Returns the Grimoire for the currently signed in account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$flavour = 'flavour_example'; // string | Indicates flavour stats should be included with player card data. More testing needed.
$single = 56; // int | Return data for a single cardId.

try {
    $result = $apiInstance->getMyGrimoire($membershipType, $definitions, $flavour, $single);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getMyGrimoire: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **flavour** | **string**| Indicates flavour stats should be included with player card data. More testing needed. | [optional]
 **single** | **int**| Return data for a single cardId. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostGameCarnageReport**
> \Bungie\D1\Model\InlineResponse20049 getPostGameCarnageReport($activityInstanceId, $definitions)



Gets the available post game carnage report for the activity ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityInstanceId = 56; // int | A valid activityInstanceId.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPostGameCarnageReport($activityInstanceId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPostGameCarnageReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityInstanceId** | **int**| A valid activityInstanceId. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicAdvisors**
> \Bungie\D1\Model\InlineResponse20024 getPublicAdvisors($definitions)



Returns information about current daily, weekly and special events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPublicAdvisors($definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPublicAdvisors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicAdvisorsV2**
> \Bungie\D1\Model\InlineResponse200 getPublicAdvisorsV2($definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPublicAdvisorsV2($definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPublicAdvisorsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicVendor**
> \Bungie\D1\Model\InlineResponse20026 getPublicVendor($vendorHash, $definitions)



Returns Public information for a given Vendor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendorHash = 56; // int | A valid vendorHash.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPublicVendor($vendorHash, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPublicVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendorHash** | **int**| A valid vendorHash. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicVendorWithMetadata**
> \Bungie\D1\Model\InlineResponse20032 getPublicVendorWithMetadata($vendorHash, $definitions)



Returns Public information for a given Vendor, with metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vendorHash = 56; // int | A valid vendorHash.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPublicVendorWithMetadata($vendorHash, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPublicVendorWithMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vendorHash** | **int**| A valid vendorHash. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicXurVendor**
> \Bungie\D1\Model\InlineResponse20025 getPublicXurVendor($definitions)



Returns advisor information about the vendor Xur in Destiny.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getPublicXurVendor($definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getPublicXurVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecordBookCompletionStatus**
> \Bungie\D1\Model\InlineResponse20019 getRecordBookCompletionStatus($membershipType, $recordBookHash, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$recordBookHash = 56; // int | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getRecordBookCompletionStatus($membershipType, $recordBookHash, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getRecordBookCompletionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **recordBookHash** | **int**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSpecialEventAdvisors**
> \Bungie\D1\Model\InlineResponse20029 getSpecialEventAdvisors($definitions)



Returns a list of currently active events.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getSpecialEventAdvisors($definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getSpecialEventAdvisors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTriumphs**
> \Bungie\D1\Model\InlineResponse20018 getTriumphs($membershipType, $destinyMembershipId, $definitions)



Returns a list of triumph sets for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getTriumphs($membershipType, $destinyMembershipId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getTriumphs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniqueWeaponHistory**
> \Bungie\D1\Model\InlineResponse20044 getUniqueWeaponHistory($membershipType, $destinyMembershipId, $characterId, $definitions)



Gets details about unique weapon usage, including all exotic weapons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$destinyMembershipId = 56; // int | Destiny membership ID.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getUniqueWeaponHistory($membershipType, $destinyMembershipId, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getUniqueWeaponHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVault**
> \Bungie\D1\Model\InlineResponse2009 getVault($membershipType, $definitions, $accountId)



Returns the contents of player's Vault.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$accountId = 56; // int | Destiny membership ID.

try {
    $result = $apiInstance->getVault($membershipType, $definitions, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **accountId** | **int**| Destiny membership ID. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVaultSummary**
> \Bungie\D1\Model\InlineResponse20010 getVaultSummary($membershipType, $definitions, $accountId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$definitions = True; // bool | Include definitions in the response. Use while testing.
$accountId = 56; // int | Destiny membership ID.

try {
    $result = $apiInstance->getVaultSummary($membershipType, $definitions, $accountId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVaultSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]
 **accountId** | **int**| Destiny membership ID. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorForCurrentCharacter**
> \Bungie\D1\Model\InlineResponse20022 getVendorForCurrentCharacter($membershipType, $characterId, $vendorHash, $definitions)



Returns information about a Vendor for a given Destiny character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$vendorHash = 56; // int | A valid vendorHash.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getVendorForCurrentCharacter($membershipType, $characterId, $vendorHash, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVendorForCurrentCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **vendorHash** | **int**| A valid vendorHash. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorForCurrentCharacterWithMetadata**
> \Bungie\D1\Model\InlineResponse20033 getVendorForCurrentCharacterWithMetadata($membershipType, $characterId, $vendorHash, $definitions)



Returns information about a Vendor for a given Destiny character with metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$vendorHash = 56; // int | A valid vendorHash.
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getVendorForCurrentCharacterWithMetadata($membershipType, $characterId, $vendorHash, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVendorForCurrentCharacterWithMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **vendorHash** | **int**| A valid vendorHash. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorItemDetailForCurrentCharacter**
> \Bungie\D1\Model\InlineResponse20023 getVendorItemDetailForCurrentCharacter($membershipType, $characterId, $vendorHash, $vendorItemId, $definitions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$vendorHash = 56; // int | A valid vendorHash.
$vendorItemId = 56; // int | A valid vendorItemIndex see [[GetVendorForCurrentCharacter]].
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getVendorItemDetailForCurrentCharacter($membershipType, $characterId, $vendorHash, $vendorItemId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVendorItemDetailForCurrentCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **vendorHash** | **int**| A valid vendorHash. |
 **vendorItemId** | **int**| A valid vendorItemIndex see [[GetVendorForCurrentCharacter]]. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorItemDetailForCurrentCharacterWithMetadata**
> \Bungie\D1\Model\InlineResponse20034 getVendorItemDetailForCurrentCharacterWithMetadata($membershipType, $characterId, $vendorHash, $vendorItemId, $definitions)



Returns an item from a Vendor's inventory for a given character with metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$vendorHash = 56; // int | A valid vendorHash.
$vendorItemId = 56; // int | A valid vendorItemIndex see [[GetVendorForCurrentCharacter]].
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getVendorItemDetailForCurrentCharacterWithMetadata($membershipType, $characterId, $vendorHash, $vendorItemId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVendorItemDetailForCurrentCharacterWithMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **vendorHash** | **int**| A valid vendorHash. |
 **vendorItemId** | **int**| A valid vendorItemIndex see [[GetVendorForCurrentCharacter]]. |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendorSummariesForCurrentCharacter**
> \Bungie\D1\Model\InlineResponse20021 getVendorSummariesForCurrentCharacter($membershipType, $characterId, $definitions)



Returns a summary of Vendors for a given Destiny character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$characterId = 'characterId_example'; // string | 
$definitions = True; // bool | Include definitions in the response. Use while testing.

try {
    $result = $apiInstance->getVendorSummariesForCurrentCharacter($membershipType, $characterId, $definitions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->getVendorSummariesForCurrentCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **characterId** | **string**|  |
 **definitions** | **bool**| Include definitions in the response. Use while testing. | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDestinyPlayer**
> \Bungie\D1\Model\InlineResponse2004 searchDestinyPlayer($membershipType, $displayName)



Returns a list of players by username and platform.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipType = new \Bungie\D1\Model\BungieMembershipType(); // \Bungie\D1\Model\BungieMembershipType | The type of account for which info will be extracted.
$displayName = 'displayName_example'; // string | A valid display name to search for.

try {
    $result = $apiInstance->searchDestinyPlayer($membershipType, $displayName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->searchDestinyPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipType** | [**\Bungie\D1\Model\BungieMembershipType**](../Model/.md)| The type of account for which info will be extracted. |
 **displayName** | **string**| A valid display name to search for. |

### Return type

[**\Bungie\D1\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setItemLockState**
> \Bungie\D1\Model\InlineResponse20038 setItemLockState($inlineObject3)



Changes the lock state on an equipable item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject3 = new InlineObject3(); // \Bungie\D1\Model\inline_object_3 | 

try {
    $result = $apiInstance->setItemLockState($inlineObject3);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->setItemLockState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject3** | [**\Bungie\D1\Model\inline_object_3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestTrackedState**
> \Bungie\D1\Model\InlineResponse20039 setQuestTrackedState($inlineObject4)



Set the track state of a given quest.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject4 = new InlineObject4(); // \Bungie\D1\Model\inline_object_4 | 

try {
    $result = $apiInstance->setQuestTrackedState($inlineObject4);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->setQuestTrackedState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject4** | [**\Bungie\D1\Model\inline_object_4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferItem**
> \Bungie\D1\Model\InlineResponse20035 transferItem($inlineObject)



Moves items to and from a character and the vault.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\D1\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\D1\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\D1\Api\UnofficialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject = new InlineObject(); // \Bungie\D1\Model\inline_object | 

try {
    $result = $apiInstance->transferItem($inlineObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnofficialApi->transferItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject** | [**\Bungie\D1\Model\inline_object**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Bungie\D1\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

