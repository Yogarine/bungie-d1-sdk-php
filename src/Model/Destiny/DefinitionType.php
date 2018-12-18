<?php
/**
 * DefinitionType
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

namespace Bungie\D1\Model\Destiny;
use \Bungie\D1\ObjectSerializer;

/**
 * DefinitionType Class Doc Comment
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DefinitionType
{
    /**
     * Possible values of this enum
     */
    const DEFINITION_TYPE_NONE = 0;
    const DEFINITION_TYPE_ACTIVITY = 1;
    const DEFINITION_TYPE_ACTIVITYTYPE = 2;
    const DEFINITION_TYPE_CLASS = 3;
    const DEFINITION_TYPE_GENDER = 4;
    const DEFINITION_TYPE_INVENTORYBUCKET = 5;
    const DEFINITION_TYPE_INVENTORYITEM = 6;
    const DEFINITION_TYPE_PROGRESSION = 7;
    const DEFINITION_TYPE_RACE = 8;
    const DEFINITION_TYPE_STAT = 9;
    const DEFINITION_TYPE_TALENTGRID = 10;
    const DEFINITION_TYPE_STATGROUP = 11;
    const DEFINITION_TYPE_UNLOCKFLAG = 12;
    const DEFINITION_TYPE_VENDOR = 13;
    const DEFINITION_TYPE_DESTINATION = 14;
    const DEFINITION_TYPE_PLACE = 15;
    const DEFINITION_TYPE_DIRECTORBOOK = 16;
    const DEFINITION_TYPE_MATERIALREQUIREMENT = 17;
    const DEFINITION_TYPE_SANDBOXPERK = 18;
    const DEFINITION_TYPE_ARTDYE = 19;
    const DEFINITION_TYPE_ARTDYECHANNEL = 20;
    const DEFINITION_TYPE_ACTIVITYBUNDLE = 21;
    const DEFINITION_TYPE_GEARASSET = 22;
    const DEFINITION_TYPE_GRIMOIRECARD = 23;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFINITION_TYPE_NONE,
            self::DEFINITION_TYPE_ACTIVITY,
            self::DEFINITION_TYPE_ACTIVITYTYPE,
            self::DEFINITION_TYPE_CLASS,
            self::DEFINITION_TYPE_GENDER,
            self::DEFINITION_TYPE_INVENTORYBUCKET,
            self::DEFINITION_TYPE_INVENTORYITEM,
            self::DEFINITION_TYPE_PROGRESSION,
            self::DEFINITION_TYPE_RACE,
            self::DEFINITION_TYPE_STAT,
            self::DEFINITION_TYPE_TALENTGRID,
            self::DEFINITION_TYPE_STATGROUP,
            self::DEFINITION_TYPE_UNLOCKFLAG,
            self::DEFINITION_TYPE_VENDOR,
            self::DEFINITION_TYPE_DESTINATION,
            self::DEFINITION_TYPE_PLACE,
            self::DEFINITION_TYPE_DIRECTORBOOK,
            self::DEFINITION_TYPE_MATERIALREQUIREMENT,
            self::DEFINITION_TYPE_SANDBOXPERK,
            self::DEFINITION_TYPE_ARTDYE,
            self::DEFINITION_TYPE_ARTDYECHANNEL,
            self::DEFINITION_TYPE_ACTIVITYBUNDLE,
            self::DEFINITION_TYPE_GEARASSET,
            self::DEFINITION_TYPE_GRIMOIRECARD,
        ];
    }
}

