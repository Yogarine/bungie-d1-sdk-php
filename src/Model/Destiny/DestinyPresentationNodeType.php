<?php
/**
 * DestinyPresentationNodeType
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
 * DestinyPresentationNodeType Class Doc Comment
 *
 * @category Class
 * @package  Bungie\D1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationNodeType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_PRESENTATION_NODE_TYPE_DEFAULT = 0;
    const DESTINY_PRESENTATION_NODE_TYPE_CATEGORY = 1;
    const DESTINY_PRESENTATION_NODE_TYPE_COLLECTIBLES = 2;
    const DESTINY_PRESENTATION_NODE_TYPE_RECORDS = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_PRESENTATION_NODE_TYPE_DEFAULT,
            self::DESTINY_PRESENTATION_NODE_TYPE_CATEGORY,
            self::DESTINY_PRESENTATION_NODE_TYPE_COLLECTIBLES,
            self::DESTINY_PRESENTATION_NODE_TYPE_RECORDS,
        ];
    }
}

