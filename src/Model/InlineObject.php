<?php
/**
 * InlineObject
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

namespace Bungie\D1\Model;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * InlineObject Class Doc Comment
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'membershipType' => '\Bungie\D1\Model\BungieMembershipType',
        'itemReferenceHash' => 'int',
        'itemId' => 'int',
        'stackSize' => 'int',
        'characterId' => 'int',
        'transferToVault' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'membershipType' => null,
        'itemReferenceHash' => 'int64',
        'itemId' => 'int64',
        'stackSize' => 'int32',
        'characterId' => 'int64',
        'transferToVault' => null
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
        'membershipType' => 'membershipType',
        'itemReferenceHash' => 'itemReferenceHash',
        'itemId' => 'itemId',
        'stackSize' => 'stackSize',
        'characterId' => 'characterId',
        'transferToVault' => 'transferToVault'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'membershipType' => 'setMembershipType',
        'itemReferenceHash' => 'setItemReferenceHash',
        'itemId' => 'setItemId',
        'stackSize' => 'setStackSize',
        'characterId' => 'setCharacterId',
        'transferToVault' => 'setTransferToVault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'membershipType' => 'getMembershipType',
        'itemReferenceHash' => 'getItemReferenceHash',
        'itemId' => 'getItemId',
        'stackSize' => 'getStackSize',
        'characterId' => 'getCharacterId',
        'transferToVault' => 'getTransferToVault'
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
        $this->container['membershipType'] = isset($data['membershipType']) ? $data['membershipType'] : null;
        $this->container['itemReferenceHash'] = isset($data['itemReferenceHash']) ? $data['itemReferenceHash'] : null;
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['stackSize'] = isset($data['stackSize']) ? $data['stackSize'] : null;
        $this->container['characterId'] = isset($data['characterId']) ? $data['characterId'] : null;
        $this->container['transferToVault'] = isset($data['transferToVault']) ? $data['transferToVault'] : null;
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
     * Gets membershipType
     *
     * @return \Bungie\D1\Model\BungieMembershipType|null
     */
    public function getMembershipType()
    {
        return $this->container['membershipType'];
    }

    /**
     * Sets membershipType
     *
     * @param \Bungie\D1\Model\BungieMembershipType|null $membershipType membershipType
     *
     * @return $this
     */
    public function setMembershipType($membershipType)
    {
        $this->container['membershipType'] = $membershipType;

        return $this;
    }

    /**
     * Gets itemReferenceHash
     *
     * @return int|null
     */
    public function getItemReferenceHash()
    {
        return $this->container['itemReferenceHash'];
    }

    /**
     * Sets itemReferenceHash
     *
     * @param int|null $itemReferenceHash The inventoryItemHash for an item.
     *
     * @return $this
     */
    public function setItemReferenceHash($itemReferenceHash)
    {
        $this->container['itemReferenceHash'] = $itemReferenceHash;

        return $this;
    }

    /**
     * Gets itemId
     *
     * @return int|null
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param int|null $itemId The instanceId of an equipable item. Should be \"0\" otherwise.
     *
     * @return $this
     */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;

        return $this;
    }

    /**
     * Gets stackSize
     *
     * @return int|null
     */
    public function getStackSize()
    {
        return $this->container['stackSize'];
    }

    /**
     * Sets stackSize
     *
     * @param int|null $stackSize How many items to transfer. Should be \"1\" for equipable items.
     *
     * @return $this
     */
    public function setStackSize($stackSize)
    {
        $this->container['stackSize'] = $stackSize;

        return $this;
    }

    /**
     * Gets characterId
     *
     * @return int|null
     */
    public function getCharacterId()
    {
        return $this->container['characterId'];
    }

    /**
     * Sets characterId
     *
     * @param int|null $characterId A valid characterId that is associated with the given account.
     *
     * @return $this
     */
    public function setCharacterId($characterId)
    {
        $this->container['characterId'] = $characterId;

        return $this;
    }

    /**
     * Gets transferToVault
     *
     * @return bool|null
     */
    public function getTransferToVault()
    {
        return $this->container['transferToVault'];
    }

    /**
     * Sets transferToVault
     *
     * @param bool|null $transferToVault Move the item to or from the vault; true or false
     *
     * @return $this
     */
    public function setTransferToVault($transferToVault)
    {
        $this->container['transferToVault'] = $transferToVault;

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

