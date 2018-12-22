<?php
/**
 * DestinyVendorItemDefinition
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Unofficial Bungie.net API for Destiny 1
 *
 * These are legacy endpoints for Destiny 1 that are no longer supported officially by Bungie.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: lowlines89@gmail.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\D1\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * DestinyVendorItemDefinition Class Doc Comment
 *
 * @category Class
 * @description This represents an item being sold by the vendor.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorItemDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyVendorItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorItemIndex' => 'int',
        'itemHash' => 'int',
        'quantity' => 'int',
        'failureIndexes' => 'int[]',
        'currencies' => '\Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemQuantity[]',
        'refundPolicy' => '\Bungie\D1\Model\Destiny\DestinyVendorItemRefundPolicy',
        'refundTimeLimit' => 'int',
        'creationLevels' => '\Bungie\D1\Model\Destiny\Definitions\DestinyItemCreationEntryLevelDefinition[]',
        'displayCategoryIndex' => 'int',
        'categoryIndex' => 'int',
        'originalCategoryIndex' => 'int',
        'minimumLevel' => 'int',
        'maximumLevel' => 'int',
        'action' => '\Bungie\D1\Model\Destiny\Definitions\DestinyVendorSaleItemActionBlockDefinition',
        'displayCategory' => 'string',
        'inventoryBucketHash' => 'int',
        'visibilityScope' => '\Bungie\D1\Model\Destiny\DestinyGatingScope',
        'purchasableScope' => '\Bungie\D1\Model\Destiny\DestinyGatingScope',
        'exclusivity' => '\Bungie\D1\Model\BungieMembershipType',
        'isOffer' => 'bool',
        'isCrm' => 'bool',
        'sortValue' => 'int',
        'expirationTooltip' => 'string',
        'redirectToSaleIndexes' => 'int[]',
        'socketOverrides' => '\Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemSocketOverride[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendorItemIndex' => 'int32',
        'itemHash' => 'uint32',
        'quantity' => 'int32',
        'failureIndexes' => 'int32',
        'currencies' => null,
        'refundPolicy' => null,
        'refundTimeLimit' => 'int32',
        'creationLevels' => null,
        'displayCategoryIndex' => 'int32',
        'categoryIndex' => 'int32',
        'originalCategoryIndex' => 'int32',
        'minimumLevel' => 'int32',
        'maximumLevel' => 'int32',
        'action' => null,
        'displayCategory' => null,
        'inventoryBucketHash' => 'uint32',
        'visibilityScope' => null,
        'purchasableScope' => null,
        'exclusivity' => null,
        'isOffer' => null,
        'isCrm' => null,
        'sortValue' => 'int32',
        'expirationTooltip' => null,
        'redirectToSaleIndexes' => 'int32',
        'socketOverrides' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'vendorItemIndex' => 'vendorItemIndex',
        'itemHash' => 'itemHash',
        'quantity' => 'quantity',
        'failureIndexes' => 'failureIndexes',
        'currencies' => 'currencies',
        'refundPolicy' => 'refundPolicy',
        'refundTimeLimit' => 'refundTimeLimit',
        'creationLevels' => 'creationLevels',
        'displayCategoryIndex' => 'displayCategoryIndex',
        'categoryIndex' => 'categoryIndex',
        'originalCategoryIndex' => 'originalCategoryIndex',
        'minimumLevel' => 'minimumLevel',
        'maximumLevel' => 'maximumLevel',
        'action' => 'action',
        'displayCategory' => 'displayCategory',
        'inventoryBucketHash' => 'inventoryBucketHash',
        'visibilityScope' => 'visibilityScope',
        'purchasableScope' => 'purchasableScope',
        'exclusivity' => 'exclusivity',
        'isOffer' => 'isOffer',
        'isCrm' => 'isCrm',
        'sortValue' => 'sortValue',
        'expirationTooltip' => 'expirationTooltip',
        'redirectToSaleIndexes' => 'redirectToSaleIndexes',
        'socketOverrides' => 'socketOverrides'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorItemIndex' => 'setVendorItemIndex',
        'itemHash' => 'setItemHash',
        'quantity' => 'setQuantity',
        'failureIndexes' => 'setFailureIndexes',
        'currencies' => 'setCurrencies',
        'refundPolicy' => 'setRefundPolicy',
        'refundTimeLimit' => 'setRefundTimeLimit',
        'creationLevels' => 'setCreationLevels',
        'displayCategoryIndex' => 'setDisplayCategoryIndex',
        'categoryIndex' => 'setCategoryIndex',
        'originalCategoryIndex' => 'setOriginalCategoryIndex',
        'minimumLevel' => 'setMinimumLevel',
        'maximumLevel' => 'setMaximumLevel',
        'action' => 'setAction',
        'displayCategory' => 'setDisplayCategory',
        'inventoryBucketHash' => 'setInventoryBucketHash',
        'visibilityScope' => 'setVisibilityScope',
        'purchasableScope' => 'setPurchasableScope',
        'exclusivity' => 'setExclusivity',
        'isOffer' => 'setIsOffer',
        'isCrm' => 'setIsCrm',
        'sortValue' => 'setSortValue',
        'expirationTooltip' => 'setExpirationTooltip',
        'redirectToSaleIndexes' => 'setRedirectToSaleIndexes',
        'socketOverrides' => 'setSocketOverrides'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorItemIndex' => 'getVendorItemIndex',
        'itemHash' => 'getItemHash',
        'quantity' => 'getQuantity',
        'failureIndexes' => 'getFailureIndexes',
        'currencies' => 'getCurrencies',
        'refundPolicy' => 'getRefundPolicy',
        'refundTimeLimit' => 'getRefundTimeLimit',
        'creationLevels' => 'getCreationLevels',
        'displayCategoryIndex' => 'getDisplayCategoryIndex',
        'categoryIndex' => 'getCategoryIndex',
        'originalCategoryIndex' => 'getOriginalCategoryIndex',
        'minimumLevel' => 'getMinimumLevel',
        'maximumLevel' => 'getMaximumLevel',
        'action' => 'getAction',
        'displayCategory' => 'getDisplayCategory',
        'inventoryBucketHash' => 'getInventoryBucketHash',
        'visibilityScope' => 'getVisibilityScope',
        'purchasableScope' => 'getPurchasableScope',
        'exclusivity' => 'getExclusivity',
        'isOffer' => 'getIsOffer',
        'isCrm' => 'getIsCrm',
        'sortValue' => 'getSortValue',
        'expirationTooltip' => 'getExpirationTooltip',
        'redirectToSaleIndexes' => 'getRedirectToSaleIndexes',
        'socketOverrides' => 'getSocketOverrides'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['vendorItemIndex'] = isset($data['vendorItemIndex']) ? $data['vendorItemIndex'] : null;
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['failureIndexes'] = isset($data['failureIndexes']) ? $data['failureIndexes'] : null;
        $this->container['currencies'] = isset($data['currencies']) ? $data['currencies'] : null;
        $this->container['refundPolicy'] = isset($data['refundPolicy']) ? $data['refundPolicy'] : null;
        $this->container['refundTimeLimit'] = isset($data['refundTimeLimit']) ? $data['refundTimeLimit'] : null;
        $this->container['creationLevels'] = isset($data['creationLevels']) ? $data['creationLevels'] : null;
        $this->container['displayCategoryIndex'] = isset($data['displayCategoryIndex']) ? $data['displayCategoryIndex'] : null;
        $this->container['categoryIndex'] = isset($data['categoryIndex']) ? $data['categoryIndex'] : null;
        $this->container['originalCategoryIndex'] = isset($data['originalCategoryIndex']) ? $data['originalCategoryIndex'] : null;
        $this->container['minimumLevel'] = isset($data['minimumLevel']) ? $data['minimumLevel'] : null;
        $this->container['maximumLevel'] = isset($data['maximumLevel']) ? $data['maximumLevel'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['displayCategory'] = isset($data['displayCategory']) ? $data['displayCategory'] : null;
        $this->container['inventoryBucketHash'] = isset($data['inventoryBucketHash']) ? $data['inventoryBucketHash'] : null;
        $this->container['visibilityScope'] = isset($data['visibilityScope']) ? $data['visibilityScope'] : null;
        $this->container['purchasableScope'] = isset($data['purchasableScope']) ? $data['purchasableScope'] : null;
        $this->container['exclusivity'] = isset($data['exclusivity']) ? $data['exclusivity'] : null;
        $this->container['isOffer'] = isset($data['isOffer']) ? $data['isOffer'] : null;
        $this->container['isCrm'] = isset($data['isCrm']) ? $data['isCrm'] : null;
        $this->container['sortValue'] = isset($data['sortValue']) ? $data['sortValue'] : null;
        $this->container['expirationTooltip'] = isset($data['expirationTooltip']) ? $data['expirationTooltip'] : null;
        $this->container['redirectToSaleIndexes'] = isset($data['redirectToSaleIndexes']) ? $data['redirectToSaleIndexes'] : null;
        $this->container['socketOverrides'] = isset($data['socketOverrides']) ? $data['socketOverrides'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets vendorItemIndex
     *
     * @return int|null
     */
    public function getVendorItemIndex()
    {
        return $this->container['vendorItemIndex'];
    }

    /**
     * Sets vendorItemIndex
     *
     * @param int|null $vendorItemIndex The index into the DestinyVendorDefinition.saleList. This is what we use to refer to items being sold throughout live and definition data.
     *
     * @return $this
     */
    public function setVendorItemIndex($vendorItemIndex)
    {
        $this->container['vendorItemIndex'] = $vendorItemIndex;

        return $this;
    }

    /**
     * Gets itemHash
     *
     * @return int|null
     */
    public function getItemHash()
    {
        return $this->container['itemHash'];
    }

    /**
     * Sets itemHash
     *
     * @param int|null $itemHash The hash identifier of the item being sold (DestinyInventoryItemDefinition).  Note that a vendor can sell the same item in multiple ways, so don't assume that itemHash is a unique identifier for this entity.
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity The amount you will recieve of the item described in itemHash if you make the purchase.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets failureIndexes
     *
     * @return int[]|null
     */
    public function getFailureIndexes()
    {
        return $this->container['failureIndexes'];
    }

    /**
     * Sets failureIndexes
     *
     * @param int[]|null $failureIndexes An list of indexes into the DestinyVendorDefinition.failureStrings array, indicating the possible failure strings that can be relevant for this item.
     *
     * @return $this
     */
    public function setFailureIndexes($failureIndexes)
    {
        $this->container['failureIndexes'] = $failureIndexes;

        return $this;
    }

    /**
     * Gets currencies
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemQuantity[]|null
     */
    public function getCurrencies()
    {
        return $this->container['currencies'];
    }

    /**
     * Sets currencies
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemQuantity[]|null $currencies This is a pre-compiled aggregation of item value and priceOverrideList, so that we have one place to check for what the purchaser must pay for the item. Use this instead of trying to piece together the price separately.  The somewhat crappy part about this is that, now that item quantity overrides have dynamic modifiers, this will not necessarily be statically true. If you were using this instead of live data, switch to using live data.
     *
     * @return $this
     */
    public function setCurrencies($currencies)
    {
        $this->container['currencies'] = $currencies;

        return $this;
    }

    /**
     * Gets refundPolicy
     *
     * @return \Bungie\D1\Model\Destiny\DestinyVendorItemRefundPolicy|null
     */
    public function getRefundPolicy()
    {
        return $this->container['refundPolicy'];
    }

    /**
     * Sets refundPolicy
     *
     * @param \Bungie\D1\Model\Destiny\DestinyVendorItemRefundPolicy|null $refundPolicy If this item can be refunded, this is the policy for what will be refundd, how, and in what time period.
     *
     * @return $this
     */
    public function setRefundPolicy($refundPolicy)
    {
        $this->container['refundPolicy'] = $refundPolicy;

        return $this;
    }

    /**
     * Gets refundTimeLimit
     *
     * @return int|null
     */
    public function getRefundTimeLimit()
    {
        return $this->container['refundTimeLimit'];
    }

    /**
     * Sets refundTimeLimit
     *
     * @param int|null $refundTimeLimit The amount of time before refundability of the newly purchased item will expire.
     *
     * @return $this
     */
    public function setRefundTimeLimit($refundTimeLimit)
    {
        $this->container['refundTimeLimit'] = $refundTimeLimit;

        return $this;
    }

    /**
     * Gets creationLevels
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyItemCreationEntryLevelDefinition[]|null
     */
    public function getCreationLevels()
    {
        return $this->container['creationLevels'];
    }

    /**
     * Sets creationLevels
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyItemCreationEntryLevelDefinition[]|null $creationLevels The Default level at which the item will spawn. Almost always driven by an adjusto these days. Ideally should be singular. It's a long story how this ended up as a list, but there is always either going to be 0:1 of these entities.
     *
     * @return $this
     */
    public function setCreationLevels($creationLevels)
    {
        $this->container['creationLevels'] = $creationLevels;

        return $this;
    }

    /**
     * Gets displayCategoryIndex
     *
     * @return int|null
     */
    public function getDisplayCategoryIndex()
    {
        return $this->container['displayCategoryIndex'];
    }

    /**
     * Sets displayCategoryIndex
     *
     * @param int|null $displayCategoryIndex This is an index specifically into the display category, as opposed to the server-side Categories (which do not need to match or pair with each other in any way: server side categories are really just structures for common validation. Display Category will let us more easily categorize items visually)
     *
     * @return $this
     */
    public function setDisplayCategoryIndex($displayCategoryIndex)
    {
        $this->container['displayCategoryIndex'] = $displayCategoryIndex;

        return $this;
    }

    /**
     * Gets categoryIndex
     *
     * @return int|null
     */
    public function getCategoryIndex()
    {
        return $this->container['categoryIndex'];
    }

    /**
     * Sets categoryIndex
     *
     * @param int|null $categoryIndex The index into the DestinyVendorDefinition.categories array, so you can find the category associated with this item.
     *
     * @return $this
     */
    public function setCategoryIndex($categoryIndex)
    {
        $this->container['categoryIndex'] = $categoryIndex;

        return $this;
    }

    /**
     * Gets originalCategoryIndex
     *
     * @return int|null
     */
    public function getOriginalCategoryIndex()
    {
        return $this->container['originalCategoryIndex'];
    }

    /**
     * Sets originalCategoryIndex
     *
     * @param int|null $originalCategoryIndex Same as above, but for the original category indexes.
     *
     * @return $this
     */
    public function setOriginalCategoryIndex($originalCategoryIndex)
    {
        $this->container['originalCategoryIndex'] = $originalCategoryIndex;

        return $this;
    }

    /**
     * Gets minimumLevel
     *
     * @return int|null
     */
    public function getMinimumLevel()
    {
        return $this->container['minimumLevel'];
    }

    /**
     * Sets minimumLevel
     *
     * @param int|null $minimumLevel The minimum character level at which this item is available for sale.
     *
     * @return $this
     */
    public function setMinimumLevel($minimumLevel)
    {
        $this->container['minimumLevel'] = $minimumLevel;

        return $this;
    }

    /**
     * Gets maximumLevel
     *
     * @return int|null
     */
    public function getMaximumLevel()
    {
        return $this->container['maximumLevel'];
    }

    /**
     * Sets maximumLevel
     *
     * @param int|null $maximumLevel The maximum character level at which this item is available for sale.
     *
     * @return $this
     */
    public function setMaximumLevel($maximumLevel)
    {
        $this->container['maximumLevel'] = $maximumLevel;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyVendorSaleItemActionBlockDefinition|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyVendorSaleItemActionBlockDefinition|null $action The action to be performed when purchasing the item, if it's not just \"buy\".
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets displayCategory
     *
     * @return string|null
     */
    public function getDisplayCategory()
    {
        return $this->container['displayCategory'];
    }

    /**
     * Sets displayCategory
     *
     * @param string|null $displayCategory The string identifier for the category selling this item.
     *
     * @return $this
     */
    public function setDisplayCategory($displayCategory)
    {
        $this->container['displayCategory'] = $displayCategory;

        return $this;
    }

    /**
     * Gets inventoryBucketHash
     *
     * @return int|null
     */
    public function getInventoryBucketHash()
    {
        return $this->container['inventoryBucketHash'];
    }

    /**
     * Sets inventoryBucketHash
     *
     * @param int|null $inventoryBucketHash The inventory bucket into which this item will be placed upon purchase.
     *
     * @return $this
     */
    public function setInventoryBucketHash($inventoryBucketHash)
    {
        $this->container['inventoryBucketHash'] = $inventoryBucketHash;

        return $this;
    }

    /**
     * Gets visibilityScope
     *
     * @return \Bungie\D1\Model\Destiny\DestinyGatingScope|null
     */
    public function getVisibilityScope()
    {
        return $this->container['visibilityScope'];
    }

    /**
     * Sets visibilityScope
     *
     * @param \Bungie\D1\Model\Destiny\DestinyGatingScope|null $visibilityScope The most restrictive scope that determines whether the item is available in the Vendor's inventory. See DestinyGatingScope's documentation for more information.  This can be determined by Unlock gating, or by whether or not the item has purchase level requirements (minimumLevel and maximumLevel properties).
     *
     * @return $this
     */
    public function setVisibilityScope($visibilityScope)
    {
        $this->container['visibilityScope'] = $visibilityScope;

        return $this;
    }

    /**
     * Gets purchasableScope
     *
     * @return \Bungie\D1\Model\Destiny\DestinyGatingScope|null
     */
    public function getPurchasableScope()
    {
        return $this->container['purchasableScope'];
    }

    /**
     * Sets purchasableScope
     *
     * @param \Bungie\D1\Model\Destiny\DestinyGatingScope|null $purchasableScope Similar to visibilityScope, it represents the most restrictive scope that determines whether the item can be purchased. It will at least be as restrictive as visibilityScope, but could be more restrictive if the item has additional purchase requirements beyond whether it is merely visible or not.  See DestinyGatingScope's documentation for more information.
     *
     * @return $this
     */
    public function setPurchasableScope($purchasableScope)
    {
        $this->container['purchasableScope'] = $purchasableScope;

        return $this;
    }

    /**
     * Gets exclusivity
     *
     * @return \Bungie\D1\Model\BungieMembershipType|null
     */
    public function getExclusivity()
    {
        return $this->container['exclusivity'];
    }

    /**
     * Sets exclusivity
     *
     * @param \Bungie\D1\Model\BungieMembershipType|null $exclusivity If this item can only be purchased by a given platform, this indicates the platform to which it is restricted.
     *
     * @return $this
     */
    public function setExclusivity($exclusivity)
    {
        $this->container['exclusivity'] = $exclusivity;

        return $this;
    }

    /**
     * Gets isOffer
     *
     * @return bool|null
     */
    public function getIsOffer()
    {
        return $this->container['isOffer'];
    }

    /**
     * Sets isOffer
     *
     * @param bool|null $isOffer If this sale can only be performed as the result of an offer check, this is true.
     *
     * @return $this
     */
    public function setIsOffer($isOffer)
    {
        $this->container['isOffer'] = $isOffer;

        return $this;
    }

    /**
     * Gets isCrm
     *
     * @return bool|null
     */
    public function getIsCrm()
    {
        return $this->container['isCrm'];
    }

    /**
     * Sets isCrm
     *
     * @param bool|null $isCrm If this sale can only be performed as the result of receiving a CRM offer, this is true.
     *
     * @return $this
     */
    public function setIsCrm($isCrm)
    {
        $this->container['isCrm'] = $isCrm;

        return $this;
    }

    /**
     * Gets sortValue
     *
     * @return int|null
     */
    public function getSortValue()
    {
        return $this->container['sortValue'];
    }

    /**
     * Sets sortValue
     *
     * @param int|null $sortValue *if* the category this item is in supports non-default sorting, this value should represent the sorting value to use, pre-processed and ready to go.
     *
     * @return $this
     */
    public function setSortValue($sortValue)
    {
        $this->container['sortValue'] = $sortValue;

        return $this;
    }

    /**
     * Gets expirationTooltip
     *
     * @return string|null
     */
    public function getExpirationTooltip()
    {
        return $this->container['expirationTooltip'];
    }

    /**
     * Sets expirationTooltip
     *
     * @param string|null $expirationTooltip If this item can expire, this is the tooltip message to show with its expiration info.
     *
     * @return $this
     */
    public function setExpirationTooltip($expirationTooltip)
    {
        $this->container['expirationTooltip'] = $expirationTooltip;

        return $this;
    }

    /**
     * Gets redirectToSaleIndexes
     *
     * @return int[]|null
     */
    public function getRedirectToSaleIndexes()
    {
        return $this->container['redirectToSaleIndexes'];
    }

    /**
     * Sets redirectToSaleIndexes
     *
     * @param int[]|null $redirectToSaleIndexes If this is populated, the purchase of this item should redirect to purchasing these other items instead.
     *
     * @return $this
     */
    public function setRedirectToSaleIndexes($redirectToSaleIndexes)
    {
        $this->container['redirectToSaleIndexes'] = $redirectToSaleIndexes;

        return $this;
    }

    /**
     * Gets socketOverrides
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemSocketOverride[]|null
     */
    public function getSocketOverrides()
    {
        return $this->container['socketOverrides'];
    }

    /**
     * Sets socketOverrides
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyVendorItemSocketOverride[]|null $socketOverrides socketOverrides
     *
     * @return $this
     */
    public function setSocketOverrides($socketOverrides)
    {
        $this->container['socketOverrides'] = $socketOverrides;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


