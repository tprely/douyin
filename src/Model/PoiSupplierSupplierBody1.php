<?php
/**
 * PoiSupplierSupplierBody1
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
 * PoiSupplierSupplierBody1 Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiSupplierSupplierBody1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'body_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'match_type' => 'int',
'match_data_list' => '\swagger_client\Model\PoiSupplierSupplierMatchOriginData[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'match_type' => null,
'match_data_list' => null    ];

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
        'match_type' => 'match_type',
'match_data_list' => 'match_data_list'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'match_type' => 'setMatchType',
'match_data_list' => 'setMatchDataList'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'match_type' => 'getMatchType',
'match_data_list' => 'getMatchDataList'    ];

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

    const POI_SUPPLIER_SUPPLIER_MATCH_TYPE_0 = 0;
const POI_SUPPLIER_SUPPLIER_MATCH_TYPE_1 = 1;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMatchTypeAllowableValues()
    {
        return [
            self::POI_SUPPLIER_SUPPLIER_MATCH_TYPE_0,
            self::POI_SUPPLIER_SUPPLIER_MATCH_TYPE_1,''
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
        $this->container['match_type'] = isset($data['match_type']) ? $data['match_type'] : null;
        $this->container['match_data_list'] = isset($data['match_data_list']) ? $data['match_data_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['match_type'] === null) {
            $invalidProperties[] = "'match_type' can't be null";
        }
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!is_null($this->container['match_type']) && !in_array($this->container['match_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'match_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['match_data_list'] === null) {
            $invalidProperties[] = "'match_data_list' can't be null";
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
     * Gets match_type
     *
     * @return int
     */
    public function getMatchType()
    {
        return $this->container['match_type'];
    }

    /**
     * Sets match_type
     *
     * @param int $match_type 匹配类型，0-离线匹配 1-实时匹配。离线匹配，不会实时返回结果，最大上传1w个数据，通过/poi/supplier/match/query/接口查询匹配结果； 在线匹配，实时返回结果，最大上传100个数据，需要申请授权。
     *
     * @return $this
     */
    public function setMatchType($match_type)
    {
        $allowedValues = $this->getMatchTypeAllowableValues();
        if (!in_array($match_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'match_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['match_type'] = $match_type;

        return $this;
    }

    /**
     * Gets match_data_list
     *
     * @return \swagger_client\Model\PoiSupplierSupplierMatchOriginData[]
     */
    public function getMatchDataList()
    {
        return $this->container['match_data_list'];
    }

    /**
     * Sets match_data_list
     *
     * @param \swagger_client\Model\PoiSupplierSupplierMatchOriginData[] $match_data_list 第三方上传的有效匹配数据
     *
     * @return $this
     */
    public function setMatchDataList($match_data_list)
    {
        $this->container['match_data_list'] = $match_data_list;

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