<?php
/**
 * BackupRoleInfo
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BackupRoleInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BackupRoleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BackupRoleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state' => '\OpenAPI\Client\Model\ServerRoleState',
        'usage' => 'int',
        'snapshots_count' => 'int',
        'last24h_snapshots_count' => 'int',
        'bkupd' => '\OpenAPI\Client\Model\ServiceInfo',
        'websites_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state' => null,
        'usage' => null,
        'snapshots_count' => null,
        'last24h_snapshots_count' => null,
        'bkupd' => null,
        'websites_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'state' => false,
        'usage' => false,
        'snapshots_count' => false,
        'last24h_snapshots_count' => false,
        'bkupd' => false,
        'websites_count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'state' => 'state',
        'usage' => 'usage',
        'snapshots_count' => 'snapshotsCount',
        'last24h_snapshots_count' => 'last24hSnapshotsCount',
        'bkupd' => 'bkupd',
        'websites_count' => 'websitesCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state' => 'setState',
        'usage' => 'setUsage',
        'snapshots_count' => 'setSnapshotsCount',
        'last24h_snapshots_count' => 'setLast24hSnapshotsCount',
        'bkupd' => 'setBkupd',
        'websites_count' => 'setWebsitesCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state' => 'getState',
        'usage' => 'getUsage',
        'snapshots_count' => 'getSnapshotsCount',
        'last24h_snapshots_count' => 'getLast24hSnapshotsCount',
        'bkupd' => 'getBkupd',
        'websites_count' => 'getWebsitesCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('snapshots_count', $data ?? [], null);
        $this->setIfExists('last24h_snapshots_count', $data ?? [], null);
        $this->setIfExists('bkupd', $data ?? [], null);
        $this->setIfExists('websites_count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['usage'] === null) {
            $invalidProperties[] = "'usage' can't be null";
        }
        if ($this->container['snapshots_count'] === null) {
            $invalidProperties[] = "'snapshots_count' can't be null";
        }
        if ($this->container['last24h_snapshots_count'] === null) {
            $invalidProperties[] = "'last24h_snapshots_count' can't be null";
        }
        if ($this->container['bkupd'] === null) {
            $invalidProperties[] = "'bkupd' can't be null";
        }
        if ($this->container['websites_count'] === null) {
            $invalidProperties[] = "'websites_count' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets state
     *
     * @return \OpenAPI\Client\Model\ServerRoleState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \OpenAPI\Client\Model\ServerRoleState $state state
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            throw new \InvalidArgumentException('non-nullable usage cannot be null');
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets snapshots_count
     *
     * @return int
     */
    public function getSnapshotsCount()
    {
        return $this->container['snapshots_count'];
    }

    /**
     * Sets snapshots_count
     *
     * @param int $snapshots_count snapshots_count
     *
     * @return self
     */
    public function setSnapshotsCount($snapshots_count)
    {
        if (is_null($snapshots_count)) {
            throw new \InvalidArgumentException('non-nullable snapshots_count cannot be null');
        }
        $this->container['snapshots_count'] = $snapshots_count;

        return $this;
    }

    /**
     * Gets last24h_snapshots_count
     *
     * @return int
     */
    public function getLast24hSnapshotsCount()
    {
        return $this->container['last24h_snapshots_count'];
    }

    /**
     * Sets last24h_snapshots_count
     *
     * @param int $last24h_snapshots_count last24h_snapshots_count
     *
     * @return self
     */
    public function setLast24hSnapshotsCount($last24h_snapshots_count)
    {
        if (is_null($last24h_snapshots_count)) {
            throw new \InvalidArgumentException('non-nullable last24h_snapshots_count cannot be null');
        }
        $this->container['last24h_snapshots_count'] = $last24h_snapshots_count;

        return $this;
    }

    /**
     * Gets bkupd
     *
     * @return \OpenAPI\Client\Model\ServiceInfo
     */
    public function getBkupd()
    {
        return $this->container['bkupd'];
    }

    /**
     * Sets bkupd
     *
     * @param \OpenAPI\Client\Model\ServiceInfo $bkupd bkupd
     *
     * @return self
     */
    public function setBkupd($bkupd)
    {
        if (is_null($bkupd)) {
            throw new \InvalidArgumentException('non-nullable bkupd cannot be null');
        }
        $this->container['bkupd'] = $bkupd;

        return $this;
    }

    /**
     * Gets websites_count
     *
     * @return int
     */
    public function getWebsitesCount()
    {
        return $this->container['websites_count'];
    }

    /**
     * Sets websites_count
     *
     * @param int $websites_count The number of websites whose backups are assigned to be on this backup role.
     *
     * @return self
     */
    public function setWebsitesCount($websites_count)
    {
        if (is_null($websites_count)) {
            throw new \InvalidArgumentException('non-nullable websites_count cannot be null');
        }
        $this->container['websites_count'] = $websites_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


