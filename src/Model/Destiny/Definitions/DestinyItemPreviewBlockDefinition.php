<?php
/**
 * DestinyItemPreviewBlockDefinition
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
 * DestinyItemPreviewBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Items like Sacks or Boxes can have items that it shows in-game when you view details that represent the items you can obtain if you use or acquire the item.  This defines those categories, and gives some insights into that data&#39;s source.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemPreviewBlockDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemPreviewBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'screenStyle' => 'string',
        'previewVendorHash' => 'int',
        'previewActionString' => 'string',
        'derivedItemCategories' => '\Bungie\D1\Model\Destiny\Definitions\Items\DestinyDerivedItemCategoryDefinition[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'screenStyle' => null,
        'previewVendorHash' => 'uint32',
        'previewActionString' => null,
        'derivedItemCategories' => null
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
        'screenStyle' => 'screenStyle',
        'previewVendorHash' => 'previewVendorHash',
        'previewActionString' => 'previewActionString',
        'derivedItemCategories' => 'derivedItemCategories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'screenStyle' => 'setScreenStyle',
        'previewVendorHash' => 'setPreviewVendorHash',
        'previewActionString' => 'setPreviewActionString',
        'derivedItemCategories' => 'setDerivedItemCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'screenStyle' => 'getScreenStyle',
        'previewVendorHash' => 'getPreviewVendorHash',
        'previewActionString' => 'getPreviewActionString',
        'derivedItemCategories' => 'getDerivedItemCategories'
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
        $this->container['screenStyle'] = isset($data['screenStyle']) ? $data['screenStyle'] : null;
        $this->container['previewVendorHash'] = isset($data['previewVendorHash']) ? $data['previewVendorHash'] : null;
        $this->container['previewActionString'] = isset($data['previewActionString']) ? $data['previewActionString'] : null;
        $this->container['derivedItemCategories'] = isset($data['derivedItemCategories']) ? $data['derivedItemCategories'] : null;
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
     * Gets screenStyle
     *
     * @return string|null
     */
    public function getScreenStyle()
    {
        return $this->container['screenStyle'];
    }

    /**
     * Sets screenStyle
     *
     * @param string|null $screenStyle A string that the game UI uses as a hint for which detail screen to show for the item. You, too, can leverage this for your own custom screen detail views. Note, however, that these are arbitrarily defined by designers: there's no guarantees of a fixed, known number of these - so fall back to something reasonable if you don't recognize it.
     *
     * @return $this
     */
    public function setScreenStyle($screenStyle)
    {
        $this->container['screenStyle'] = $screenStyle;

        return $this;
    }

    /**
     * Gets previewVendorHash
     *
     * @return int|null
     */
    public function getPreviewVendorHash()
    {
        return $this->container['previewVendorHash'];
    }

    /**
     * Sets previewVendorHash
     *
     * @param int|null $previewVendorHash If the preview data is derived from a fake \"Preview\" Vendor, this will be the hash identifier for the DestinyVendorDefinition of that fake vendor.
     *
     * @return $this
     */
    public function setPreviewVendorHash($previewVendorHash)
    {
        $this->container['previewVendorHash'] = $previewVendorHash;

        return $this;
    }

    /**
     * Gets previewActionString
     *
     * @return string|null
     */
    public function getPreviewActionString()
    {
        return $this->container['previewActionString'];
    }

    /**
     * Sets previewActionString
     *
     * @param string|null $previewActionString If the preview has an associated action (like \"Open\"), this will be the localized string for that action.
     *
     * @return $this
     */
    public function setPreviewActionString($previewActionString)
    {
        $this->container['previewActionString'] = $previewActionString;

        return $this;
    }

    /**
     * Gets derivedItemCategories
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\Items\DestinyDerivedItemCategoryDefinition[]|null
     */
    public function getDerivedItemCategories()
    {
        return $this->container['derivedItemCategories'];
    }

    /**
     * Sets derivedItemCategories
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\Items\DestinyDerivedItemCategoryDefinition[]|null $derivedItemCategories This is a list of the items being previewed, categorized in the same way as they are in the preview UI.
     *
     * @return $this
     */
    public function setDerivedItemCategories($derivedItemCategories)
    {
        $this->container['derivedItemCategories'] = $derivedItemCategories;

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


