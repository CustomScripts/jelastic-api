<?php
/**
 * ComHivextApiServerDataResponseObjectsCountResponse
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
 * ComHivextApiServerDataResponseObjectsCountResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerDataResponseObjectsCountResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.data.response.ObjectsCountResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'envName' => 'string',
        'nodeGroup' => 'string',
        'registryRepo' => 'string',
        'registryUrl' => 'string',
        'registryUser' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'envName' => null,
        'nodeGroup' => null,
        'registryRepo' => null,
        'registryUrl' => null,
        'registryUser' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'envName' => false,
		'nodeGroup' => false,
		'registryRepo' => false,
		'registryUrl' => false,
		'registryUser' => false
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
        'envName' => 'envName',
        'nodeGroup' => 'nodeGroup',
        'registryRepo' => 'registryRepo',
        'registryUrl' => 'registryUrl',
        'registryUser' => 'registryUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'envName' => 'setEnvName',
        'nodeGroup' => 'setNodeGroup',
        'registryRepo' => 'setRegistryRepo',
        'registryUrl' => 'setRegistryUrl',
        'registryUser' => 'setRegistryUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'envName' => 'getEnvName',
        'nodeGroup' => 'getNodeGroup',
        'registryRepo' => 'getRegistryRepo',
        'registryUrl' => 'getRegistryUrl',
        'registryUser' => 'getRegistryUser'
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
        $this->setIfExists('envName', $data ?? [], null);
        $this->setIfExists('nodeGroup', $data ?? [], null);
        $this->setIfExists('registryRepo', $data ?? [], null);
        $this->setIfExists('registryUrl', $data ?? [], null);
        $this->setIfExists('registryUser', $data ?? [], null);
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

        if (!is_null($this->container['envName']) && (mb_strlen($this->container['envName']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'envName', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['envName']) && !preg_match("/(.*){0,2147483647}/", $this->container['envName'])) {
            $invalidProperties[] = "invalid value for 'envName', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['nodeGroup']) && (mb_strlen($this->container['nodeGroup']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'nodeGroup', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['nodeGroup']) && !preg_match("/(.*){0,2147483647}/", $this->container['nodeGroup'])) {
            $invalidProperties[] = "invalid value for 'nodeGroup', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['registryRepo']) && (mb_strlen($this->container['registryRepo']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'registryRepo', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['registryRepo']) && !preg_match("/(.*){0,2147483647}/", $this->container['registryRepo'])) {
            $invalidProperties[] = "invalid value for 'registryRepo', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['registryUrl']) && (mb_strlen($this->container['registryUrl']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'registryUrl', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['registryUrl']) && !preg_match("/(.*){0,2147483647}/", $this->container['registryUrl'])) {
            $invalidProperties[] = "invalid value for 'registryUrl', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['registryUser']) && (mb_strlen($this->container['registryUser']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'registryUser', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['registryUser']) && !preg_match("/(.*){0,2147483647}/", $this->container['registryUser'])) {
            $invalidProperties[] = "invalid value for 'registryUser', must be conform to the pattern /(.*){0,2147483647}/.";
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
     * Gets envName
     *
     * @return string|null
     */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
     * Sets envName
     *
     * @param string|null $envName envName
     *
     * @return self
     */
    public function setEnvName($envName)
    {
        if (!is_null($envName) && (mb_strlen($envName) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $envName when calling ComHivextApiServerDataResponseObjectsCountResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($envName) && (!preg_match("/(.*){0,2147483647}/", $envName))) {
            throw new \InvalidArgumentException("invalid value for \$envName when calling ComHivextApiServerDataResponseObjectsCountResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($envName)) {
            throw new \InvalidArgumentException('non-nullable envName cannot be null');
        }

        $this->container['envName'] = $envName;

        return $this;
    }

    /**
     * Gets nodeGroup
     *
     * @return string|null
     */
    public function getNodeGroup()
    {
        return $this->container['nodeGroup'];
    }

    /**
     * Sets nodeGroup
     *
     * @param string|null $nodeGroup nodeGroup
     *
     * @return self
     */
    public function setNodeGroup($nodeGroup)
    {
        if (!is_null($nodeGroup) && (mb_strlen($nodeGroup) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $nodeGroup when calling ComHivextApiServerDataResponseObjectsCountResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($nodeGroup) && (!preg_match("/(.*){0,2147483647}/", $nodeGroup))) {
            throw new \InvalidArgumentException("invalid value for \$nodeGroup when calling ComHivextApiServerDataResponseObjectsCountResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($nodeGroup)) {
            throw new \InvalidArgumentException('non-nullable nodeGroup cannot be null');
        }

        $this->container['nodeGroup'] = $nodeGroup;

        return $this;
    }

    /**
     * Gets registryRepo
     *
     * @return string|null
     */
    public function getRegistryRepo()
    {
        return $this->container['registryRepo'];
    }

    /**
     * Sets registryRepo
     *
     * @param string|null $registryRepo registryRepo
     *
     * @return self
     */
    public function setRegistryRepo($registryRepo)
    {
        if (!is_null($registryRepo) && (mb_strlen($registryRepo) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $registryRepo when calling ComHivextApiServerDataResponseObjectsCountResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($registryRepo) && (!preg_match("/(.*){0,2147483647}/", $registryRepo))) {
            throw new \InvalidArgumentException("invalid value for \$registryRepo when calling ComHivextApiServerDataResponseObjectsCountResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($registryRepo)) {
            throw new \InvalidArgumentException('non-nullable registryRepo cannot be null');
        }

        $this->container['registryRepo'] = $registryRepo;

        return $this;
    }

    /**
     * Gets registryUrl
     *
     * @return string|null
     */
    public function getRegistryUrl()
    {
        return $this->container['registryUrl'];
    }

    /**
     * Sets registryUrl
     *
     * @param string|null $registryUrl registryUrl
     *
     * @return self
     */
    public function setRegistryUrl($registryUrl)
    {
        if (!is_null($registryUrl) && (mb_strlen($registryUrl) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $registryUrl when calling ComHivextApiServerDataResponseObjectsCountResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($registryUrl) && (!preg_match("/(.*){0,2147483647}/", $registryUrl))) {
            throw new \InvalidArgumentException("invalid value for \$registryUrl when calling ComHivextApiServerDataResponseObjectsCountResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($registryUrl)) {
            throw new \InvalidArgumentException('non-nullable registryUrl cannot be null');
        }

        $this->container['registryUrl'] = $registryUrl;

        return $this;
    }

    /**
     * Gets registryUser
     *
     * @return string|null
     */
    public function getRegistryUser()
    {
        return $this->container['registryUser'];
    }

    /**
     * Sets registryUser
     *
     * @param string|null $registryUser registryUser
     *
     * @return self
     */
    public function setRegistryUser($registryUser)
    {
        if (!is_null($registryUser) && (mb_strlen($registryUser) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $registryUser when calling ComHivextApiServerDataResponseObjectsCountResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($registryUser) && (!preg_match("/(.*){0,2147483647}/", $registryUser))) {
            throw new \InvalidArgumentException("invalid value for \$registryUser when calling ComHivextApiServerDataResponseObjectsCountResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($registryUser)) {
            throw new \InvalidArgumentException('non-nullable registryUser cannot be null');
        }

        $this->container['registryUser'] = $registryUser;

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

