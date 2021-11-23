<?php
/**
 * PoiSupplierSupplierPoisuppliersyncServices
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;

use \ArrayAccess;
use swagger_client\ObjectSerializer;

/**
 * PoiSupplierSupplierPoisuppliersyncServices Class Doc Comment
 *
 * @category Class
 * @description 服务项
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiSupplierSupplierPoisuppliersyncServices implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'poisuppliersync_services';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'service_type' => 'int',
'enable' => 'int',
'entry' => '\swagger_client\Model\PoiSupplierSupplierPoisuppliersyncEntry'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'service_type' => null,
'enable' => null,
'entry' => null    ];

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
        'service_type' => 'service_type',
'enable' => 'enable',
'entry' => 'entry'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'service_type' => 'setServiceType',
'enable' => 'setEnable',
'entry' => 'setEntry'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'service_type' => 'getServiceType',
'enable' => 'getEnable',
'entry' => 'getEntry'    ];

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

    const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_201 = 201;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_202 = 202;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_203 = 203;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9001 = 9001;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9101 = 9101;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9102 = 9102;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9201 = 9201;
const POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9301 = 9301;
const POI_SUPPLIER_SUPPLIER_ENABLE_1 = 1;
const POI_SUPPLIER_SUPPLIER_ENABLE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getServiceTypeAllowableValues()
    {
        return [
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_201,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_202,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_203,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9001,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9101,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9102,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9201,
            self::POI_SUPPLIER_SUPPLIER_SERVICE_TYPE_9301,''
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnableAllowableValues()
    {
        return [
            self::POI_SUPPLIER_SUPPLIER_ENABLE_1,
            self::POI_SUPPLIER_SUPPLIER_ENABLE_2,''
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
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['entry'] = isset($data['entry']) ? $data['entry'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($this->container['service_type']) && !in_array($this->container['service_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEnableAllowableValues();
        if (!is_null($this->container['enable']) && !in_array($this->container['enable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'enable', must be one of '%s'",
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
     * Gets service_type
     *
     * @return int
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type
     *
     * @param int $service_type 服务类型(201-预约点餐服务, 202-预约订位服务, 203-排队取号服务, 9001-门票预订服务, 9101-团购套餐服务, 9102-领优惠劵服务, 9201-在线预约服务, 9301-外卖服务)
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $allowedValues = $this->getServiceTypeAllowableValues();
        if (!is_null($service_type) && !in_array($service_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'service_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets enable
     *
     * @return int
     */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
     * Sets enable
     *
     * @param int $enable 上线状态(1:上线，2:下线)
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $allowedValues = $this->getEnableAllowableValues();
        if (!is_null($enable) && !in_array($enable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'enable', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['enable'] = $enable;

        return $this;
    }

    /**
     * Gets entry
     *
     * @return \swagger_client\Model\PoiSupplierSupplierPoisuppliersyncEntry
     */
    public function getEntry()
    {
        return $this->container['entry'];
    }

    /**
     * Sets entry
     *
     * @param \swagger_client\Model\PoiSupplierSupplierPoisuppliersyncEntry $entry entry
     *
     * @return $this
     */
    public function setEntry($entry)
    {
        $this->container['entry'] = $entry;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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