<?php
/**
 * DestinyItemSetBlockDefinition
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
 * DestinyItemSetBlockDefinition Class Doc Comment
 *
 * @category Class
 * @description Primarily for Quests, this is the definition of properties related to the item if it is a quest and its various quest steps.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemSetBlockDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemSetBlockDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemList' => '\Bungie\D1\Model\Destiny\Definitions\DestinyItemSetBlockEntryDefinition[]',
        'requireOrderedSetItemAdd' => 'bool',
        'setIsFeatured' => 'bool',
        'setType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'itemList' => null,
        'requireOrderedSetItemAdd' => null,
        'setIsFeatured' => null,
        'setType' => null
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
        'itemList' => 'itemList',
        'requireOrderedSetItemAdd' => 'requireOrderedSetItemAdd',
        'setIsFeatured' => 'setIsFeatured',
        'setType' => 'setType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemList' => 'setItemList',
        'requireOrderedSetItemAdd' => 'setRequireOrderedSetItemAdd',
        'setIsFeatured' => 'setSetIsFeatured',
        'setType' => 'setSetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemList' => 'getItemList',
        'requireOrderedSetItemAdd' => 'getRequireOrderedSetItemAdd',
        'setIsFeatured' => 'getSetIsFeatured',
        'setType' => 'getSetType'
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
        $this->container['itemList'] = isset($data['itemList']) ? $data['itemList'] : null;
        $this->container['requireOrderedSetItemAdd'] = isset($data['requireOrderedSetItemAdd']) ? $data['requireOrderedSetItemAdd'] : null;
        $this->container['setIsFeatured'] = isset($data['setIsFeatured']) ? $data['setIsFeatured'] : null;
        $this->container['setType'] = isset($data['setType']) ? $data['setType'] : null;
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
     * Gets itemList
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyItemSetBlockEntryDefinition[]|null
     */
    public function getItemList()
    {
        return $this->container['itemList'];
    }

    /**
     * Sets itemList
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyItemSetBlockEntryDefinition[]|null $itemList A collection of hashes of set items, for items such as Quest Metadata items that possess this data.
     *
     * @return $this
     */
    public function setItemList($itemList)
    {
        $this->container['itemList'] = $itemList;

        return $this;
    }

    /**
     * Gets requireOrderedSetItemAdd
     *
     * @return bool|null
     */
    public function getRequireOrderedSetItemAdd()
    {
        return $this->container['requireOrderedSetItemAdd'];
    }

    /**
     * Sets requireOrderedSetItemAdd
     *
     * @param bool|null $requireOrderedSetItemAdd If true, items in the set can only be added in increasing order, and adding an item will remove any previous item. For Quests, this is by necessity true. Only one quest step is present at a time, and previous steps are removed as you advance in the quest.
     *
     * @return $this
     */
    public function setRequireOrderedSetItemAdd($requireOrderedSetItemAdd)
    {
        $this->container['requireOrderedSetItemAdd'] = $requireOrderedSetItemAdd;

        return $this;
    }

    /**
     * Gets setIsFeatured
     *
     * @return bool|null
     */
    public function getSetIsFeatured()
    {
        return $this->container['setIsFeatured'];
    }

    /**
     * Sets setIsFeatured
     *
     * @param bool|null $setIsFeatured If true, the UI should treat this quest as \"featured\"
     *
     * @return $this
     */
    public function setSetIsFeatured($setIsFeatured)
    {
        $this->container['setIsFeatured'] = $setIsFeatured;

        return $this;
    }

    /**
     * Gets setType
     *
     * @return string|null
     */
    public function getSetType()
    {
        return $this->container['setType'];
    }

    /**
     * Sets setType
     *
     * @param string|null $setType A string identifier we can use to attempt to identify the category of the Quest.
     *
     * @return $this
     */
    public function setSetType($setType)
    {
        $this->container['setType'] = $setType;

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

