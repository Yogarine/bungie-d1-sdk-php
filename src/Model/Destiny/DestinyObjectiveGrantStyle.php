<?php
/**
 * DestinyObjectiveGrantStyle
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
 * DestinyObjectiveGrantStyle Class Doc Comment
 *
 * @category Class
 * @description Some Objectives provide perks, generally as part of providing some kind of interesting modifier for a Challenge or Quest. This indicates when the Perk is granted.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyObjectiveGrantStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_OBJECTIVE_GRANT_STYLE_WHENINCOMPLETE = 0;
    const DESTINY_OBJECTIVE_GRANT_STYLE_WHENCOMPLETE = 1;
    const DESTINY_OBJECTIVE_GRANT_STYLE_ALWAYS = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_OBJECTIVE_GRANT_STYLE_WHENINCOMPLETE,
            self::DESTINY_OBJECTIVE_GRANT_STYLE_WHENCOMPLETE,
            self::DESTINY_OBJECTIVE_GRANT_STYLE_ALWAYS,
        ];
    }
}


