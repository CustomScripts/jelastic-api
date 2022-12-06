<?php
/**
 * ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse
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
 * ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com.hivext.api.server.environment.response.deployment.VcsProjectResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'autoResolveConflict' => 'bool',
        'autoUpdate' => 'bool',
        'autoUpdateInterval' => 'int',
        'branch' => 'string',
        'context' => 'string',
        'error' => 'string',
        'hash' => 'string',
        'log' => 'string',
        'login' => 'string',
        'reason' => 'int',
        'repoHash' => 'string',
        'result' => 'int',
        'source' => 'string',
        'type' => 'string',
        'url' => 'string',
        'zdt' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'autoResolveConflict' => null,
        'autoUpdate' => null,
        'autoUpdateInterval' => 'int32',
        'branch' => null,
        'context' => null,
        'error' => null,
        'hash' => null,
        'log' => null,
        'login' => null,
        'reason' => 'int32',
        'repoHash' => null,
        'result' => 'int32',
        'source' => null,
        'type' => null,
        'url' => null,
        'zdt' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'autoResolveConflict' => false,
		'autoUpdate' => false,
		'autoUpdateInterval' => false,
		'branch' => false,
		'context' => false,
		'error' => false,
		'hash' => false,
		'log' => false,
		'login' => false,
		'reason' => false,
		'repoHash' => false,
		'result' => false,
		'source' => false,
		'type' => false,
		'url' => false,
		'zdt' => false
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
        'autoResolveConflict' => 'autoResolveConflict',
        'autoUpdate' => 'autoUpdate',
        'autoUpdateInterval' => 'autoUpdateInterval',
        'branch' => 'branch',
        'context' => 'context',
        'error' => 'error',
        'hash' => 'hash',
        'log' => 'log',
        'login' => 'login',
        'reason' => 'reason',
        'repoHash' => 'repoHash',
        'result' => 'result',
        'source' => 'source',
        'type' => 'type',
        'url' => 'url',
        'zdt' => 'zdt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'autoResolveConflict' => 'setAutoResolveConflict',
        'autoUpdate' => 'setAutoUpdate',
        'autoUpdateInterval' => 'setAutoUpdateInterval',
        'branch' => 'setBranch',
        'context' => 'setContext',
        'error' => 'setError',
        'hash' => 'setHash',
        'log' => 'setLog',
        'login' => 'setLogin',
        'reason' => 'setReason',
        'repoHash' => 'setRepoHash',
        'result' => 'setResult',
        'source' => 'setSource',
        'type' => 'setType',
        'url' => 'setUrl',
        'zdt' => 'setZdt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'autoResolveConflict' => 'getAutoResolveConflict',
        'autoUpdate' => 'getAutoUpdate',
        'autoUpdateInterval' => 'getAutoUpdateInterval',
        'branch' => 'getBranch',
        'context' => 'getContext',
        'error' => 'getError',
        'hash' => 'getHash',
        'log' => 'getLog',
        'login' => 'getLogin',
        'reason' => 'getReason',
        'repoHash' => 'getRepoHash',
        'result' => 'getResult',
        'source' => 'getSource',
        'type' => 'getType',
        'url' => 'getUrl',
        'zdt' => 'getZdt'
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

    public const TYPE_SVN_0 = 'SVN(0)';
    public const TYPE_GIT_1 = 'GIT(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SVN_0,
            self::TYPE_GIT_1,
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
        $this->setIfExists('autoResolveConflict', $data ?? [], null);
        $this->setIfExists('autoUpdate', $data ?? [], null);
        $this->setIfExists('autoUpdateInterval', $data ?? [], null);
        $this->setIfExists('branch', $data ?? [], null);
        $this->setIfExists('context', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
        $this->setIfExists('hash', $data ?? [], null);
        $this->setIfExists('log', $data ?? [], null);
        $this->setIfExists('login', $data ?? [], null);
        $this->setIfExists('reason', $data ?? [], null);
        $this->setIfExists('repoHash', $data ?? [], null);
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('zdt', $data ?? [], null);
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

        if (!is_null($this->container['autoUpdateInterval']) && ($this->container['autoUpdateInterval'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'autoUpdateInterval', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['autoUpdateInterval']) && ($this->container['autoUpdateInterval'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'autoUpdateInterval', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['branch']) && (mb_strlen($this->container['branch']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'branch', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['branch']) && !preg_match("/(.*){0,2147483647}/", $this->container['branch'])) {
            $invalidProperties[] = "invalid value for 'branch', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['context']) && (mb_strlen($this->container['context']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'context', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['context']) && !preg_match("/(.*){0,2147483647}/", $this->container['context'])) {
            $invalidProperties[] = "invalid value for 'context', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['error']) && (mb_strlen($this->container['error']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'error', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['error']) && !preg_match("/(.*){0,2147483647}/", $this->container['error'])) {
            $invalidProperties[] = "invalid value for 'error', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['hash']) && (mb_strlen($this->container['hash']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'hash', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['hash']) && !preg_match("/(.*){0,2147483647}/", $this->container['hash'])) {
            $invalidProperties[] = "invalid value for 'hash', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['log']) && (mb_strlen($this->container['log']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'log', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['log']) && !preg_match("/(.*){0,2147483647}/", $this->container['log'])) {
            $invalidProperties[] = "invalid value for 'log', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['login']) && (mb_strlen($this->container['login']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'login', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['login']) && !preg_match("/(.*){0,2147483647}/", $this->container['login'])) {
            $invalidProperties[] = "invalid value for 'login', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'reason', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['reason']) && ($this->container['reason'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'reason', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['repoHash']) && (mb_strlen($this->container['repoHash']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'repoHash', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['repoHash']) && !preg_match("/(.*){0,2147483647}/", $this->container['repoHash'])) {
            $invalidProperties[] = "invalid value for 'repoHash', must be conform to the pattern /(.*){0,2147483647}/.";
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['url']) && !preg_match("/(.*){0,2147483647}/", $this->container['url'])) {
            $invalidProperties[] = "invalid value for 'url', must be conform to the pattern /(.*){0,2147483647}/.";
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
     * Gets autoResolveConflict
     *
     * @return bool|null
     */
    public function getAutoResolveConflict()
    {
        return $this->container['autoResolveConflict'];
    }

    /**
     * Sets autoResolveConflict
     *
     * @param bool|null $autoResolveConflict autoResolveConflict
     *
     * @return self
     */
    public function setAutoResolveConflict($autoResolveConflict)
    {

        if (is_null($autoResolveConflict)) {
            throw new \InvalidArgumentException('non-nullable autoResolveConflict cannot be null');
        }

        $this->container['autoResolveConflict'] = $autoResolveConflict;

        return $this;
    }

    /**
     * Gets autoUpdate
     *
     * @return bool|null
     */
    public function getAutoUpdate()
    {
        return $this->container['autoUpdate'];
    }

    /**
     * Sets autoUpdate
     *
     * @param bool|null $autoUpdate autoUpdate
     *
     * @return self
     */
    public function setAutoUpdate($autoUpdate)
    {

        if (is_null($autoUpdate)) {
            throw new \InvalidArgumentException('non-nullable autoUpdate cannot be null');
        }

        $this->container['autoUpdate'] = $autoUpdate;

        return $this;
    }

    /**
     * Gets autoUpdateInterval
     *
     * @return int|null
     */
    public function getAutoUpdateInterval()
    {
        return $this->container['autoUpdateInterval'];
    }

    /**
     * Sets autoUpdateInterval
     *
     * @param int|null $autoUpdateInterval autoUpdateInterval
     *
     * @return self
     */
    public function setAutoUpdateInterval($autoUpdateInterval)
    {

        if (!is_null($autoUpdateInterval) && ($autoUpdateInterval > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $autoUpdateInterval when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($autoUpdateInterval) && ($autoUpdateInterval < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $autoUpdateInterval when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($autoUpdateInterval)) {
            throw new \InvalidArgumentException('non-nullable autoUpdateInterval cannot be null');
        }

        $this->container['autoUpdateInterval'] = $autoUpdateInterval;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string|null
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string|null $branch branch
     *
     * @return self
     */
    public function setBranch($branch)
    {
        if (!is_null($branch) && (mb_strlen($branch) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $branch when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($branch) && (!preg_match("/(.*){0,2147483647}/", $branch))) {
            throw new \InvalidArgumentException("invalid value for \$branch when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($branch)) {
            throw new \InvalidArgumentException('non-nullable branch cannot be null');
        }

        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets context
     *
     * @return string|null
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string|null $context context
     *
     * @return self
     */
    public function setContext($context)
    {
        if (!is_null($context) && (mb_strlen($context) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $context when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($context) && (!preg_match("/(.*){0,2147483647}/", $context))) {
            throw new \InvalidArgumentException("invalid value for \$context when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($context)) {
            throw new \InvalidArgumentException('non-nullable context cannot be null');
        }

        $this->container['context'] = $context;

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
            throw new \InvalidArgumentException('invalid length for $error when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($error) && (!preg_match("/(.*){0,2147483647}/", $error))) {
            throw new \InvalidArgumentException("invalid value for \$error when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }

        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return string|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param string|null $hash hash
     *
     * @return self
     */
    public function setHash($hash)
    {
        if (!is_null($hash) && (mb_strlen($hash) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $hash when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($hash) && (!preg_match("/(.*){0,2147483647}/", $hash))) {
            throw new \InvalidArgumentException("invalid value for \$hash when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($hash)) {
            throw new \InvalidArgumentException('non-nullable hash cannot be null');
        }

        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets log
     *
     * @return string|null
     */
    public function getLog()
    {
        return $this->container['log'];
    }

    /**
     * Sets log
     *
     * @param string|null $log log
     *
     * @return self
     */
    public function setLog($log)
    {
        if (!is_null($log) && (mb_strlen($log) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $log when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($log) && (!preg_match("/(.*){0,2147483647}/", $log))) {
            throw new \InvalidArgumentException("invalid value for \$log when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($log)) {
            throw new \InvalidArgumentException('non-nullable log cannot be null');
        }

        $this->container['log'] = $log;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login login
     *
     * @return self
     */
    public function setLogin($login)
    {
        if (!is_null($login) && (mb_strlen($login) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $login when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($login) && (!preg_match("/(.*){0,2147483647}/", $login))) {
            throw new \InvalidArgumentException("invalid value for \$login when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($login)) {
            throw new \InvalidArgumentException('non-nullable login cannot be null');
        }

        $this->container['login'] = $login;

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
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($reason) && ($reason < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $reason when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be bigger than or equal to -2147483648.');
        }


        if (is_null($reason)) {
            throw new \InvalidArgumentException('non-nullable reason cannot be null');
        }

        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets repoHash
     *
     * @return string|null
     */
    public function getRepoHash()
    {
        return $this->container['repoHash'];
    }

    /**
     * Sets repoHash
     *
     * @param string|null $repoHash repoHash
     *
     * @return self
     */
    public function setRepoHash($repoHash)
    {
        if (!is_null($repoHash) && (mb_strlen($repoHash) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $repoHash when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($repoHash) && (!preg_match("/(.*){0,2147483647}/", $repoHash))) {
            throw new \InvalidArgumentException("invalid value for \$repoHash when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($repoHash)) {
            throw new \InvalidArgumentException('non-nullable repoHash cannot be null');
        }

        $this->container['repoHash'] = $repoHash;

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
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($result) && ($result < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $result when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be bigger than or equal to -2147483648.');
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
            throw new \InvalidArgumentException('invalid length for $source when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source) && (!preg_match("/(.*){0,2147483647}/", $source))) {
            throw new \InvalidArgumentException("invalid value for \$source when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
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
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (mb_strlen($url) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $url when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($url) && (!preg_match("/(.*){0,2147483647}/", $url))) {
            throw new \InvalidArgumentException("invalid value for \$url when calling ComHivextApiServerEnvironmentResponseDeploymentVcsProjectResponse., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets zdt
     *
     * @return bool|null
     */
    public function getZdt()
    {
        return $this->container['zdt'];
    }

    /**
     * Sets zdt
     *
     * @param bool|null $zdt zdt
     *
     * @return self
     */
    public function setZdt($zdt)
    {

        if (is_null($zdt)) {
            throw new \InvalidArgumentException('non-nullable zdt cannot be null');
        }

        $this->container['zdt'] = $zdt;

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

