<?php
/**
 * PoiSupplierSupplierSyncStatus
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
 * PoiSupplierSupplierSyncStatus Class Doc Comment
 *
 * @category Class
 * @description 数据同步结果
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiSupplierSupplierSyncStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sync_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'last_sync_status' => 'int',
'fail_reason' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'last_sync_status' => null,
'fail_reason' => null    ];

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
        'last_sync_status' => 'last_sync_status',
'fail_reason' => 'fail_reason'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_sync_status' => 'setLastSyncStatus',
'fail_reason' => 'setFailReason'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_sync_status' => 'getLastSyncStatus',
'fail_reason' => 'getFailReason'    ];

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

    const POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_0 = 0;
const POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_1 = 1;
const POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLastSyncStatusAllowableValues()
    {
        return [
            self::POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_0,
            self::POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_1,
            self::POI_SUPPLIER_SUPPLIER_LAST_SYNC_STATUS_2,''
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
        $this->container['last_sync_status'] = isset($data['last_sync_status']) ? $data['last_sync_status'] : null;
        $this->container['fail_reason'] = isset($data['fail_reason']) ? $data['fail_reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLastSyncStatusAllowableValues();
        if (!is_null($this->container['last_sync_status']) && !in_array($this->container['last_sync_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'last_sync_status', must be one of '%s'",
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
     * Gets last_sync_status
     *
     * @return int
     */
    public function getLastSyncStatus()
    {
        return $this->container['last_sync_status'];
    }

    /**
     * Sets last_sync_status
     *
     * @param int $last_sync_status 最近一次酒店同步状态, 0 - 未处理; 1 - 通过; 2 - 未通过
     *
     * @return $this
     */
    public function setLastSyncStatus($last_sync_status)
    {
        $allowedValues = $this->getLastSyncStatusAllowableValues();
        if (!is_null($last_sync_status) && !in_array($last_sync_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'last_sync_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['last_sync_status'] = $last_sync_status;

        return $this;
    }

    /**
     * Gets fail_reason
     *
     * @return string
     */
    public function getFailReason()
    {
        return $this->container['fail_reason'];
    }

    /**
     * Sets fail_reason
     *
     * @param string $fail_reason 同步失败原因，抖音风控政策问题，该字段无法提供太多信息，目前审核不通过联系抖音运营做进一步处理
     *
     * @return $this
     */
    public function setFailReason($fail_reason)
    {
        $this->container['fail_reason'] = $fail_reason;

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
