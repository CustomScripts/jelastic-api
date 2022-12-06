<?php
/**
 * ComHivextApiServerEnvironmentResponseFilePermissionResponse
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
 * ComHivextApiServerEnvironmentResponseFilePermissionResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerEnvironmentResponseFilePermissionResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.environment.response.FilePermissionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error' => 'string',
        'isDirectory' => 'bool',
        'path' => 'string',
        'permission' => 'string',
        'reason' => 'int',
        'responses' => 'object[]',
        'result' => 'int',
        'source' => 'string',
        'user' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error' => null,
        'isDirectory' => null,
        'path' => null,
        'permission' => null,
        'reason' => 'int32',
        'responses' => null,
        'result' => 'int32',
        'source' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'error' => false,
		'isDirectory' => false,
		'path' => false,
		'permission' => false,
		'reason' => false,
		'responses' => false,
		'result' => false,
		'source' => false,
		'user' => false
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
        'error' => 'error',
        'isDirectory' => 'isDirectory',
        'path' => 'path',
        'permission' => 'permission',
        'reason' => 'reason',
        'responses' => 'responses',
        'result' => 'result',
        'source' => 'source',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'isDirectory' => 'setIsDirectory',
        'path' => 'setPath',
        'permission' => 'setPermission',
        'reason' => 'setReason',
        'responses' => 'setResponses',
        'result' => 'setResult',
        'source' => 'setSource',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'isDirectory' => 'getIsDirectory',
        'path' => 'getPath',
        'permission' => 'getPermission',
        'reason' => 'getReason',
        'responses' => 'getResponses',
        'result' => 'getResult',
        'source' => 'getSource',
        'user' => 'getUser'
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
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('isDirectory', $data ?? [], null);
        $this->setIfExists('path', $data ?? [], null);
        $this->setIfExists('permission', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('responses', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
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

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['error']) && !preg_match("/(.*){0,2147483647}/", $this->container['error'])) {
            $invalidProperties[] = "invalid value for 'error', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['path']) && (mb_strlen($this->container['path']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['path']) && !preg_match("/(.*){0,2147483647}/", $this->container['path'])) {
            $invalidProperties[] = "invalid value for 'path', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['permission']) && (mb_strlen($this->container['permission']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'permission', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['permission']) && !preg_match("/(.*){0,2147483647}/", $this->container['permission'])) {
            $invalidProperties[] = "invalid value for 'permission', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'reason', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'reason', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['responses']) && (count($this->container['responses']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'responses', number of items must be less than or equal to 2147483647.";
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

        if (!is_null($this->container['user']) && (mb_strlen($this->container['user']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'user', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['user']) && !preg_match("/(.*){0,2147483647}/", $this->container['user'])) {
            $invalidProperties[] = "invalid value for 'user', must be conform to the pattern /(.*){0,2147483647}/.";
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
            throw new \InvalidArgumentException('invalid length for $error when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($error) && (!preg_match("/(.*){0,2147483647}/", $error))) {
            throw new \InvalidArgumentException("invalid value for \$error when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets isDirectory
     *
     * @return bool|null
     */
    public function getIsDirectory()
    {
        return $this->container['isDirectory'];
    }

    /**
     * Sets isDirectory
     *
     * @param bool|null $isDirectory isDirectory
     *
     * @return self
     */
    public function setIsDirectory($isDirectory)
    {

        if (is_null($isDirectory)) {
            throw new \InvalidArgumentException('non-nullable isDirectory cannot be null');
        }

        $this->container['isDirectory'] = $isDirectory;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        if (!is_null($path) && (mb_strlen($path) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $path when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($path) && (!preg_match("/(.*){0,2147483647}/", $path))) {
            throw new \InvalidArgumentException("invalid value for \$path when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($path)) {
            throw new \InvalidArgumentException('non-nullable path cannot be null');
        }

        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets permission
     *
     * @return string|null
     */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
     * Sets permission
     *
     * @param string|null $permission permission
     *
     * @return self
     */
    public function setPermission($permission)
    {
        if (!is_null($permission) && (mb_strlen($permission) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $permission when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($permission) && (!preg_match("/(.*){0,2147483647}/", $permission))) {
            throw new \InvalidArgumentException("invalid value for \$permission when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($permission)) {
            throw new \InvalidArgumentException('non-nullable permission cannot be null');
        }

        $this->container['permission'] = $permission;

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
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($reason) && ($reason < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets responses
     *
     * @return object[]|null
     */
    public function getResponses()
    {
        return $this->container['responses'];
    }

    /**
     * Sets responses
     *
     * @param object[]|null $responses responses
     *
     * @return self
     */
    public function setResponses($responses)
    {

        if (!is_null($responses) && (count($responses) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $responses when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($responses)) {
            throw new \InvalidArgumentException('non-nullable responses cannot be null');
        }

        $this->container['responses'] = $responses;

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
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($result) && ($result < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be bigger than or equal to -2147483648.');
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
            throw new \InvalidArgumentException('invalid length for $source when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source) && (!preg_match("/(.*){0,2147483647}/", $source))) {
            throw new \InvalidArgumentException("invalid value for \$source when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (!is_null($user) && (mb_strlen($user) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $user when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($user) && (!preg_match("/(.*){0,2147483647}/", $user))) {
            throw new \InvalidArgumentException("invalid value for \$user when calling ComHivextApiServerEnvironmentResponseFilePermissionResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }

        $this->container['user'] = $user;

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


