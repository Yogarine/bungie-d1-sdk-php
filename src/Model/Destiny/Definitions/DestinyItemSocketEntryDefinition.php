<?php
/**
 * DestinyItemSocketEntryDefinition
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
 * DestinyItemSocketEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description The definition information for a specific socket on an item. This will determine how the socket behaves in-game.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSocketEntryDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSocketEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'socketTypeHash' => 'int',
        'singleInitialItemHash' => 'int',
        'reusablePlugItems' => '\Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemDefinition[]',
        'preventInitializationOnVendorPurchase' => 'bool',
        'hidePerksInItemTooltip' => 'bool',
        'plugSources' => '\Bungie\D1\Model\Destiny\SocketPlugSources',
        'reusablePlugSetHash' => 'int',
        'randomizedPlugItems' => '\Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemRandomizedDefinition[]',
        'defaultVisible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'socketTypeHash' => 'uint32',
        'singleInitialItemHash' => 'uint32',
        'reusablePlugItems' => null,
        'preventInitializationOnVendorPurchase' => null,
        'hidePerksInItemTooltip' => null,
        'plugSources' => null,
        'reusablePlugSetHash' => 'uint32',
        'randomizedPlugItems' => null,
        'defaultVisible' => null
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
        'socketTypeHash' => 'socketTypeHash',
        'singleInitialItemHash' => 'singleInitialItemHash',
        'reusablePlugItems' => 'reusablePlugItems',
        'preventInitializationOnVendorPurchase' => 'preventInitializationOnVendorPurchase',
        'hidePerksInItemTooltip' => 'hidePerksInItemTooltip',
        'plugSources' => 'plugSources',
        'reusablePlugSetHash' => 'reusablePlugSetHash',
        'randomizedPlugItems' => 'randomizedPlugItems',
        'defaultVisible' => 'defaultVisible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'socketTypeHash' => 'setSocketTypeHash',
        'singleInitialItemHash' => 'setSingleInitialItemHash',
        'reusablePlugItems' => 'setReusablePlugItems',
        'preventInitializationOnVendorPurchase' => 'setPreventInitializationOnVendorPurchase',
        'hidePerksInItemTooltip' => 'setHidePerksInItemTooltip',
        'plugSources' => 'setPlugSources',
        'reusablePlugSetHash' => 'setReusablePlugSetHash',
        'randomizedPlugItems' => 'setRandomizedPlugItems',
        'defaultVisible' => 'setDefaultVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'socketTypeHash' => 'getSocketTypeHash',
        'singleInitialItemHash' => 'getSingleInitialItemHash',
        'reusablePlugItems' => 'getReusablePlugItems',
        'preventInitializationOnVendorPurchase' => 'getPreventInitializationOnVendorPurchase',
        'hidePerksInItemTooltip' => 'getHidePerksInItemTooltip',
        'plugSources' => 'getPlugSources',
        'reusablePlugSetHash' => 'getReusablePlugSetHash',
        'randomizedPlugItems' => 'getRandomizedPlugItems',
        'defaultVisible' => 'getDefaultVisible'
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
        $this->container['socketTypeHash'] = isset($data['socketTypeHash']) ? $data['socketTypeHash'] : null;
        $this->container['singleInitialItemHash'] = isset($data['singleInitialItemHash']) ? $data['singleInitialItemHash'] : null;
        $this->container['reusablePlugItems'] = isset($data['reusablePlugItems']) ? $data['reusablePlugItems'] : null;
        $this->container['preventInitializationOnVendorPurchase'] = isset($data['preventInitializationOnVendorPurchase']) ? $data['preventInitializationOnVendorPurchase'] : null;
        $this->container['hidePerksInItemTooltip'] = isset($data['hidePerksInItemTooltip']) ? $data['hidePerksInItemTooltip'] : null;
        $this->container['plugSources'] = isset($data['plugSources']) ? $data['plugSources'] : null;
        $this->container['reusablePlugSetHash'] = isset($data['reusablePlugSetHash']) ? $data['reusablePlugSetHash'] : null;
        $this->container['randomizedPlugItems'] = isset($data['randomizedPlugItems']) ? $data['randomizedPlugItems'] : null;
        $this->container['defaultVisible'] = isset($data['defaultVisible']) ? $data['defaultVisible'] : null;
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
     * Gets socketTypeHash
     *
     * @return int|null
     */
    public function getSocketTypeHash()
    {
        return $this->container['socketTypeHash'];
    }

    /**
     * Sets socketTypeHash
     *
     * @param int|null $socketTypeHash All sockets have a type, and this is the hash identifier for this particular type. Use it to look up the DestinySocketTypeDefinition: read there for more information on how socket types affect the behavior of the socket.
     *
     * @return $this
     */
    public function setSocketTypeHash($socketTypeHash)
    {
        $this->container['socketTypeHash'] = $socketTypeHash;

        return $this;
    }

    /**
     * Gets singleInitialItemHash
     *
     * @return int|null
     */
    public function getSingleInitialItemHash()
    {
        return $this->container['singleInitialItemHash'];
    }

    /**
     * Sets singleInitialItemHash
     *
     * @param int|null $singleInitialItemHash If a valid hash, this is the hash identifier for the DestinyInventoryItemDefinition representing the Plug that will be initially inserted into the item on item creation. Otherwise, this Socket will either start without a plug inserted, or will have one randomly inserted.
     *
     * @return $this
     */
    public function setSingleInitialItemHash($singleInitialItemHash)
    {
        $this->container['singleInitialItemHash'] = $singleInitialItemHash;

        return $this;
    }

    /**
     * Gets reusablePlugItems
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemDefinition[]|null
     */
    public function getReusablePlugItems()
    {
        return $this->container['reusablePlugItems'];
    }

    /**
     * Sets reusablePlugItems
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemDefinition[]|null $reusablePlugItems This is a list of pre-determined plugs that can *always* be plugged into this socket, without the character having the plug in their inventory.  If this list is populated, you will not be allowed to plug an arbitrary item in the socket: you will only be able to choose from one of these reusable plugs.
     *
     * @return $this
     */
    public function setReusablePlugItems($reusablePlugItems)
    {
        $this->container['reusablePlugItems'] = $reusablePlugItems;

        return $this;
    }

    /**
     * Gets preventInitializationOnVendorPurchase
     *
     * @return bool|null
     */
    public function getPreventInitializationOnVendorPurchase()
    {
        return $this->container['preventInitializationOnVendorPurchase'];
    }

    /**
     * Sets preventInitializationOnVendorPurchase
     *
     * @param bool|null $preventInitializationOnVendorPurchase If this is true, then the socket will not be initialized with a plug if the item is purchased from a Vendor.  Remember that Vendors are much more than conceptual vendors: they include \"Collection Kiosks\" and other entities. See DestinyVendorDefinition for more information.
     *
     * @return $this
     */
    public function setPreventInitializationOnVendorPurchase($preventInitializationOnVendorPurchase)
    {
        $this->container['preventInitializationOnVendorPurchase'] = $preventInitializationOnVendorPurchase;

        return $this;
    }

    /**
     * Gets hidePerksInItemTooltip
     *
     * @return bool|null
     */
    public function getHidePerksInItemTooltip()
    {
        return $this->container['hidePerksInItemTooltip'];
    }

    /**
     * Sets hidePerksInItemTooltip
     *
     * @param bool|null $hidePerksInItemTooltip If this is true, the perks provided by this socket shouldn't be shown in the item's tooltip. This might be useful if it's providing a hidden bonus, or if the bonus is less important than other benefits on the item.
     *
     * @return $this
     */
    public function setHidePerksInItemTooltip($hidePerksInItemTooltip)
    {
        $this->container['hidePerksInItemTooltip'] = $hidePerksInItemTooltip;

        return $this;
    }

    /**
     * Gets plugSources
     *
     * @return \Bungie\D1\Model\Destiny\SocketPlugSources|null
     */
    public function getPlugSources()
    {
        return $this->container['plugSources'];
    }

    /**
     * Sets plugSources
     *
     * @param \Bungie\D1\Model\Destiny\SocketPlugSources|null $plugSources Indicates where you should go to get plugs for this socket. This will affect how you populate your UI, as well as what plugs are valid for this socket. It's an alternative to having to check for the existence of certain properties (reusablePlugItems for example) to infer where plugs should come from.
     *
     * @return $this
     */
    public function setPlugSources($plugSources)
    {
        $this->container['plugSources'] = $plugSources;

        return $this;
    }

    /**
     * Gets reusablePlugSetHash
     *
     * @return int|null
     */
    public function getReusablePlugSetHash()
    {
        return $this->container['reusablePlugSetHash'];
    }

    /**
     * Sets reusablePlugSetHash
     *
     * @param int|null $reusablePlugSetHash If this socket's plugs come from a reusable DestinyPlugSetDefinition, this is the identifier for that set. We added this concept to reduce some major duplication that's going to come from sockets as replacements for what was once implemented as large sets of items and kiosks (like Emotes).
     *
     * @return $this
     */
    public function setReusablePlugSetHash($reusablePlugSetHash)
    {
        $this->container['reusablePlugSetHash'] = $reusablePlugSetHash;

        return $this;
    }

    /**
     * Gets randomizedPlugItems
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemRandomizedDefinition[]|null
     */
    public function getRandomizedPlugItems()
    {
        return $this->container['randomizedPlugItems'];
    }

    /**
     * Sets randomizedPlugItems
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyItemSocketEntryPlugItemRandomizedDefinition[]|null $randomizedPlugItems As of Forsaken, item sockets can have randomized plugs. If this is populated, the live data will return a subset of plugs from this list that are active and able to be inserted into the socket just like a reusable plug.
     *
     * @return $this
     */
    public function setRandomizedPlugItems($randomizedPlugItems)
    {
        $this->container['randomizedPlugItems'] = $randomizedPlugItems;

        return $this;
    }

    /**
     * Gets defaultVisible
     *
     * @return bool|null
     */
    public function getDefaultVisible()
    {
        return $this->container['defaultVisible'];
    }

    /**
     * Sets defaultVisible
     *
     * @param bool|null $defaultVisible If true, then this socket is visible in the item's \"default\" state. If you have an instance, you should always check the runtime state, as that can override this visibility setting: but if you're looking at the item on a conceptual level, this property can be useful for hiding data such as legacy sockets - which remain defined on items for infrastructure purposes, but can be confusing for users to see.
     *
     * @return $this
     */
    public function setDefaultVisible($defaultVisible)
    {
        $this->container['defaultVisible'] = $defaultVisible;

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


