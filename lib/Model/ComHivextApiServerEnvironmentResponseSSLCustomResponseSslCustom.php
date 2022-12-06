<?php
/**
 * ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom
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
 * ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'com_hivext_api_server_environment_response_SSLCustomResponse_sslCustom';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certKey' => 'string',
        'domain' => 'string',
        'intermediate' => 'string',
        'useObjectHash' => 'bool',
        'cert' => 'string',
        'id' => 'int',
        'sslCert' => '\OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomainSslCert',
        'sslEnable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certKey' => null,
        'domain' => null,
        'intermediate' => null,
        'useObjectHash' => null,
        'cert' => null,
        'id' => 'int32',
        'sslCert' => null,
        'sslEnable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'certKey' => false,
		'domain' => false,
		'intermediate' => false,
		'useObjectHash' => false,
		'cert' => false,
		'id' => false,
		'sslCert' => false,
		'sslEnable' => false
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
        'certKey' => 'certKey',
        'domain' => 'domain',
        'intermediate' => 'intermediate',
        'useObjectHash' => 'useObjectHash',
        'cert' => 'cert',
        'id' => 'id',
        'sslCert' => 'sslCert',
        'sslEnable' => 'sslEnable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certKey' => 'setCertKey',
        'domain' => 'setDomain',
        'intermediate' => 'setIntermediate',
        'useObjectHash' => 'setUseObjectHash',
        'cert' => 'setCert',
        'id' => 'setId',
        'sslCert' => 'setSslCert',
        'sslEnable' => 'setSslEnable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certKey' => 'getCertKey',
        'domain' => 'getDomain',
        'intermediate' => 'getIntermediate',
        'useObjectHash' => 'getUseObjectHash',
        'cert' => 'getCert',
        'id' => 'getId',
        'sslCert' => 'getSslCert',
        'sslEnable' => 'getSslEnable'
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
        $this->setIfExists('certKey', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('intermediate', $data ?? [], null);
        $this->setIfExists('useObjectHash', $data ?? [], null);
        $this->setIfExists('cert', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('sslCert', $data ?? [], null);
        $this->setIfExists('sslEnable', $data ?? [], null);
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

        if (!is_null($this->container['certKey']) && (mb_strlen($this->container['certKey']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'certKey', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['certKey']) && !preg_match("/(.*){0,2147483647}/", $this->container['certKey'])) {
            $invalidProperties[] = "invalid value for 'certKey', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['domain']) && !preg_match("/(.*){0,2147483647}/", $this->container['domain'])) {
            $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['intermediate']) && (mb_strlen($this->container['intermediate']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'intermediate', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['intermediate']) && !preg_match("/(.*){0,2147483647}/", $this->container['intermediate'])) {
            $invalidProperties[] = "invalid value for 'intermediate', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'cert', the character length must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['cert']) && !preg_match("/(.*){0,2147483647}/", $this->container['cert'])) {
            $invalidProperties[] = "invalid value for 'cert', must be conform to the pattern /(.*){0,2147483647}/.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['id']) && ($this->container['id'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to -2147483648.";
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
            throw new \InvalidArgumentException('invalid length for $certKey when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($certKey) && (!preg_match("/(.*){0,2147483647}/", $certKey))) {
            throw new \InvalidArgumentException("invalid value for \$certKey when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($certKey)) {
            throw new \InvalidArgumentException('non-nullable certKey cannot be null');
        }

        $this->container['certKey'] = $certKey;

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
            throw new \InvalidArgumentException('invalid length for $domain when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($domain) && (!preg_match("/(.*){0,2147483647}/", $domain))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }

        $this->container['domain'] = $domain;

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
            throw new \InvalidArgumentException('invalid length for $intermediate when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($intermediate) && (!preg_match("/(.*){0,2147483647}/", $intermediate))) {
            throw new \InvalidArgumentException("invalid value for \$intermediate when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($intermediate)) {
            throw new \InvalidArgumentException('non-nullable intermediate cannot be null');
        }

        $this->container['intermediate'] = $intermediate;

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
            throw new \InvalidArgumentException('invalid length for $cert when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($cert) && (!preg_match("/(.*){0,2147483647}/", $cert))) {
            throw new \InvalidArgumentException("invalid value for \$cert when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must conform to the pattern /(.*){0,2147483647}/.");
        }


        if (is_null($cert)) {
            throw new \InvalidArgumentException('non-nullable cert cannot be null');
        }

        $this->container['cert'] = $cert;

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
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($id) && ($id < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $id when calling ComHivextApiServerEnvironmentResponseSSLCustomResponseSslCustom., must be bigger than or equal to -2147483648.');
        }


        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sslCert
     *
     * @return \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomainSslCert|null
     */
    public function getSslCert()
    {
        return $this->container['sslCert'];
    }

    /**
     * Sets sslCert
     *
     * @param \OpenAPI\Client\Model\ComHivextApiServerEnvironmentResponseExtDomainResponseExtDomainSslCert|null $sslCert sslCert
     *
     * @return self
     */
    public function setSslCert($sslCert)
    {

        if (is_null($sslCert)) {
            throw new \InvalidArgumentException('non-nullable sslCert cannot be null');
        }

        $this->container['sslCert'] = $sslCert;

        return $this;
    }

    /**
     * Gets sslEnable
     *
     * @return bool|null
     */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
     * Sets sslEnable
     *
     * @param bool|null $sslEnable sslEnable
     *
     * @return self
     */
    public function setSslEnable($sslEnable)
    {

        if (is_null($sslEnable)) {
            throw new \InvalidArgumentException('non-nullable sslEnable cannot be null');
        }

        $this->container['sslEnable'] = $sslEnable;

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

