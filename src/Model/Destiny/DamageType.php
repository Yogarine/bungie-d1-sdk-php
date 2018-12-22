<?php
/**
 * DamageType
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
 * DamageType Class Doc Comment
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DamageType
{
    /**
     * Possible values of this enum
     */
    const DAMAGE_TYPE_NONE = 0;
    const DAMAGE_TYPE_KINETIC = 1;
    const DAMAGE_TYPE_ARC = 2;
    const DAMAGE_TYPE_THERMAL = 3;
    const DAMAGE_TYPE_VOID = 4;
    const DAMAGE_TYPE_RAID = 5;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAMAGE_TYPE_NONE,
            self::DAMAGE_TYPE_KINETIC,
            self::DAMAGE_TYPE_ARC,
            self::DAMAGE_TYPE_THERMAL,
            self::DAMAGE_TYPE_VOID,
            self::DAMAGE_TYPE_RAID,
        ];
    }
}


