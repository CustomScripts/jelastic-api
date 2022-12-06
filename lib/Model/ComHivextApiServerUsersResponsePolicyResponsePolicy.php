<?php
/**
 * ComHivextApiServerUsersResponsePolicyResponsePolicy
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
 * ComHivextApiServerUsersResponsePolicyResponsePolicy Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerUsersResponsePolicyResponsePolicy implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com_hivext_api_server_users_response_PolicyResponse_policy';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isSystem' => 'bool',
        'owner' => '\OpenAPI\Client\Model\CollaborationRoleOwner',
        'uniqueName' => 'string',
        'roles' => 'object[]',
        'name' => 'string',
        'useObjectHash' => 'bool',
        'description' => 'string',
        'apiListItems' => 'object[]',
        'id' => 'int',
        'behavior' => 'string',
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
        'isSystem' => null,
        'owner' => null,
        'uniqueName' => null,
        'roles' => null,
        'name' => null,
        'useObjectHash' => null,
        'description' => null,
        'apiListItems' => null,
        'id' => 'int32',
        'behavior' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isSystem' => false,
		'owner' => false,
		'uniqueName' => false,
		'roles' => false,
		'name' => false,
		'useObjectHash' => false,
		'description' => false,
		'apiListItems' => false,
		'id' => false,
		'behavior' => false,
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
        'isSystem' => 'isSystem',
        'owner' => 'owner',
        'uniqueName' => 'uniqueName',
        'roles' => 'roles',
        'name' => 'name',
        'useObjectHash' => 'useObjectHash',
        'description' => 'description',
        'apiListItems' => 'apiListItems',
        'id' => 'id',
        'behavior' => 'behavior',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isSystem' => 'setIsSystem',
        'owner' => 'setOwner',
        'uniqueName' => 'setUniqueName',
        'roles' => 'setRoles',
        'name' => 'setName',
        'useObjectHash' => 'setUseObjectHash',
        'description' => 'setDescription',
        'apiListItems' => 'setApiListItems',
        'id' => 'setId',
        'behavior' => 'setBehavior',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isSystem' => 'getIsSystem',
        'owner' => 'getOwner',
        'uniqueName' => 'getUniqueName',
        'roles' => 'getRoles',
        'name' => 'getName',
        'useObjectHash' => 'getUseObjectHash',
        'description' => 'getDescription',
        'apiListItems' => 'getApiListItems',
        'id' => 'getId',
        'behavior' => 'getBehavior',
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

    public const BEHAVIOR_ALLOW_0 = 'ALLOW(0)';
    public const BEHAVIOR_DENY_1 = 'DENY(1)';
    public const TYPE_COLLABORATION_0 = 'COLLABORATION(0)';
    public const TYPE_ENVIRONMENT_1 = 'ENVIRONMENT(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBehaviorAllowableValues()
    {
        return [
            self::BEHAVIOR_ALLOW_0,
            self::BEHAVIOR_DENY_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_COLLABORATION_0,
            self::TYPE_ENVIRONMENT_1,
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
        $this->setIfExists('isSystem', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('uniqueName', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('useObjectHash', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('apiListItems', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('behavior', $data ?? [], null);
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

        if (!is_null($this->container['uniqueName']) && (mb_strlen($this->container['uniqueName']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'uniqueName', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['uniqueName']) && !preg_match("/(.*){0,2147483647}/", $this->container['uniqueName'])) {
            $invalidProperties[] = "invalid value for 'uniqueName', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['roles']) && (count($this->container['roles']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'roles', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && !preg_match("/(.*){0,2147483647}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['description']) && !preg_match("/(.*){0,2147483647}/", $this->container['description'])) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['apiListItems']) && (count($this->container['apiListItems']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'apiListItems', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to -2147483648.";
        }

        $allowedValues = $this->getBehaviorAllowableValues();
        if (!is_null($this->container['behavior']) && !in_array($this->container['behavior'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'behavior', must be one of '%s'",
                $this->container['behavior'],
                implode("', '", $allowedValues)
            );
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
     * Gets isSystem
     *
     * @return bool|null
     */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
     * Sets isSystem
     *
     * @param bool|null $isSystem isSystem
     *
     * @return self
     */
    public function setIsSystem($isSystem)
    {

        if (is_null($isSystem)) {
            throw new \InvalidArgumentException('non-nullable isSystem cannot be null');
        }

        $this->container['isSystem'] = $isSystem;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \OpenAPI\Client\Model\CollaborationRoleOwner|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \OpenAPI\Client\Model\CollaborationRoleOwner|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {

        if (is_null($owner)) {
            throw new \InvalidArgumentException('non-nullable owner cannot be null');
        }

        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets uniqueName
     *
     * @return string|null
     */
    public function getUniqueName()
    {
        return $this->container['uniqueName'];
    }

    /**
     * Sets uniqueName
     *
     * @param string|null $uniqueName uniqueName
     *
     * @return self
     */
    public function setUniqueName($uniqueName)
    {
        if (!is_null($uniqueName) && (mb_strlen($uniqueName) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $uniqueName when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($uniqueName) && (!preg_match("/(.*){0,2147483647}/", $uniqueName))) {
            throw new \InvalidArgumentException("invalid value for \$uniqueName when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($uniqueName)) {
            throw new \InvalidArgumentException('non-nullable uniqueName cannot be null');
        }

        $this->container['uniqueName'] = $uniqueName;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return object[]|null
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param object[]|null $roles roles
     *
     * @return self
     */
    public function setRoles($roles)
    {

        if (!is_null($roles) && (count($roles) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $roles when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }

        $this->container['roles'] = $roles;

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
            throw new \InvalidArgumentException('invalid length for $name when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets useObjectHash
     *
     * @return bool|null
     */
    public function getUseObjectHash()
    {
        return $this->container['useObjectHash'];
    }

    /**
     * Sets useObjectHash
     *
     * @param bool|null $useObjectHash useObjectHash
     *
     * @return self
     */
    public function setUseObjectHash($useObjectHash)
    {

        if (is_null($useObjectHash)) {
            throw new \InvalidArgumentException('non-nullable useObjectHash cannot be null');
        }

        $this->container['useObjectHash'] = $useObjectHash;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($description) && (!preg_match("/(.*){0,2147483647}/", $description))) {
            throw new \InvalidArgumentException("invalid value for \$description when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets apiListItems
     *
     * @return object[]|null
     */
    public function getApiListItems()
    {
        return $this->container['apiListItems'];
    }

    /**
     * Sets apiListItems
     *
     * @param object[]|null $apiListItems apiListItems
     *
     * @return self
     */
    public function setApiListItems($apiListItems)
    {

        if (!is_null($apiListItems) && (count($apiListItems) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $apiListItems when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($apiListItems)) {
            throw new \InvalidArgumentException('non-nullable apiListItems cannot be null');
        }

        $this->container['apiListItems'] = $apiListItems;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && ($id > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($id) && ($id < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerUsersResponsePolicyResponsePolicy., must be bigger than or equal to -2147483648.');
        }


        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets behavior
     *
     * @return string|null
     */
    public function getBehavior()
    {
        return $this->container['behavior'];
    }

    /**
     * Sets behavior
     *
     * @param string|null $behavior behavior
     *
     * @return self
     */
    public function setBehavior($behavior)
    {
        $allowedValues = $this->getBehaviorAllowableValues();
        if (!is_null($behavior) && !in_array($behavior, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'behavior', must be one of '%s'",
                    $behavior,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($behavior)) {
            throw new \InvalidArgumentException('non-nullable behavior cannot be null');
        }

        $this->container['behavior'] = $behavior;

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


