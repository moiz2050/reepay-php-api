<?php
/**
 * Charge
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Reepay API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Charge Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Charge implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Charge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'handle' => 'string',
        'state' => 'string',
        'customer' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'authorized' => '\DateTime',
        'settled' => '\DateTime',
        'cancelled' => '\DateTime',
        'created' => '\DateTime',
        'transaction' => 'string',
        'error' => 'string',
        'source' => '\Swagger\Client\Model\ChargeSource',
        'order_lines' => '\Swagger\Client\Model\OrderLine[]',
        'refunded_amount' => 'int',
        'error_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'handle' => null,
        'state' => null,
        'customer' => null,
        'amount' => 'int32',
        'currency' => null,
        'authorized' => 'date-time',
        'settled' => 'date-time',
        'cancelled' => 'date-time',
        'created' => 'date-time',
        'transaction' => null,
        'error' => null,
        'source' => null,
        'order_lines' => null,
        'refunded_amount' => 'int32',
        'error_state' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'handle' => 'handle',
        'state' => 'state',
        'customer' => 'customer',
        'amount' => 'amount',
        'currency' => 'currency',
        'authorized' => 'authorized',
        'settled' => 'settled',
        'cancelled' => 'cancelled',
        'created' => 'created',
        'transaction' => 'transaction',
        'error' => 'error',
        'source' => 'source',
        'order_lines' => 'order_lines',
        'refunded_amount' => 'refunded_amount',
        'error_state' => 'error_state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'handle' => 'setHandle',
        'state' => 'setState',
        'customer' => 'setCustomer',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'authorized' => 'setAuthorized',
        'settled' => 'setSettled',
        'cancelled' => 'setCancelled',
        'created' => 'setCreated',
        'transaction' => 'setTransaction',
        'error' => 'setError',
        'source' => 'setSource',
        'order_lines' => 'setOrderLines',
        'refunded_amount' => 'setRefundedAmount',
        'error_state' => 'setErrorState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'handle' => 'getHandle',
        'state' => 'getState',
        'customer' => 'getCustomer',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'authorized' => 'getAuthorized',
        'settled' => 'getSettled',
        'cancelled' => 'getCancelled',
        'created' => 'getCreated',
        'transaction' => 'getTransaction',
        'error' => 'getError',
        'source' => 'getSource',
        'order_lines' => 'getOrderLines',
        'refunded_amount' => 'getRefundedAmount',
        'error_state' => 'getErrorState'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATE_AUTHORIZED = 'authorized';
    const STATE_SETTLED = 'settled';
    const STATE_FAILED = 'failed';
    const STATE_CANCELLED = 'cancelled';
    const ERROR_STATE_SOFT_DECLINED = 'soft_declined';
    const ERROR_STATE_HARD_DECLINED = 'hard_declined';
    const ERROR_STATE_PROCESSING_ERROR = 'processing_error';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AUTHORIZED,
            self::STATE_SETTLED,
            self::STATE_FAILED,
            self::STATE_CANCELLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getErrorStateAllowableValues()
    {
        return [
            self::ERROR_STATE_SOFT_DECLINED,
            self::ERROR_STATE_HARD_DECLINED,
            self::ERROR_STATE_PROCESSING_ERROR,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['handle'] = isset($data['handle']) ? $data['handle'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['settled'] = isset($data['settled']) ? $data['settled'] : null;
        $this->container['cancelled'] = isset($data['cancelled']) ? $data['cancelled'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['transaction'] = isset($data['transaction']) ? $data['transaction'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['order_lines'] = isset($data['order_lines']) ? $data['order_lines'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['error_state'] = isset($data['error_state']) ? $data['error_state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['handle'] === null) {
            $invalid_properties[] = "'handle' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['customer'] === null) {
            $invalid_properties[] = "'customer' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] < 0)) {
            $invalid_properties[] = "invalid value for 'amount', must be bigger than or equal to 0.";
        }

        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['transaction'] === null) {
            $invalid_properties[] = "'transaction' can't be null";
        }
        if ($this->container['source'] === null) {
            $invalid_properties[] = "'source' can't be null";
        }
        if ($this->container['order_lines'] === null) {
            $invalid_properties[] = "'order_lines' can't be null";
        }
        if ($this->container['refunded_amount'] === null) {
            $invalid_properties[] = "'refunded_amount' can't be null";
        }
        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'error_state', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['handle'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['customer'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount'] < 0) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['transaction'] === null) {
            return false;
        }
        if ($this->container['source'] === null) {
            return false;
        }
        if ($this->container['order_lines'] === null) {
            return false;
        }
        if ($this->container['refunded_amount'] === null) {
            return false;
        }
        $allowed_values = $this->getErrorStateAllowableValues();
        if (!in_array($this->container['error_state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets handle
     * @return string
     */
    public function getHandle()
    {
        return $this->container['handle'];
    }

    /**
     * Sets handle
     * @param string $handle Per account unique reference to charge/invoice. E.g. order id from own system. Multiple payments can be attempted for the same handle but only one succeeded charge can exist per handle. Max length 255 with allowable characters [a-zA-Z0-9_.-@].
     * @return $this
     */
    public function setHandle($handle)
    {
        $this->container['handle'] = $handle;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The charge state one of the following: `authorized`, `settled`, `failed`, `cancelled`
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = $this->getStateAllowableValues();
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets customer
     * @return string
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param string $customer Customer handle
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount The invoice amount including VAT
     * @return $this
     */
    public function setAmount($amount)
    {

        if (($amount < 0)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling Charge., must be bigger than or equal to 0.');
        }

        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency for the account in [ISO 4217](http://da.wikipedia.org/wiki/ISO_4217) three letter alpha code
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets authorized
     * @return \DateTime
     */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
     * Sets authorized
     * @param \DateTime $authorized When the charge was authorized, if the charge went through an authorize and settle flow, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;

        return $this;
    }

    /**
     * Gets settled
     * @return \DateTime
     */
    public function getSettled()
    {
        return $this->container['settled'];
    }

    /**
     * Sets settled
     * @param \DateTime $settled When the charge was settled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setSettled($settled)
    {
        $this->container['settled'] = $settled;

        return $this;
    }

    /**
     * Gets cancelled
     * @return \DateTime
     */
    public function getCancelled()
    {
        return $this->container['cancelled'];
    }

    /**
     * Sets cancelled
     * @param \DateTime $cancelled When the charge was cancelled, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCancelled($cancelled)
    {
        $this->container['cancelled'] = $cancelled;

        return $this;
    }

    /**
     * Gets created
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param \DateTime $created When the invoice was created, in [ISO-8601](http://en.wikipedia.org/wiki/ISO_8601) extended offset date-time format.
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets transaction
     * @return string
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     * @param string $transaction Transaction id assigned by Reepay
     * @return $this
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string $error Reepay error code if failed. See [transaction errors](https://docs.reepay.com/api/#transaction-errors).
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets source
     * @return \Swagger\Client\Model\ChargeSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param \Swagger\Client\Model\ChargeSource $source Object describing the source for the charge. E.g. credit card.
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets order_lines
     * @return \Swagger\Client\Model\OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->container['order_lines'];
    }

    /**
     * Sets order_lines
     * @param \Swagger\Client\Model\OrderLine[] $order_lines Order lines for charge
     * @return $this
     */
    public function setOrderLines($order_lines)
    {
        $this->container['order_lines'] = $order_lines;

        return $this;
    }

    /**
     * Gets refunded_amount
     * @return int
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     * @param int $refunded_amount Refunded amount
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets error_state
     * @return string
     */
    public function getErrorState()
    {
        return $this->container['error_state'];
    }

    /**
     * Sets error_state
     * @param string $error_state Reepay error state if failed: `soft_declined`, `hard_declined` or `processing_error`. Soft and hard declines indicate a card decline. A soft decline is possibly recoverable and a subsequent request with the same card may succeed. E.g. insufficient funds. A processing error indicates an error processing the card either at Reepay, the acquirer, or between Reepay amd the acquirer.
     * @return $this
     */
    public function setErrorState($error_state)
    {
        $allowed_values = $this->getErrorStateAllowableValues();
        if (!is_null($error_state) && !in_array($error_state, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'error_state', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['error_state'] = $error_state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

