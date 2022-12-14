<?php
/**
 * GroupReseller
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
 * GroupReseller Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GroupReseller implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Group_reseller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'regions' => '\OpenAPI\Client\Model\RegionReseller[]',
        'certKey' => 'string',
        'sslType' => 'string',
        'cert' => 'string',
        'domain' => 'string',
        'sslEnabled' => 'bool',
        'sslExpireDate' => '\DateTime',
        'intermediate' => 'string',
        'name' => 'string',
        'comment' => 'string',
        'ownerUid' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'regions' => null,
        'certKey' => null,
        'sslType' => null,
        'cert' => null,
        'domain' => null,
        'sslEnabled' => null,
        'sslExpireDate' => 'date',
        'intermediate' => null,
        'name' => null,
        'comment' => null,
        'ownerUid' => 'int32',
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'regions' => false,
		'certKey' => false,
		'sslType' => false,
		'cert' => false,
		'domain' => false,
		'sslEnabled' => false,
		'sslExpireDate' => false,
		'intermediate' => false,
		'name' => false,
		'comment' => false,
		'ownerUid' => false,
		'status' => false
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
        'regions' => 'regions',
        'certKey' => 'certKey',
        'sslType' => 'sslType',
        'cert' => 'cert',
        'domain' => 'domain',
        'sslEnabled' => 'sslEnabled',
        'sslExpireDate' => 'sslExpireDate',
        'intermediate' => 'intermediate',
        'name' => 'name',
        'comment' => 'comment',
        'ownerUid' => 'ownerUid',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'regions' => 'setRegions',
        'certKey' => 'setCertKey',
        'sslType' => 'setSslType',
        'cert' => 'setCert',
        'domain' => 'setDomain',
        'sslEnabled' => 'setSslEnabled',
        'sslExpireDate' => 'setSslExpireDate',
        'intermediate' => 'setIntermediate',
        'name' => 'setName',
        'comment' => 'setComment',
        'ownerUid' => 'setOwnerUid',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'regions' => 'getRegions',
        'certKey' => 'getCertKey',
        'sslType' => 'getSslType',
        'cert' => 'getCert',
        'domain' => 'getDomain',
        'sslEnabled' => 'getSslEnabled',
        'sslExpireDate' => 'getSslExpireDate',
        'intermediate' => 'getIntermediate',
        'name' => 'getName',
        'comment' => 'getComment',
        'ownerUid' => 'getOwnerUid',
        'status' => 'getStatus'
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

    public const STATUS_ACTIVE_0 = 'ACTIVE(0)';
    public const STATUS_INACTIVE_1 = 'INACTIVE(1)';
    public const STATUS_STOPPED_2 = 'STOPPED(2)';
    public const STATUS_SUSPENDED_3 = 'SUSPENDED(3)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE_0,
            self::STATUS_INACTIVE_1,
            self::STATUS_STOPPED_2,
            self::STATUS_SUSPENDED_3,
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
        $this->setIfExists('regions', $data ?? [], null);
        $this->setIfExists('certKey', $data ?? [], null);
        $this->setIfExists('sslType', $data ?? [], null);
        $this->setIfExists('cert', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('sslEnabled', $data ?? [], null);
        $this->setIfExists('sslExpireDate', $data ?? [], null);
        $this->setIfExists('intermediate', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('ownerUid', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['regions']) && (count($this->container['regions']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'regions', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['certKey']) && (mb_strlen($this->container['certKey']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'certKey', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['certKey']) && !preg_match("/(.*){0,2147483647}/", $this->container['certKey'])) {
            $invalidProperties[] = "invalid value for 'certKey', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['sslType']) && (mb_strlen($this->container['sslType']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'sslType', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sslType']) && !preg_match("/(.*){0,2147483647}/", $this->container['sslType'])) {
            $invalidProperties[] = "invalid value for 'sslType', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'cert', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['cert']) && !preg_match("/(.*){0,2147483647}/", $this->container['cert'])) {
            $invalidProperties[] = "invalid value for 'cert', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['domain']) && !preg_match("/(.*){0,2147483647}/", $this->container['domain'])) {
            $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['sslExpireDate']) && (mb_strlen($this->container['sslExpireDate']) > 19)) {
            $invalidProperties[] = "invalid value for 'sslExpireDate', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['sslExpireDate']) && !preg_match("/(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/", $this->container['sslExpireDate'])) {
            $invalidProperties[] = "invalid value for 'sslExpireDate', must be conform to the pattern /(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/.";
        }

        if (!is_null($this->container['intermediate']) && (mb_strlen($this->container['intermediate']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'intermediate', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['intermediate']) && !preg_match("/(.*){0,2147483647}/", $this->container['intermediate'])) {
            $invalidProperties[] = "invalid value for 'intermediate', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['name']) && !preg_match("/(.*){0,2147483647}/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['comment']) && !preg_match("/(.*){0,2147483647}/", $this->container['comment'])) {
            $invalidProperties[] = "invalid value for 'comment', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['ownerUid']) && ($this->container['ownerUid'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'ownerUid', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['ownerUid']) && ($this->container['ownerUid'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'ownerUid', must be bigger than or equal to -2147483648.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets regions
     *
     * @return \OpenAPI\Client\Model\RegionReseller[]|null
     */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
     * Sets regions
     *
     * @param \OpenAPI\Client\Model\RegionReseller[]|null $regions regions
     *
     * @return self
     */
    public function setRegions($regions)
    {

        if (!is_null($regions) && (count($regions) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $regions when calling GroupReseller., number of items must be less than or equal to 2147483647.');
        }

        if (is_null($regions)) {
            throw new \InvalidArgumentException('non-nullable regions cannot be null');
        }

        $this->container['regions'] = $regions;

        return $this;
    }

    /**
     * Gets certKey
     *
     * @return string|null
     */
    public function getCertKey()
    {
        return $this->container['certKey'];
    }

    /**
     * Sets certKey
     *
     * @param string|null $certKey certKey
     *
     * @return self
     */
    public function setCertKey($certKey)
    {
        if (!is_null($certKey) && (mb_strlen($certKey) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $certKey when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($certKey) && (!preg_match("/(.*){0,2147483647}/", $certKey))) {
            throw new \InvalidArgumentException("invalid value for \$certKey when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($certKey)) {
            throw new \InvalidArgumentException('non-nullable certKey cannot be null');
        }

        $this->container['certKey'] = $certKey;

        return $this;
    }

    /**
     * Gets sslType
     *
     * @return string|null
     */
    public function getSslType()
    {
        return $this->container['sslType'];
    }

    /**
     * Sets sslType
     *
     * @param string|null $sslType sslType
     *
     * @return self
     */
    public function setSslType($sslType)
    {
        if (!is_null($sslType) && (mb_strlen($sslType) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $sslType when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sslType) && (!preg_match("/(.*){0,2147483647}/", $sslType))) {
            throw new \InvalidArgumentException("invalid value for \$sslType when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($sslType)) {
            throw new \InvalidArgumentException('non-nullable sslType cannot be null');
        }

        $this->container['sslType'] = $sslType;

        return $this;
    }

    /**
     * Gets cert
     *
     * @return string|null
     */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
     * Sets cert
     *
     * @param string|null $cert cert
     *
     * @return self
     */
    public function setCert($cert)
    {
        if (!is_null($cert) && (mb_strlen($cert) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $cert when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($cert) && (!preg_match("/(.*){0,2147483647}/", $cert))) {
            throw new \InvalidArgumentException("invalid value for \$cert when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($cert)) {
            throw new \InvalidArgumentException('non-nullable cert cannot be null');
        }

        $this->container['cert'] = $cert;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string|null
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string|null $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (!is_null($domain) && (mb_strlen($domain) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($domain) && (!preg_match("/(.*){0,2147483647}/", $domain))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets sslEnabled
     *
     * @return bool|null
     */
    public function getSslEnabled()
    {
        return $this->container['sslEnabled'];
    }

    /**
     * Sets sslEnabled
     *
     * @param bool|null $sslEnabled sslEnabled
     *
     * @return self
     */
    public function setSslEnabled($sslEnabled)
    {

        if (is_null($sslEnabled)) {
            throw new \InvalidArgumentException('non-nullable sslEnabled cannot be null');
        }

        $this->container['sslEnabled'] = $sslEnabled;

        return $this;
    }

    /**
     * Gets sslExpireDate
     *
     * @return \DateTime|null
     */
    public function getSslExpireDate()
    {
        return $this->container['sslExpireDate'];
    }

    /**
     * Sets sslExpireDate
     *
     * @param \DateTime|null $sslExpireDate sslExpireDate
     *
     * @return self
     */
    public function setSslExpireDate($sslExpireDate)
    {
        if (!is_null($sslExpireDate) && (mb_strlen($sslExpireDate) > 19)) {
            throw new \InvalidArgumentException('invalid length for $sslExpireDate when calling GroupReseller., must be smaller than or equal to 19.');
        }
        if (!is_null($sslExpireDate) && (!preg_match("/(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/", $sslExpireDate))) {
            throw new \InvalidArgumentException("invalid value for \$sslExpireDate when calling GroupReseller., must conform to the pattern /(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/.");
        }


        if (is_null($sslExpireDate)) {
            throw new \InvalidArgumentException('non-nullable sslExpireDate cannot be null');
        }

        $this->container['sslExpireDate'] = $sslExpireDate;

        return $this;
    }

    /**
     * Gets intermediate
     *
     * @return string|null
     */
    public function getIntermediate()
    {
        return $this->container['intermediate'];
    }

    /**
     * Sets intermediate
     *
     * @param string|null $intermediate intermediate
     *
     * @return self
     */
    public function setIntermediate($intermediate)
    {
        if (!is_null($intermediate) && (mb_strlen($intermediate) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $intermediate when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($intermediate) && (!preg_match("/(.*){0,2147483647}/", $intermediate))) {
            throw new \InvalidArgumentException("invalid value for \$intermediate when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($intermediate)) {
            throw new \InvalidArgumentException('non-nullable intermediate cannot be null');
        }

        $this->container['intermediate'] = $intermediate;

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
            throw new \InvalidArgumentException('invalid length for $name when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($name) && (!preg_match("/(.*){0,2147483647}/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($comment) && (!preg_match("/(.*){0,2147483647}/", $comment))) {
            throw new \InvalidArgumentException("invalid value for \$comment when calling GroupReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }

        $this->container['comment'] = $comment;

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
            throw new \InvalidArgumentException('invalid value for $ownerUid when calling GroupReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($ownerUid) && ($ownerUid < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $ownerUid when calling GroupReseller., must be bigger than or equal to -2147483648.');
        }


        if (is_null($ownerUid)) {
            throw new \InvalidArgumentException('non-nullable ownerUid cannot be null');
        }

        $this->container['ownerUid'] = $ownerUid;

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


