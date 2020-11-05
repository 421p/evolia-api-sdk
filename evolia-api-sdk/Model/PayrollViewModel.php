<?php
/**
 * PayrollViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Evolia
 *
 * Connection of Troops & Evolia
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.22
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Evolia\Model;

use \ArrayAccess;
use \Evolia\ObjectSerializer;

/**
 * PayrollViewModel Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayrollViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PayrollViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'startDate' => '\DateTime',
'endDate' => '\DateTime',
'customer' => '\Evolia\Model\Customer',
'candidate' => '\Evolia\Model\Candidate',
'documentUrl' => 'string',
'details' => '\Evolia\Model\PayrollDetailsViewModel'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'startDate' => 'date',
'endDate' => 'date',
'customer' => null,
'candidate' => null,
'documentUrl' => null,
'details' => null    ];

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
        'id' => 'id',
'startDate' => 'startDate',
'endDate' => 'endDate',
'customer' => 'customer',
'candidate' => 'candidate',
'documentUrl' => 'documentUrl',
'details' => 'details'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'customer' => 'setCustomer',
'candidate' => 'setCandidate',
'documentUrl' => 'setDocumentUrl',
'details' => 'setDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'customer' => 'getCustomer',
'candidate' => 'getCandidate',
'documentUrl' => 'getDocumentUrl',
'details' => 'getDetails'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['candidate'] = isset($data['candidate']) ? $data['candidate'] : null;
        $this->container['documentUrl'] = isset($data['documentUrl']) ? $data['documentUrl'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Evolia\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Evolia\Model\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets candidate
     *
     * @return \Evolia\Model\Candidate
     */
    public function getCandidate()
    {
        return $this->container['candidate'];
    }

    /**
     * Sets candidate
     *
     * @param \Evolia\Model\Candidate $candidate candidate
     *
     * @return $this
     */
    public function setCandidate($candidate)
    {
        $this->container['candidate'] = $candidate;

        return $this;
    }

    /**
     * Gets documentUrl
     *
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->container['documentUrl'];
    }

    /**
     * Sets documentUrl
     *
     * @param string $documentUrl documentUrl
     *
     * @return $this
     */
    public function setDocumentUrl($documentUrl)
    {
        $this->container['documentUrl'] = $documentUrl;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Evolia\Model\PayrollDetailsViewModel
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Evolia\Model\PayrollDetailsViewModel $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
