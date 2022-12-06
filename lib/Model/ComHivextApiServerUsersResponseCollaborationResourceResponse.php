<?php
/**
 * ComHivextApiServerUsersResponseCollaborationResourceResponse
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
 * ComHivextApiServerUsersResponseCollaborationResourceResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerUsersResponseCollaborationResourceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.users.response.CollaborationResourceResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'collaborationId' => 'int',
        'error' => 'string',
        'id' => 'int',
        'memberId' => 'int',
        'ownerUid' => 'int',
        'reason' => 'int',
        'receiveNotification' => 'bool',
        'resourceId' => 'string',
        'result' => 'int',
        'roleIds' => 'object[]',
        'roles' => 'object[]',
        'source' => 'string',
        'type' => 'string',
        'uid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'collaborationId' => 'int32',
        'error' => null,
        'id' => 'int32',
        'memberId' => 'int32',
        'ownerUid' => 'int32',
        'reason' => 'int32',
        'receiveNotification' => null,
        'resourceId' => null,
        'result' => 'int32',
        'roleIds' => 'int32',
        'roles' => null,
        'source' => null,
        'type' => null,
        'uid' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'collaborationId' => false,
		'error' => false,
		'id' => false,
		'memberId' => false,
		'ownerUid' => false,
		'reason' => false,
		'receiveNotification' => false,
		'resourceId' => false,
		'result' => false,
		'roleIds' => false,
		'roles' => false,
		'source' => false,
		'type' => false,
		'uid' => false
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
        'collaborationId' => 'collaborationId',
        'error' => 'error',
        'id' => 'id',
        'memberId' => 'memberId',
        'ownerUid' => 'ownerUid',
        'reason' => 'reason',
        'receiveNotification' => 'receiveNotification',
        'resourceId' => 'resourceId',
        'result' => 'result',
        'roleIds' => 'roleIds',
        'roles' => 'roles',
        'source' => 'source',
        'type' => 'type',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'collaborationId' => 'setCollaborationId',
        'error' => 'setError',
        'id' => 'setId',
        'memberId' => 'setMemberId',
        'ownerUid' => 'setOwnerUid',
        'reason' => 'setReason',
        'receiveNotification' => 'setReceiveNotification',
        'resourceId' => 'setResourceId',
        'result' => 'setResult',
        'roleIds' => 'setRoleIds',
        'roles' => 'setRoles',
        'source' => 'setSource',
        'type' => 'setType',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'collaborationId' => 'getCollaborationId',
        'error' => 'getError',
        'id' => 'getId',
        'memberId' => 'getMemberId',
        'ownerUid' => 'getOwnerUid',
        'reason' => 'getReason',
        'receiveNotification' => 'getReceiveNotification',
        'resourceId' => 'getResourceId',
        'result' => 'getResult',
        'roleIds' => 'getRoleIds',
        'roles' => 'getRoles',
        'source' => 'getSource',
        'type' => 'getType',
        'uid' => 'getUid'
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

    public const TYPE_ENV_0 = 'ENV(0)';
    public const TYPE_ENV_GROUP_1 = 'ENV_GROUP(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ENV_0,
            self::TYPE_ENV_GROUP_1,
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
        $this->setIfExists('collaborationId', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('memberId', $data ?? [], null);
        $this->setIfExists('ownerUid', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('receiveNotification', $data ?? [], null);
        $this->setIfExists('resourceId', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('roleIds', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('uid', $data ?? [], null);
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

        if (!is_null($this->container['collaborationId']) && ($this->container['collaborationId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'collaborationId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['collaborationId']) && ($this->container['collaborationId'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'collaborationId', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['error']) && !preg_match("/(.*){0,2147483647}/", $this->container['error'])) {
            $invalidProperties[] = "invalid value for 'error', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['memberId']) && ($this->container['memberId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'memberId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['memberId']) && ($this->container['memberId'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'memberId', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['ownerUid']) && ($this->container['ownerUid'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'ownerUid', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['ownerUid']) && ($this->container['ownerUid'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'ownerUid', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'reason', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'reason', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['resourceId']) && !preg_match("/(.*){0,2147483647}/", $this->container['resourceId'])) {
            $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['result']) && ($this->container['result'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'result', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['result']) && ($this->container['result'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'result', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['roleIds']) && (count($this->container['roleIds']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'roleIds', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['roles']) && (count($this->container['roles']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'roles', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['source']) && !preg_match("/(.*){0,2147483647}/", $this->container['source'])) {
            $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['uid']) && ($this->container['uid'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'uid', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['uid']) && ($this->container['uid'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'uid', must be bigger than or equal to -2147483648.";
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
     * Gets collaborationId
     *
     * @return int|null
     */
    public function getCollaborationId()
    {
        return $this->container['collaborationId'];
    }

    /**
     * Sets collaborationId
     *
     * @param int|null $collaborationId collaborationId
     *
     * @return self
     */
    public function setCollaborationId($collaborationId)
    {

        if (!is_null($collaborationId) && ($collaborationId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $collaborationId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($collaborationId) && ($collaborationId < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $collaborationId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($collaborationId)) {
            throw new \InvalidArgumentException('non-nullable collaborationId cannot be null');
        }

        $this->container['collaborationId'] = $collaborationId;

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
            throw new \InvalidArgumentException('invalid length for $error when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($error) && (!preg_match("/(.*){0,2147483647}/", $error))) {
            throw new \InvalidArgumentException("invalid value for \$error when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;

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
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($id) && ($id < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets memberId
     *
     * @return int|null
     */
    public function getMemberId()
    {
        return $this->container['memberId'];
    }

    /**
     * Sets memberId
     *
     * @param int|null $memberId memberId
     *
     * @return self
     */
    public function setMemberId($memberId)
    {

        if (!is_null($memberId) && ($memberId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $memberId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($memberId) && ($memberId < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $memberId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($memberId)) {
            throw new \InvalidArgumentException('non-nullable memberId cannot be null');
        }

        $this->container['memberId'] = $memberId;

        return $this;
    }

    /**
     * Gets ownerUid
     *
     * @return int|null
     */
    public function getOwnerUid()
    {
        return $this->container['ownerUid'];
    }

    /**
     * Sets ownerUid
     *
     * @param int|null $ownerUid ownerUid
     *
     * @return self
     */
    public function setOwnerUid($ownerUid)
    {

        if (!is_null($ownerUid) && ($ownerUid > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $ownerUid when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($ownerUid) && ($ownerUid < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $ownerUid when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($ownerUid)) {
            throw new \InvalidArgumentException('non-nullable ownerUid cannot be null');
        }

        $this->container['ownerUid'] = $ownerUid;

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
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($reason) && ($reason < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets receiveNotification
     *
     * @return bool|null
     */
    public function getReceiveNotification()
    {
        return $this->container['receiveNotification'];
    }

    /**
     * Sets receiveNotification
     *
     * @param bool|null $receiveNotification receiveNotification
     *
     * @return self
     */
    public function setReceiveNotification($receiveNotification)
    {

        if (is_null($receiveNotification)) {
            throw new \InvalidArgumentException('non-nullable receiveNotification cannot be null');
        }

        $this->container['receiveNotification'] = $receiveNotification;

        return $this;
    }

    /**
     * Gets resourceId
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
     * Sets resourceId
     *
     * @param string|null $resourceId resourceId
     *
     * @return self
     */
    public function setResourceId($resourceId)
    {
        if (!is_null($resourceId) && (mb_strlen($resourceId) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $resourceId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($resourceId) && (!preg_match("/(.*){0,2147483647}/", $resourceId))) {
            throw new \InvalidArgumentException("invalid value for \$resourceId when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($resourceId)) {
            throw new \InvalidArgumentException('non-nullable resourceId cannot be null');
        }

        $this->container['resourceId'] = $resourceId;

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
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($result) && ($result < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }

        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets roleIds
     *
     * @return object[]|null
     */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
     * Sets roleIds
     *
     * @param object[]|null $roleIds roleIds
     *
     * @return self
     */
    public function setRoleIds($roleIds)
    {

        if (!is_null($roleIds) && (count($roleIds) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $roleIds when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($roleIds)) {
            throw new \InvalidArgumentException('non-nullable roleIds cannot be null');
        }

        $this->container['roleIds'] = $roleIds;

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
            throw new \InvalidArgumentException('invalid value for $roles when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }

        $this->container['roles'] = $roles;

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
            throw new \InvalidArgumentException('invalid length for $source when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source) && (!preg_match("/(.*){0,2147483647}/", $source))) {
            throw new \InvalidArgumentException("invalid value for \$source when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;

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
     * Gets uid
     *
     * @return int|null
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param int|null $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {

        if (!is_null($uid) && ($uid > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $uid when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($uid) && ($uid < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $uid when calling ComHivextApiServerUsersResponseCollaborationResourceResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }

        $this->container['uid'] = $uid;

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


