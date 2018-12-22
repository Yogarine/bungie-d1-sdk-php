<?php
/**
 * DestinyMilestoneRewardEntry
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

namespace Bungie\D1\Model\Destiny\Milestones;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * DestinyMilestoneRewardEntry Class Doc Comment
 *
 * @category Class
 * @description The character-specific data for a milestone&#39;s reward entry. See DestinyMilestoneDefinition for more information about Reward Entries.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyMilestoneRewardEntry implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Milestones.DestinyMilestoneRewardEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rewardEntryHash' => 'int',
        'earned' => 'bool',
        'redeemed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'rewardEntryHash' => 'uint32',
        'earned' => null,
        'redeemed' => null
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
        'rewardEntryHash' => 'rewardEntryHash',
        'earned' => 'earned',
        'redeemed' => 'redeemed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rewardEntryHash' => 'setRewardEntryHash',
        'earned' => 'setEarned',
        'redeemed' => 'setRedeemed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rewardEntryHash' => 'getRewardEntryHash',
        'earned' => 'getEarned',
        'redeemed' => 'getRedeemed'
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
        $this->container['rewardEntryHash'] = isset($data['rewardEntryHash']) ? $data['rewardEntryHash'] : null;
        $this->container['earned'] = isset($data['earned']) ? $data['earned'] : null;
        $this->container['redeemed'] = isset($data['redeemed']) ? $data['redeemed'] : null;
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
     * Gets rewardEntryHash
     *
     * @return int|null
     */
    public function getRewardEntryHash()
    {
        return $this->container['rewardEntryHash'];
    }

    /**
     * Sets rewardEntryHash
     *
     * @param int|null $rewardEntryHash The identifier for the reward entry in question. It is important to look up the related DestinyMilestoneRewardEntryDefinition to get the static details about the reward, which you can do by looking up the milestone's DestinyMilestoneDefinition and examining the DestinyMilestoneDefinition.rewards[rewardCategoryHash].rewardEntries[rewardEntryHash] data.
     *
     * @return $this
     */
    public function setRewardEntryHash($rewardEntryHash)
    {
        $this->container['rewardEntryHash'] = $rewardEntryHash;

        return $this;
    }

    /**
     * Gets earned
     *
     * @return bool|null
     */
    public function getEarned()
    {
        return $this->container['earned'];
    }

    /**
     * Sets earned
     *
     * @param bool|null $earned If TRUE, the player has earned this reward.
     *
     * @return $this
     */
    public function setEarned($earned)
    {
        $this->container['earned'] = $earned;

        return $this;
    }

    /**
     * Gets redeemed
     *
     * @return bool|null
     */
    public function getRedeemed()
    {
        return $this->container['redeemed'];
    }

    /**
     * Sets redeemed
     *
     * @param bool|null $redeemed If TRUE, the player has redeemed/picked up/obtained this reward. Feel free to alias this to \"gotTheShinyBauble\" in your own codebase.
     *
     * @return $this
     */
    public function setRedeemed($redeemed)
    {
        $this->container['redeemed'] = $redeemed;

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


