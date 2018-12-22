# DestinyRecordDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\D1\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) |  | [optional] 
**scope** | [**\Bungie\D1\Model\Destiny\DestinyScope**](DestinyScope.md) | Indicates whether this Record&#39;s state is determined on a per-character or on an account-wide basis. | [optional] 
**presentationInfo** | [**\Bungie\D1\Model\Destiny\Definitions\Presentation\DestinyPresentationChildBlock**](DestinyPresentationChildBlock.md) |  | [optional] 
**loreHash** | **int** |  | [optional] 
**objectiveHashes** | **int[]** |  | [optional] 
**recordValueStyle** | [**\Bungie\D1\Model\Destiny\DestinyRecordValueStyle**](DestinyRecordValueStyle.md) |  | [optional] 
**titleInfo** | [**\Bungie\D1\Model\Destiny\Definitions\Records\DestinyRecordTitleBlock**](DestinyRecordTitleBlock.md) |  | [optional] 
**completionInfo** | [**\Bungie\D1\Model\Destiny\Definitions\Records\DestinyRecordCompletionBlock**](DestinyRecordCompletionBlock.md) |  | [optional] 
**stateInfo** | [**\Bungie\D1\Model\Destiny\Definitions\Records\SchemaRecordStateBlock**](SchemaRecordStateBlock.md) |  | [optional] 
**requirements** | [**\Bungie\D1\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock**](DestinyPresentationNodeRequirementsBlock.md) |  | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


