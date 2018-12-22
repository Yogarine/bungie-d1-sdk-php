<?php
/**
 * DestinyProgressionStepDisplayEffect
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
 * DestinyProgressionStepDisplayEffect Class Doc Comment
 *
 * @category Class
 * @description If progression is earned, this determines whether the progression shows visual effects on the character or its item - or neither.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProgressionStepDisplayEffect
{
    /**
     * Possible values of this enum
     */
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_NONE = 0;
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_CHARACTER = 1;
    const DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_ITEM = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_NONE,
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_CHARACTER,
            self::DESTINY_PROGRESSION_STEP_DISPLAY_EFFECT_ITEM,
        ];
    }
}


