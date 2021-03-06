<?php
/**
 * DestinyCharacterResponse
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

namespace Bungie\D1\Model\Destiny\Responses;

use \ArrayAccess;
use \Bungie\D1\ObjectSerializer;

/**
 * DestinyCharacterResponse Class Doc Comment
 *
 * @category Class
 * @description The response contract for GetDestinyCharacter, with components that can be returned for character and item-level data.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyCharacterResponse implements \Bungie\D1\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyCharacterResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'inventory' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent',
        'character' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterComponent',
        'progressions' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterProgressionComponent',
        'renderData' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRenderComponent',
        'activities' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterActivitiesComponent',
        'equipment' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent',
        'kiosks' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyKiosksComponent',
        'plugSets' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyPlugSetsComponent',
        'presentationNodes' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyPresentationNodesComponent',
        'records' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRecordsComponent',
        'collectibles' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCollectiblesComponent',
        'itemComponents' => '\Bungie\D1\Model\DestinyItemComponentSetOfint64',
        'uninstancedItemComponents' => '\Bungie\D1\Model\DestinyBaseItemComponentSetOfuint32',
        'currencyLookups' => '\Bungie\D1\Model\SingleComponentResponseOfDestinyCurrenciesComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'inventory' => null,
        'character' => null,
        'progressions' => null,
        'renderData' => null,
        'activities' => null,
        'equipment' => null,
        'kiosks' => null,
        'plugSets' => null,
        'presentationNodes' => null,
        'records' => null,
        'collectibles' => null,
        'itemComponents' => null,
        'uninstancedItemComponents' => null,
        'currencyLookups' => null
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
        'inventory' => 'inventory',
        'character' => 'character',
        'progressions' => 'progressions',
        'renderData' => 'renderData',
        'activities' => 'activities',
        'equipment' => 'equipment',
        'kiosks' => 'kiosks',
        'plugSets' => 'plugSets',
        'presentationNodes' => 'presentationNodes',
        'records' => 'records',
        'collectibles' => 'collectibles',
        'itemComponents' => 'itemComponents',
        'uninstancedItemComponents' => 'uninstancedItemComponents',
        'currencyLookups' => 'currencyLookups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory' => 'setInventory',
        'character' => 'setCharacter',
        'progressions' => 'setProgressions',
        'renderData' => 'setRenderData',
        'activities' => 'setActivities',
        'equipment' => 'setEquipment',
        'kiosks' => 'setKiosks',
        'plugSets' => 'setPlugSets',
        'presentationNodes' => 'setPresentationNodes',
        'records' => 'setRecords',
        'collectibles' => 'setCollectibles',
        'itemComponents' => 'setItemComponents',
        'uninstancedItemComponents' => 'setUninstancedItemComponents',
        'currencyLookups' => 'setCurrencyLookups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory' => 'getInventory',
        'character' => 'getCharacter',
        'progressions' => 'getProgressions',
        'renderData' => 'getRenderData',
        'activities' => 'getActivities',
        'equipment' => 'getEquipment',
        'kiosks' => 'getKiosks',
        'plugSets' => 'getPlugSets',
        'presentationNodes' => 'getPresentationNodes',
        'records' => 'getRecords',
        'collectibles' => 'getCollectibles',
        'itemComponents' => 'getItemComponents',
        'uninstancedItemComponents' => 'getUninstancedItemComponents',
        'currencyLookups' => 'getCurrencyLookups'
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
        $this->container['inventory'] = isset($data['inventory']) ? $data['inventory'] : null;
        $this->container['character'] = isset($data['character']) ? $data['character'] : null;
        $this->container['progressions'] = isset($data['progressions']) ? $data['progressions'] : null;
        $this->container['renderData'] = isset($data['renderData']) ? $data['renderData'] : null;
        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['equipment'] = isset($data['equipment']) ? $data['equipment'] : null;
        $this->container['kiosks'] = isset($data['kiosks']) ? $data['kiosks'] : null;
        $this->container['plugSets'] = isset($data['plugSets']) ? $data['plugSets'] : null;
        $this->container['presentationNodes'] = isset($data['presentationNodes']) ? $data['presentationNodes'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['collectibles'] = isset($data['collectibles']) ? $data['collectibles'] : null;
        $this->container['itemComponents'] = isset($data['itemComponents']) ? $data['itemComponents'] : null;
        $this->container['uninstancedItemComponents'] = isset($data['uninstancedItemComponents']) ? $data['uninstancedItemComponents'] : null;
        $this->container['currencyLookups'] = isset($data['currencyLookups']) ? $data['currencyLookups'] : null;
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
     * Gets inventory
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent|null
     */
    public function getInventory()
    {
        return $this->container['inventory'];
    }

    /**
     * Sets inventory
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent|null $inventory The character-level non-equipped inventory items.  COMPONENT TYPE: CharacterInventories
     *
     * @return $this
     */
    public function setInventory($inventory)
    {
        $this->container['inventory'] = $inventory;

        return $this;
    }

    /**
     * Gets character
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterComponent|null
     */
    public function getCharacter()
    {
        return $this->container['character'];
    }

    /**
     * Sets character
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterComponent|null $character Base information about the character in question.  COMPONENT TYPE: Characters
     *
     * @return $this
     */
    public function setCharacter($character)
    {
        $this->container['character'] = $character;

        return $this;
    }

    /**
     * Gets progressions
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterProgressionComponent|null
     */
    public function getProgressions()
    {
        return $this->container['progressions'];
    }

    /**
     * Sets progressions
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterProgressionComponent|null $progressions Character progression data, including Milestones.  COMPONENT TYPE: CharacterProgressions
     *
     * @return $this
     */
    public function setProgressions($progressions)
    {
        $this->container['progressions'] = $progressions;

        return $this;
    }

    /**
     * Gets renderData
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRenderComponent|null
     */
    public function getRenderData()
    {
        return $this->container['renderData'];
    }

    /**
     * Sets renderData
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRenderComponent|null $renderData Character rendering data - a minimal set of information about equipment and dyes used for rendering.  COMPONENT TYPE: CharacterRenderData
     *
     * @return $this
     */
    public function setRenderData($renderData)
    {
        $this->container['renderData'] = $renderData;

        return $this;
    }

    /**
     * Gets activities
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterActivitiesComponent|null
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterActivitiesComponent|null $activities Activity data - info about current activities available to the player.  COMPONENT TYPE: CharacterActivities
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets equipment
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent|null
     */
    public function getEquipment()
    {
        return $this->container['equipment'];
    }

    /**
     * Sets equipment
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyInventoryComponent|null $equipment Equipped items on the character.  COMPONENT TYPE: CharacterEquipment
     *
     * @return $this
     */
    public function setEquipment($equipment)
    {
        $this->container['equipment'] = $equipment;

        return $this;
    }

    /**
     * Gets kiosks
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyKiosksComponent|null
     */
    public function getKiosks()
    {
        return $this->container['kiosks'];
    }

    /**
     * Sets kiosks
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyKiosksComponent|null $kiosks Items available from Kiosks that are available to this specific character.   COMPONENT TYPE: Kiosks
     *
     * @return $this
     */
    public function setKiosks($kiosks)
    {
        $this->container['kiosks'] = $kiosks;

        return $this;
    }

    /**
     * Gets plugSets
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyPlugSetsComponent|null
     */
    public function getPlugSets()
    {
        return $this->container['plugSets'];
    }

    /**
     * Sets plugSets
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyPlugSetsComponent|null $plugSets When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are scoped to this character.  This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.  COMPONENT TYPE: ItemSockets
     *
     * @return $this
     */
    public function setPlugSets($plugSets)
    {
        $this->container['plugSets'] = $plugSets;

        return $this;
    }

    /**
     * Gets presentationNodes
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyPresentationNodesComponent|null
     */
    public function getPresentationNodes()
    {
        return $this->container['presentationNodes'];
    }

    /**
     * Sets presentationNodes
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyPresentationNodesComponent|null $presentationNodes COMPONENT TYPE: PresentationNodes
     *
     * @return $this
     */
    public function setPresentationNodes($presentationNodes)
    {
        $this->container['presentationNodes'] = $presentationNodes;

        return $this;
    }

    /**
     * Gets records
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRecordsComponent|null
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCharacterRecordsComponent|null $records COMPONENT TYPE: Records
     *
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

        return $this;
    }

    /**
     * Gets collectibles
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCollectiblesComponent|null
     */
    public function getCollectibles()
    {
        return $this->container['collectibles'];
    }

    /**
     * Sets collectibles
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCollectiblesComponent|null $collectibles COMPONENT TYPE: Collectibles
     *
     * @return $this
     */
    public function setCollectibles($collectibles)
    {
        $this->container['collectibles'] = $collectibles;

        return $this;
    }

    /**
     * Gets itemComponents
     *
     * @return \Bungie\D1\Model\DestinyItemComponentSetOfint64|null
     */
    public function getItemComponents()
    {
        return $this->container['itemComponents'];
    }

    /**
     * Sets itemComponents
     *
     * @param \Bungie\D1\Model\DestinyItemComponentSetOfint64|null $itemComponents The set of components belonging to the player's instanced items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]
     *
     * @return $this
     */
    public function setItemComponents($itemComponents)
    {
        $this->container['itemComponents'] = $itemComponents;

        return $this;
    }

    /**
     * Gets uninstancedItemComponents
     *
     * @return \Bungie\D1\Model\DestinyBaseItemComponentSetOfuint32|null
     */
    public function getUninstancedItemComponents()
    {
        return $this->container['uninstancedItemComponents'];
    }

    /**
     * Sets uninstancedItemComponents
     *
     * @param \Bungie\D1\Model\DestinyBaseItemComponentSetOfuint32|null $uninstancedItemComponents The set of components belonging to the player's UNinstanced items. Because apparently now those too can have information relevant to the character's state.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]
     *
     * @return $this
     */
    public function setUninstancedItemComponents($uninstancedItemComponents)
    {
        $this->container['uninstancedItemComponents'] = $uninstancedItemComponents;

        return $this;
    }

    /**
     * Gets currencyLookups
     *
     * @return \Bungie\D1\Model\SingleComponentResponseOfDestinyCurrenciesComponent|null
     */
    public function getCurrencyLookups()
    {
        return $this->container['currencyLookups'];
    }

    /**
     * Sets currencyLookups
     *
     * @param \Bungie\D1\Model\SingleComponentResponseOfDestinyCurrenciesComponent|null $currencyLookups A \"lookup\" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups
     *
     * @return $this
     */
    public function setCurrencyLookups($currencyLookups)
    {
        $this->container['currencyLookups'] = $currencyLookups;

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


