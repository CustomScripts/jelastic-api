<?php
/**
 * VSVersions
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
 * VSVersions Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VSVersions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VSVersions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentVersion' => 'string',
        'fastCloneSupported' => 'bool',
        'isDefault' => 'bool',
        'vsVersion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agentVersion' => null,
        'fastCloneSupported' => null,
        'isDefault' => null,
        'vsVersion' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'agentVersion' => false,
		'fastCloneSupported' => false,
		'isDefault' => false,
		'vsVersion' => false
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
        'agentVersion' => 'agentVersion',
        'fastCloneSupported' => 'fastCloneSupported',
        'isDefault' => 'isDefault',
        'vsVersion' => 'vsVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentVersion' => 'setAgentVersion',
        'fastCloneSupported' => 'setFastCloneSupported',
        'isDefault' => 'setIsDefault',
        'vsVersion' => 'setVsVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentVersion' => 'getAgentVersion',
        'fastCloneSupported' => 'getFastCloneSupported',
        'isDefault' => 'getIsDefault',
        'vsVersion' => 'getVsVersion'
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
        $this->setIfExists('agentVersion', $data ?? [], null);
        $this->setIfExists('fastCloneSupported', $data ?? [], null);
        $this->setIfExists('isDefault', $data ?? [], null);
        $this->setIfExists('vsVersion', $data ?? [], null);
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

        if (!is_null($this->container['agentVersion']) && (mb_strlen($this->container['agentVersion']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'agentVersion', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['agentVersion']) && !preg_match("/(.*){0,2147483647}/", $this->container['agentVersion'])) {
            $invalidProperties[] = "invalid value for 'agentVersion', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['vsVersion']) && (mb_strlen($this->container['vsVersion']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'vsVersion', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['vsVersion']) && !preg_match("/(.*){0,2147483647}/", $this->container['vsVersion'])) {
            $invalidProperties[] = "invalid value for 'vsVersion', must be conform to the pattern /(.*){0,2147483647}/.";
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
     * Gets agentVersion
     *
     * @return string|null
     */
    public function getAgentVersion()
    {
        return $this->container['agentVersion'];
    }

    /**
     * Sets agentVersion
     *
     * @param string|null $agentVersion agentVersion
     *
     * @return self
     */
    public function setAgentVersion($agentVersion)
    {
        if (!is_null($agentVersion) && (mb_strlen($agentVersion) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $agentVersion when calling VSVersions., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($agentVersion) && (!preg_match("/(.*){0,2147483647}/", $agentVersion))) {
            throw new \InvalidArgumentException("invalid value for \$agentVersion when calling VSVersions., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($agentVersion)) {
            throw new \InvalidArgumentException('non-nullable agentVersion cannot be null');
        }

        $this->container['agentVersion'] = $agentVersion;

        return $this;
    }

    /**
     * Gets fastCloneSupported
     *
     * @return bool|null
     */
    public function getFastCloneSupported()
    {
        return $this->container['fastCloneSupported'];
    }

    /**
     * Sets fastCloneSupported
     *
     * @param bool|null $fastCloneSupported fastCloneSupported
     *
     * @return self
     */
    public function setFastCloneSupported($fastCloneSupported)
    {

        if (is_null($fastCloneSupported)) {
            throw new \InvalidArgumentException('non-nullable fastCloneSupported cannot be null');
        }

        $this->container['fastCloneSupported'] = $fastCloneSupported;

        return $this;
    }

    /**
     * Gets isDefault
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
     * Sets isDefault
     *
     * @param bool|null $isDefault isDefault
     *
     * @return self
     */
    public function setIsDefault($isDefault)
    {

        if (is_null($isDefault)) {
            throw new \InvalidArgumentException('non-nullable isDefault cannot be null');
        }

        $this->container['isDefault'] = $isDefault;

        return $this;
    }

    /**
     * Gets vsVersion
     *
     * @return string|null
     */
    public function getVsVersion()
    {
        return $this->container['vsVersion'];
    }

    /**
     * Sets vsVersion
     *
     * @param string|null $vsVersion vsVersion
     *
     * @return self
     */
    public function setVsVersion($vsVersion)
    {
        if (!is_null($vsVersion) && (mb_strlen($vsVersion) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $vsVersion when calling VSVersions., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($vsVersion) && (!preg_match("/(.*){0,2147483647}/", $vsVersion))) {
            throw new \InvalidArgumentException("invalid value for \$vsVersion when calling VSVersions., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($vsVersion)) {
            throw new \InvalidArgumentException('non-nullable vsVersion cannot be null');
        }

        $this->container['vsVersion'] = $vsVersion;

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

