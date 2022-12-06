<?php
/**
 * ComHivextApiServerUsersResponseAuthenticationResponse
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
 * ComHivextApiServerUsersResponseAuthenticationResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerUsersResponseAuthenticationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.users.response.AuthenticationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessType' => 'string',
        'attemptsLeft' => 'int',
        'authType' => 'string',
        'data' => '\OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponseObject',
        'email' => 'string',
        'error' => 'string',
        'name' => 'string',
        'reason' => 'int',
        'requiredAuthCheck' => '\OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponseRequiredAuthCheck',
        'result' => 'int',
        'session' => 'string',
        'source' => 'string',
        'status' => 'string',
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
        'accessType' => null,
        'attemptsLeft' => 'int32',
        'authType' => null,
        'data' => null,
        'email' => null,
        'error' => null,
        'name' => null,
        'reason' => 'int32',
        'requiredAuthCheck' => null,
        'result' => 'int32',
        'session' => null,
        'source' => null,
        'status' => null,
        'uid' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'accessType' => false,
		'attemptsLeft' => false,
		'authType' => false,
		'data' => false,
		'email' => false,
		'error' => false,
		'name' => false,
		'reason' => false,
		'requiredAuthCheck' => false,
		'result' => false,
		'session' => false,
		'source' => false,
		'status' => false,
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
        'accessType' => 'accessType',
        'attemptsLeft' => 'attemptsLeft',
        'authType' => 'authType',
        'data' => 'data',
        'email' => 'email',
        'error' => 'error',
        'name' => 'name',
        'reason' => 'reason',
        'requiredAuthCheck' => 'requiredAuthCheck',
        'result' => 'result',
        'session' => 'session',
        'source' => 'source',
        'status' => 'status',
        'uid' => 'uid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessType' => 'setAccessType',
        'attemptsLeft' => 'setAttemptsLeft',
        'authType' => 'setAuthType',
        'data' => 'setData',
        'email' => 'setEmail',
        'error' => 'setError',
        'name' => 'setName',
        'reason' => 'setReason',
        'requiredAuthCheck' => 'setRequiredAuthCheck',
        'result' => 'setResult',
        'session' => 'setSession',
        'source' => 'setSource',
        'status' => 'setStatus',
        'uid' => 'setUid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessType' => 'getAccessType',
        'attemptsLeft' => 'getAttemptsLeft',
        'authType' => 'getAuthType',
        'data' => 'getData',
        'email' => 'getEmail',
        'error' => 'getError',
        'name' => 'getName',
        'reason' => 'getReason',
        'requiredAuthCheck' => 'getRequiredAuthCheck',
        'result' => 'getResult',
        'session' => 'getSession',
        'source' => 'getSource',
        'status' => 'getStatus',
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

    public const ACCESS_TYPE_FULL_ACCESS_0 = 'FULL_ACCESS(0)';
    public const ACCESS_TYPE_RESTRICTED_1 = 'RESTRICTED(1)';
    public const AUTH_TYPE_BASIC_0 = 'BASIC(0)';
    public const AUTH_TYPE_TFA_1 = 'TFA(1)';
    public const STATUS_ENABLED_0 = 'ENABLED(0)';
    public const STATUS_SUSPENDED_1 = 'SUSPENDED(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccessTypeAllowableValues()
    {
        return [
            self::ACCESS_TYPE_FULL_ACCESS_0,
            self::ACCESS_TYPE_RESTRICTED_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_BASIC_0,
            self::AUTH_TYPE_TFA_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLED_0,
            self::STATUS_SUSPENDED_1,
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
        $this->setIfExists('accessType', $data ?? [], null);
        $this->setIfExists('attemptsLeft', $data ?? [], null);
        $this->setIfExists('authType', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('requiredAuthCheck', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('session', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($this->container['accessType']) && !in_array($this->container['accessType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'accessType', must be one of '%s'",
                $this->container['accessType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['attemptsLeft']) && ($this->container['attemptsLeft'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'attemptsLeft', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['attemptsLeft']) && ($this->container['attemptsLeft'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'attemptsLeft', must be bigger than or equal to -2147483648.";
        }

        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'authType', must be one of '%s'",
                $this->container['authType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['email']) && !preg_match("/(.*){0,2147483647}/", $this->container['email'])) {
            $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /(.*){0,2147483647}/.";
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

        if (!is_null($this->container['session']) && (mb_strlen($this->container['session']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'session', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['session']) && !preg_match("/(.*){0,2147483647}/", $this->container['session'])) {
            $invalidProperties[] = "invalid value for 'session', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['source']) && !preg_match("/(.*){0,2147483647}/", $this->container['source'])) {
            $invalidProperties[] = "invalid value for 'source', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets accessType
     *
     * @return string|null
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param string|null $accessType accessType
     *
     * @return self
     */
    public function setAccessType($accessType)
    {
        $allowedValues = $this->getAccessTypeAllowableValues();
        if (!is_null($accessType) && !in_array($accessType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'accessType', must be one of '%s'",
                    $accessType,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($accessType)) {
            throw new \InvalidArgumentException('non-nullable accessType cannot be null');
        }

        $this->container['accessType'] = $accessType;

        return $this;
    }

    /**
     * Gets attemptsLeft
     *
     * @return int|null
     */
    public function getAttemptsLeft()
    {
        return $this->container['attemptsLeft'];
    }

    /**
     * Sets attemptsLeft
     *
     * @param int|null $attemptsLeft attemptsLeft
     *
     * @return self
     */
    public function setAttemptsLeft($attemptsLeft)
    {

        if (!is_null($attemptsLeft) && ($attemptsLeft > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $attemptsLeft when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($attemptsLeft) && ($attemptsLeft < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $attemptsLeft when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($attemptsLeft)) {
            throw new \InvalidArgumentException('non-nullable attemptsLeft cannot be null');
        }

        $this->container['attemptsLeft'] = $attemptsLeft;

        return $this;
    }

    /**
     * Gets authType
     *
     * @return string|null
     */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
     * Sets authType
     *
     * @param string|null $authType authType
     *
     * @return self
     */
    public function setAuthType($authType)
    {
        $allowedValues = $this->getAuthTypeAllowableValues();
        if (!is_null($authType) && !in_array($authType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'authType', must be one of '%s'",
                    $authType,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($authType)) {
            throw new \InvalidArgumentException('non-nullable authType cannot be null');
        }

        $this->container['authType'] = $authType;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponseObject|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \OpenAPI\Client\Model\ComHivextApiServerDataResponseObjectResponseObject|null $data data
     *
     * @return self
     */
    public function setData($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }

        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $email when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($email) && (!preg_match("/(.*){0,2147483647}/", $email))) {
            throw new \InvalidArgumentException("invalid value for \$email when calling ComHivextApiServerUsersResponseAuthenticationResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }

        $this->container['email'] = $email;

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
            throw new \InvalidArgumentException('invalid length for $error when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($error) && (!preg_match("/(.*){0,2147483647}/", $error))) {
            throw new \InvalidArgumentException("invalid value for \$error when calling ComHivextApiServerUsersResponseAuthenticationResponse., must conform to the pattern /(.*){0,2147483647}/.");
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
            throw new \InvalidArgumentException('invalid length for $name when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling ComHivextApiServerUsersResponseAuthenticationResponse., must conform to the pattern /(.*){0,2147483647}/.");
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
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($reason) && ($reason < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets requiredAuthCheck
     *
     * @return \OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponseRequiredAuthCheck|null
     */
    public function getRequiredAuthCheck()
    {
        return $this->container['requiredAuthCheck'];
    }

    /**
     * Sets requiredAuthCheck
     *
     * @param \OpenAPI\Client\Model\ComHivextApiServerUsersResponseAuthenticationResponseRequiredAuthCheck|null $requiredAuthCheck requiredAuthCheck
     *
     * @return self
     */
    public function setRequiredAuthCheck($requiredAuthCheck)
    {

        if (is_null($requiredAuthCheck)) {
            throw new \InvalidArgumentException('non-nullable requiredAuthCheck cannot be null');
        }

        $this->container['requiredAuthCheck'] = $requiredAuthCheck;

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
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($result) && ($result < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }

        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets session
     *
     * @return string|null
     */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
     * Sets session
     *
     * @param string|null $session session
     *
     * @return self
     */
    public function setSession($session)
    {
        if (!is_null($session) && (mb_strlen($session) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $session when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($session) && (!preg_match("/(.*){0,2147483647}/", $session))) {
            throw new \InvalidArgumentException("invalid value for \$session when calling ComHivextApiServerUsersResponseAuthenticationResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($session)) {
            throw new \InvalidArgumentException('non-nullable session cannot be null');
        }

        $this->container['session'] = $session;

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
            throw new \InvalidArgumentException('invalid length for $source when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source) && (!preg_match("/(.*){0,2147483647}/", $source))) {
            throw new \InvalidArgumentException("invalid value for \$source when calling ComHivextApiServerUsersResponseAuthenticationResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }

        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }

        $this->container['status'] = $status;

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
            throw new \InvalidArgumentException('invalid value for $uid when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($uid) && ($uid < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $uid when calling ComHivextApiServerUsersResponseAuthenticationResponse., must be bigger than or equal to -2147483648.');
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

