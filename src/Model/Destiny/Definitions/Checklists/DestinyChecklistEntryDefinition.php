<?php
/**
 * DestinyChecklistEntryDefinition
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

namespace Bungie\D1\Model\Destiny\Definitions\Checklists;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * DestinyChecklistEntryDefinition Class Doc Comment
 *
 * @category Class
 * @description The properties of an individual checklist item. Note that almost everything is optional: it is *highly* variable what kind of data we&#39;ll actually be able to return: at times we may have no other relationships to entities at all.  Whatever UI you build, do it with the knowledge that any given entry might not actually be able to be associated with some other Destiny entity.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyChecklistEntryDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Checklists.DestinyChecklistEntryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hash' => 'int',
        'displayProperties' => '\Bungie\D1\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'destinationHash' => 'int',
        'locationHash' => 'int',
        'bubbleHash' => 'int',
        'activityHash' => 'int',
        'itemHash' => 'int',
        'vendorHash' => 'int',
        'vendorInteractionIndex' => 'int',
        'scope' => '\Bungie\D1\Model\Destiny\DestinyScope'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'hash' => 'uint32',
        'displayProperties' => null,
        'destinationHash' => 'uint32',
        'locationHash' => 'uint32',
        'bubbleHash' => 'uint32',
        'activityHash' => 'uint32',
        'itemHash' => 'uint32',
        'vendorHash' => 'uint32',
        'vendorInteractionIndex' => 'int32',
        'scope' => null
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
        'hash' => 'hash',
        'displayProperties' => 'displayProperties',
        'destinationHash' => 'destinationHash',
        'locationHash' => 'locationHash',
        'bubbleHash' => 'bubbleHash',
        'activityHash' => 'activityHash',
        'itemHash' => 'itemHash',
        'vendorHash' => 'vendorHash',
        'vendorInteractionIndex' => 'vendorInteractionIndex',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hash' => 'setHash',
        'displayProperties' => 'setDisplayProperties',
        'destinationHash' => 'setDestinationHash',
        'locationHash' => 'setLocationHash',
        'bubbleHash' => 'setBubbleHash',
        'activityHash' => 'setActivityHash',
        'itemHash' => 'setItemHash',
        'vendorHash' => 'setVendorHash',
        'vendorInteractionIndex' => 'setVendorInteractionIndex',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hash' => 'getHash',
        'displayProperties' => 'getDisplayProperties',
        'destinationHash' => 'getDestinationHash',
        'locationHash' => 'getLocationHash',
        'bubbleHash' => 'getBubbleHash',
        'activityHash' => 'getActivityHash',
        'itemHash' => 'getItemHash',
        'vendorHash' => 'getVendorHash',
        'vendorInteractionIndex' => 'getVendorInteractionIndex',
        'scope' => 'getScope'
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
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['destinationHash'] = isset($data['destinationHash']) ? $data['destinationHash'] : null;
        $this->container['locationHash'] = isset($data['locationHash']) ? $data['locationHash'] : null;
        $this->container['bubbleHash'] = isset($data['bubbleHash']) ? $data['bubbleHash'] : null;
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['itemHash'] = isset($data['itemHash']) ? $data['itemHash'] : null;
        $this->container['vendorHash'] = isset($data['vendorHash']) ? $data['vendorHash'] : null;
        $this->container['vendorInteractionIndex'] = isset($data['vendorInteractionIndex']) ? $data['vendorInteractionIndex'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The identifier for this Checklist entry. Guaranteed unique only within this Checklist Definition, and not globally/for all checklists.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets displayProperties
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties Even if no other associations exist, we will give you *something* for display properties. In cases where we have no associated entities, it may be as simple as a numerical identifier.
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets destinationHash
     *
     * @return int|null
     */
    public function getDestinationHash()
    {
        return $this->container['destinationHash'];
    }

    /**
     * Sets destinationHash
     *
     * @param int|null $destinationHash destinationHash
     *
     * @return $this
     */
    public function setDestinationHash($destinationHash)
    {
        $this->container['destinationHash'] = $destinationHash;

        return $this;
    }

    /**
     * Gets locationHash
     *
     * @return int|null
     */
    public function getLocationHash()
    {
        return $this->container['locationHash'];
    }

    /**
     * Sets locationHash
     *
     * @param int|null $locationHash locationHash
     *
     * @return $this
     */
    public function setLocationHash($locationHash)
    {
        $this->container['locationHash'] = $locationHash;

        return $this;
    }

    /**
     * Gets bubbleHash
     *
     * @return int|null
     */
    public function getBubbleHash()
    {
        return $this->container['bubbleHash'];
    }

    /**
     * Sets bubbleHash
     *
     * @param int|null $bubbleHash Note that a Bubble's hash doesn't uniquely identify a \"top level\" entity in Destiny. Only the combination of location and bubble can uniquely identify a place in the world of Destiny: so if bubbleHash is populated, locationHash must too be populated for it to have any meaning.  You can use this property if it is populated to look up the DestinyLocationDefinition's associated .locationReleases[].activityBubbleName property.
     *
     * @return $this
     */
    public function setBubbleHash($bubbleHash)
    {
        $this->container['bubbleHash'] = $bubbleHash;

        return $this;
    }

    /**
     * Gets activityHash
     *
     * @return int|null
     */
    public function getActivityHash()
    {
        return $this->container['activityHash'];
    }

    /**
     * Sets activityHash
     *
     * @param int|null $activityHash activityHash
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

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
     * @param int|null $itemHash itemHash
     *
     * @return $this
     */
    public function setItemHash($itemHash)
    {
        $this->container['itemHash'] = $itemHash;

        return $this;
    }

    /**
     * Gets vendorHash
     *
     * @return int|null
     */
    public function getVendorHash()
    {
        return $this->container['vendorHash'];
    }

    /**
     * Sets vendorHash
     *
     * @param int|null $vendorHash vendorHash
     *
     * @return $this
     */
    public function setVendorHash($vendorHash)
    {
        $this->container['vendorHash'] = $vendorHash;

        return $this;
    }

    /**
     * Gets vendorInteractionIndex
     *
     * @return int|null
     */
    public function getVendorInteractionIndex()
    {
        return $this->container['vendorInteractionIndex'];
    }

    /**
     * Sets vendorInteractionIndex
     *
     * @param int|null $vendorInteractionIndex vendorInteractionIndex
     *
     * @return $this
     */
    public function setVendorInteractionIndex($vendorInteractionIndex)
    {
        $this->container['vendorInteractionIndex'] = $vendorInteractionIndex;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return \Bungie\D1\Model\Destiny\DestinyScope|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param \Bungie\D1\Model\Destiny\DestinyScope|null $scope The scope at which this specific entry can be computed.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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


