<?php
/**
 * PublicHolidayOccurrence
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * validateapi
 *
 * The validation APIs help you validate data. Check if an E-mail address is real. Check if a domain is real. Check up on an IP address, and even where it is located. All this and much more is available in the validation API.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PublicHolidayOccurrence Class Doc Comment
 *
 * @category Class
 * @description Public holiday occurrence
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PublicHolidayOccurrence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PublicHolidayOccurrence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'english_name' => 'string',
        'local_name' => 'string',
        'occurrence_date' => '\DateTime',
        'holiday_type' => 'string',
        'nationwaide' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'english_name' => null,
        'local_name' => null,
        'occurrence_date' => 'date-time',
        'holiday_type' => null,
        'nationwaide' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'english_name' => 'EnglishName',
        'local_name' => 'LocalName',
        'occurrence_date' => 'OccurrenceDate',
        'holiday_type' => 'HolidayType',
        'nationwaide' => 'Nationwaide'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'english_name' => 'setEnglishName',
        'local_name' => 'setLocalName',
        'occurrence_date' => 'setOccurrenceDate',
        'holiday_type' => 'setHolidayType',
        'nationwaide' => 'setNationwaide'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'english_name' => 'getEnglishName',
        'local_name' => 'getLocalName',
        'occurrence_date' => 'getOccurrenceDate',
        'holiday_type' => 'getHolidayType',
        'nationwaide' => 'getNationwaide'
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
        return self::$swaggerModelName;
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
        $this->container['english_name'] = isset($data['english_name']) ? $data['english_name'] : null;
        $this->container['local_name'] = isset($data['local_name']) ? $data['local_name'] : null;
        $this->container['occurrence_date'] = isset($data['occurrence_date']) ? $data['occurrence_date'] : null;
        $this->container['holiday_type'] = isset($data['holiday_type']) ? $data['holiday_type'] : null;
        $this->container['nationwaide'] = isset($data['nationwaide']) ? $data['nationwaide'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets english_name
     *
     * @return string
     */
    public function getEnglishName()
    {
        return $this->container['english_name'];
    }

    /**
     * Sets english_name
     *
     * @param string $english_name Name of the holiday in English
     *
     * @return $this
     */
    public function setEnglishName($english_name)
    {
        $this->container['english_name'] = $english_name;

        return $this;
    }

    /**
     * Gets local_name
     *
     * @return string
     */
    public function getLocalName()
    {
        return $this->container['local_name'];
    }

    /**
     * Sets local_name
     *
     * @param string $local_name Local name of the holiday
     *
     * @return $this
     */
    public function setLocalName($local_name)
    {
        $this->container['local_name'] = $local_name;

        return $this;
    }

    /**
     * Gets occurrence_date
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->container['occurrence_date'];
    }

    /**
     * Sets occurrence_date
     *
     * @param \DateTime $occurrence_date Date of the holiday (start time)
     *
     * @return $this
     */
    public function setOccurrenceDate($occurrence_date)
    {
        $this->container['occurrence_date'] = $occurrence_date;

        return $this;
    }

    /**
     * Gets holiday_type
     *
     * @return string
     */
    public function getHolidayType()
    {
        return $this->container['holiday_type'];
    }

    /**
     * Sets holiday_type
     *
     * @param string $holiday_type Type of the holiday; possible values are: Public, Bank, School, Authorities, Optional, Observance
     *
     * @return $this
     */
    public function setHolidayType($holiday_type)
    {
        $this->container['holiday_type'] = $holiday_type;

        return $this;
    }

    /**
     * Gets nationwaide
     *
     * @return bool
     */
    public function getNationwaide()
    {
        return $this->container['nationwaide'];
    }

    /**
     * Sets nationwaide
     *
     * @param bool $nationwaide True if the holiday is celebrated in all locales in the country, false otherwise
     *
     * @return $this
     */
    public function setNationwaide($nationwaide)
    {
        $this->container['nationwaide'] = $nationwaide;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


