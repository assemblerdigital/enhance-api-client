<?php
/**
 * DnsRecordKind
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
 * DnsRecordKind Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DnsRecordKind
{
    /**
     * Possible values of this enum
     */
    public const A = 'A';

    public const AAAA = 'AAAA';

    public const CNAME = 'CNAME';

    public const TXT = 'TXT';

    public const SPF = 'SPF';

    public const SRV = 'SRV';

    public const NS = 'NS';

    public const MX = 'MX';

    public const PTR = 'PTR';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A,
            self::AAAA,
            self::CNAME,
            self::TXT,
            self::SPF,
            self::SRV,
            self::NS,
            self::MX,
            self::PTR
        ];
    }
}


