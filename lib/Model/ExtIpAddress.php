<?php
/**
 * ExtIpAddress
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Jelastic API docs
 *
 * lets developers to automate a set of actions required for application lifecycle and extend our platform functionality by combining with other services. Using our API you can programmatically create environments, deploy apps and perform other tasks that could be earlier accomplished only via Jelastic dashboard but not limited to them.  Jelastic API follows REST principles. REST API determines a set of functions which can be requested by a developer, who then receives a response. The interaction is performed via HTTP protocol. The advantage of such method is a wide extension of the HTTP protocol. That's why REST API can be used from almost any programming language.
 *
 * The version of the OpenAPI document: 8.0.2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
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
 * ExtIpAddress Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ExtIpAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExtIpAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appid' => 'string',
        'domain' => 'string',
        'ipAddress' => 'string',
        'isBusy' => 'bool',
        'regionUniqueNames' => 'object[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appid' => null,
        'domain' => null,
        'ipAddress' => null,
        'isBusy' => null,
        'regionUniqueNames' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'appid' => false,
		'domain' => false,
		'ipAddress' => false,
		'isBusy' => false,
		'regionUniqueNames' => false,
		'type' => false
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
        'appid' => 'appid',
        'domain' => 'domain',
        'ipAddress' => 'ipAddress',
        'isBusy' => 'isBusy',
        'regionUniqueNames' => 'regionUniqueNames',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appid' => 'setAppid',
        'domain' => 'setDomain',
        'ipAddress' => 'setIpAddress',
        'isBusy' => 'setIsBusy',
        'regionUniqueNames' => 'setRegionUniqueNames',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appid' => 'getAppid',
        'domain' => 'getDomain',
        'ipAddress' => 'getIpAddress',
        'isBusy' => 'getIsBusy',
        'regionUniqueNames' => 'getRegionUniqueNames',
        'type' => 'getType'
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

    public const TYPE_IPV4_0 = 'IPV4(0)';
    public const TYPE_IPV6_1 = 'IPV6(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IPV4_0,
            self::TYPE_IPV6_1,
        ];
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
        $this->setIfExists('appid', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('ipAddress', $data ?? [], null);
        $this->setIfExists('isBusy', $data ?? [], null);
        $this->setIfExists('regionUniqueNames', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
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

        if (!is_null($this->container['appid']) && (mb_strlen($this->container['appid']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'appid', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['appid']) && !preg_match("/(.*){0,2147483647}/", $this->container['appid'])) {
            $invalidProperties[] = "invalid value for 'appid', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['domain']) && !preg_match("/(.*){0,2147483647}/", $this->container['domain'])) {
            $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['ipAddress']) && !preg_match("/(.*){0,2147483647}/", $this->container['ipAddress'])) {
            $invalidProperties[] = "invalid value for 'ipAddress', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['regionUniqueNames']) && (count($this->container['regionUniqueNames']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'regionUniqueNames', number of items must be less than or equal to 2147483647.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets appid
     *
     * @return string|null
     */
    public function getAppid()
    {
        return $this->container['appid'];
    }

    /**
     * Sets appid
     *
     * @param string|null $appid appid
     *
     * @return self
     */
    public function setAppid($appid)
    {
        if (!is_null($appid) && (mb_strlen($appid) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $appid when calling ExtIpAddress., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($appid) && (!preg_match("/(.*){0,2147483647}/", $appid))) {
            throw new \InvalidArgumentException("invalid value for \$appid when calling ExtIpAddress., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($appid)) {
            throw new \InvalidArgumentException('non-nullable appid cannot be null');
        }

        $this->container['appid'] = $appid;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (!is_null($domain) && (mb_strlen($domain) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling ExtIpAddress., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($domain) && (!preg_match("/(.*){0,2147483647}/", $domain))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling ExtIpAddress., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets ipAddress
     *
     * @return string|null
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string|null $ipAddress ipAddress
     *
     * @return self
     */
    public function setIpAddress($ipAddress)
    {
        if (!is_null($ipAddress) && (mb_strlen($ipAddress) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $ipAddress when calling ExtIpAddress., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($ipAddress) && (!preg_match("/(.*){0,2147483647}/", $ipAddress))) {
            throw new \InvalidArgumentException("invalid value for \$ipAddress when calling ExtIpAddress., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($ipAddress)) {
            throw new \InvalidArgumentException('non-nullable ipAddress cannot be null');
        }

        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets isBusy
     *
     * @return bool|null
     */
    public function getIsBusy()
    {
        return $this->container['isBusy'];
    }

    /**
     * Sets isBusy
     *
     * @param bool|null $isBusy isBusy
     *
     * @return self
     */
    public function setIsBusy($isBusy)
    {

        if (is_null($isBusy)) {
            throw new \InvalidArgumentException('non-nullable isBusy cannot be null');
        }

        $this->container['isBusy'] = $isBusy;

        return $this;
    }

    /**
     * Gets regionUniqueNames
     *
     * @return object[]|null
     */
    public function getRegionUniqueNames()
    {
        return $this->container['regionUniqueNames'];
    }

    /**
     * Sets regionUniqueNames
     *
     * @param object[]|null $regionUniqueNames regionUniqueNames
     *
     * @return self
     */
    public function setRegionUniqueNames($regionUniqueNames)
    {

        if (!is_null($regionUniqueNames) && (count($regionUniqueNames) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $regionUniqueNames when calling ExtIpAddress., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($regionUniqueNames)) {
            throw new \InvalidArgumentException('non-nullable regionUniqueNames cannot be null');
        }

        $this->container['regionUniqueNames'] = $regionUniqueNames;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }

        $this->container['type'] = $type;

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

