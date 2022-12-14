<?php
/**
 * Tier
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
 * Tier Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Tier implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currencyPrice' => 'float',
        'free' => 'float',
        'price' => 'float',
        'trialPeriod' => 'int',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'currencyPrice' => 'double',
        'free' => 'double',
        'price' => 'double',
        'trialPeriod' => 'int32',
        'value' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currencyPrice' => false,
		'free' => false,
		'price' => false,
		'trialPeriod' => false,
		'value' => false
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
        'currencyPrice' => 'currencyPrice',
        'free' => 'free',
        'price' => 'price',
        'trialPeriod' => 'trialPeriod',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currencyPrice' => 'setCurrencyPrice',
        'free' => 'setFree',
        'price' => 'setPrice',
        'trialPeriod' => 'setTrialPeriod',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currencyPrice' => 'getCurrencyPrice',
        'free' => 'getFree',
        'price' => 'getPrice',
        'trialPeriod' => 'getTrialPeriod',
        'value' => 'getValue'
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
        $this->setIfExists('currencyPrice', $data ?? [], null);
        $this->setIfExists('free', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('trialPeriod', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if (!is_null($this->container['currencyPrice']) && ($this->container['currencyPrice'] > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            $invalidProperties[] = "invalid value for 'currencyPrice', must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.";
        }

        if (!is_null($this->container['currencyPrice']) && ($this->container['currencyPrice'] < 4.9E-324)) {
            $invalidProperties[] = "invalid value for 'currencyPrice', must be bigger than or equal to 4.9E-324.";
        }

        if (!is_null($this->container['free']) && ($this->container['free'] > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            $invalidProperties[] = "invalid value for 'free', must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.";
        }

        if (!is_null($this->container['free']) && ($this->container['free'] < 4.9E-324)) {
            $invalidProperties[] = "invalid value for 'free', must be bigger than or equal to 4.9E-324.";
        }

        if (!is_null($this->container['price']) && ($this->container['price'] > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            $invalidProperties[] = "invalid value for 'price', must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.";
        }

        if (!is_null($this->container['price']) && ($this->container['price'] < 4.9E-324)) {
            $invalidProperties[] = "invalid value for 'price', must be bigger than or equal to 4.9E-324.";
        }

        if (!is_null($this->container['trialPeriod']) && ($this->container['trialPeriod'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'trialPeriod', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['trialPeriod']) && ($this->container['trialPeriod'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'trialPeriod', must be bigger than or equal to -2147483648.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.";
        }

        if (!is_null($this->container['value']) && ($this->container['value'] < 4.9E-324)) {
            $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to 4.9E-324.";
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
     * Gets currencyPrice
     *
     * @return float|null
     */
    public function getCurrencyPrice()
    {
        return $this->container['currencyPrice'];
    }

    /**
     * Sets currencyPrice
     *
     * @param float|null $currencyPrice currencyPrice
     *
     * @return self
     */
    public function setCurrencyPrice($currencyPrice)
    {

        if (!is_null($currencyPrice) && ($currencyPrice > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            throw new \InvalidArgumentException('invalid value for $currencyPrice when calling Tier., must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.');
        }
        if (!is_null($currencyPrice) && ($currencyPrice < 4.9E-324)) {
            throw new \InvalidArgumentException('invalid value for $currencyPrice when calling Tier., must be bigger than or equal to 4.9E-324.');
        }


        if (is_null($currencyPrice)) {
            throw new \InvalidArgumentException('non-nullable currencyPrice cannot be null');
        }

        $this->container['currencyPrice'] = $currencyPrice;

        return $this;
    }

    /**
     * Gets free
     *
     * @return float|null
     */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
     * Sets free
     *
     * @param float|null $free free
     *
     * @return self
     */
    public function setFree($free)
    {

        if (!is_null($free) && ($free > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            throw new \InvalidArgumentException('invalid value for $free when calling Tier., must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.');
        }
        if (!is_null($free) && ($free < 4.9E-324)) {
            throw new \InvalidArgumentException('invalid value for $free when calling Tier., must be bigger than or equal to 4.9E-324.');
        }


        if (is_null($free)) {
            throw new \InvalidArgumentException('non-nullable free cannot be null');
        }

        $this->container['free'] = $free;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {

        if (!is_null($price) && ($price > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            throw new \InvalidArgumentException('invalid value for $price when calling Tier., must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.');
        }
        if (!is_null($price) && ($price < 4.9E-324)) {
            throw new \InvalidArgumentException('invalid value for $price when calling Tier., must be bigger than or equal to 4.9E-324.');
        }


        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets trialPeriod
     *
     * @return int|null
     */
    public function getTrialPeriod()
    {
        return $this->container['trialPeriod'];
    }

    /**
     * Sets trialPeriod
     *
     * @param int|null $trialPeriod trialPeriod
     *
     * @return self
     */
    public function setTrialPeriod($trialPeriod)
    {

        if (!is_null($trialPeriod) && ($trialPeriod > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $trialPeriod when calling Tier., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($trialPeriod) && ($trialPeriod < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $trialPeriod when calling Tier., must be bigger than or equal to -2147483648.');
        }


        if (is_null($trialPeriod)) {
            throw new \InvalidArgumentException('non-nullable trialPeriod cannot be null');
        }

        $this->container['trialPeriod'] = $trialPeriod;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {

        if (!is_null($value) && ($value > 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368)) {
            throw new \InvalidArgumentException('invalid value for $value when calling Tier., must be smaller than or equal to 179769313486231570814527423731704356798070567525844996598917476803157260780028538760589558632766878171540458953514382464234321326889464182768467546703537516986049910576551282076245490090389328944075868508455133942304583236903222948165808559332123348274797826204144723168738177180919299881250404026184124858368.');
        }
        if (!is_null($value) && ($value < 4.9E-324)) {
            throw new \InvalidArgumentException('invalid value for $value when calling Tier., must be bigger than or equal to 4.9E-324.');
        }


        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }

        $this->container['value'] = $value;

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


