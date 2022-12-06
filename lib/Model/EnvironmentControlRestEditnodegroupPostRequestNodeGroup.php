<?php
/**
 * EnvironmentControlRestEditnodegroupPostRequestNodeGroup
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
 * EnvironmentControlRestEditnodegroupPostRequestNodeGroup Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EnvironmentControlRestEditnodegroupPostRequestNodeGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_environment_control_rest_editnodegroup_post_request_nodeGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'templateType' => 'string',
        'deployments' => 'object[]',
        'restartNodeDelay' => 'int',
        'vType' => 'string',
        'redeployContainerDelay' => 'int',
        'name' => 'string',
        'scalingMode' => 'string',
        'isSequentialDeploy' => 'bool',
        'restartContainerDelay' => 'int',
        'isSLBAccessEnabled' => 'bool',
        'redeployContextDelay' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'templateType' => null,
        'deployments' => null,
        'restartNodeDelay' => 'int32',
        'vType' => null,
        'redeployContainerDelay' => 'int32',
        'name' => null,
        'scalingMode' => null,
        'isSequentialDeploy' => null,
        'restartContainerDelay' => 'int32',
        'isSLBAccessEnabled' => null,
        'redeployContextDelay' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'templateType' => false,
		'deployments' => false,
		'restartNodeDelay' => false,
		'vType' => false,
		'redeployContainerDelay' => false,
		'name' => false,
		'scalingMode' => false,
		'isSequentialDeploy' => false,
		'restartContainerDelay' => false,
		'isSLBAccessEnabled' => false,
		'redeployContextDelay' => false
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
        'templateType' => 'templateType',
        'deployments' => 'deployments',
        'restartNodeDelay' => 'restartNodeDelay',
        'vType' => 'vType',
        'redeployContainerDelay' => 'redeployContainerDelay',
        'name' => 'name',
        'scalingMode' => 'scalingMode',
        'isSequentialDeploy' => 'isSequentialDeploy',
        'restartContainerDelay' => 'restartContainerDelay',
        'isSLBAccessEnabled' => 'isSLBAccessEnabled',
        'redeployContextDelay' => 'redeployContextDelay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'templateType' => 'setTemplateType',
        'deployments' => 'setDeployments',
        'restartNodeDelay' => 'setRestartNodeDelay',
        'vType' => 'setVType',
        'redeployContainerDelay' => 'setRedeployContainerDelay',
        'name' => 'setName',
        'scalingMode' => 'setScalingMode',
        'isSequentialDeploy' => 'setIsSequentialDeploy',
        'restartContainerDelay' => 'setRestartContainerDelay',
        'isSLBAccessEnabled' => 'setIsSLBAccessEnabled',
        'redeployContextDelay' => 'setRedeployContextDelay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'templateType' => 'getTemplateType',
        'deployments' => 'getDeployments',
        'restartNodeDelay' => 'getRestartNodeDelay',
        'vType' => 'getVType',
        'redeployContainerDelay' => 'getRedeployContainerDelay',
        'name' => 'getName',
        'scalingMode' => 'getScalingMode',
        'isSequentialDeploy' => 'getIsSequentialDeploy',
        'restartContainerDelay' => 'getRestartContainerDelay',
        'isSLBAccessEnabled' => 'getIsSLBAccessEnabled',
        'redeployContextDelay' => 'getRedeployContextDelay'
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

    public const TEMPLATE_TYPE_ALL_0 = 'ALL(0)';
    public const TEMPLATE_TYPE_NATIVE_1 = 'NATIVE(1)';
    public const TEMPLATE_TYPE_CARTRIDGE_2 = 'CARTRIDGE(2)';
    public const TEMPLATE_TYPE_DOCKER_3 = 'DOCKER(3)';
    public const TEMPLATE_TYPE_DOCKERIZED_4 = 'DOCKERIZED(4)';
    public const TEMPLATE_TYPE_OS_5 = 'OS(5)';
    public const V_TYPE_CT_0 = 'CT(0)';
    public const V_TYPE_VM_1 = 'VM(1)';
    public const SCALING_MODE_STATELESS_0 = 'STATELESS(0)';
    public const SCALING_MODE_STATEFUL_1 = 'STATEFUL(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTemplateTypeAllowableValues()
    {
        return [
            self::TEMPLATE_TYPE_ALL_0,
            self::TEMPLATE_TYPE_NATIVE_1,
            self::TEMPLATE_TYPE_CARTRIDGE_2,
            self::TEMPLATE_TYPE_DOCKER_3,
            self::TEMPLATE_TYPE_DOCKERIZED_4,
            self::TEMPLATE_TYPE_OS_5,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVTypeAllowableValues()
    {
        return [
            self::V_TYPE_CT_0,
            self::V_TYPE_VM_1,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getScalingModeAllowableValues()
    {
        return [
            self::SCALING_MODE_STATELESS_0,
            self::SCALING_MODE_STATEFUL_1,
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
        $this->setIfExists('templateType', $data ?? [], null);
        $this->setIfExists('deployments', $data ?? [], null);
        $this->setIfExists('restartNodeDelay', $data ?? [], null);
        $this->setIfExists('vType', $data ?? [], null);
        $this->setIfExists('redeployContainerDelay', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('scalingMode', $data ?? [], null);
        $this->setIfExists('isSequentialDeploy', $data ?? [], null);
        $this->setIfExists('restartContainerDelay', $data ?? [], null);
        $this->setIfExists('isSLBAccessEnabled', $data ?? [], null);
        $this->setIfExists('redeployContextDelay', $data ?? [], null);
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

        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!is_null($this->container['templateType']) && !in_array($this->container['templateType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'templateType', must be one of '%s'",
                $this->container['templateType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['deployments']) && (count($this->container['deployments']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'deployments', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['restartNodeDelay']) && ($this->container['restartNodeDelay'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'restartNodeDelay', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['restartNodeDelay']) && ($this->container['restartNodeDelay'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'restartNodeDelay', must be bigger than or equal to -2147483648.";
        }

        $allowedValues = $this->getVTypeAllowableValues();
        if (!is_null($this->container['vType']) && !in_array($this->container['vType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'vType', must be one of '%s'",
                $this->container['vType'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['redeployContainerDelay']) && ($this->container['redeployContainerDelay'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'redeployContainerDelay', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['redeployContainerDelay']) && ($this->container['redeployContainerDelay'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'redeployContainerDelay', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && !preg_match("/(.*){0,2147483647}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        $allowedValues = $this->getScalingModeAllowableValues();
        if (!is_null($this->container['scalingMode']) && !in_array($this->container['scalingMode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'scalingMode', must be one of '%s'",
                $this->container['scalingMode'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['restartContainerDelay']) && ($this->container['restartContainerDelay'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'restartContainerDelay', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['restartContainerDelay']) && ($this->container['restartContainerDelay'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'restartContainerDelay', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['redeployContextDelay']) && ($this->container['redeployContextDelay'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'redeployContextDelay', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['redeployContextDelay']) && ($this->container['redeployContextDelay'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'redeployContextDelay', must be bigger than or equal to -2147483648.";
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
     * Gets templateType
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
     * Sets templateType
     *
     * @param string|null $templateType templateType
     *
     * @return self
     */
    public function setTemplateType($templateType)
    {
        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!is_null($templateType) && !in_array($templateType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'templateType', must be one of '%s'",
                    $templateType,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($templateType)) {
            throw new \InvalidArgumentException('non-nullable templateType cannot be null');
        }

        $this->container['templateType'] = $templateType;

        return $this;
    }

    /**
     * Gets deployments
     *
     * @return object[]|null
     */
    public function getDeployments()
    {
        return $this->container['deployments'];
    }

    /**
     * Sets deployments
     *
     * @param object[]|null $deployments deployments
     *
     * @return self
     */
    public function setDeployments($deployments)
    {

        if (!is_null($deployments) && (count($deployments) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $deployments when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($deployments)) {
            throw new \InvalidArgumentException('non-nullable deployments cannot be null');
        }

        $this->container['deployments'] = $deployments;

        return $this;
    }

    /**
     * Gets restartNodeDelay
     *
     * @return int|null
     */
    public function getRestartNodeDelay()
    {
        return $this->container['restartNodeDelay'];
    }

    /**
     * Sets restartNodeDelay
     *
     * @param int|null $restartNodeDelay restartNodeDelay
     *
     * @return self
     */
    public function setRestartNodeDelay($restartNodeDelay)
    {

        if (!is_null($restartNodeDelay) && ($restartNodeDelay > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $restartNodeDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($restartNodeDelay) && ($restartNodeDelay < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $restartNodeDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be bigger than or equal to -2147483648.');
        }


        if (is_null($restartNodeDelay)) {
            throw new \InvalidArgumentException('non-nullable restartNodeDelay cannot be null');
        }

        $this->container['restartNodeDelay'] = $restartNodeDelay;

        return $this;
    }

    /**
     * Gets vType
     *
     * @return string|null
     */
    public function getVType()
    {
        return $this->container['vType'];
    }

    /**
     * Sets vType
     *
     * @param string|null $vType vType
     *
     * @return self
     */
    public function setVType($vType)
    {
        $allowedValues = $this->getVTypeAllowableValues();
        if (!is_null($vType) && !in_array($vType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'vType', must be one of '%s'",
                    $vType,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($vType)) {
            throw new \InvalidArgumentException('non-nullable vType cannot be null');
        }

        $this->container['vType'] = $vType;

        return $this;
    }

    /**
     * Gets redeployContainerDelay
     *
     * @return int|null
     */
    public function getRedeployContainerDelay()
    {
        return $this->container['redeployContainerDelay'];
    }

    /**
     * Sets redeployContainerDelay
     *
     * @param int|null $redeployContainerDelay redeployContainerDelay
     *
     * @return self
     */
    public function setRedeployContainerDelay($redeployContainerDelay)
    {

        if (!is_null($redeployContainerDelay) && ($redeployContainerDelay > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $redeployContainerDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($redeployContainerDelay) && ($redeployContainerDelay < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $redeployContainerDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be bigger than or equal to -2147483648.');
        }


        if (is_null($redeployContainerDelay)) {
            throw new \InvalidArgumentException('non-nullable redeployContainerDelay cannot be null');
        }

        $this->container['redeployContainerDelay'] = $redeployContainerDelay;

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
            throw new \InvalidArgumentException('invalid length for $name when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets scalingMode
     *
     * @return string|null
     */
    public function getScalingMode()
    {
        return $this->container['scalingMode'];
    }

    /**
     * Sets scalingMode
     *
     * @param string|null $scalingMode scalingMode
     *
     * @return self
     */
    public function setScalingMode($scalingMode)
    {
        $allowedValues = $this->getScalingModeAllowableValues();
        if (!is_null($scalingMode) && !in_array($scalingMode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'scalingMode', must be one of '%s'",
                    $scalingMode,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($scalingMode)) {
            throw new \InvalidArgumentException('non-nullable scalingMode cannot be null');
        }

        $this->container['scalingMode'] = $scalingMode;

        return $this;
    }

    /**
     * Gets isSequentialDeploy
     *
     * @return bool|null
     */
    public function getIsSequentialDeploy()
    {
        return $this->container['isSequentialDeploy'];
    }

    /**
     * Sets isSequentialDeploy
     *
     * @param bool|null $isSequentialDeploy isSequentialDeploy
     *
     * @return self
     */
    public function setIsSequentialDeploy($isSequentialDeploy)
    {

        if (is_null($isSequentialDeploy)) {
            throw new \InvalidArgumentException('non-nullable isSequentialDeploy cannot be null');
        }

        $this->container['isSequentialDeploy'] = $isSequentialDeploy;

        return $this;
    }

    /**
     * Gets restartContainerDelay
     *
     * @return int|null
     */
    public function getRestartContainerDelay()
    {
        return $this->container['restartContainerDelay'];
    }

    /**
     * Sets restartContainerDelay
     *
     * @param int|null $restartContainerDelay restartContainerDelay
     *
     * @return self
     */
    public function setRestartContainerDelay($restartContainerDelay)
    {

        if (!is_null($restartContainerDelay) && ($restartContainerDelay > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $restartContainerDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($restartContainerDelay) && ($restartContainerDelay < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $restartContainerDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be bigger than or equal to -2147483648.');
        }


        if (is_null($restartContainerDelay)) {
            throw new \InvalidArgumentException('non-nullable restartContainerDelay cannot be null');
        }

        $this->container['restartContainerDelay'] = $restartContainerDelay;

        return $this;
    }

    /**
     * Gets isSLBAccessEnabled
     *
     * @return bool|null
     */
    public function getIsSLBAccessEnabled()
    {
        return $this->container['isSLBAccessEnabled'];
    }

    /**
     * Sets isSLBAccessEnabled
     *
     * @param bool|null $isSLBAccessEnabled isSLBAccessEnabled
     *
     * @return self
     */
    public function setIsSLBAccessEnabled($isSLBAccessEnabled)
    {

        if (is_null($isSLBAccessEnabled)) {
            throw new \InvalidArgumentException('non-nullable isSLBAccessEnabled cannot be null');
        }

        $this->container['isSLBAccessEnabled'] = $isSLBAccessEnabled;

        return $this;
    }

    /**
     * Gets redeployContextDelay
     *
     * @return int|null
     */
    public function getRedeployContextDelay()
    {
        return $this->container['redeployContextDelay'];
    }

    /**
     * Sets redeployContextDelay
     *
     * @param int|null $redeployContextDelay redeployContextDelay
     *
     * @return self
     */
    public function setRedeployContextDelay($redeployContextDelay)
    {

        if (!is_null($redeployContextDelay) && ($redeployContextDelay > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $redeployContextDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($redeployContextDelay) && ($redeployContextDelay < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $redeployContextDelay when calling EnvironmentControlRestEditnodegroupPostRequestNodeGroup., must be bigger than or equal to -2147483648.');
        }


        if (is_null($redeployContextDelay)) {
            throw new \InvalidArgumentException('non-nullable redeployContextDelay cannot be null');
        }

        $this->container['redeployContextDelay'] = $redeployContextDelay;

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


