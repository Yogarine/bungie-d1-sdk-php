# DestinyItemSocketBlockDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**detail** | **string** | This was supposed to be a string that would give per-item details about sockets. In practice, it turns out that all this ever has is the localized word \&quot;details\&quot;. ... that&#39;s lame, but perhaps it will become something cool in the future. | [optional] 
**socketEntries** | [**\Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryDefinition[]**](DestinyItemSocketEntryDefinition.md) | Each non-intrinsic (or mutable) socket on an item is defined here. Check inside for more info. | [optional] 
**intrinsicSockets** | [**\Bungie\D1\Model\Destiny\Definitions\DestinyItemIntrinsicSocketEntryDefinition[]**](DestinyItemIntrinsicSocketEntryDefinition.md) | Each intrinsic (or immutable/permanent) socket on an item is defined here, along with the plug that is permanently affixed to the socket. | [optional] 
**socketCategories** | [**\Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketCategoryDefinition[]**](DestinyItemSocketCategoryDefinition.md) | A convenience property, that refers to the sockets in the \&quot;sockets\&quot; property, pre-grouped by category and ordered in the manner that they should be grouped in the UI. You could form this yourself with the existing data, but why would you want to? Enjoy life man. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

