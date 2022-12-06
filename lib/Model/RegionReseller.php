<?php
/**
 * RegionReseller
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
 * RegionReseller Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RegionReseller implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RegionReseller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cert' => 'string',
        'domain' => 'string',
        'id' => 'int',
        'intermediate' => 'string',
        'isSslEnabled' => 'bool',
        'key' => 'string',
        'nginxCert' => 'string',
        'regionId' => 'int',
        'resellerId' => 'int',
        'source502' => 'string',
        'sslExpireDate' => '\DateTime',
        'sslType' => 'string',
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
        'cert' => null,
        'domain' => null,
        'id' => 'int32',
        'intermediate' => null,
        'isSslEnabled' => null,
        'key' => null,
        'nginxCert' => null,
        'regionId' => 'int32',
        'resellerId' => 'int32',
        'source502' => null,
        'sslExpireDate' => 'date',
        'sslType' => null,
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cert' => false,
		'domain' => false,
		'id' => false,
		'intermediate' => false,
		'isSslEnabled' => false,
		'key' => false,
		'nginxCert' => false,
		'regionId' => false,
		'resellerId' => false,
		'source502' => false,
		'sslExpireDate' => false,
		'sslType' => false,
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
        'cert' => 'cert',
        'domain' => 'domain',
        'id' => 'id',
        'intermediate' => 'intermediate',
        'isSslEnabled' => 'isSslEnabled',
        'key' => 'key',
        'nginxCert' => 'nginxCert',
        'regionId' => 'regionId',
        'resellerId' => 'resellerId',
        'source502' => 'source502',
        'sslExpireDate' => 'sslExpireDate',
        'sslType' => 'sslType',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cert' => 'setCert',
        'domain' => 'setDomain',
        'id' => 'setId',
        'intermediate' => 'setIntermediate',
        'isSslEnabled' => 'setIsSslEnabled',
        'key' => 'setKey',
        'nginxCert' => 'setNginxCert',
        'regionId' => 'setRegionId',
        'resellerId' => 'setResellerId',
        'source502' => 'setSource502',
        'sslExpireDate' => 'setSslExpireDate',
        'sslType' => 'setSslType',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cert' => 'getCert',
        'domain' => 'getDomain',
        'id' => 'getId',
        'intermediate' => 'getIntermediate',
        'isSslEnabled' => 'getIsSslEnabled',
        'key' => 'getKey',
        'nginxCert' => 'getNginxCert',
        'regionId' => 'getRegionId',
        'resellerId' => 'getResellerId',
        'source502' => 'getSource502',
        'sslExpireDate' => 'getSslExpireDate',
        'sslType' => 'getSslType',
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

    public const TYPE_PLATFORM_0 = 'PLATFORM(0)';
    public const TYPE_REGION_1 = 'REGION(1)';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PLATFORM_0,
            self::TYPE_REGION_1,
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
        $this->setIfExists('cert', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('intermediate', $data ?? [], null);
        $this->setIfExists('isSslEnabled', $data ?? [], null);
        $this->setIfExists('key', $data ?? [], null);
        $this->setIfExists('nginxCert', $data ?? [], null);
        $this->setIfExists('regionId', $data ?? [], null);
        $this->setIfExists('resellerId', $data ?? [], null);
        $this->setIfExists('source502', $data ?? [], null);
        $this->setIfExists('sslExpireDate', $data ?? [], null);
        $this->setIfExists('sslType', $data ?? [], null);
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

        if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['intermediate']) && (mb_strlen($this->container['intermediate']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'intermediate', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['intermediate']) && !preg_match("/(.*){0,2147483647}/", $this->container['intermediate'])) {
            $invalidProperties[] = "invalid value for 'intermediate', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['key']) && !preg_match("/(.*){0,2147483647}/", $this->container['key'])) {
            $invalidProperties[] = "invalid value for 'key', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['nginxCert']) && (mb_strlen($this->container['nginxCert']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'nginxCert', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['nginxCert']) && !preg_match("/(.*){0,2147483647}/", $this->container['nginxCert'])) {
            $invalidProperties[] = "invalid value for 'nginxCert', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['regionId']) && ($this->container['regionId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'regionId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['regionId']) && ($this->container['regionId'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'regionId', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['resellerId']) && ($this->container['resellerId'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'resellerId', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['resellerId']) && ($this->container['resellerId'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'resellerId', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['source502']) && (mb_strlen($this->container['source502']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'source502', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['source502']) && !preg_match("/(.*){0,2147483647}/", $this->container['source502'])) {
            $invalidProperties[] = "invalid value for 'source502', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['sslExpireDate']) && (mb_strlen($this->container['sslExpireDate']) > 47)) {
            $invalidProperties[] = "invalid value for 'sslExpireDate', the character length must be smaller than or equal to 47.";
        }

        if (!is_null($this->container['sslExpireDate']) && !preg_match("/(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/", $this->container['sslExpireDate'])) {
            $invalidProperties[] = "invalid value for 'sslExpireDate', must be conform to the pattern /(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/.";
        }

        if (!is_null($this->container['sslType']) && (mb_strlen($this->container['sslType']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'sslType', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['sslType']) && !preg_match("/(.*){0,2147483647}/", $this->container['sslType'])) {
            $invalidProperties[] = "invalid value for 'sslType', must be conform to the pattern /(.*){0,2147483647}/.";
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
            throw new \InvalidArgumentException('invalid length for $cert when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($cert) && (!preg_match("/(.*){0,2147483647}/", $cert))) {
            throw new \InvalidArgumentException("invalid value for \$cert when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
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
            throw new \InvalidArgumentException('invalid length for $domain when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($domain) && (!preg_match("/(.*){0,2147483647}/", $domain))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

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
            throw new \InvalidArgumentException('invalid value for $id when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($id) && ($id < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RegionReseller., must be bigger than or equal to -2147483648.');
        }


        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException('invalid length for $intermediate when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($intermediate) && (!preg_match("/(.*){0,2147483647}/", $intermediate))) {
            throw new \InvalidArgumentException("invalid value for \$intermediate when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($intermediate)) {
            throw new \InvalidArgumentException('non-nullable intermediate cannot be null');
        }

        $this->container['intermediate'] = $intermediate;

        return $this;
    }

    /**
     * Gets isSslEnabled
     *
     * @return bool|null
     */
    public function getIsSslEnabled()
    {
        return $this->container['isSslEnabled'];
    }

    /**
     * Sets isSslEnabled
     *
     * @param bool|null $isSslEnabled isSslEnabled
     *
     * @return self
     */
    public function setIsSslEnabled($isSslEnabled)
    {

        if (is_null($isSslEnabled)) {
            throw new \InvalidArgumentException('non-nullable isSslEnabled cannot be null');
        }

        $this->container['isSslEnabled'] = $isSslEnabled;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string|null $key key
     *
     * @return self
     */
    public function setKey($key)
    {
        if (!is_null($key) && (mb_strlen($key) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $key when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($key) && (!preg_match("/(.*){0,2147483647}/", $key))) {
            throw new \InvalidArgumentException("invalid value for \$key when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($key)) {
            throw new \InvalidArgumentException('non-nullable key cannot be null');
        }

        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets nginxCert
     *
     * @return string|null
     */
    public function getNginxCert()
    {
        return $this->container['nginxCert'];
    }

    /**
     * Sets nginxCert
     *
     * @param string|null $nginxCert nginxCert
     *
     * @return self
     */
    public function setNginxCert($nginxCert)
    {
        if (!is_null($nginxCert) && (mb_strlen($nginxCert) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $nginxCert when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($nginxCert) && (!preg_match("/(.*){0,2147483647}/", $nginxCert))) {
            throw new \InvalidArgumentException("invalid value for \$nginxCert when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($nginxCert)) {
            throw new \InvalidArgumentException('non-nullable nginxCert cannot be null');
        }

        $this->container['nginxCert'] = $nginxCert;

        return $this;
    }

    /**
     * Gets regionId
     *
     * @return int|null
     */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
     * Sets regionId
     *
     * @param int|null $regionId regionId
     *
     * @return self
     */
    public function setRegionId($regionId)
    {

        if (!is_null($regionId) && ($regionId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $regionId when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($regionId) && ($regionId < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $regionId when calling RegionReseller., must be bigger than or equal to -2147483648.');
        }


        if (is_null($regionId)) {
            throw new \InvalidArgumentException('non-nullable regionId cannot be null');
        }

        $this->container['regionId'] = $regionId;

        return $this;
    }

    /**
     * Gets resellerId
     *
     * @return int|null
     */
    public function getResellerId()
    {
        return $this->container['resellerId'];
    }

    /**
     * Sets resellerId
     *
     * @param int|null $resellerId resellerId
     *
     * @return self
     */
    public function setResellerId($resellerId)
    {

        if (!is_null($resellerId) && ($resellerId > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $resellerId when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($resellerId) && ($resellerId < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $resellerId when calling RegionReseller., must be bigger than or equal to -2147483648.');
        }


        if (is_null($resellerId)) {
            throw new \InvalidArgumentException('non-nullable resellerId cannot be null');
        }

        $this->container['resellerId'] = $resellerId;

        return $this;
    }

    /**
     * Gets source502
     *
     * @return string|null
     */
    public function getSource502()
    {
        return $this->container['source502'];
    }

    /**
     * Sets source502
     *
     * @param string|null $source502 source502
     *
     * @return self
     */
    public function setSource502($source502)
    {
        if (!is_null($source502) && (mb_strlen($source502) > 2147483647)) {
            throw new \InvalidArgumentException('invalid length for $source502 when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($source502) && (!preg_match("/(.*){0,2147483647}/", $source502))) {
            throw new \InvalidArgumentException("invalid value for \$source502 when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($source502)) {
            throw new \InvalidArgumentException('non-nullable source502 cannot be null');
        }

        $this->container['source502'] = $source502;

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
        if (!is_null($sslExpireDate) && (mb_strlen($sslExpireDate) > 47)) {
            throw new \InvalidArgumentException('invalid length for $sslExpireDate when calling RegionReseller., must be smaller than or equal to 47.');
        }
        if (!is_null($sslExpireDate) && (!preg_match("/(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/", $sslExpireDate))) {
            throw new \InvalidArgumentException("invalid value for \$sslExpireDate when calling RegionReseller., must conform to the pattern /(\\d{4})-(\\d{2})-(\\d{2}) (\\d{2}):(\\d{2}):(\\d{2})/.");
        }


        if (is_null($sslExpireDate)) {
            throw new \InvalidArgumentException('non-nullable sslExpireDate cannot be null');
        }

        $this->container['sslExpireDate'] = $sslExpireDate;

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
            throw new \InvalidArgumentException('invalid length for $sslType when calling RegionReseller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($sslType) && (!preg_match("/(.*){0,2147483647}/", $sslType))) {
            throw new \InvalidArgumentException("invalid value for \$sslType when calling RegionReseller., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($sslType)) {
            throw new \InvalidArgumentException('non-nullable sslType cannot be null');
        }

        $this->container['sslType'] = $sslType;

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


