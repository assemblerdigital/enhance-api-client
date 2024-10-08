<?php
/**
 * LicenceStatus
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * orchd
 *
 * orchd API docs
 *
 * The version of the OpenAPI document: 11.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * LicenceStatus Class Doc Comment
 *
 * @category Class
 * @description Enhance Licence status
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LicenceStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'active';

    public const CANCELLED = 'cancelled';

    public const SUSPENDED = 'suspended';

    public const TRIAL = 'trial';

    public const UNPAID = 'unpaid';

    public const UNKNOWN = 'unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::CANCELLED,
            self::SUSPENDED,
            self::TRIAL,
            self::UNPAID,
            self::UNKNOWN
        ];
    }
}


