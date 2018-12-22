<?php
/**
 * DestinyCharacterProgressionComponent
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

namespace Bungie\D1\Model\Destiny\Entities\Characters;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * DestinyCharacterProgressionComponent Class Doc Comment
 *
 * @category Class
 * @description This component returns anything that could be considered \&quot;Progression\&quot; on a user: data where the user is gaining levels, reputation, completions, rewards, etc...
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterProgressionComponent implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Entities.Characters.DestinyCharacterProgressionComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'progressions' => 'map[string,\Bungie\D1\Model\Destiny\DestinyProgression]',
        'factions' => 'map[string,\Bungie\D1\Model\Destiny\Progression\DestinyFactionProgression]',
        'milestones' => 'map[string,\Bungie\D1\Model\Destiny\Milestones\DestinyMilestone]',
        'quests' => '\Bungie\D1\Model\Destiny\Quests\DestinyQuestStatus[]',
        'uninstancedItemObjectives' => 'map[string,\Bungie\D1\Model\Destiny\Quests\DestinyObjectiveProgress[]]',
        'checklists' => 'map[string,map[string,bool]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'progressions' => null,
        'factions' => null,
        'milestones' => null,
        'quests' => null,
        'uninstancedItemObjectives' => null,
        'checklists' => null
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
        'progressions' => 'progressions',
        'factions' => 'factions',
        'milestones' => 'milestones',
        'quests' => 'quests',
        'uninstancedItemObjectives' => 'uninstancedItemObjectives',
        'checklists' => 'checklists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'progressions' => 'setProgressions',
        'factions' => 'setFactions',
        'milestones' => 'setMilestones',
        'quests' => 'setQuests',
        'uninstancedItemObjectives' => 'setUninstancedItemObjectives',
        'checklists' => 'setChecklists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'progressions' => 'getProgressions',
        'factions' => 'getFactions',
        'milestones' => 'getMilestones',
        'quests' => 'getQuests',
        'uninstancedItemObjectives' => 'getUninstancedItemObjectives',
        'checklists' => 'getChecklists'
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
        $this->container['progressions'] = isset($data['progressions']) ? $data['progressions'] : null;
        $this->container['factions'] = isset($data['factions']) ? $data['factions'] : null;
        $this->container['milestones'] = isset($data['milestones']) ? $data['milestones'] : null;
        $this->container['quests'] = isset($data['quests']) ? $data['quests'] : null;
        $this->container['uninstancedItemObjectives'] = isset($data['uninstancedItemObjectives']) ? $data['uninstancedItemObjectives'] : null;
        $this->container['checklists'] = isset($data['checklists']) ? $data['checklists'] : null;
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
     * Gets progressions
     *
     * @return map[string,\Bungie\D1\Model\Destiny\DestinyProgression]|null
     */
    public function getProgressions()
    {
        return $this->container['progressions'];
    }

    /**
     * Sets progressions
     *
     * @param map[string,\Bungie\D1\Model\Destiny\DestinyProgression]|null $progressions A Dictionary of all known progressions for the Character, keyed by the Progression's hash.  Not all progressions have user-facing data, but those who do will have that data contained in the DestinyProgressionDefinition.
     *
     * @return $this
     */
    public function setProgressions($progressions)
    {
        $this->container['progressions'] = $progressions;

        return $this;
    }

    /**
     * Gets factions
     *
     * @return map[string,\Bungie\D1\Model\Destiny\Progression\DestinyFactionProgression]|null
     */
    public function getFactions()
    {
        return $this->container['factions'];
    }

    /**
     * Sets factions
     *
     * @param map[string,\Bungie\D1\Model\Destiny\Progression\DestinyFactionProgression]|null $factions A dictionary of all known Factions, keyed by the Faction's hash. It contains data about this character's status with the faction.
     *
     * @return $this
     */
    public function setFactions($factions)
    {
        $this->container['factions'] = $factions;

        return $this;
    }

    /**
     * Gets milestones
     *
     * @return map[string,\Bungie\D1\Model\Destiny\Milestones\DestinyMilestone]|null
     */
    public function getMilestones()
    {
        return $this->container['milestones'];
    }

    /**
     * Sets milestones
     *
     * @param map[string,\Bungie\D1\Model\Destiny\Milestones\DestinyMilestone]|null $milestones Milestones are related to the simple progressions shown in the game, but return additional and hopefully helpful information for users about the specifics of the Milestone's status.
     *
     * @return $this
     */
    public function setMilestones($milestones)
    {
        $this->container['milestones'] = $milestones;

        return $this;
    }

    /**
     * Gets quests
     *
     * @return \Bungie\D1\Model\Destiny\Quests\DestinyQuestStatus[]|null
     */
    public function getQuests()
    {
        return $this->container['quests'];
    }

    /**
     * Sets quests
     *
     * @param \Bungie\D1\Model\Destiny\Quests\DestinyQuestStatus[]|null $quests If the user has any active quests, the quests' statuses will be returned here.  Note that quests have been largely supplanted by Milestones, but that doesn't mean that they won't make a comeback independent of milestones at some point.
     *
     * @return $this
     */
    public function setQuests($quests)
    {
        $this->container['quests'] = $quests;

        return $this;
    }

    /**
     * Gets uninstancedItemObjectives
     *
     * @return map[string,\Bungie\D1\Model\Destiny\Quests\DestinyObjectiveProgress[]]|null
     */
    public function getUninstancedItemObjectives()
    {
        return $this->container['uninstancedItemObjectives'];
    }

    /**
     * Sets uninstancedItemObjectives
     *
     * @param map[string,\Bungie\D1\Model\Destiny\Quests\DestinyObjectiveProgress[]]|null $uninstancedItemObjectives Sometimes, you have items in your inventory that don't have instances, but still have Objective information. This provides you that objective information for uninstanced items.   This dictionary is keyed by the item's hash: which you can use to look up the name and description for the overall task(s) implied by the objective. The value is the list of objectives for this item, and their statuses.
     *
     * @return $this
     */
    public function setUninstancedItemObjectives($uninstancedItemObjectives)
    {
        $this->container['uninstancedItemObjectives'] = $uninstancedItemObjectives;

        return $this;
    }

    /**
     * Gets checklists
     *
     * @return map[string,map[string,bool]]|null
     */
    public function getChecklists()
    {
        return $this->container['checklists'];
    }

    /**
     * Sets checklists
     *
     * @param map[string,map[string,bool]]|null $checklists The set of checklists that can be examined for this specific character, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)  For each checklist returned, its value is itself a Dictionary keyed by the checklist's hash identifier with the value being a boolean indicating if it's been discovered yet.
     *
     * @return $this
     */
    public function setChecklists($checklists)
    {
        $this->container['checklists'] = $checklists;

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


