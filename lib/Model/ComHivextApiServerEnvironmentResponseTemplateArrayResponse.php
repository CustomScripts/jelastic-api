<?php
/**
 * ComHivextApiServerEnvironmentResponseTemplateArrayResponse
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
 * ComHivextApiServerEnvironmentResponseTemplateArrayResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerEnvironmentResponseTemplateArrayResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.environment.response.TemplateArrayResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'array' => 'object[]',
        'className' => 'string',
        'error' => 'string',
        'name' => 'string',
        'reason' => 'int',
        'result' => 'int',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'array' => null,
        'className' => null,
        'error' => null,
        'name' => null,
        'reason' => 'int32',
        'result' => 'int32',
        'source' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'array' => false,
		'className' => false,
		'error' => false,
		'name' => false,
		'reason' => false,
		'result' => false,
		'source' => false
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
        'array' => 'array',
        'className' => 'className',
        'error' => 'error',
        'name' => 'name',
        'reason' => 'reason',
        'result' => 'result',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'array' => 'setArray',
        'className' => 'setClassName',
        'error' => 'setError',
        'name' => 'setName',
        'reason' => 'setReason',
        'result' => 'setResult',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'array' => 'getArray',
        'className' => 'getClassName',
        'error' => 'getError',
        'name' => 'getName',
        'reason' => 'getReason',
        'result' => 'getResult',
        'source' => 'getSource'
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
        $this->setIfExists('array', $data ?? [], null);
        $this->setIfExists('className', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
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

        if (!is_null($this->container['array']) && (count($this->container['array']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'array', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['className']) && (mb_strlen($this->container['className']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'className', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['className']) && !preg_match("/(.*){0,2147483647}/", $this->container['className'])) {
            $invalidProperties[] = "invalid value for 'className', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['error']) && !preg_match("/(.*){0,2147483647}/", $this->container['error'])) {
            $invalidProperties[] = "invalid value for 'error', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && !preg_match("/(.*){0,2147483647}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'reason', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'reason', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['result']) && ($this->container['result'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'result', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['result']) && ($this->container['result'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'result', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['source']) && !preg_match("/(.*){0,2147483647}/", $this->container['source'])) {
            $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /(.*){0,2147483647}/.";
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
     * Gets array
     *
     * @return object[]|null
     */
    public function getArray()
    {
        return $this->container['array'];
    }

    /**
     * Sets array
     *
     * @param object[]|null $array array
     *
     * @return self
     */
    public function setArray($array)
    {

        if (!is_null($array) && (count($array) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $array when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($array)) {
            throw new \InvalidArgumentException('non-nullable array cannot be null');
        }

        $this->container['array'] = $array;

        return $this;
    }

    /**
     * Gets className
     *
     * @return string|null
     */
    public function getClassName()
    {
        return $this->container['className'];
    }

    /**
     * Sets className
     *
     * @param string|null $className className
     *
     * @return self
     */
    public function setClassName($className)
    {
        if (!is_null($className) && (mb_strlen($className) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $className when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($className) && (!preg_match("/(.*){0,2147483647}/", $className))) {
            throw new \InvalidArgumentException("invalid value for \$className when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($className)) {
            throw new \InvalidArgumentException('non-nullable className cannot be null');
        }

        $this->container['className'] = $className;

        return $this;
    }

    /**
     * Gets error
     *
     * @return string|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param string|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (!is_null($error) && (mb_strlen($error) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $error when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($error) && (!preg_match("/(.*){0,2147483647}/", $error))) {
            throw new \InvalidArgumentException("invalid value for \$error when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return int|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param int|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {

        if (!is_null($reason) && ($reason > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($reason) && ($reason < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets result
     *
     * @return int|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param int|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {

        if (!is_null($result) && ($result > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($result) && ($result < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }

        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        if (!is_null($source) && (mb_strlen($source) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $source when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source) && (!preg_match("/(.*){0,2147483647}/", $source))) {
            throw new \InvalidArgumentException("invalid value for \$source when calling ComHivextApiServerEnvironmentResponseTemplateArrayResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;

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


