<?php
/**
 * EnterpriseGrouponGrouponOrderOrderDetailOrderInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 团购活动订单详情
 *
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
 * EnterpriseGrouponGrouponOrderOrderDetailOrderInfo Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseGrouponGrouponOrderOrderDetailOrderInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'order_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
'channel' => 'string',
'buyer_open_id' => 'string',
'original_amount' => 'int',
'amount' => 'int',
'refund_amount' => 'int',
'settle_amount' => 'int',
'item_count' => 'int',
'status' => 'int',
'create_time' => 'int',
'pay_time' => 'int',
'refund_time' => 'int',
'codes' => '\swagger_client\Model\EnterpriseGrouponGrouponOrderOrderDetailCodeInfo[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
'channel' => null,
'buyer_open_id' => null,
'original_amount' => null,
'amount' => null,
'refund_amount' => null,
'settle_amount' => null,
'item_count' => null,
'status' => null,
'create_time' => 'int64',
'pay_time' => 'int64',
'refund_time' => 'int64',
'codes' => null    ];

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
        'order_id' => 'order_id',
'channel' => 'channel',
'buyer_open_id' => 'buyer_open_id',
'original_amount' => 'original_amount',
'amount' => 'amount',
'refund_amount' => 'refund_amount',
'settle_amount' => 'settle_amount',
'item_count' => 'item_count',
'status' => 'status',
'create_time' => 'create_time',
'pay_time' => 'pay_time',
'refund_time' => 'refund_time',
'codes' => 'codes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'channel' => 'setChannel',
'buyer_open_id' => 'setBuyerOpenId',
'original_amount' => 'setOriginalAmount',
'amount' => 'setAmount',
'refund_amount' => 'setRefundAmount',
'settle_amount' => 'setSettleAmount',
'item_count' => 'setItemCount',
'status' => 'setStatus',
'create_time' => 'setCreateTime',
'pay_time' => 'setPayTime',
'refund_time' => 'setRefundTime',
'codes' => 'setCodes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'channel' => 'getChannel',
'buyer_open_id' => 'getBuyerOpenId',
'original_amount' => 'getOriginalAmount',
'amount' => 'getAmount',
'refund_amount' => 'getRefundAmount',
'settle_amount' => 'getSettleAmount',
'item_count' => 'getItemCount',
'status' => 'getStatus',
'create_time' => 'getCreateTime',
'pay_time' => 'getPayTime',
'refund_time' => 'getRefundTime',
'codes' => 'getCodes'    ];

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

    const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_1 = 1;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_101 = 101;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_200 = 200;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_201 = 201;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_202 = 202;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_299 = 299;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_300 = 300;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_301 = 301;
const ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_302 = 302;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_1,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_101,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_200,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_201,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_202,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_299,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_300,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_301,
            self::ENTERPRISE_GROUPON_GROUPON_ORDER_ORDER_DETAIL_STATUS_302,''
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['buyer_open_id'] = isset($data['buyer_open_id']) ? $data['buyer_open_id'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['settle_amount'] = isset($data['settle_amount']) ? $data['settle_amount'] : null;
        $this->container['item_count'] = isset($data['item_count']) ? $data['item_count'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['pay_time'] = isset($data['pay_time']) ? $data['pay_time'] : null;
        $this->container['refund_time'] = isset($data['refund_time']) ? $data['refund_time'] : null;
        $this->container['codes'] = isset($data['codes']) ? $data['codes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['buyer_open_id'] === null) {
            $invalidProperties[] = "'buyer_open_id' can't be null";
        }
        if ($this->container['original_amount'] === null) {
            $invalidProperties[] = "'original_amount' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['refund_amount'] === null) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if ($this->container['settle_amount'] === null) {
            $invalidProperties[] = "'settle_amount' can't be null";
        }
        if ($this->container['item_count'] === null) {
            $invalidProperties[] = "'item_count' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['create_time'] === null) {
            $invalidProperties[] = "'create_time' can't be null";
        }
        if ($this->container['pay_time'] === null) {
            $invalidProperties[] = "'pay_time' can't be null";
        }
        if ($this->container['codes'] === null) {
            $invalidProperties[] = "'codes' can't be null";
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
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id 团购活动订单Id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel 订单来源
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets buyer_open_id
     *
     * @return string
     */
    public function getBuyerOpenId()
    {
        return $this->container['buyer_open_id'];
    }

    /**
     * Sets buyer_open_id
     *
     * @param string $buyer_open_id 买家的open_id
     *
     * @return $this
     */
    public function setBuyerOpenId($buyer_open_id)
    {
        $this->container['buyer_open_id'] = $buyer_open_id;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return int
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param int $original_amount 原价，单位分
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount 订单金额，单位分
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return int
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param int $refund_amount 退款金额，单位分
     *
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets settle_amount
     *
     * @return int
     */
    public function getSettleAmount()
    {
        return $this->container['settle_amount'];
    }

    /**
     * Sets settle_amount
     *
     * @param int $settle_amount 结算金额，单位分
     *
     * @return $this
     */
    public function setSettleAmount($settle_amount)
    {
        $this->container['settle_amount'] = $settle_amount;

        return $this;
    }

    /**
     * Gets item_count
     *
     * @return int
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count
     *
     * @param int $item_count 团购券个数
     *
     * @return $this
     */
    public function setItemCount($item_count)
    {
        $this->container['item_count'] = $item_count;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status * 订单状态   * 1: 订单完成   * 101: 支付完成   * 200: 发起核销   * 201: 核销完成   * 202: 核销失败   * 299: 用户申请退款   * 300: 商户发起退款   * 301: 退款成功   * 302: 退款失败
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int $create_time 订单创建时间 unix time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets pay_time
     *
     * @return int
     */
    public function getPayTime()
    {
        return $this->container['pay_time'];
    }

    /**
     * Sets pay_time
     *
     * @param int $pay_time 订单支付时间 unix time
     *
     * @return $this
     */
    public function setPayTime($pay_time)
    {
        $this->container['pay_time'] = $pay_time;

        return $this;
    }

    /**
     * Gets refund_time
     *
     * @return int
     */
    public function getRefundTime()
    {
        return $this->container['refund_time'];
    }

    /**
     * Sets refund_time
     *
     * @param int $refund_time 退款完成时间 unix time
     *
     * @return $this
     */
    public function setRefundTime($refund_time)
    {
        $this->container['refund_time'] = $refund_time;

        return $this;
    }

    /**
     * Gets codes
     *
     * @return \swagger_client\Model\EnterpriseGrouponGrouponOrderOrderDetailCodeInfo[]
     */
    public function getCodes()
    {
        return $this->container['codes'];
    }

    /**
     * Sets codes
     *
     * @param \swagger_client\Model\EnterpriseGrouponGrouponOrderOrderDetailCodeInfo[] $codes 团购券码列表
     *
     * @return $this
     */
    public function setCodes($codes)
    {
        $this->container['codes'] = $codes;

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
