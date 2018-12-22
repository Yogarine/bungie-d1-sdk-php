<?php
/**
 * ItemBindStatus
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
 * ItemBindStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemBindStatus
{
    /**
     * Possible values of this enum
     */
    const ITEM_BIND_STATUS_NOTBOUND = 0;
    const ITEM_BIND_STATUS_BOUNDTOCHARACTER = 1;
    const ITEM_BIND_STATUS_BOUNDTOACCOUNT = 2;
    const ITEM_BIND_STATUS_BOUNDTOGUILD = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITEM_BIND_STATUS_NOTBOUND,
            self::ITEM_BIND_STATUS_BOUNDTOCHARACTER,
            self::ITEM_BIND_STATUS_BOUNDTOACCOUNT,
            self::ITEM_BIND_STATUS_BOUNDTOGUILD,
        ];
    }
}

