<?php
/**
 * DestinyStatCategory
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
 * DestinyStatCategory Class Doc Comment
 *
 * @category Class
 * @description At last, stats have categories. Use this for whatever purpose you might wish.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyStatCategory
{
    /**
     * Possible values of this enum
     */
    const DESTINY_STAT_CATEGORY_GAMEPLAY = 0;
    const DESTINY_STAT_CATEGORY_WEAPON = 1;
    const DESTINY_STAT_CATEGORY_DEFENSE = 2;
    const DESTINY_STAT_CATEGORY_PRIMARY = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_STAT_CATEGORY_GAMEPLAY,
            self::DESTINY_STAT_CATEGORY_WEAPON,
            self::DESTINY_STAT_CATEGORY_DEFENSE,
            self::DESTINY_STAT_CATEGORY_PRIMARY,
        ];
    }
}


