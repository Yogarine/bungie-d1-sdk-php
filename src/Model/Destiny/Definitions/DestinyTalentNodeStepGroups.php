<?php
/**
 * DestinyTalentNodeStepGroups
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
 * DestinyTalentNodeStepGroups Class Doc Comment
 *
 * @category Class
 * @description These properties are an attempt to categorize talent node steps by certain common properties. See the related enumerations for the type of properties being categorized.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeStepGroups implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyTalentNodeStepGroups';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'weaponPerformance' => '\Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepWeaponPerformances',
        'impactEffects' => '\Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepImpactEffects',
        'guardianAttributes' => '\Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepGuardianAttributes',
        'lightAbilities' => '\Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepLightAbilities',
        'damageTypes' => '\Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepDamageTypes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'weaponPerformance' => null,
        'impactEffects' => null,
        'guardianAttributes' => null,
        'lightAbilities' => null,
        'damageTypes' => null
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
        'weaponPerformance' => 'weaponPerformance',
        'impactEffects' => 'impactEffects',
        'guardianAttributes' => 'guardianAttributes',
        'lightAbilities' => 'lightAbilities',
        'damageTypes' => 'damageTypes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'weaponPerformance' => 'setWeaponPerformance',
        'impactEffects' => 'setImpactEffects',
        'guardianAttributes' => 'setGuardianAttributes',
        'lightAbilities' => 'setLightAbilities',
        'damageTypes' => 'setDamageTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'weaponPerformance' => 'getWeaponPerformance',
        'impactEffects' => 'getImpactEffects',
        'guardianAttributes' => 'getGuardianAttributes',
        'lightAbilities' => 'getLightAbilities',
        'damageTypes' => 'getDamageTypes'
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
        $this->container['weaponPerformance'] = isset($data['weaponPerformance']) ? $data['weaponPerformance'] : null;
        $this->container['impactEffects'] = isset($data['impactEffects']) ? $data['impactEffects'] : null;
        $this->container['guardianAttributes'] = isset($data['guardianAttributes']) ? $data['guardianAttributes'] : null;
        $this->container['lightAbilities'] = isset($data['lightAbilities']) ? $data['lightAbilities'] : null;
        $this->container['damageTypes'] = isset($data['damageTypes']) ? $data['damageTypes'] : null;
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
     * Gets weaponPerformance
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepWeaponPerformances|null
     */
    public function getWeaponPerformance()
    {
        return $this->container['weaponPerformance'];
    }

    /**
     * Sets weaponPerformance
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepWeaponPerformances|null $weaponPerformance weaponPerformance
     *
     * @return $this
     */
    public function setWeaponPerformance($weaponPerformance)
    {
        $this->container['weaponPerformance'] = $weaponPerformance;

        return $this;
    }

    /**
     * Gets impactEffects
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepImpactEffects|null
     */
    public function getImpactEffects()
    {
        return $this->container['impactEffects'];
    }

    /**
     * Sets impactEffects
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepImpactEffects|null $impactEffects impactEffects
     *
     * @return $this
     */
    public function setImpactEffects($impactEffects)
    {
        $this->container['impactEffects'] = $impactEffects;

        return $this;
    }

    /**
     * Gets guardianAttributes
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepGuardianAttributes|null
     */
    public function getGuardianAttributes()
    {
        return $this->container['guardianAttributes'];
    }

    /**
     * Sets guardianAttributes
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepGuardianAttributes|null $guardianAttributes guardianAttributes
     *
     * @return $this
     */
    public function setGuardianAttributes($guardianAttributes)
    {
        $this->container['guardianAttributes'] = $guardianAttributes;

        return $this;
    }

    /**
     * Gets lightAbilities
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepLightAbilities|null
     */
    public function getLightAbilities()
    {
        return $this->container['lightAbilities'];
    }

    /**
     * Sets lightAbilities
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepLightAbilities|null $lightAbilities lightAbilities
     *
     * @return $this
     */
    public function setLightAbilities($lightAbilities)
    {
        $this->container['lightAbilities'] = $lightAbilities;

        return $this;
    }

    /**
     * Gets damageTypes
     *
     * @return \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepDamageTypes|null
     */
    public function getDamageTypes()
    {
        return $this->container['damageTypes'];
    }

    /**
     * Sets damageTypes
     *
     * @param \Bungie\D1\Model\Destiny\Definitions\DestinyTalentNodeStepDamageTypes|null $damageTypes damageTypes
     *
     * @return $this
     */
    public function setDamageTypes($damageTypes)
    {
        $this->container['damageTypes'] = $damageTypes;

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

