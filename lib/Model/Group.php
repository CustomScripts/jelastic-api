<?php
/**
 * Group
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
 * Group Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Group implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'groupPricingModels' => 'object[]',
        'isCollaboration' => 'bool',
        'isDefault' => 'bool',
        'isDeleted' => 'bool',
        'isSignup' => 'bool',
        'name' => 'string',
        'quotasValues' => 'object[]',
        'reseller' => '\OpenAPI\Client\Model\GroupReseller',
        'type' => 'string',
        'winDomainId' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'groupPricingModels' => null,
        'isCollaboration' => null,
        'isDefault' => null,
        'isDeleted' => null,
        'isSignup' => null,
        'name' => null,
        'quotasValues' => null,
        'reseller' => null,
        'type' => null,
        'winDomainId' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
		'groupPricingModels' => false,
		'isCollaboration' => false,
		'isDefault' => false,
		'isDeleted' => false,
		'isSignup' => false,
		'name' => false,
		'quotasValues' => false,
		'reseller' => false,
		'type' => false,
		'winDomainId' => false
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
        'description' => 'description',
        'groupPricingModels' => 'groupPricingModels',
        'isCollaboration' => 'isCollaboration',
        'isDefault' => 'isDefault',
        'isDeleted' => 'isDeleted',
        'isSignup' => 'isSignup',
        'name' => 'name',
        'quotasValues' => 'quotasValues',
        'reseller' => 'reseller',
        'type' => 'type',
        'winDomainId' => 'winDomainId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'groupPricingModels' => 'setGroupPricingModels',
        'isCollaboration' => 'setIsCollaboration',
        'isDefault' => 'setIsDefault',
        'isDeleted' => 'setIsDeleted',
        'isSignup' => 'setIsSignup',
        'name' => 'setName',
        'quotasValues' => 'setQuotasValues',
        'reseller' => 'setReseller',
        'type' => 'setType',
        'winDomainId' => 'setWinDomainId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'groupPricingModels' => 'getGroupPricingModels',
        'isCollaboration' => 'getIsCollaboration',
        'isDefault' => 'getIsDefault',
        'isDeleted' => 'getIsDeleted',
        'isSignup' => 'getIsSignup',
        'name' => 'getName',
        'quotasValues' => 'getQuotasValues',
        'reseller' => 'getReseller',
        'type' => 'getType',
        'winDomainId' => 'getWinDomainId'
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

    public const TYPE_POST_0 = 'post(0)';
    public const TYPE_BILLING_1 = 'billing(1)';
    public const TYPE_BETA_2 = 'beta(2)';
    public const TYPE_TRIAL_3 = 'trial(3)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_POST_0,
            self::TYPE_BILLING_1,
            self::TYPE_BETA_2,
            self::TYPE_TRIAL_3,
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('groupPricingModels', $data ?? [], null);
        $this->setIfExists('isCollaboration', $data ?? [], null);
        $this->setIfExists('isDefault', $data ?? [], null);
        $this->setIfExists('isDeleted', $data ?? [], null);
        $this->setIfExists('isSignup', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('quotasValues', $data ?? [], null);
        $this->setIfExists('reseller', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('winDomainId', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['description']) && !preg_match("/(.*){0,2147483647}/", $this->container['description'])) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['groupPricingModels']) && (count($this->container['groupPricingModels']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'groupPricingModels', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && !preg_match("/(.*){0,2147483647}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['quotasValues']) && (count($this->container['quotasValues']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'quotasValues', number of items must be less than or equal to 2147483647.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['winDomainId']) && ($this->container['winDomainId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'winDomainId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['winDomainId']) && ($this->container['winDomainId'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'winDomainId', must be bigger than or equal to -2147483648.";
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
            throw new \InvalidArgumentException('invalid length for $description when calling Group., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($description) && (!preg_match("/(.*){0,2147483647}/", $description))) {
            throw new \InvalidArgumentException("invalid value for \$description when calling Group., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets groupPricingModels
     *
     * @return object[]|null
     */
    public function getGroupPricingModels()
    {
        return $this->container['groupPricingModels'];
    }

    /**
     * Sets groupPricingModels
     *
     * @param object[]|null $groupPricingModels groupPricingModels
     *
     * @return self
     */
    public function setGroupPricingModels($groupPricingModels)
    {

        if (!is_null($groupPricingModels) && (count($groupPricingModels) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $groupPricingModels when calling Group., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($groupPricingModels)) {
            throw new \InvalidArgumentException('non-nullable groupPricingModels cannot be null');
        }

        $this->container['groupPricingModels'] = $groupPricingModels;

        return $this;
    }

    /**
     * Gets isCollaboration
     *
     * @return bool|null
     */
    public function getIsCollaboration()
    {
        return $this->container['isCollaboration'];
    }

    /**
     * Sets isCollaboration
     *
     * @param bool|null $isCollaboration isCollaboration
     *
     * @return self
     */
    public function setIsCollaboration($isCollaboration)
    {

        if (is_null($isCollaboration)) {
            throw new \InvalidArgumentException('non-nullable isCollaboration cannot be null');
        }

        $this->container['isCollaboration'] = $isCollaboration;

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
     * Gets isDeleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool|null $isDeleted isDeleted
     *
     * @return self
     */
    public function setIsDeleted($isDeleted)
    {

        if (is_null($isDeleted)) {
            throw new \InvalidArgumentException('non-nullable isDeleted cannot be null');
        }

        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets isSignup
     *
     * @return bool|null
     */
    public function getIsSignup()
    {
        return $this->container['isSignup'];
    }

    /**
     * Sets isSignup
     *
     * @param bool|null $isSignup isSignup
     *
     * @return self
     */
    public function setIsSignup($isSignup)
    {

        if (is_null($isSignup)) {
            throw new \InvalidArgumentException('non-nullable isSignup cannot be null');
        }

        $this->container['isSignup'] = $isSignup;

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
            throw new \InvalidArgumentException('invalid length for $name when calling Group., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling Group., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets quotasValues
     *
     * @return object[]|null
     */
    public function getQuotasValues()
    {
        return $this->container['quotasValues'];
    }

    /**
     * Sets quotasValues
     *
     * @param object[]|null $quotasValues quotasValues
     *
     * @return self
     */
    public function setQuotasValues($quotasValues)
    {

        if (!is_null($quotasValues) && (count($quotasValues) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $quotasValues when calling Group., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($quotasValues)) {
            throw new \InvalidArgumentException('non-nullable quotasValues cannot be null');
        }

        $this->container['quotasValues'] = $quotasValues;

        return $this;
    }

    /**
     * Gets reseller
     *
     * @return \OpenAPI\Client\Model\GroupReseller|null
     */
    public function getReseller()
    {
        return $this->container['reseller'];
    }

    /**
     * Sets reseller
     *
     * @param \OpenAPI\Client\Model\GroupReseller|null $reseller reseller
     *
     * @return self
     */
    public function setReseller($reseller)
    {

        if (is_null($reseller)) {
            throw new \InvalidArgumentException('non-nullable reseller cannot be null');
        }

        $this->container['reseller'] = $reseller;

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
     * Gets winDomainId
     *
     * @return int|null
     */
    public function getWinDomainId()
    {
        return $this->container['winDomainId'];
    }

    /**
     * Sets winDomainId
     *
     * @param int|null $winDomainId winDomainId
     *
     * @return self
     */
    public function setWinDomainId($winDomainId)
    {

        if (!is_null($winDomainId) && ($winDomainId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $winDomainId when calling Group., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($winDomainId) && ($winDomainId < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $winDomainId when calling Group., must be bigger than or equal to -2147483648.');
        }


        if (is_null($winDomainId)) {
            throw new \InvalidArgumentException('non-nullable winDomainId cannot be null');
        }

        $this->container['winDomainId'] = $winDomainId;

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

