<?php
/**
 * ActivityKind
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
 * ActivityKind Class Doc Comment
 *
 * @category Class
 * @description Different activities that happen in orchd. There will be a lot of changes to the values of this enum as time goes by, consider this non-exhausive and be graceful with unknown values.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActivityKind
{
    /**
     * Possible values of this enum
     */
    public const ADDED = 'added';

    public const REMOVED = 'removed';

    public const CLONED = 'cloned';

    public const IMPORTED = 'imported';

    public const BACKED_UP = 'backedUp';

    public const ERROR_RAISED = 'errorRaised';

    public const BACKUP_ERROR = 'backupError';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADDED,
            self::REMOVED,
            self::CLONED,
            self::IMPORTED,
            self::BACKED_UP,
            self::ERROR_RAISED,
            self::BACKUP_ERROR
        ];
    }
}


