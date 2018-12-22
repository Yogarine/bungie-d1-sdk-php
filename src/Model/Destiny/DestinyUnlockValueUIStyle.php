<?php
/**
 * DestinyUnlockValueUIStyle
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
 * DestinyUnlockValueUIStyle Class Doc Comment
 *
 * @category Class
 * @description If you&#39;re showing an unlock value in the UI, this is the format in which it should be shown. You&#39;ll have to build your own algorithms on the client side to determine how best to render these options.
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyUnlockValueUIStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_UNLOCK_VALUE_UISTYLE_AUTOMATIC = 0;
    const DESTINY_UNLOCK_VALUE_UISTYLE_FRACTION = 1;
    const DESTINY_UNLOCK_VALUE_UISTYLE_CHECKBOX = 2;
    const DESTINY_UNLOCK_VALUE_UISTYLE_PERCENTAGE = 3;
    const DESTINY_UNLOCK_VALUE_UISTYLE_DATETIME = 4;
    const DESTINY_UNLOCK_VALUE_UISTYLE_FRACTIONFLOAT = 5;
    const DESTINY_UNLOCK_VALUE_UISTYLE_INTEGER = 6;
    const DESTINY_UNLOCK_VALUE_UISTYLE_TIMEDURATION = 7;
    const DESTINY_UNLOCK_VALUE_UISTYLE_HIDDEN = 8;
    const DESTINY_UNLOCK_VALUE_UISTYLE_MULTIPLIER = 9;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_UNLOCK_VALUE_UISTYLE_AUTOMATIC,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_FRACTION,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_CHECKBOX,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_PERCENTAGE,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_DATETIME,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_FRACTIONFLOAT,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_INTEGER,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_TIMEDURATION,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_HIDDEN,
            self::DESTINY_UNLOCK_VALUE_UISTYLE_MULTIPLIER,
        ];
    }
}


