<?php
/**
 * DestinyActivityPlaylistItemDefinition
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
 * DestinyActivityPlaylistItemDefinition Class Doc Comment
 *
 * @category Class
 * @description If the activity is a playlist, this is the definition for a specific entry in the playlist: a single possible combination of Activity and Activity Mode that can be chosen.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityPlaylistItemDefinition implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyActivityPlaylistItemDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityHash' => 'int',
        'directActivityModeHash' => 'int',
        'directActivityModeType' => 'int',
        'activityModeHashes' => 'int[]',
        'activityModeTypes' => '\Bungie\D1\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activityHash' => 'uint32',
        'directActivityModeHash' => 'uint32',
        'directActivityModeType' => 'int32',
        'activityModeHashes' => 'uint32',
        'activityModeTypes' => null
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
        'activityHash' => 'activityHash',
        'directActivityModeHash' => 'directActivityModeHash',
        'directActivityModeType' => 'directActivityModeType',
        'activityModeHashes' => 'activityModeHashes',
        'activityModeTypes' => 'activityModeTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityHash' => 'setActivityHash',
        'directActivityModeHash' => 'setDirectActivityModeHash',
        'directActivityModeType' => 'setDirectActivityModeType',
        'activityModeHashes' => 'setActivityModeHashes',
        'activityModeTypes' => 'setActivityModeTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityHash' => 'getActivityHash',
        'directActivityModeHash' => 'getDirectActivityModeHash',
        'directActivityModeType' => 'getDirectActivityModeType',
        'activityModeHashes' => 'getActivityModeHashes',
        'activityModeTypes' => 'getActivityModeTypes'
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

    const DIRECT_ACTIVITY_MODE_TYPE_NONE = 0;
    const DIRECT_ACTIVITY_MODE_TYPE_STORY = 2;
    const DIRECT_ACTIVITY_MODE_TYPE_STRIKE = 3;
    const DIRECT_ACTIVITY_MODE_TYPE_RAID = 4;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLPVP = 5;
    const DIRECT_ACTIVITY_MODE_TYPE_PATROL = 6;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLPVE = 7;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED9 = 9;
    const DIRECT_ACTIVITY_MODE_TYPE_CONTROL = 10;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED11 = 11;
    const DIRECT_ACTIVITY_MODE_TYPE_CLASH = 12;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED13 = 13;
    const DIRECT_ACTIVITY_MODE_TYPE_CRIMSONDOUBLES = 15;
    const DIRECT_ACTIVITY_MODE_TYPE_NIGHTFALL = 16;
    const DIRECT_ACTIVITY_MODE_TYPE_HEROICNIGHTFALL = 17;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLSTRIKES = 18;
    const DIRECT_ACTIVITY_MODE_TYPE_IRONBANNER = 19;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED20 = 20;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED21 = 21;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED22 = 22;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED24 = 24;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLMAYHEM = 25;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED26 = 26;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED27 = 27;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED28 = 28;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED29 = 29;
    const DIRECT_ACTIVITY_MODE_TYPE_RESERVED30 = 30;
    const DIRECT_ACTIVITY_MODE_TYPE_SUPREMACY = 31;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL = 32;
    const DIRECT_ACTIVITY_MODE_TYPE_SURVIVAL = 37;
    const DIRECT_ACTIVITY_MODE_TYPE_COUNTDOWN = 38;
    const DIRECT_ACTIVITY_MODE_TYPE_TRIALSOFTHENINE = 39;
    const DIRECT_ACTIVITY_MODE_TYPE_SOCIAL = 40;
    const DIRECT_ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN = 41;
    const DIRECT_ACTIVITY_MODE_TYPE_TRIALSSURVIVAL = 42;
    const DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERCONTROL = 43;
    const DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERCLASH = 44;
    const DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY = 45;
    const DIRECT_ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL = 46;
    const DIRECT_ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL = 47;
    const DIRECT_ACTIVITY_MODE_TYPE_RUMBLE = 48;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLDOUBLES = 49;
    const DIRECT_ACTIVITY_MODE_TYPE_DOUBLES = 50;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH = 51;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL = 52;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY = 53;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN = 54;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL = 55;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM = 56;
    const DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE = 57;
    const DIRECT_ACTIVITY_MODE_TYPE_HEROICADVENTURE = 58;
    const DIRECT_ACTIVITY_MODE_TYPE_SHOWDOWN = 59;
    const DIRECT_ACTIVITY_MODE_TYPE_LOCKDOWN = 60;
    const DIRECT_ACTIVITY_MODE_TYPE_SCORCHED = 61;
    const DIRECT_ACTIVITY_MODE_TYPE_SCORCHEDTEAM = 62;
    const DIRECT_ACTIVITY_MODE_TYPE_GAMBIT = 63;
    const DIRECT_ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE = 64;
    const DIRECT_ACTIVITY_MODE_TYPE_BREAKTHROUGH = 65;
    const DIRECT_ACTIVITY_MODE_TYPE_BLACKARMORYRUN = 66;
    const DIRECT_ACTIVITY_MODE_TYPE_SALVAGE = 67;
    const DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERSALVAGE = 68;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectActivityModeTypeAllowableValues()
    {
        return [
            self::DIRECT_ACTIVITY_MODE_TYPE_NONE,
            self::DIRECT_ACTIVITY_MODE_TYPE_STORY,
            self::DIRECT_ACTIVITY_MODE_TYPE_STRIKE,
            self::DIRECT_ACTIVITY_MODE_TYPE_RAID,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLPVP,
            self::DIRECT_ACTIVITY_MODE_TYPE_PATROL,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLPVE,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED9,
            self::DIRECT_ACTIVITY_MODE_TYPE_CONTROL,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED11,
            self::DIRECT_ACTIVITY_MODE_TYPE_CLASH,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED13,
            self::DIRECT_ACTIVITY_MODE_TYPE_CRIMSONDOUBLES,
            self::DIRECT_ACTIVITY_MODE_TYPE_NIGHTFALL,
            self::DIRECT_ACTIVITY_MODE_TYPE_HEROICNIGHTFALL,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLSTRIKES,
            self::DIRECT_ACTIVITY_MODE_TYPE_IRONBANNER,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED20,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED21,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED22,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED24,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLMAYHEM,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED26,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED27,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED28,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED29,
            self::DIRECT_ACTIVITY_MODE_TYPE_RESERVED30,
            self::DIRECT_ACTIVITY_MODE_TYPE_SUPREMACY,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESALL,
            self::DIRECT_ACTIVITY_MODE_TYPE_SURVIVAL,
            self::DIRECT_ACTIVITY_MODE_TYPE_COUNTDOWN,
            self::DIRECT_ACTIVITY_MODE_TYPE_TRIALSOFTHENINE,
            self::DIRECT_ACTIVITY_MODE_TYPE_SOCIAL,
            self::DIRECT_ACTIVITY_MODE_TYPE_TRIALSCOUNTDOWN,
            self::DIRECT_ACTIVITY_MODE_TYPE_TRIALSSURVIVAL,
            self::DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERCONTROL,
            self::DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERCLASH,
            self::DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERSUPREMACY,
            self::DIRECT_ACTIVITY_MODE_TYPE_SCOREDNIGHTFALL,
            self::DIRECT_ACTIVITY_MODE_TYPE_SCOREDHEROICNIGHTFALL,
            self::DIRECT_ACTIVITY_MODE_TYPE_RUMBLE,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLDOUBLES,
            self::DIRECT_ACTIVITY_MODE_TYPE_DOUBLES,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCLASH,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCONTROL,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSUPREMACY,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESCOUNTDOWN,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESSURVIVAL,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESMAYHEM,
            self::DIRECT_ACTIVITY_MODE_TYPE_PRIVATEMATCHESRUMBLE,
            self::DIRECT_ACTIVITY_MODE_TYPE_HEROICADVENTURE,
            self::DIRECT_ACTIVITY_MODE_TYPE_SHOWDOWN,
            self::DIRECT_ACTIVITY_MODE_TYPE_LOCKDOWN,
            self::DIRECT_ACTIVITY_MODE_TYPE_SCORCHED,
            self::DIRECT_ACTIVITY_MODE_TYPE_SCORCHEDTEAM,
            self::DIRECT_ACTIVITY_MODE_TYPE_GAMBIT,
            self::DIRECT_ACTIVITY_MODE_TYPE_ALLPVECOMPETITIVE,
            self::DIRECT_ACTIVITY_MODE_TYPE_BREAKTHROUGH,
            self::DIRECT_ACTIVITY_MODE_TYPE_BLACKARMORYRUN,
            self::DIRECT_ACTIVITY_MODE_TYPE_SALVAGE,
            self::DIRECT_ACTIVITY_MODE_TYPE_IRONBANNERSALVAGE,
        ];
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
        $this->container['activityHash'] = isset($data['activityHash']) ? $data['activityHash'] : null;
        $this->container['directActivityModeHash'] = isset($data['directActivityModeHash']) ? $data['directActivityModeHash'] : null;
        $this->container['directActivityModeType'] = isset($data['directActivityModeType']) ? $data['directActivityModeType'] : null;
        $this->container['activityModeHashes'] = isset($data['activityModeHashes']) ? $data['activityModeHashes'] : null;
        $this->container['activityModeTypes'] = isset($data['activityModeTypes']) ? $data['activityModeTypes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($this->container['directActivityModeType']) && !in_array($this->container['directActivityModeType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'directActivityModeType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * @param int|null $activityHash The hash identifier of the Activity that can be played. Use it to look up the DestinyActivityDefinition.
     *
     * @return $this
     */
    public function setActivityHash($activityHash)
    {
        $this->container['activityHash'] = $activityHash;

        return $this;
    }

    /**
     * Gets directActivityModeHash
     *
     * @return int|null
     */
    public function getDirectActivityModeHash()
    {
        return $this->container['directActivityModeHash'];
    }

    /**
     * Sets directActivityModeHash
     *
     * @param int|null $directActivityModeHash If this playlist entry had an activity mode directly defined on it, this will be the hash of that mode.
     *
     * @return $this
     */
    public function setDirectActivityModeHash($directActivityModeHash)
    {
        $this->container['directActivityModeHash'] = $directActivityModeHash;

        return $this;
    }

    /**
     * Gets directActivityModeType
     *
     * @return int|null
     */
    public function getDirectActivityModeType()
    {
        return $this->container['directActivityModeType'];
    }

    /**
     * Sets directActivityModeType
     *
     * @param int|null $directActivityModeType If the playlist entry had an activity mode directly defined on it, this will be the enum value of that mode.
     *
     * @return $this
     */
    public function setDirectActivityModeType($directActivityModeType)
    {
        $allowedValues = $this->getDirectActivityModeTypeAllowableValues();
        if (!is_null($directActivityModeType) && !in_array($directActivityModeType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'directActivityModeType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['directActivityModeType'] = $directActivityModeType;

        return $this;
    }

    /**
     * Gets activityModeHashes
     *
     * @return int[]|null
     */
    public function getActivityModeHashes()
    {
        return $this->container['activityModeHashes'];
    }

    /**
     * Sets activityModeHashes
     *
     * @param int[]|null $activityModeHashes The hash identifiers for Activity Modes relevant to this entry.
     *
     * @return $this
     */
    public function setActivityModeHashes($activityModeHashes)
    {
        $this->container['activityModeHashes'] = $activityModeHashes;

        return $this;
    }

    /**
     * Gets activityModeTypes
     *
     * @return \Bungie\D1\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]|null
     */
    public function getActivityModeTypes()
    {
        return $this->container['activityModeTypes'];
    }

    /**
     * Sets activityModeTypes
     *
     * @param \Bungie\D1\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]|null $activityModeTypes The activity modes - if any - in enum form. Because we can't seem to escape the enums.
     *
     * @return $this
     */
    public function setActivityModeTypes($activityModeTypes)
    {
        $this->container['activityModeTypes'] = $activityModeTypes;

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

